<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ url('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
@include('navbar') <!-- Include the navbar component -->
  <main>
    <!-- Header content -->
    <div id="header">
      <div>
      <h1>Contact info</h1>
      <p id="headerPara">Insert contact info here</p>
      </div>
      <div>
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="logo">
      </div>
    </div>
  </main>
  @include('footer') <!-- Include the footer component -->
</body>
</html>