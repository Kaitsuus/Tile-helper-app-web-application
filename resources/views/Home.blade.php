<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ url('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
<div id="menu">
  <div id="menu-bar" onclick="menuOnClick()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
  </div>
  <nav class="nav" id="nav">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Services</a></li>
    </ul>
  </nav> 
</div>
<div class="menu-bg" id="menu-bg"></div>
  <main>
    <!-- Header content -->
    <div id="header">
      <div>
      <h1>APU-App</h1>
      <p id="headerPara">APU-App web application page is under construction.</p>
      </div>
      <div>
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="logo">
      </div>
    </div>
  <!-- content -->
    <div id="content">
    </div>
  </main>
  <footer>
  <!-- Footer content -->
  <div class="footer-content">
    <div class="footer-left">
      <a href="your_other_page_url">Kaijukarainen.com</a>
    </div>
    <div>
      <p>&copy; <?php echo date("Y"); ?> APU-App. All rights reserved.</p>
    </div>
    <div class="footer-right">
      <a href="link_to_facebook" target="_blank"><img src="{{ asset('assets/facebook(1).png') }}" alt="Facebook"></a>
      <a href="link_to_tiktok" target="_blank"><img src="{{ asset('assets/tiktok.png') }}" alt="TikTok"></a>
      <a href="link_to_instagram" target="_blank"><img src="{{ asset('assets/instagram.png') }}" alt="Instagram"></a>
    </div>
  </div>
</footer>
</body>
</html>