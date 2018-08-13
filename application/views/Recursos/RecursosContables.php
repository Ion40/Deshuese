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
                <button id="btnNewDistribucionCont" class="Btnadd btn waves-effect waves-light">Nuevo
                    <i class="material-icons right">note_add</i>
                </button>
            </div>
            <div class="row center">
                <table class="table striped RobotoR" id="tblDistribucionesCont">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Salario</th>
                        <th>Vacaciones</th>
                        <th>TreceavoMes</th>
                        <th>Inatec</th>
                        <th>Inss</th>
                        <th>MOD</th>
                        <th>GI por libra</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                           if(!$data)
                           {}else{
                             foreach ($data as $key) {
                               echo "<tr>
                                  <td>".$key["Fecha"]."</td>
                                  <td>".$key["Salario"]."</td>
                                  <td>".$key["Vacaciones"]."</td>
                                  <td>".$key["TreceavoMes"]."</td>
                                  <td>".$key["Inatec"]."</td>
                                  <td>".$key["Inss"]."</td>
                                  <td>".number_format($key["Costo_MOD"],2)."</td>
                                  <td>".$key["Gasto_Indirecto_Libra"]."</td>
                               </tr>";
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
<div id="mdlnewDRecursosCont" class="modal" style="height:370px !important;">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h3 class="TextColor center">Distribucion de Recursos Contables</h3>
            <div class="row">
                <div class="col s3 m3 l2">
                    <span class="left">Salario Basico:</span><input type="text" id="Salario" class="">
                </div>
                <div class="col s3 m3 l3">
                    <span class="left">Gasto indirecto por libra:</span><input type="text" id="GIL">
                </div>
                <div class="col s3 m3 l3 center">
                    <button id="btnCalcular" class="btn Btnadd">Calcular<i class="material-icons right">touch_app</i></button>
                </div>
            </div>
        <br>
        <div class="row">
          <div class="col s4 m4 l4 right">
              <button id="btnDeleteRow" class="btn selected1 small">
                  Eliminar<i class="material-icons right">delete</i>
              </button>
          </div>
            <br><br>
            <div class="col s12 m12 l12">
                <table class="table striped RobotoR compact" id="tblDistRecursosCont">
                    <thead>
                    <tr>
                      <th>Vacaciones</th>
                      <th>Treceavo Mes</th>
                      <th>Inatec</th>
                      <th>Inss</th>
                      <th>Costo MOD</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="center col s12 m12 l12">
                <button class="Btnadd btn" id="btnSaveDistribucionCont">Guardar
                  <i class="material-icons right">save</i>
                </button>
            </div>
        </div>
    </div>
</div>
