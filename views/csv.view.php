<link href="./vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['csv_titulo']; ?></h1>
</div>

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['csv_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">  
                <table id="csvTable" class="table table-bordered dataTable">
                    <?php 
                    $first = true;
                    foreach($data['registros'] as $fila){
                        if($first){
                            ?>
                    <thead>
                        <tr>
                        <?php 
                        foreach($fila as $columna){
                            ?>
                            <th><?php echo $columna; ?></th>
                            <?php
                        }
                        $first = false;
                        ?>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                        }
                        else{
                            ?>
                        <tr>
                            <?php 
                            foreach($fila as $columna){
                                ?>
                                <td><?php echo $columna; ?></td>
                                <?php
                            }
                            ?>
                        </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
<!--<script src="./vendor/jquery/jquery.min.js"></script>-->
