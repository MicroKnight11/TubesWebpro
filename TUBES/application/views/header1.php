<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="//db.onlinewebfonts.com/c/103581eb752b4fa618534d266d46d568?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link href="//db.onlinewebfonts.com/c/5fe894d3e06d8f07fbe9d80b3157afd5?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styleheader.css')?>">
    </head>
    <body>      
        <header id="site-header">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="navbar-brand">
                    <div id="site-logo">
                        <a href="landing.php" data-type="CTALink" data-value="Micron logo" data-section="Header">
                            <img src=<?= base_url('assets/photo/Micron-logo_white.svg')?> alt="Micron lettered in white"  width= "115px";>
                        </a>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <span><a href="/products" data-value="Products" data-type="MainMenu" class="navbar-text text-white">Products</a></span>
                        </li>
                        <li class="nav-item mx-4">
                            <span><a href="/solutions" data-value="Solutions" data-type="MainMenu" class="navbar-text text-white">Solutions</a></span>
                        </li>
                        <li class="nav-item mx-4">
                            <span><a href="/support" data-value="Support" data-type="MainMenu" class="navbar-text text-white">Support</a></span>
                        </li>
                        <li class="nav-item mx-4">
                            <span><a href="/insight" data-value="Insight" data-type="MainMenu" class="navbar-text text-white">Insight</a></span>
                        </li>
                        <li class="nav-item mx-4">
                            <span><a href="/about" data-value="About" data-type="MainMenu" class="navbar-text text-white">About</a></span>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbar-text text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="color:#0090DA" href="https://www.micron.com" data-type="CTALink" data-value="US - English" data-section="Language selector">US - English</a>
                                <a class="dropdown-item" style="color:#0090DA" href="https://cn.micron.com" data-type="CTALink" data-value="China - 简体中文" data-section="Language selector">China - 简体中文</a>
                                <a class="dropdown-item" style="color:#0090DA" href="https://in.micron.com" data-type="CTALink" data-value="India - English" data-section="Language selector">India - English</a>
                                <a class="dropdown-item" style="color:#0090DA" href="https://jp.micron.com" data-type="CTALink" data-value="Japan - 日本語" data-section="Language selector">Japan - 日本語</a>
                                <a class="dropdown-item" style="color:#0090DA" href="https://my.micron.com" data-type="CTALink" data-value="Malaysia - English" data-section="Language selector">Malaysia - English</a>
                                <a class="dropdown-item" style="color:#0090DA" href="https://sg.micron.com" data-type="CTALink" data-value="Singapore - English" data-section="Language selector">Singapore - English</a>
                                <a class="dropdown-item" style="color:#0090DA" href="https://tw.micron.com" data-type="CTALink" data-value="Taiwan – 繁體中文" data-section="Language selector">Taiwan – 繁體中文</a>
                            </div>
                        </li>
                        <li class="nav-item navbar-text text-white">
                            |
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-toggle navbar-text text-white" href="#collapseLogin" id="login" role="button" data-toggle="collapse">
                            Login
                            </a>
                            <div class="container collapse" id="collapseLogin" style="background-color: white; width:425px; margin-top:425px">   
                                <div class="login-box">
                                    <h4>Login</h4>
                                    <form id="login_form" name="log-in" action="" method="" class="d-flex flex-column">
                                        <input type="text" name="username" autocomplete="on" placeholder="Username">
                                        <input type="password" name="password" autocomplete="on" placeholder="Password">
                                        <input class="styled-checkbox" type="checkbox" id="RememberMe" name="remember">
                                        <label for="RememberMe">Remember Me</label>
                                        <input type="submit" class="primary-blue small centered" name="submit form" value="Login">
                                        <div class="login-error"></div>
                                    </form>
                                    <div class="login-help">
                                            <a href="?modal={FAF63C7C-978B-4802-84CD-D8484781D769}" data-type="CTALink" data-value="Forgot password?" data-section="Login module">Forgot password?</a>
                                        <a href="/privacy" data-type="CTALink" data-section="Footer" data-value="Privacy">Privacy Policy</a>
                                    </div>
                                </div>
                                <div class="register-box">
                                    <h4>Register</h4>
                                    <p>Get maximum visibility to data sheets, technical documentation, and the latest product and technology developments by registering for a micron.com account. </p>
                                    <div>
                                        <a href="?modal={5DDF970E-B79E-4DCD-8097-12E81AC9CFF8}" class="button secondary-blue small centered" data-type="CTAButton" data-value="Register" data-section="Login module">Register</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>     
            </nav>
        </header>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav> -->
