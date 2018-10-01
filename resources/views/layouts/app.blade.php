<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('img/cropped-logo_fluxotelecom.png') }}" />

  <title>Hacker News</title>

  <!-- style -->
  <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <div class="row">
    <nav class="navbar fixed-top navbar-dark bg-dark col-12">
      <div class="actionsNews col-12 col-sm-8 col-md-6 col-lg-4">

        <a id="linkNews" class="btn-outline-warning btn col-3" href="{{route('newNews')}}">New </a>
        <a id="linkTop" class="btn-outline-warning btn col-3" href="{{route('topNews')}}">Tops </a>
        <a id="linkBest" class="btn-outline-warning btn col-3" href="{{route('bestsNews')}}">Bests </a>

      </div>
    </nav>
  </div>

</head>

@yield('content')

<!-- scrypt -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{ asset('js/startPage.js')}}"></script>

</html>
