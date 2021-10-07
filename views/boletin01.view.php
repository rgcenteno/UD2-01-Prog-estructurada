<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej01_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <?php
                echo $data['ej01_textoresultado'];
                ?>
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej02_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <?php
                echo $data['ej02_textoresultado'];
                ?>
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej03_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <p> El área del rectángulo es <?php echo $data['ej03_area'] ?> y el perímetro es: <?php echo $data['ej03_perimetro'] ?></p>                
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej04_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <?php
                echo $data['ej04_textoresultado'];
                ?>
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej05_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <?php
                echo $data['ej05_textoresultado'];
                ?>
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej06_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <?php
                echo $data['ej06_textoresultado'];
                ?>
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej07_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <?php
                echo $data['ej07_textoresultado'];
                ?>
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej08_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <?php
                echo $data['ej08_textoresultado'];
                ?>
            </div>
        </div>
    </div> 
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['ej09_div_titulo']; ?></h6>                                    
            </div>
            <div class="card-body">
                <p>El texto: <i>"<?php echo $data["ej09_entrada"]; ?>"</i> está formado por <strong><?php echo $data["ej09_palabras"]; ?></strong> palabras y <strong><?php echo $data["ej09_caracteres"]; ?></strong> caracteres.</p>
            </div>
        </div>
    </div> 
</div>

