<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href=<?=base_url('assets/css/stylecatalog.css')?>>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/natural.js"></script>
        <script>
            var base_url = '<?= base_url()?>'
        </script>
        <script type="text/javascript" charset="utf8" src=<?= base_url('assets/script/').'catalog.js'?>></script>
        <title>DDR4 SDRAM Part Catalog</title>
    </head>
    <body style="margin-top: 75px">
        <section class="breadcrumbs-wrapper">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href=<?= site_url('index.php/controller/product'); ?>>Products</a></li>
                <li class="breadcrumb-item"><a href="#">DRAM</a></li>
                <li class="breadcrumb-item"><a href="#">DDR4 SDRAM</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">DDR4 SDRAM Part Catalog</a></li>
            </ul>
        </section>
        <section class="products-intro-wrapper container-fluid col-8 my-5">
            <h2 class="font-weight-bold mb-5">DDR4 SDRAM Part Catalog</h2>
            <br>
            <div class="d-flex" id="select_part">
                <label for="cars" class="alignment-center">View Part Catalogs</label>
                <select class="form-control ml-3" name="productFamily" id="productFamily" style="width: 230px; height: 45px;">
                    <option id="defaultFamily" selected>Product Family</option>
                    <?php 
                    foreach($family as $opt){
                        echo "<option value='",$opt['id'],"'>" , $opt['name'];
                    }?>
                </select>
                <select class="form-control mx-3" name="productTechnology" id="productTechnology" style="display: none; width: 230px; height: 45px;">
                    <option id="defaultTech" value='Product Technology' selected>Product Technology</option>
                    <?php foreach($tech as $opt){
                        echo "<option value='",$opt['id'],"'>" , $opt['name'];
                    }?>
                </select>
                <a href="#" id="submitBtn" class="btn btn-primary text-white" style="display: none;">View Part Catalog</a>
            </div> 
        </section>
        <section class="bg-light px-5 py-2">
            <div class="container col-10">
                <table class="table bg-white mt-5 display" id="catalogTable">
                    <thead style="background: #007bff; color: white">
                        <tr>
                            <th scope="col">+ Filters</th>
                            <th scope="col" style="width: 115px"><a class="text-white" href="#" style="text-decoration: none;">Density</a></th>
                            <th scope="col" style="width: 115px"><a class="text-white" href="#" style="text-decoration: none;">Part Status</a></th>
                            <th scope="col" style="width: 115px"><a class="text-white" href="#" style="text-decoration: none;">Depth</a></th>
                            <th scope="col" style="width: 115px"><a class="text-white" href="#" style="text-decoration: none;">Width</a></th>
                            <th scope="col" style="width: 115px"><a class="text-white" href="#" style="text-decoration: none;">Op.Temp</a></th>
                            <th scope="col" style="width: 115px"><a class="text-white" href="#" style="text-decoration: none;">Industry Speed</a></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td>
                                <div id='counter'>part No.(<?= count($item)?>)</div>
                                <?php if (isset($_SESSION['username'])) { ?>   
                                    <button type="button" class="btn btn-primary" id="btn_tambah" data-toggle="modal" data-target='#modalTambah'>TAMBAH DATA</button>
                                <?php } ?>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><?php foreach ($item as $i) : ?>
                            <td scope="col">
                                <?php if (isset($_SESSION['username'])) { ?>
                                    <h7><a href='#' data-toggle="modal" data-target='#modalEdit'><?= $i['name']; ?></a></h7>
                                <?php } else {?>
                                    <h7><?= $i['name']; ?></h7>
                                <?php }?>
                            </td>
                            <td scope="col"><?= $i['density']; ?></td>
                            <td scope="col"><?= $i['status']; ?></td>
                            <td scope="col"><?= $i['depth']; ?></td>
                            <td scope="col"><?= $i['width']; ?></td>
                            <td scope="col"><?= $i['temp']; ?></td>
                            <td scope="col"><?= $i['speed']; ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                
                <!-- modal tambah -->
                <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <center><h2>Tambah Data</h2></center>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form_tambah" action="" method="post">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" name="name" required>
                                    </div>
                                    <?php foreach ($column as $col) : ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput"><?= ucwords($col) ?></label>
                                            <select class="form-control input" name=<?= $col?> required>
                                            <?php
                                            foreach ($$col as $d) {?>
                                                <option value="<?php echo $d[$col];?>" ><?php echo $d[$col];?></option>
                                            <?php } ?>
                                            </select>  
                                        </div>
                                    <?php endforeach ?>
                                    <button id="add_btn" type="submit" class="btn btn-primary">Tambah</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modal edit -->
                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <center><h2>Edit Data</h2></center>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form_edit" action="" method="post">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nama</label>
                                        <input type="text" class="form-control" id="inputNama" placeholder="Nama" name="name" value="" required>
                                    </div>
                                    <?php foreach ($column as $col) : ?>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput"><?= ucwords($col) ?></label>
                                            <select class="form-control input" id=<?='input'.ucwords($col)?> name=<?= $col?> required>
                                            <?php
                                            foreach ($$col as $d) {?>
                                                <option value="<?php echo $d[$col];?>" ><?php echo $d[$col];?></option>
                                            <?php } ?>
                                            </select>  
                                        </div>
                                    <?php endforeach ?>
                                    <button id="edit_btn" type="submit" class="btn btn-primary">Edit</button>
                                    <button id="delete_btn" type="submit" class="btn btn-danger">Delete</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>