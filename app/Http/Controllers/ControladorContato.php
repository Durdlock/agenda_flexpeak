<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Contato;

class ControladorContato extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contatos.index', ['conts' => Contato::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $mensagens=[
            'unique' => 'O campo :attribute tem que ser único',
            'required' => 'O campo :attribute tem que ser preenchido',
            'email.email' => 'Preencher :attribute com formato válido',
            'telefone.numeric' => 'Preencher :attribute com formato válido'

        ];
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required|numeric|unique:contatos',
            'email' => 'required|email'
        ],$mensagens);
        
        $data = $request->all();
        if ($request->imagem) {
            $urlImagem = $request->file('imagem')->store('imagens');
            $data['imagem'] = $urlImagem;
        }
            
        Contato::create($data);
        return view('contatos.index', ['conts' => Contato::all()]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cont = Contato::find($id);
        if(isset($cont))
            return view('contatos.edit',compact('cont'));
        else
            return redirect ('/contatos.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mensagens=[
            'unique' => 'O campo :attribute tem que ser único',
            'required' => 'O campo :attribute tem que ser preenchido',
            'email.email' => 'Preencher :attribute com formato válido',
            'telefone.numeric' => 'Preencher :attribute com formato válido'

        ];
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required|numeric|',
            'email' => 'required|email'
        ],$mensagens);
        $data = $request->all();
        if ($request->imagem) {
            $urlImagem = $request->file('imagem')->store('imagens');
            $data['imagem'] = $urlImagem;
        }

        Contato::find($id)->update($data);
        return redirect ('/contatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $conts = Contato::find($id);
        if(isset($conts)){
            $conts->delete();
        }
        return redirect ('/contatos');
    }
}
