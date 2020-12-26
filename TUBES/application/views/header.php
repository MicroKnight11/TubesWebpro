<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="//db.onlinewebfonts.com/c/103581eb752b4fa618534d266d46d568?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link href="//db.onlinewebfonts.com/c/5fe894d3e06d8f07fbe9d80b3157afd5?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/stylehead.css')?>">
        <script type="text/javascript">
            var base_url = '<?= base_url()?>'
        </script>
        <script type="text/javascript" charset="utf8" src=<?= base_url('assets/script/').'header.js'?>></script>
    </head>
    <body>      
        <header id="site-header">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="navbar-brand">
                    <div id="site-logo">
                        <a href=<?= base_url(); ?> data-value="Micron logo" data-section="Header">
                            <img src=<?= base_url('assets/photo/Micron-logo_white.svg')?> alt="Micron lettered in white" style="height:35px; width: 120px">
                        </a>
                    </div>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item mx-4">
                            <span><a href=<?= site_url('index.php/controller/product'); ?> data-value="Products" data-type="MainMenu" class="navbar-text text-white">Products</a></span>
                        </li>
                        <li class="nav-item mx-4">
                            <span><a href=<?= site_url('index.php/controller/solution'); ?> data-value="Solutions" data-type="MainMenu" class="navbar-text text-white">Solutions</a></span>
                        </li>
                        <li class="nav-item mx-4">
                            <span><a href=<?= site_url('index.php/controller/support'); ?> data-value="Support" data-type="MainMenu" class="navbar-text text-white">Support</a></span>
                        </li>
                        <!-- <li class="nav-item mx-4">
                            <span><a href="/insight" data-value="Insight" data-type="MainMenu" class="navbar-text text-white">Insight</a></span>
                        </li> -->
                        <li class="nav-item mx-4">
                            <span><a href=<?= site_url('index.php/controller/catalog'); ?> data-value="Insight" data-type="MainMenu" class="navbar-text text-white">Catalog</a></span>
                        </li>
                        <li class="nav-item mx-4">
                            <span><a href="#" data-value="About" data-type="MainMenu" class="navbar-text text-white">About</a></span>
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
                                <a class="dropdown-item" style="color:#0090DA; font-family:'HelveticaNeueLT-bd Pro 55 Roman'" href="#" data-value="China - 简体中文" data-section="Language selector">China - 简体中文</a>
                                <a class="dropdown-item" style="color:#0090DA; font-family:'HelveticaNeueLT-bd Pro 55 Roman'" href="#" data-value="India - English" data-section="Language selector">India - English</a>
                                <a class="dropdown-item" style="color:#0090DA; font-family:'HelveticaNeueLT-bd Pro 55 Roman'" href="#" data-value="Japan - 日本語" data-section="Language selector">Japan - 日本語</a>
                                <a class="dropdown-item" style="color:#0090DA; font-family:'HelveticaNeueLT-bd Pro 55 Roman'" href="#" data-value="Malaysia - English" data-section="Language selector">Malaysia - English</a>
                                <a class="dropdown-item" style="color:#0090DA; font-family:'HelveticaNeueLT-bd Pro 55 Roman'" href="#" data-value="Singapore - English" data-section="Language selector">Singapore - English</a>
                                <a class="dropdown-item" style="color:#0090DA; font-family:'HelveticaNeueLT-bd Pro 55 Roman'" href="#" data-value="Taiwan – 繁體中文" data-section="Language selector">Taiwan – 繁體中文</a>
                            </div>
                        </li>
                        <li class="nav-item navbar-text text-white mx-3" style= "font-size: 14px">
                            |
                        </li>
                        <li class="nav-item">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a class="nav-link dropdown-toggle navbar-text text-white " href="#" id="profileDropdown" role="button" data-toggle="dropdown" style="font-size: 14px">
                            <?= $_SESSION['username'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown" style="margin-left : 89%;">
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#" id="Logout">Log Out</a>
                            </div>
                        <?php } else {?>
                            <a class="nav-link click-toggle navbar-text text-white" href="#collapseLogin" id="login" role="button" data-toggle="collapse" style="font-size: 14px">
                            Login
                            </a>
                        <?php }?>
                        </li>
                    </ul>
                </div>     
            </nav>

            <!-- Login -->
            <div class="container-fluid collapse col-lg-4 float-left" id="collapseLogin" style="padding:0px;z-index: 1; position: fixed; margin-left : 71%; max-width: 410px;height:440px; background-color: white">   
                <div class="login-box" style="padding:27px; height: 440px; ">
                    <h4 class=""style="margin-top : 5px; margin-bottom: 50px; color: #3e3e3e;font-size: 18px">Login</h4>
                    <form id="login_form" name="log-in" action="" method="post">
                        <input type="text" id="username" name="username" autocomplete="on" placeholder="Username" class="form-control">
                        <input type="password" id="password" name="password" autocomplete="on" placeholder="Password" class="form-control">
                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="RememberMe" name="remember">
                                            <label for="RememberMe" class="form-check-label">Remember Me</label>
                                        </div> -->
                        <div class="text-center">
                            <input id="login_btn" type="submit" class="btn sm-2" name="submit form" value="Login">  
                        </div>
                    </form>
                    <div class="login-help text-center mt-4">
                        <a href="#" data-value="Forgot password?" data-section="Login module" style="font-family: 'HelveticaNeueLT Pro 55 Roman';font-size: 12px;color: #3e3e3e; margin-top: 10px">Forgot password?</a>
                        <br><br>
                        <a href="#" data-section="Footer" data-value="Privacy" style="font-family: 'HelveticaNeueLT Pro 55 Roman';font-size: 12px;color: #3e3e3e">Privacy Policy</a>
                    </div>
                    <div id="login_error" class="text-danger text-center mt-4" style="display: none;">
                        Wrong username & password
                    </div>
                </div>
                <div class="register-box text-center">
                    <button href="#" class="btn sm-2" data-toggle="modal" data-target="#exampleModal">Register</button>
                </div>
            </div>

            <!-- Register -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2>Register</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="form_register" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="re-password" placeholder="Re-Enter Password" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Profile Picture</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
                                        <label class="custom-file-label text-left" for="uploadImage">Choose file</label>
                                    </div>
                                </div> 
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button id="register_btn" type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>