<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="APU-App web application page is under construction. Stay tuned for exciting updates.">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>APU-App - Under Construction</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ url('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
@include('cookie-consent::index')
@include('navbar') <!-- Include the navbar component -->
<div class="menu-bg" id="menu-bg"></div>
  <main>
    <!-- Header content -->
    <div id="header">
      <div>
      <h1>APU-App</h1>
      <p id="headerPara">APU-App web application page is under construction.</p>
      </div>
      <div>
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="APU-App Logo">
      </div>
    </div>
  </main>
  @include('footer') <!-- Include the footer component -->
</body>
</html>