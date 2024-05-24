
<html>
  <head>
    
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    {{$title}}
    <nav>
      <h3>Bem vindo ao meu site</h3>
      <hr>
    </nav>
    {{$slot}}
    <footer>
      <hr />
      © 2024 Kauã Morais
    </footer>
  </body>
</html>

