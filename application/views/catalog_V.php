<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <section class="breadcrumbs-wrapper">
            <ul class="breadcrumb">
                <!-- path list -->
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item"><a href="#">DRAM</a></li>
                <li class="breadcrumb-item"><a href="#">DDR4 SDRAM</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">DDR4 SDRAM Part Catalog</a></li>
            </ul>
        </section>
        <section class="products-intro-wrapper container-fluid col-8 my-5">
            <h2 class="font-weight-bold mb-5">DDR4 SDRAM Part Catalog</h2>
            <br>
            <form action="" class="d-flex">
                <label for="cars" class="aligm">View Part Catalogs</label>
                <select class="form-control ml-3" name="productFamily" id="productFamily" style="width: 230px; height: 45px;">
                    <option disable selected>Product Family</option>
                    <?php foreach($family as $opt){
                        echo '<option>', $opt;
                    }?>
                </select>
                <select class="form-control mx-3" name="productTechnology" id="productTechnology" style="width: 230px; height: 45px;">
                    <option disable selected>Product Technology</option>
                    <?php foreach($tech as $opt){
                        echo '<option>', $opt;
                    }?>
                </select>
                <input type="submit" value="View Part Catalog" class="btn btn-primary">
            </form> 
        </section>
        <section class="bg-light px-5 py-2">
            <div class="container col-10">
                <table class="table bg-white mt-5">
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
                    <tbody>
                        <tr><td>part No.()</td></tr>
                        <tr><?php //foreach ($item as $i) : ?>
                            <td scope="col">
                                + Filters
                                <a class="launch-part-catalog-modal" data-href="" data-type="" data-value=""><i class="fal fa-arrow-alt-to-bottom"></i></a>
                            </td>
                            <td scope="col">Density</td>
                            <td scope="col">Part Status</td>
                            <td scope="col">Depth</td>
                            <td scope="col">Width</td>
                            <td scope="col">Op.Temp</td>
                            <td scope="col">Industry Speed</td>
                        </tr>
                        <?php //endforeach ?>
                    </tbody>
                </table>
                <div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center"><?php //foreach?>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </body>
</html>