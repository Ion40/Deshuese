<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader"><span class=" title"><?php echo $this->uri->segment(1);?></span></div>
</header>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="row TextColor center">lista de <?php echo $this->uri->segment(1);?></div>
        <div class="row" style="width:100%">
            <div class="container">
                <div class="Buscar row column">
                    <div class="col s1 m1 l1 offset-l3 offset-m2"><i class="material-icons ColorS">search</i></div>
                    <div class="input-field col s11 m6 l5">
                        <input  id="searchMain" type="text" placeholder="Buscar" class="validate mayuscula">
                        <label for="search"></label>
                    </div>
                </div>
            </div>
            <div style="margin-right: 10px; margin-bottom: 10px;" class="right m12" id="">
                <button id="btnNewDistribucion" class="Btnadd btn waves-effect waves-light">Nuevo
                    <i class="material-icons right">note_add</i>
                </button>
            </div>
            <div class="row center">
                <table class="table striped RobotoR" id="tblDistribuciones">
                    <thead>
                    <tr>
                        <th>Fecha Distribucion</th>
                        <th>Masa Obtenida</th>
                        <th>Valor Kg</th>
                        <th>Porcentaje Aplicado</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(!$dis)
                        {}else{
                            foreach ($dis as $key) {
                               echo "
                                <tr>
                                  <td>".$key["Fecha_Distribucion"]."</td>
                                  <td>".$key["Masa_Obtenida"]."</td>
                                  <td>".$key["Valor_Kg"]."</td>
                                  <td>".$key["Porcentaje_Apli"]." %</td>
                                </tr>
                               ";
                         }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- Modal Structure -->
<div id="mdlnewDRecursos" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h3 class="TextColor center">Distribucion de Recursos</h3>
            <div class="row">
                <div class="col s3 m3 l2">
                    <span class="left">Fecha Distribucion:</span><input type="text" id="fechaDis" class="datepicker">
                </div>
                <div class="col s3 m3 l2">
                    <span class="left">Masa Obtendia:</span><input type="text" id="MOB">
                </div>
                <div class="col s3 m3 l2 center">
                    <h6 class="center" style="font-family: robotoblack; margin-top: -10px">Total Kg:</h6>
                    <span id="TotalKg"></span>
                </div>
                <div class="col s3 m3 l2 center">
                    <h6 class="center" style="font-family: robotoblack; margin-top: -10px">Total Aplicado:</h6>
                    <span id="TotalApli"></span>
                </div>
                <div class="col s3 m3 l3 center">
                    <button id="Calcular" class="btn Btnadd">Calcular<i class="material-icons right">touch_app</i></button>
                </div>
            </div>
        <br>
        <div class="row">
            <div class="col s6 m6 l6 left">
                <select name="dropMP" id="dropMP" class="browser-default chosen-select">
                    <option value="" disabled selected>Materia Prima</option>
                    <?php
                    if (!$mp)
                    {}
                    else{
                        foreach ($mp as $item) {
                            echo "<option value='".$item["Materia_prima"]."'>".$item["Descripcion"]."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col s4 m4 l4 right">
                <button id="btnDeleteRow" class="btn selected1 small">
                    Eliminar<i class="material-icons right">delete</i>
                </button>
            </div>
            <br><br>
            <div class="col s12 m12 l12">
                <table class="table striped RobotoR compact" id="tblDistRecursos">
                    <thead>
                    <tr>
                        <th>MateriaPrima</th>
                        <th>Descripción</th>
                        <th>Valor Kg</th>
                        <th>Porcentaje Aplicado</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="center col s12 m12 l12">
                <button class="Btnadd btn" id="btnSaveDistribucion">Guardar <i class="material-icons right">save</i></button>
            </div>
        </div>
    </div>
</div>

