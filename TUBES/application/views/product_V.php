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
    <link rel="stylesheet" href=<?=base_url('assets/css/styleproduct.css')?>>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Products</title>
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

      <section id="product-heroes" class="d-flex align-items-center w-100" style="background: url('<?= base_url('assets/photo/products-banner.jpg');?>')">
        <div class="container text-white">
            <h1 class="mb-5 font-weight-bold">Products</h1>
            <h2 class="h4">We manufacture the industry’s broadest portfolio of memory and storage technologies: DRAM, NAND, NOR and 3D XPoint™ memory. With close industry partnerships and memory solutions expertise, our unique insight gives us the ability to address your most challenging needs. </h2>
        </div>
      </section>

      <section id="memory" class="w-100 py-5">
          <div class="container">
              <h1 class="font-weight-bold py-3">Memory</h1>

              <div class="row">
                  <div class="col-6 my-5">
                      <h2 class="h3 memory-heading font-weight-bold mb-4">
                          <a href="#" class="d-block text-decoration-none">
                              DRAM
                          </a>
                      </h2>
                      <p class="memory-desc">
                        Accelerate your time to market with quality DRAM components — rigorously tested for a wide range of applications. From the extreme temperature and performance needs of industrial and automotive applications to the exacting specs of enterprise systems, we have the right memory solution for your design.
                      </p>
                      <select class="form-control form-control-lg memory-select">
                        <option>Select DRAM</option>
                        <option>DDR5 SDRAM</option>
                        <option>DDR5 SDRAM</option>
                        <option>DDR5 SDRAM</option>
                        <option>DDR2 SDRAM</option>
                        <option>DDR SDRAM</option>
                        <option>SDRAM</option>
                        <option>RLDRAM Memory</option>
                        <option>LPDRAM</option>
                      </select>
                  </div>
                  <div class="col-6 my-5">
                    <h2 class="h3 memory-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            DRAM Modules
                        </a>
                    </h2>
                    <p class="memory-desc">
                        We build the modules from start to finish — designing, manufacturing and testing all the DRAM ourselves before assembling the modules and testing again. So from high-performance SODIMMs to high-density LRDIMMs, you can depend on the quality and reliability of our devices.
                    </p>
                    <select class="form-control form-control-lg memory-select">
                      <option>Select DRAM Modules</option>
                      <option>LRDIMM</option>
                      <option>Mini-DIMM</option>
                      <option>NVDIMM</option>
                      <option>RDIMM</option>
                      <option>SODIMM</option>
                      <option>SORDIMM</option>
                      <option>UDIMM</option>
                      <option>VLP Mini-DIMM</option>
                      <option>VLP RDIMM</option>
                      <option>VLP UDIMM</option>
                    </select>
                </div>
                <div class="col-6 my-5">
                    <h2 class="h3 memory-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            Ultra-Bandwidth Solutions
                        </a>
                    </h2>
                    <p class="memory-desc">
                        Explore the most complete portfolio of high-performance, high-bandwidth products available. Micron has reimagined memory to accelerate your next-gen graphics cards and game consoles, your high-performance computing, artificial intelligence systems, and professional visualization workstations. Micron Ultra-Bandwidth Solutions deliver maximum bandwidth to feed your most data-hungry workloads.
                    </p>
                    <select class="form-control form-control-lg memory-select">
                      <option>Select Ultra-Bandwidth Solutions</option>
                      <option>GDDR6X</option>
                      <option>GDDR6</option>
                      <option>GDDR5</option>
                      <option>HBM2E</option>
                    </select>
                </div>
                <div class="col-6 my-5">
                    <h2 class="h3 memory-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            Managed NAND
                        </a>
                    </h2>
                    <p class="memory-desc">
                        Our fully managed devices like — e.MMC, UFS and SSDs — handle media management and error correction code (ECC) internally to help make technology transitions nearly seamless.
                    </p>
                    <select class="form-control form-control-lg memory-select">
                      <option>Select Managed NAND</option>
                      <option>e.MMC</option>
                      <option>Embedded USB</option>
                      <option>Universal Flash Storage</option>
                    </select>
                </div>
                <div class="col-6 my-5">
                    <h2 class="h3 memory-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            Multichip Packages
                        </a>
                    </h2>
                    <p class="memory-desc">
                        Get the critical features and functions for your design — including high performance, high quality, power efficiency, wide density ranges, small package sizes and industrial temperature ranges — from our broad portfolio of industry-standard MCPs.
                    </p>
                    <select class="form-control form-control-lg memory-select">
                      <option>Select Multichip Packages</option>
                      <option>e.MMC-Based MCP</option>
                      <option>NAND-Based MCP</option>
                    </select>
                </div>
                <div class="col-6 my-5">
                    <h2 class="h3 memory-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            NAND Flash
                        </a>
                    </h2>
                    <p class="memory-desc">
                        Micron does more than design and manufacture NAND Flash memory. We strive to solve design challenges through better engineering—by raising the bar on NAND products that cover everything from mobile to embedded, to data center storage applications.
                    </p>
                    <select class="form-control form-control-lg memory-select">
                      <option>Select NAND Flash</option>
                      <option>3D NAND</option>
                      <option>TLC NAND</option>
                      <option>MLC NAND</option>
                      <option>SLC NAND</option>
                    </select>
                </div>
                <div class="col-6 my-5">
                    <h2 class="h3 memory-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            NOR Flash
                        </a>
                    </h2>
                    <p class="memory-desc">
                        Whether you’re designing for wireless, embedded, or automotive applications, our extensive portfolio of serial and parallel NOR Flash solutions delivers the right mixture of performance, cost, and design continuity, backed by years of Micron Flash memory expertise.
                    </p>
                    <select class="form-control form-control-lg memory-select">
                      <option>Select NOR Flash</option>
                      <option>Parallel NOR Flash</option>
                      <option>Serial NOR Flash</option>
                      <option>Xccela Flash</option>
                      <option>Twin-Quad NOR Flash</option>
                      <option>Legacy NOR Flash</option>
                    </select>
                </div>
              </div>
          </div>
      </section>

      <section id="storage" class="w-100 py-5">
        <div class="container">
            <h1 class="font-weight-bold py-3">Storage</h1>
            <div class="row">
                <div class="col-6 my-5">
                    <h2 class="h3 storage-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            Memory Cards
                        </a>
                    </h2>
                    <p class="storage-desc">
                        Ideal for mission-important applications that require more robust memory performance, microSD cards deliver reliability, quality, performance, security and longevity needed for edge recording and other industrial IoT applications.
                    </p>
                    <select class="form-control form-control-lg storage-select">
                      <option>Select Memory Cards</option>
                      <option>Consumer microSD Cards</option>
                      <option>Industrial Memory Cards</option>
                    </select>
                </div>
                <div class="col-6 my-5">
                    <h2 class="h3 storage-heading font-weight-bold mb-4">
                        <a href="#" class="d-block text-decoration-none">
                            SSDs
                        </a>
                    </h2>
                    <p class="storage-desc">
                        From client computing, to enterprise and cloud, to industrial and automotive — our proven flash-based SSDs are purpose-built to optimize and scale storage designs across a broad range of environments, applications and workloads.
                    </p>
                    <select class="form-control form-control-lg storage-select">
                      <option>Select SSDs</option>
                      <option>NVMe SSDs</option>
                      <option>SATA SSDs</option>
                    </select>
                </div>
            </div>
        </div>
      </section>

      <section id="advanced-solutions" class="py-5">
        <div class="container">
            <h1 class="font-weight-bold py-3">Memory</h1>
            <div class="container">
                <div class="row">
                    <div class="col-6 my-5">
                        <h2 class="h3 solutions-heading font-weight-bold mb-4">
                            <a href="#" class="d-block text-decoration-none">
                                3D XPoint Technology
                            </a>
                        </h2>
                        <p class="solutions-desc">
                            With up to 1,000 times lower latency and exponentially greater endurance than NAND, 3D XPoint technology can deliver game-changing performance for big data applications and transactional workloads.
                        </p>
                    </div>
                    <div class="col-6 my-5">
                        <h2 class="h3 storage-heading font-weight-bold mb-4">
                            <a href="#" class="d-block text-decoration-none">
                                Advanced Computing Solutions
                            </a>
                        </h2>
                        <p class="storage-desc">
                            Solve your biggest big data problems with our FPGA-based, high-performance computing and embedded systems. Our Advanced Computing Solutions deliver simplicity and flexibility to differentiate your business and deliver superior customer value.
                        </p>
                        <select class="form-control form-control-lg storage-select">
                          <option>Select Advanced Computing Solutions</option>
                          <option>AC Series HPC Modules</option>
                          <option>HPC Backplanes</option>
                          <option>HPC Single-Board Accelerators</option>
                          <option>HPC Data Center Systems</option>
                          <option>HPC Desktop Systems</option>
                          <option>PicoFramework</option>
                        </select>
                    </div>
                    <div class="col-6 my-5">
                        <h2 class="h3 solutions-heading font-weight-bold mb-4">
                            <a href="#" class="d-block text-decoration-none">
                                Authenta
                            </a>
                        </h2>
                        <p class="solutions-desc">
                            Utilizing existing standard flash memory sockets, our Authenta™ technology offers a unique level of protection, enabling developers to strengthen system-level cybersecurity without adding hardware components and providing a more affordable and robust IoT solution.
                        </p>
                    </div>
                    <div class="col-6 my-5">
                        <h2 class="h3 solutions-heading font-weight-bold mb-4">
                            Heterogeneous-Memory Storage Engine
                        </h2>
                        <p class="solutions-desc">
                            Introducing HSE, one of the first heterogeneous-memory storage engines, designed from the ground-up as a Linux application to accelerate workloads using flash-based storage and storage class memory.
                        </p>
                    </div>
                </div>
            </div>
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
        <div class="center-panel">
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