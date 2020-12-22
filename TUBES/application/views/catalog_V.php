<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/natural.js"></script>
        <script>
            var base_url = '<?= base_url()?>'
        </script>
        <script type="text/javascript" charset="utf8" src=<?= base_url('assets/script/').'catalog.js'?>></script>
    </head>
    <body>
        <section class="breadcrumbs-wrapper">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item"><a href="#">DRAM</a></li>
                <li class="breadcrumb-item"><a href="#">DDR4 SDRAM</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">DDR4 SDRAM Part Catalog</a></li>
            </ul>
        </section>
        <section class="products-intro-wrapper container-fluid col-8 my-5">
            <h2 class="font-weight-bold mb-5">DDR4 SDRAM Part Catalog</h2>
            <br>
            <div class="d-flex">
                <label for="cars" class="alignment-center">View Part Catalogs</label>
                <select class="form-control ml-3" name="productFamily" id="productFamily" style="width: 230px; height: 45px;">
                    <option id="defaultFamily" selected>Product Family</option>
                    <?php 
                    foreach($family as $opt){
                        echo "<option value='",$opt['id'],"'>" , $opt['name'];
                    }?>
                </select>
                <select class="form-control mx-3" name="productTechnology" id="productTechnology" style="display: none; width: 230px; height: 45px;">
                    <option id="defaultTech" selected>Product Technology</option>
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
                            <th scope="col" style="width: 115px">Density</th>
                            <th scope="col" style="width: 115px">Part Status</th>
                            <th scope="col" style="width: 115px">Depth</th>
                            <th scope="col" style="width: 115px">Width</th>
                            <th scope="col" style="width: 115px">Op.Temp</th>
                            <th scope="col" style="width: 115px">Industry Speed</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr><td>part No.(<?= count($item)?>)</td></tr>
                    </thead>
                    <tbody>
                        <tr><?php foreach ($item as $i) : ?>
                            <td scope="col">
                                <h7><?= $i['name']; ?></h7>
                                <a class="text-right" href="#">icon</a>
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
            </div>
        </section>
    </body>
</html>