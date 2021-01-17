<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href=<?=base_url('assets/css/stylefooter.css')?>>
        <link href="//db.onlinewebfonts.com/c/103581eb752b4fa618534d266d46d568?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link href="//db.onlinewebfonts.com/c/5fe894d3e06d8f07fbe9d80b3157afd5?family=HelveticaNeueLT+Pro+55+Roman" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href=<?=base_url('assets/css/main.css')?>>
    </head>
    <body>
        <footer id="site-footer" class="">
            <div class="upper-footer container-fluid p-4">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer-nav-left mb-4">
                            <ul class="list-unstyled d-flex">
                                <li class="px-3"><a href=<?= site_url('index.php/controller/product'); ?> data-value="Products"  data-section="Footer">Products</a></li>
                                <li class="px-3"><a href=<?= site_url('index.php/controller/solution'); ?> data-value="Solutions"  data-section="Footer">Solutions</a></li>
                                <li class="px-3"><a href=<?= site_url('index.php/controller/support'); ?> data-value="Support"  data-section="Footer">Support</a></li>
                                <li class="px-3"><a href="#" data-value="Insight"  data-section="Footer">Insight</a></li>
                                <li class="px-3"><a href="#" data-value="About"  data-section="Footer">About</a></li>
                            </ul>
                        </div>
                        <div class="social-media my-4">
                            <ul>
                                <li class="d-inline-block mr-2" ><a href="#"><i class="fab fa-facebook-f social-media-icon"></i></a></li>
                                <li class="d-inline-block mr-2"><a href="#"><i class="fab fa-twitter social-media-icon"></i></a></li>
                                <li class="d-inline-block mr-2"><a href="#"><i class="fab fa-linkedin-in social-media-icon"></i></a></li>
                                <li class="d-inline-block mr-2"><a href="#"><i class="fab fa-youtube social-media-icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-logo"><img src=<?= base_url('assets/photo/')."footer-logo.png"?> alt="Micron blue M encircled with slanted blue line " class="img-fluid pb-4" style="min-width: 150px; height: auto; min-height: 150px; max-height: 150px; width: auto;"></div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-nav-right">
                            <div class="footer-buttons d-flex justify-content-end mb-4">
                                <a href=<?= site_url('index.php/controller/sales'); ?> data-value="Sales"  data-section="Footer" class="btn px-4 mx-2" style="color:gray; font-size: 14px">Sales</a>
                                <a href="#" data-value="Support"  data-section="Footer" class="btn px-4 mx-2"style="color:gray; font-size:14px">Support</a>
                                <a href="#" data-value="Contact"  data-section="Footer" class="btn px-4 mx-2"style="color:gray; font-size:14px">Contact</a>  
                            </div>
                        </div>
                        <div class="additional-logos d-flex justify-content-end">
                            <a href="https://www.crucial.com/"  data-value="Crucial logo" data-section="Footer" class=""><img src=<?= base_url('assets/photo/').'crucial.png'?> alt="Crucial by Micron"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer container-fluid bg-light p-4">
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="list-unstyled d-flex" >
                            <li class="py-4 pr-4"><a href="#" data-value="Legal"  data-section="Footer" class="text-dark">Legal</a></li>
                            <li class="p-4"><a href="#" data-value="Privacy"  data-section="Footer" class="text-dark">Privacy</a></li>
                            <li class="p-4"><a href="#" data-value="Suppliers"  data-section="Footer" class="text-dark">Suppliers</a></li>
                            <li class="p-4"><a href="#" data-value="Careers"  data-section="Footer" class="text-dark">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright-message ">©2020 Micron Technology, Inc. All rights reserved. Information, products, and/or specifications are subject to change without notice. All information is provided on an “AS IS” basis without warranties of any kind. Drawings may not be to scale. Micron, the Micron logo, and all other Micron trademarks are the property of Micron Technology, Inc. All other trademarks are the property of their respective owners.</div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
