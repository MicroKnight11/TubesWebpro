<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="//db.onlinewebfonts.com/c/103581eb752b4fa618534d266d46d568?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link href="//db.onlinewebfonts.com/c/5fe894d3e06d8f07fbe9d80b3157afd5?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/stylehead.css')?>">
    </head>
    <body>      
        <header id="site-header">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="navbar-brand">
                    <div id="site-logo">
                        <a href="/" data-type="CTALink" data-value="Micron logo" data-section="Header">
                            <img src=<?= base_url('assets/photo/Micron-logo_white.svg')?> alt="Micron lettered in white" style="height:35px; width: 120px">
                        </a>
                    </div>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item mx-4">
                            <span><a href=<?= site_url('index.php/catalog/tes'); ?> data-value="Products" data-type="MainMenu" class="navbar-text text-white">Products</a></span>
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
                <div class="">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle navbar-text text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" style="font-size: 14px">
                            US - English
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="color:#0090DA; font-family:'HelveticaNeueLT-bd Pro 55 Roman'" href="#" data-value="US - English" data-section="Language selector">US - English</a>
                                <a class="dropdown-item"  href="#" data-value="China - 简体中文" data-section="Language selector">China - 简体中文</a>
                                <a class="dropdown-item"  href="#" data-value="India - English" data-section="Language selector">India - English</a>
                                <a class="dropdown-item"  href="#" data-value="Japan - 日本語" data-section="Language selector">Japan - 日本語</a>
                                <a class="dropdown-item"  href="#" data-value="Malaysia - English" data-section="Language selector">Malaysia - English</a>
                                <a class="dropdown-item"  href="#" data-value="Singapore - English" data-section="Language selector">Singapore - English</a>
                                <a class="dropdown-item"  href="#" data-value="Taiwan – 繁體中文" data-section="Language selector">Taiwan – 繁體中文</a>
                            </div>
                        </li>
                        <li class="nav-item navbar-text text-white mx-3" style= "font-size: 14px">
                            |
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-toggle navbar-text text-white" href="#collapseLogin" id="login" role="button" data-toggle="collapse" style="font-size: 14px">
                            Login
                            </a>
                            <!-- <div class="container-fluid collapse bg-light col-4" id="collapseLogin">   
                                <div class="login-box">
                                    <h4>Login</h4>
                                    <form id="login_form" name="log-in" action="" method="">
                                        <input type="text" name="username" autocomplete="on" placeholder="Username" class="form-control">
                                        <input type="password" name="password" autocomplete="on" placeholder="Password" class="form-control">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="RememberMe" name="remember">
                                            <label for="RememberMe" class="form-check-label">Remember Me</label>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary" name="submit form" value="Login">  
                                        </div>
                                        <div class="login-error"></div>
                                    </form>
                                    <div class="login-help text-center">
                                        <a href="#" data-type="CTALink" data-value="Forgot password?" data-section="Login module">Forgot password?</a>
                                        <br>
                                        <a href="/privacy" data-type="CTALink" data-section="Footer" data-value="Privacy">Privacy Policy</a>
                                    </div>
                                </div>
                                <div class="register-box text-center">
                                    <a href="#" class="btn btn-primary" data-value="Register" data-section="Login module">Register</a>
                                </div>
                            </div> -->
                        </li>
                    </ul>
                </div>     
            </nav>
                            <div class="container-fluid collapse col-lg-4 float-left" id="collapseLogin" style="padding:0px;z-index: 1; position: fixed; margin-left : 1285px; max-width: 410px;height:440px; background-color: white">   
                                <div class="login-box" style="padding:27px; height: 440px; ">
                                    <h4 class=""style="margin-top : 5px; margin-bottom: 50px; color: #3e3e3e;font-size: 18px">Login</h4>
                                    <form id="login_form" name="log-in" action="" method="">
                                        <input type="text" name="username" autocomplete="on" placeholder="Username" class="form-control">
                                        <input type="password" name="password" autocomplete="on" placeholder="Password" class="form-control">
                                        <div class="form-check" style="margin-top : -10px; margin-bottom : 50px">
                                            <input class="form-check-input" type="checkbox" id="RememberMe" name="remember">
                                            <label for="RememberMe" class="form-check-label">Remember Me</label>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn sm-2" name="submit form" value="Login">  
                                        </div>
                                        <div class="login-error"></div>
                                    </form>
                                    <div class="login-help text-center">
                                        <a href="#" data-type="CTALink" data-value="Forgot password?" data-section="Login module" style="font-family: 'HelveticaNeueLT Pro 55 Roman';font-size: 12px;color: #3e3e3e; margin-top: 10px">Forgot password?</a>
                                        <br>
                                        <br>
                                        <a href="/privacy" data-type="CTALink" data-section="Footer" data-value="Privacy"style="font-family: 'HelveticaNeueLT Pro 55 Roman';font-size: 12px;color: #3e3e3e">Privacy Policy</a>
                                    </div>
                                </div>
                                <div class="register-box text-center">
                                    <a href="#" class="btn sm-2" data-value="Register" data-section="Login module">Register</a>
                                </div>
                            </div>
        </header>
    </body>
</html>
