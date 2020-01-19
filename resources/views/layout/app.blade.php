<html>
    <head>
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
      <title>Agenda</title>
      <meta name="csrf-token" content="{{csrf_token()}}">
      <style>
          body {
              padding: 30px;
          }
          .navbar{
              margin-bottom: 20px;
          }
          .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            }
      </style>
    </head>
    <body>
        <div class="container">
            @component('component_navbar', ["current"=>$current])
                
            @endcomponent
            <main role="main ">
                @hasSection ('body')
                    @yield('body')                             
                @endif

            </main>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>

</html>