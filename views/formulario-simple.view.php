<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $data['titulo']; ?></h1>

</div>

<!-- Content Row -->

<div class="row">
    <?php
    if (DEBUG && isset($data['sanitized'])) {
        ?>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Variables pasadas:</h6>                                    
                </div>
                <!-- Card Body -->
                <div class="card-body"> 
                    
                    <?php 
                    var_dump($_POST);
                    var_dump($data); ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="col-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $data['div_titulo']; ?></h6>                                    
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="./?sec=formulario-simple" method="post">
                    <!--<form method="get">-->
                    <input type="hidden" name="sec" value="formulario" />
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="username">Nombre</label>
                            <input class="form-control" id="labelNombre" type="text" name="username" placeholder="Username" value="<?php echo isset($data['sanitized']['username']) ? $data['sanitized']['username'] : ""; ?>">
                            <?php if (isset($data['errors']['username'])) { ?>
                            <p class="text-danger"><small><?php echo $data['errors']['username']; ?></small></p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="text" name="email" placeholder="user@email.org" value="<?php echo isset($data['sanitized']['email']) ? $data['sanitized']['email'] : ""; ?>">
                            <?php if (isset($data['errors']['email'])) { ?>
                            <p class="text-danger"><small><?php echo $data['errors']['email']; ?></small></p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="website">Website</label>
                            <input class="form-control" id="email" type="text" name="website" placeholder="http://mysite.com" value="<?php echo isset($data['sanitized']['website']) ? $data['sanitized']['website'] : ""; ?>">
                            <?php if (isset($data['errors']['website'])) { ?>
                            <p class="text-danger"><small><?php echo $data['errors']['website']; ?></small></p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="email">Número</label>
                            <input class="form-control" id="numero" type="number" name="numero" placeholder="Inserte un número entero" value="<?php echo isset($data['sanitized']['numero']) ? $data['sanitized']['numero'] : ""; ?>">
                            <?php if (isset($data['errors']['numero'])) { ?>
                            <p class="text-danger"><small><?php echo $data['errors']['numero']; ?></small></p>
                                <?php
                            }
                            ?>
                        </div>                    
                        <div class="col-sm-6 mb-3">
                            <label for="provincia">Provincia</label>
                            <select class="form-control" id="provincia" name="provincia">
                                <option value="0">--Seleccione una provincia--</option>
                                <option value="1" <?php echo $data['sanitized']['provincia'] === "1" ? 'selected' : ""; ?>>A Coruña</option>
                                <option value="2" <?php echo $data['sanitized']['provincia'] === "2" ? 'selected' : ""; ?>>Lugo</option>
                                <option value="3" <?php echo $data['sanitized']['provincia'] === "3" ? 'selected' : ""; ?>>Ourense</option>
                                <option value="4" <?php echo $data['sanitized']['provincia'] === "4" ? 'selected' : ""; ?>>Pontevedra</option>                            
                            </select>
                            <?php if (isset($data['errors']['provincia'])) { ?>
                            <p class="text-danger"><small><?php echo $data['errors']['provincia']; ?></small></p>
                                <?php
                            }
                            ?>
                        </div>                    
                        <div class="col-12 mb-3">
                            <label for="exampleFormControlSelect2">Ejemplo checkbox</label>  
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-check">
                                        <input class="form-check-input" id="opcions1" type="checkbox" value="a" name="opcions[]" <?php echo isset($data['sanitized']['opcions']) && in_array("a", $data['sanitized']['opcions']) !== FALSE ? "checked" : ''; ?>>
                                        <label class="form-check-label" for="opcions1">Opción 1</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-check">
                                        <input class="form-check-input" id="opcions2" type="checkbox" value="b" checked" name="opcions[]" <?php echo isset($data['sanitized']['opcions']) && in_array("b", $data['sanitized']['opcions']) !== FALSE ? "checked" : ''; ?>>
                                        <label class="form-check-label" for="opcions2">Opción 2</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-check">
                                        <input class="form-check-input" id="opcions3" type="checkbox" value="c" name="opcions[]" <?php echo isset($data['sanitized']['opcions']) && in_array("c", $data['sanitized']['opcions']) !== FALSE ? "checked" : ''; ?>>
                                        <label class="form-check-label" for="opcions3">Opción 3</label>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($data['errors']['opcions'])) { ?>
                            <p class="text-danger"><small><?php echo $data['errors']['opcions']; ?></small></p>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="sobre_mi">Sobre mí</label>
                            <textarea class="form-control" id="sobre_mi" name="sobre_mi" rows="5"><?php echo isset($data['sanitized']['sobre_mi']) ? $data['sanitized']['sobre_mi'] : ''; ?></textarea>
                            <?php if (isset($data['errors']['sobre_mi'])) { ?>
                            <p class="text-danger"><small><?php echo $data['errors']['sobre_mi']; ?></small></p>
                                <?php
                            }
                            ?>
                        </div>                        
                        <div class="col-sm-12 mb-3">
                            <input type="submit" value="Enviar" name="boton_enviar" class="btn btn-primary"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>                        
</div>

