<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">

    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <table id="miTabla" class="table table-bordered dataTable">
                    <thead>
                        <tr>
                            <th>Campo 1</th>
                            <th>Campo 2</th>
                            <th>Campo 3</th>
                            <th>Campo 4</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Prueba 1</td>
                            <td>Test 1</td>
                            <td>V1</td>
                            <td>Data 1</td>
                        </tr>
                        <tr>
                            <td>Prueba 2</td>
                            <td>Test 2</td>
                            <td>V2</td>
                            <td>Data 2</td>
                        </tr>
                        <tr>
                            <td>Prueba 3</td>
                            <td>Test 3</td>
                            <td>V3</td>
                            <td>Data 3</td>
                        </tr>
                        <tr>
                            <td>Prueba 4</td>
                            <td>Test 4</td>
                            <td>V4</td>
                            <td>Data 4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>                        
</div>