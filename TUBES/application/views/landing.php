<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!-- tinggal rapihin sama kasih gambar tiap jumbotron sama card-deck yang pertama -->
        <section class="container-fluid" id="jumbotron1">
            <div class="row justify-content-center">
                <div class="jumbotron-fluid bg-light">
                    <h1 class="display-4">Unique Suggestions</h1>
                    <p class="lead">Micron's memory and storage innovations are helping you shop, binge and surf in a more personalized way.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Read more</a>
                    </p>
                </div>
            </div>
        </section>        
        <section class="container-fluid">
            <div class="card-deck">
                <div class="col-3">
                    <div class="card" style="border: none;">
                        <div class="card-body ">
                            <a href="#">
                                <img class="card-img-top" src=<?= base_url('assets/photo/nama_file')?> alt="gambar 1">
                                <h4>Micron For All</h4>
                            </a>
                            <p class="card-text">Micron’s 2020 DEI report measures the company’s progress in creating a positive, 
                                inclusive culture and our commitment to serve our communities and welcome the next generation of engineers 
                                and inventors.</p>
                            <a href="#">Learn more ></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <a href="#">
                                <img class="card-img-top" src=<?= base_url('assets/photo/nama_file')?> alt="gambar 2">
                                <h4>Meet the World’s First 176-Layer NAND</h4>
                            </a>
                            <p class="card-text">Micron ships industry’s densest, most technologically advanced NAND.</p>
                            <a href="#">Learn more ></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="border: none;">
                        <div class="card-body ">
                            <a href="#">
                                <img class="card-img-top" src=<?= base_url('assets/photo/nama_file')?> alt="gambar 3">
                                <h4>Ethernet Bunch of Flash in an NVMe-oF™ Network for Low-Cost Storage at Scale</h4>
                            </a>
                            <p class="card-text">Micron is helping to unlock the benefits of NVMe-oF by collaborating with key 
                                technology partners and innovating new technologies.</p>
                            <a href="#">Learn more ></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="border: none;">
                        <div class="card-body ">
                            <a href="#">
                                <img class="card-img-top" src=<?= base_url('assets/photo/nama_file')?> alt="gambar 4">
                                <h4>Supporting our Community</h4>
                            </a>
                            <p class="card-text">Learn how we’re supporting our team members, business, and communities during 
                                these rapidly evolving times.</p>
                            <a href="#">Learn more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="jumbotron2">
            <div class="row justify-content-center">
                <div class="jumbotron-fluid bg-white align-middle" style="width: 100%; max-width: 670px;">
                    <h1 class="display-4">The future starts here</h1>
                    <p class="lead">We define our future together. Micron innovation and your inspiration are shaping
                         tomorrow's products, industries, and the world.</p>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="jumbotron3">
            <div class="row justify-content-center">
                <div class="jumbotron-fluid" style="max-width: 57.5rem;">
                    <h1 class="display-4">Change the world. Join our team.</h1>
                    <p class="lead">Our memory needs your mind. At Micron, we're looking for visionaries, scientists, 
                        leaders, and believers to help us develop technologies that will transform our world. Join us.</p>
                    <div>
                        <br style="line-height: 1.75rem;"><br style="line-height: 1.75rem;"><br style="line-height: 1.75rem;"><br style="line-height: 1.75rem;">
                    </div>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Discover careers</a>
                    </p>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row justify-content-center card-deck">
                <div class="col-3">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <h4>Delivering Innovation Through Diversity</h4>
                            <p class="card-text">We firmly believe a workforce with diverse backgrounds, 
                                experiences, and perspectives — that is focused on inclusion — makes Micron
                                 a better place to work.</p>
                            <a href="#">Learn more ></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <h4>Helping Students Start Careers</h4>
                            <p class="card-text">Translate your education and talent into a career fueled by possibilities. 
                                Micron can help you jumpstart your career and move seamlessly from education to innovation.</p>
                            <a href="#">Find out how></a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="border: none;">
                        <div class="card-body">
                            <h4>Supporting Educators, Students, and Our Communities</h4>
                            <p class="card-text">We are focused on developing effective programs that promote science, technology,
                                 engineering, and math education in the communities where Micron employees live.</p>
                            <a href="#">Learn more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>