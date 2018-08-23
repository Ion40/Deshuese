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
                <button id="newProd" class="Btnadd btn waves-effect waves-light">Nuevo
                    <i class="material-icons right">note_add</i>
                </button>
            </div>
            <div class="row center">
                <table class="table striped RobotoR" id="tblProductosdh">
                    <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Producto</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                          if (!$prod) {
                          }else{
                            foreach ($prod as $key) {
                              echo "
                                <tr>
                                    <td>".$key["Codigo"]."</td>
                                    <td>".$key["Producto"]."</td>
                                    <td class='center detalles'>
                                      <i id='more".$key["Codigo"]."' class='material-icons'>arrow_drop_down</i>
                                      <i id='less".$key["Codigo"]."' style='display:none;' class='material-icons'>arrow_drop_up</i>
                                        <div id='loader".$key['Codigo']."' style='display:none;' class='preloader-wrapper small active'>
                                            <div class='spinner-layer spinner-blue-only'>
                                                <div style='overflow: visible!important;' class='circle-clipper left'>
                                                    <div class='circle'></div>
                                                </div>
                                                <div class='gap-patch'>
                                                    <div class='circle'></div>
                                                </div>
                                                <div style='overflow: visible!important;' class='circle-clipper right'>
                                                    <div class='circle'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>  
                                    <td>
                                      <a onclick='Eliminar(".'"'.$key["Codigo"].'"'.")' href='javascript:void(0)'><i class='material-icons'>delete</i></a>
                                    </td>  
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
<div id="mProducto" class="modal" style="">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h4 class="TextColor center">Nuevo Producto DH</h4>
        <div class="row">
          <div class="col s3 m3 l3">
            <span class="left">Codigo Producto:</span>
             <input type="text" name="" value="" id="Codigo">
          </div>
          <div class="col s6 m6 l6">
            <span class="left">Producto:</span>
             <input type="text" name="" value="" id="Producto">
          </div>
        </div>
        <div class="row">
          <div class="col s5 m5 l5">
            <table class="table" id="t1">
            <thead>
              <tr>
                <th>MateriaPrima</th>
                <th>Descripcion</th>
                <th>CalculoBase</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
          </div>
          <div class="col s2 m2 l2 center">
              <a href="#" id="btnReverse" class="Btnadd btn" name="button">
                <i class="material-icons">arrow_back</i>
              </a>
              <br><br>
              <a href="#" id="btnMove" class="Btnadd btn" name="button">
                <i class="material-icons">arrow_forward</i>
              </a>
          </div>
          <div class="col s5 m5 l5">
            <table class="table" id="t2">
            <thead>
              <tr>
                <th>MateriaPrima</th>
                <th>Descripcion</th>
                <th>CalculoBase</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
            </table>
          </div>
        </div>
        <div class="row center">
          <button type="button" name="button" class="Btnadd btn" id="btnSave">
            Guardar
          </button>
        </div>
    </div>
</div>
