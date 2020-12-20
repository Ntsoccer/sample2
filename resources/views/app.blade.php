<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
  li {
    list-style: none;
  }

  ul {
    display: flex;
  }

  a {
    text-decoration: none;
    margin-right: 10px
  }
  </style>
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('login')}}">Login</a></li>
        <li><a href="{{ route('register')}}">Register</a></li>
      </ul>
    </nav>
    <header>
      <main class="py-4">
        @yield('content')
      </main>
</body>

</html>