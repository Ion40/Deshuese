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
                <button id="btnNewDeshuese" class="Btnadd btn waves-effect waves-light">Nuevo
                    <i class="material-icons right">note_add</i>
                </button>
            </div>
            <div class="row center">
                <table class="table striped RobotoR" id="tblDeshueses">
                    <thead>
                    <tr>
                        <th>No Deshuese</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Masa Deshuesada</th>
                        <th>Costo Total</th>
                        <th>Costo Producto DH</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(!$ds)
                        {}else{
                            foreach ($ds as $key) {
                                echo "
                                    <tr>
                                      <td>".$key["No_DH"]."</td>
                                      <td>".$key["Fecha"]."</td>
                                      <td>".$key["Descripcion_DH"]."</td>
                                      <td>".number_format($key["Masa_Deshuesada"],2)."</td>
                                      <td>".number_format($key["Costo_Total"],2)."</td>
                                      <td>".number_format($key["Costo_Prod_DH"],2)."</td>
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
<div id="mdlnewDeshuese" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h3 class="TextColor center">Orden Liquidacion Producto Deshuesado</h3>
            <fieldset style="margin-top: -35px !important;">
                <legend style="font-family: robotoblack">Información Base</legend>
                <div class="row">
                    <div class="col s3 m3 l2 left">
                        <span class="left">No DH:</span><input type="text" id="Ndh">
                    </div>
                    <div class="col s3 m3 l3">
                        <span class="left">Costo Producto DH:</span><input type="text" id="CPDH">
                    </div>
                    <div class="col s3 m3 l2 right">
                        <span class="left">Fecha:</span><input class="datepicker" type="text" id="FechaDH">
                    </div>
                </div>
                <div class="row">
                    <div class="col s5 m5 l5">
                        <span class="left">Descripcion Deshuese:</span><input type="text" id="DescDH">
                    </div>
                    <div class="col s3 m3 l3">
                        <span class="left">Masa Deshuesada (kg):</span><input type="text" id="PB">
                    </div>
                    <div class="col s2 m2 l2">
                        <span class="left">Costo Total:</span><input type="text" id="CT">
                    </div>
                    <div class="col s2 m2 l2">
                        <span class="left">Gasto MOD:</span><input readOnly  type="text" id="MOD">
                    </div>
                    <div class="col s1 m1 l1">
                        <span class="left"></span><input type="hidden" id="GIL">
                        <span class="left"></span><input type="hidden" id="IdDisCont">
                    </div>
                </div>
            </fieldset>
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
                <table class="table striped RobotoR compact" id="tblMateriaPrima">
                    <thead>
                        <tr>
                            <th>MateriaPrima</th>
                            <th>Descripción</th>
                            <th>CalculoBase</th>
                            <th>Kilos</th>
                            <th>Valor Total Mercado</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="center col s12 m12 l12">
                <button class="Btnadd btn" id="btnSaveDeshuese">Guardar <i class="material-icons right">save</i></button>
            </div>
        </div>
    </div>
</div>
