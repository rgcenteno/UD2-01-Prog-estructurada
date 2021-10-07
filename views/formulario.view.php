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
            <!-- Card Body -->
            <div class="card-body">
                <!--<form action="./?sec=formulario" method="post">                   -->
                <form method="get">
                    <input type="hidden" name="sec" value="formulario" />
                    <div class="mb-3">
                        <label for="exampleFormControlInput1">Enderezo electrónico</label>
                        <input class="form-control" id="exampleFormControlInput1" type="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Examplo select</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="selectnormal">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect2">Exemplo multiple select</label>
                        <select class="form-control" id="exampleFormControlSelect2" multiple="" name="selectmultiple[]">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect2">Exemplo checkbox</label>  

                            <div class="row">
                            <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="a" name="opcions[]">
                                <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                            </div>
                            </div>
                            <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="b" checked" name="opcions[]">
                                <label class="form-check-label" for="flexCheckChecked">Checked checkbox</label>
                            </div>
                            </div>
                        <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input" id="flexCheckDisabled" type="checkbox" value="c" disabled name="opcions[]">
                                <label class="form-check-label" for="flexCheckDisabled">Disabled checkbox</label>
                            </div>
                        </div>
                            </div>
                        </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1">Exemplo textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="textarea" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Enviar" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>                        
</div>

