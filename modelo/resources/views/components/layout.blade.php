
<html>
  <head>
    <title>{{ $title ?? 'Meu site' }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  </head>
  <body>
    <nav>
      <h3>Bem vindo ao meu site</h3>
      <hr>
    </nav>
    {{ $slot }}
    <footer>
      <hr />
      © 2024 Kauã Morais
    </footer>
  </body>
</html>