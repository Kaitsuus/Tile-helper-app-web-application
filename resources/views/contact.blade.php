<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Contact</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>
</head>
<body>
@include('navbar') <!-- Include the navbar component -->
  <main>
    <!-- Header content -->
    <div id="header">
      <div>
      <h2>Contact info</h2>
      <p id="headerPara">kai.jukarainen@kaijukarainen.com</p>
      <h4>Account Deletion Request</h4>
      <p id="headerPara">We value your privacy and offer a simple process to delete your account from APU-Apps. Follow the steps below:</p>
      <p id="headerPara">Log in to your APU-Apps account.</p>
      <p id="headerPara">Navigate to the "User Menu" section.</p>
      <p id="headerPara">Click on "Delete Account."</p>
      <p id="headerPara">Confirm your decision when prompted.</p>
      <p id="headerPara">Upon completion, all your account data will be permanently removed from our system.</p>
      <p id="headerPara">If you have any questions or need further assistance, feel free to contact us at <a href="mailto:kai.jukarainen@kaijukarainen.com">kai.jukarainen@kaijukarainen.com</a>.</p>
      <p id="headerPara">We appreciate your support and thank you for being a part of APU-Apps. We wish you all the best in your future endeavors.</p>
      </div>
      <div>
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="APU-App Logo">
      </div>
    </div>
  </main>
  @include('footer') <!-- Include the footer component -->
</body>
</html>