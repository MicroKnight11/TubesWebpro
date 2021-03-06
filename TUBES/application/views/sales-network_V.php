<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom -->
    <link rel="stylesheet" href=<?=base_url('assets/css/main.css')?>>
    <link rel="stylesheet" href=<?=base_url('assets/css/stylesales.css')?>>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Consultation Page</title>
  </head>
  <body>

    <!-- header -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-primary p-3 fixed-top">
        <a class="navbar-brand px-4" href="#">
            <img src="./src/images/micron-logo.svg" alt="logo" width="122">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-5">
            <li class="nav-item active px-3">
              <a class="nav-link" href="#">Products <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#">Solutions</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Support</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Insight</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Solutions</a>
            </li>
          </ul>
        </div>
        <div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item px-1">
                  <a class="nav-link" href="#">USA - English</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item px-1">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item px-1 ml-5 mr-2">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </li>
              </ul>
        </div>
      </nav> -->


      <section id="sales-network-breadcrumb" class="px-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item font-weight-bold">Support</li>
              <li class="breadcrumb-item font-weight-bold active" aria-current="page"><a href="#" class="text-decoration-none">Sales Network</a></li>
            </ol>
          </nav>
      </section>

      <section id="sales-network" class="w-100 mb-5">
        <div class="container">
            <h1 class="font-weight-bold py-3">Sales Network</h1>
        </div>
      </section>

      <section id="distributor-network" class="mb-5">
          <div class="container">
              <h1 class="font-weight-bold py-3">Distributor Network</h1>
              <p style="max-width:98%;">We partner with trusted distributors across the globe to sell our products. Click the link below to find an authorized distributor in your area.</p>
              <a type="button" class="btn btn-primary rounded-0 font-weight-bold py-2 btn-authorized">Micron Authorized Distributors</a>
          </div>
      </section>

      <section id="sales-representatives" class="mb-5">
        <div class="container">
            <h1 class="font-weight-bold py-3">Sales Representatives</h1>
            <p style="max-width:98%;" class="mb-5">Contact your local Micron sales representative or sales office using the lookup tool below.</p>

            <div class="select-region w-50 mb-5">
                <select class="form-control form-control-lg rounded-0">
                    <option>Select Region</option>
                    <option>Americas</option>
                    <option>Asia</option>
                    <option>Europe</option>
                </select>
            </div>

            <div class="select-country w-50 mb-5">
                <select class="form-control form-control-lg rounded-0">
                    <option>Select Country</option>
                    <option>Indonesia</option>
                    <option>Japan</option>
                    <option>Netherlands</option>
                </select>
            </div>

            <div class="select-state w-50 mb-5">
                <select class="form-control form-control-lg rounded-0">
                    <option>Select State</option>
                    <option>Jakarta</option>
                    <option>Tokyo</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary rounded-0 font-weight-bold text-uppercase px-5 py-2">search</button>
        </div>
      </section>

      <section id="consumer-brand" class="py-5">
        <div class="container d-flex justify-content-center align-items-center py-2">
            <div class="left-side w-50 mr-2">
                <img src=<?= base_url('assets/photo/crucial-logo.png')?> class="d-block ml-auto mr-3" alt="crucial-logo">
            </div>
            <div class="right-side w-50 ml-2">
                <h4 class="mb-3 ">Our Consumer Brand</h1>
                <p class="w-75 mb-3">Our consumer brand, Crucial, offers a range of internal and external SSDs, a full portfolio of memory upgrades for thousands of systems, and a range of memory specifically designed for gamers and power users.</p>
                <a type="button" class="btn btn-outline-primary rounded-0 font-weight-bold py-2 px-5 btn-authorized">Learn more</a>
            </div>
        </div>
      </section>

      <section id="sample-center" class="mb-5">
        <div class="container">
            <h1 class="font-weight-bold py-3">Sample Center</h1>
            <p style="max-width:98%;">Not quite ready to make a purchase? Our Sample Center offers small quantities of our memory and storage products.</p>
            <a type="button" class="btn btn-primary rounded-0 font-weight-bold py-2 btn-sample-center">Micron Sample Center</a>
        </div>
    </section>

    <!-- footer -->
    <!-- <footer class="w-100 py-5 px-5 d-flex justify-content-between">
        <div class="left-panel">
            <div class="site-nav my-4">
                <ul>
                    <li class="d-inline-block mr-3 font-weight-bold">
                        <a href="#" class="text-decoration-none">Products</a>
                    </li>
                    <li class="d-inline-block mr-3 font-weight-bold">
                        <a href="#" class="text-decoration-none">Solutions</a>
                    </li>
                    <li class="d-inline-block mr-3 font-weight-bold">
                        <a href="#" class="text-decoration-none">Supports</a>
                    </li>
                    <li class="d-inline-block mr-3 font-weight-bold">
                        <a href="#" class="text-decoration-none">Insight</a>
                    </li>
                    <li class="d-inline-block mr-3 font-weight-bold">
                        <a href="#" class="text-decoration-none">About</a>
                    </li>
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
        <div class="center-panel ">
            <img src="./src/images/footer-logo.png" alt="footer-logo" width="190">
        </div>
        <div class="right-panel my-4">
            <div class="button-group">
                <button type="button" class="btn btn-outline-secondary rounded-0 mx-1 font-weight-bold btn-nav">Sales</button>
                <button type="button" class="btn btn-outline-secondary rounded-0 mx-1 font-weight-bold btn-nav">Support</button>
                <button type="button" class="btn btn-outline-secondary rounded-0 mx-1 font-weight-bold btn-nav">Contact</button>
            </div>
            <div class="crucial-logo my-3 d-flex justify-content-end">
                <img src="/src/images/crucial.png" alt="">
            </div>
        </div>
      </footer>

      <section id="copyright" class="py-4 px-5 ">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-4">
                <a href="#" class="mr-4 text-dark text-decoration-none">Legal</a>
                <a href="#" class="mr-4 text-dark text-decoration-none">Privacy</a>
                <a href="#" class="mr-4 text-dark text-decoration-none">Suppliers</a>
                <a href="#" class="mr-4 text-dark text-decoration-none">Careers</a>
            </div>
            <div class="col-8">
                &copy; Micron Technology, Inc. All rights reserved. Information, products, and/or specifications are subject to change without notice. All information is provided on an “AS IS” basis without warranties of any kind. Drawings may not be to scale. Micron, the Micron logo, and all other Micron trademarks are the property of Micron Technology, Inc. All other trademarks are the property of their respective owners.
            </div>
        </div>
      </section> -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
  </body>
</html>