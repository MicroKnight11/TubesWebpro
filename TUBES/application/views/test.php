<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/natural.js"></script>
        <script type="text/javascript" charset="utf8" src=<?= base_url('assets/script/').'catalog.js'?>></script>
    </head>
    <body>
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
    </body>
</html>