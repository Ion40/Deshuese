<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <img style="" width="100%" src="<?PHP echo base_url();?>assets/img/LOGOS_DELMOR.png">
        <br>
        <header id="MenuFondo" class="demo-drawer-header">
            <div id="user" class="row">
                <div class="col l2 center carita">
                  <i class=" material-icons" style="color:#fff;">face</i>
                </div>
                <div class="col l10 center">
                  <span class="Loggen"><?php echo $this->session->userdata('UserN');?></span><br><br>
                  <span class="Loggen">
                  <?php
                      switch ($this->session->userdata('RolUser')) {
                        case 0:
                           echo "Administrador";
                          break;

                          case 1:
                            echo "Gerencia";
                          break;

                          case 2:
                            echo "Contabilidad";
                          break;

                        case 3:
                             echo "Produccion";
                          break;
                          default:
                          echo "Administrador";
                          break;
                      }
                  ?>
                  </span>
                </div>
            </div>
        </header>
       <div id="menu">
           <ul class="nav menu demo-navigation mdl-navigation__link RobotoR" >
            <?php
            //<a href="Reserva"> <li href="Reserva"><i class="material-icons">monetization_on</i> Reserva</li></a>
              switch ($this->session->userdata('RolUser')) {
                case 0:
                  $menu = '
                           <a href="Usuarios">
                              <li href="Usuarios"><i class="material-icons">person_add</i> Usuarios</li></a>
                              <a href="Productos">
                                <li href="Productos"><i class="material-icons">move_to_inbox</i> Producto Deshuese</li>
                              </a>
                              <a href="Materia_Prima">
                              <li href="Materia_Prima"><i class="material-icons">archive</i> Materia Prima</li></a>
                              <a href="Distribucion">
                                <li href="Distribucion"><i class="material-icons">swap_horiz</i> Distribucion Recursos</li>
                              </a>
                              <a href="Distribucion_Contable">
                                <li href="Distribucion_Contable"><i class="material-icons">attach_money</i> Distribucion Contable</li>
                              </a>
                           <a href="Deshuese">
                             <li href="Deshuese"><i class="material-icons">group_work</i> Deshuese</li>
                           </a>
                           <a href="Reportes">
                             <li href="Reportes"><i class="material-icons">assignment</i> Reportes</li>
                           </a><br><br>
                            <a href="salir">
                             <li href="salir"><i class="material-icons">power_settings_new</i>Salir</li>
                           </a>';
                           break;
              }
              echo $menu;
            ?>
          </ul>
       </div>
    </div>

               <!-- Modal ChangePassword Structure -->
  <div id="modalPassword" class="modal">
    <div class="modal-content">
      <h4 class="center indigo-text darken-4" style="margin-top:1em;">CAMBIAR CONTRASEÑA</h4>
      <br>
     <div class="container">
      <div class="input-field col s6 m6 s6">
        <input type="hidden" name="idUser" id="idUser" value="<?php echo $this->session->userdata('id');?>">
        <input type="password" id="newPass" name="newPass" placeholder="Escribe la nueva contraseña">
        <label for="lblnewPass" id="lblnewPass">Nueva Contraseña</label>
      </div>
     <p>
      <input type="checkbox" id="showPass" class="filled-in"/>
      <label for="showPass" id="lblshowPass">Mostrar Contraseña</label>
    </p>
    </div>
     </div>
    <div class="center">
       <a href="#!" onclick="actualizaPass()" class="waves-effect waves-light btn blue">ACEPTAR</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn red">CERRAR</a>
    </div>
    <br>
  </div>
