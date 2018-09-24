<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader"><span class=" title"><?php echo $this->uri->segment(1);?></span></div>
</header>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="row TextColor center">Elige un Reporte</div>
        <div class="row" style="width:100%">

                <?php
                    if ($this->session->userdata("RolUser") == 3) {
                       echo '
                        <div class="row center">
                            <div class="col s4 m4 l4">
                                <div class="card  blue-grey lighten-5 hoverable">
                                    <div class="card-content">
                                        <a href="javascript:void(0)" id="DistCont" class="center">
                                            <i class="material-icons large">monetization_on</i>
                                        </a>
                                        <p class="center" style="font-family: robotoblack">Distribución de Recursos Contables</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       ';
                    } else {
                        echo '
                            <div class="row center">
                                <div class="col s4 m4 l4">
                                    <div class="card  blue-grey lighten-5 hoverable">
                                        <div class="card-content">
                                            <a href="javascript:void(0)" id="NumDes" class="center">
                                                <i class="material-icons large">print</i>
                                            </a>
                                            <p class="center" style="font-family: robotoblack">Número Deshuese</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s4 m4 l4">
                                    <div class="card  blue-grey lighten-5 hoverable">
                                        <div class="card-content">
                                            <a href="#" class="center" id="disRecursos">
                                                <i class="material-icons large">assessment</i>
                                            </a>
                                            <p class="center" style="font-family: robotoblack">Distribución de Recursos</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s4 m4 l4">
                                    <div class="card  blue-grey lighten-5 hoverable">
                                        <div class="card-content">
                                            <a href="#" class="center" id="aMes">
                                                <i class="material-icons large">history</i>
                                            </a>
                                            <p class="center" style="font-family: robotoblack">Deshuese Mes Anterior</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row center">
                                <div class="col s4 m4 l4">
                                    <div class="card  blue-grey lighten-5 hoverable">
                                        <div class="card-content">
                                            <a href="#" class="center" id="Rangos">
                                                <i class="material-icons large">date_range</i>
                                            </a>
                                            <p class="center" style="font-family: robotoblack">Deshuese por Rango de Fechas</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s4 m4 l4">
                                    <div class="card  blue-grey lighten-5 hoverable">
                                        <div class="card-content">
                                            <a href="javascript:void(0)" id="DistCont" class="center">
                                                <i class="material-icons large">monetization_on</i>
                                            </a>
                                            <p class="center" style="font-family: robotoblack">Distribución de Recursos Contables</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s4 m4 l4">
                                    <div class="card  blue-grey lighten-5 hoverable">
                                        <div class="card-content">
                                            <a href="javascript:void(0)" id="aSemana" class="center">
                                                <i class="material-icons large">history</i>
                                            </a>
                                            <p class="center" style="font-family: robotoblack">Deshuese Semana Anterior</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        ';
                    }
                ?>
</main>
<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h4 class="center TextColor" id="headerReport"></h4>
        <div class="row center">
            <div class="container">
                <div class="Buscar row column">
                    <div class="col s1 m1 l1 offset-l3 offset-m2">
                    </div>
                    <div class="input-field col s11 m6 l5">
                        <input  id="search" type="text" class="">
                        <label for="search">Numero Deshuese</label>
                    </div>
                    <div class="col s4 m4 l4">
                        <button id="btnConsultar" class="btn Btnadd">Consultar <i class="material-icons right">query_builder</i></button>
                    </div>
                    <div class="col s3 m3 l3 right">
                        <a onclick="printDesh()" href="javascript:void(0)" class="right" target="_blank">
                            <i class="material-icons green-text medium">print</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
         <div id="Imprimir">
             <div class="col s12 m12 l12">
                 <div class="row">
                     <div class="col s3 m3 l3 ">
                         <p class="left" style="font-family: robotoblack;">No DH: <span id="spanNoDH"></span></p>
                     </div>
                     <div class="col s3 m3 l3 ">
                         <p class="left" style="font-family: robotoblack;">Costo MOD: <span id="spanMOD"></span></p>
                     </div>
                     <div class="col s3 m3 l3 ">
                         <p class="left" style="font-family: robotoblack;">GI: <span id="spanGI"></span></p>
                     </div>
                     <div class="col s3 m3 l3 right">
                         <p class="right" style="font-family: robotoblack;">Fecha: <span id="spanFechaDH"></span></p>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col s6 m6 l6 left">
                         <p class="left" style="font-family: robotoblack;">Descripción: <span id="spanDescDH"></span></p>
                     </div>
                     <div class="col s3 m3 l3 ">
                         <p class="" style="font-family: robotoblack;">Masa Deshuesada: <span id="spanMasaDH"></span></p>
                     </div>
                     <div class="col s3 m3 l3">
                         <p class="right" style="font-family: robotoblack;">Costo Total: <span id="spanCosto"></span></p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col s12 m12 l12">
                     <table id="tblReporteDH" class="table compact">
                         <thead>
                         <tr>
                             <th>MateriaPrima</th> <!--Concatenar matPrima y Descripcion-->
                             <th>Obtenido kg</th>
                             <th>Calculo Base</th>
                             <th>Valor Total C$</th>
                             <th>Valor Total %</th>
                             <th>Asig Costo T</th>
                             <th>Costo Unit kg</th>
                             <th>Rendi</th>
                             <th>Prec Ant Kilo</th>
                             <th>Prec Act Kilo</th>
                             <th>Dif</th>
                         </tr>
                         </thead>
                         <tbody>
                         </tbody>
                         <br><br>
                         <tfoot>
                         <tr>
                             <td><span class="bold">Totales</span></td>
                             <td><span class="bold" id="sumKilos"></span></td>
                             <td></td>
                             <td><span class="bold" id="ValTotalSum"></span></td>
                             <td><span class="bold" id="totalPorcentaje"></span></td>
                             <td><span class="bold" id="CostoT"></span></td>
                             <td></td>
                             <td><span class="bold" id="RendiTotalSum"></span></td>
                             <td></td>
                             <td></td>
                             <td></td>
                         </tr>
                         </tfoot>
                     </table>
                 </div>
             </div>
         </div>
       </div>
    </div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h4 class="center TextColor" id="">Reporte Distribución de Recursos</h4>
        <div class="row center">
            <div class="container">
                <div class="Buscar row column">
                    <div class="col s1 m1 l1 offset-l3 offset-m2">
                    </div>
                    <div class="input-field col s11 m6 l5">
                        <input id="fechaDis" type="text" class="datepicker">
                        <label for="fechaDis">Fecha de Distribucíon</label>
                    </div>
                    <div class="col s4 m4 l4">
                        <button id="btnConsultarDis" class="btn Btnadd">Consultar <i class="material-icons right">query_builder</i></button>
                    </div>
                    <div class="col s3 m3 l3 right">
                        <a onclick="printDist()" href="javascript:void(0)" class="right" target="_blank">
                            <i class="material-icons green-text medium">print</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="">
            <div class="col s12 m12 l12 container">
                <div class="row">
                    <div class="col s3 m3 l4">
                        <p class="left" style="font-family: robotoblack;">Fecha: <span id="spanFechaDis"></span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4 m4 l4">
                        <p class="left" style="font-family: robotoblack;">Masa Obtenida: <span id="spanMasaDis"></span></p>
                    </div>
                    <div class="col s4 m4 l4">
                        <p class="center" style="font-family: robotoblack;">Total Kg: <span id="spanTotalKil"></span></p>
                    </div>
                    <div class="col s4 m4 l4">
                        <p class="right" style="font-family: robotoblack;">Total Aplicado: <span id="spanTotaApli"></span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <table id="tblReporteDist" class="table compact">
                        <thead>
                        <tr>
                            <th>MateriaPrima</th>
                            <th>Descripcion</th>
                            <th>Valor Kg</th>
                            <th>Porcentaje Aplicado</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <br><br>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal3" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h4 class="center TextColor" id="">Reporte Deshuese por Rango de Fechas</h4>
        <div class="row center">
            <div class="container">
                <div class="Buscar row column">
                    <div class="col s1 m1 l1 offset-l3 offset-m2">
                    </div>
                    <div class="input-field col s11 m6 l3">
                        <input id="fecha1" type="text" class="datepicker">
                        <label for="fecha1">Fecha de inicio</label>
                    </div>
                    <div class="input-field col s11 m6 l3">
                        <input id="fecha2" type="text" class="datepicker">
                        <label for="fecha2">Fecha final</label>
                    </div>
                    <div class="col s4 m4 l4">
                        <button id="btnConsultarRangos" class="btn Btnadd">Consultar <i class="material-icons right">query_builder</i></button>
                    </div>
                    <div class="col s3 m3 l3 right">
                        <a onclick="printDeshXFechas()" href="javascript:void(0)" class="right" target="_blank">
                            <i class="material-icons green-text medium">print</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="" class="">
            <div class="row">
                <div class="col s12 m12 l12">
                    <table id="tblReporteRangos" class="table compact">
                        <thead>
                        <tr>
                            <th>No_DH</th>
                            <th>Fecha</th>
                            <th>Descripcion</th>
                            <th>Peso Bruto</th>
                            <th>Costo Total</th>
                            <th>Imprimir</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <br><br>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal4" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h4 class="center TextColor" id="">Reporte Distribución de Recursos Contables</h4>
        <div id="" class="">
            <div class="row">
                <div class="col s12 m12 l12">
                    <table id="tblInfoDistCont" class="table compact">
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
                          <th>Print</th>
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
                                    <td>
                                    <a onclick='' href='printDistribucionCont/".$key["Id_Dis_Rec"]."' target='_blank'>
                                        <i class='material-icons green-text'>print</i>
                                    </a>
                                    </td>
                                 </tr>";
                               }
                             }
                          ?>
                      </tbody>
                        <br><br>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal5" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h4 class="center TextColor" id="ReportPasado"></h4>
        <div id="divMesAnterior" class="">
            <div class="row">
                <div class="col s12 m12 l12">
                    <table id="tblMesAnterior" class="table compact">
                      <thead>
                      <tr>
                        <th>No_DH</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Peso Bruto</th>
                        <th>Costo Total</th>
                        <th>Gastos MOD</th>
                        <th>GI</th>
                        <th>Imprimir</th>
                      </tr>
                      </thead>
                      <tbody>
                          <?php
                            if (!$Mes) {
                            }else{
                              foreach ($Mes as $key ) {
                                echo "<tr>
                                    <td>".$key["No_DH"]."</td>
                                    <td>".$key["Fecha"]."</td>
                                    <td>".$key["Descripcion_DH"]."</td>
                                    <td>".$key["Precio_Bruto"]."</td>
                                    <td>".number_format($key["Costo_Total"],2)."</td>
                                    <td>".number_format($key["Gasto_MOD"],2)."</td>
                                    <td>".number_format($key["GI"],2)."</td>
                                    <td>
                                    <a class='center' onclick='printDeshRango(".'"'.$key["No_DH"].'"'.")' href='javascript:void(0)' class='right' target='_blank'>
                                        <i class='material-icons green-text'>print</i>
                                    </a>
                                    </td>
                                 </tr>";
                              }
                            }
                          ?>
                      </tbody>
                        <br><br>
                    </table>
                </div>
            </div>
        </div>

        <div id="divSemanaAnterior" class="">
            <div class="row">
                <div class="col s12 m12 l12">
                    <table id="tblSemanaAnterior" class="table compact">
                      <thead>
                      <tr>
                        <th>No_DH</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Peso Bruto</th>
                        <th>Costo Total</th>
                        <th>Gastos MOD</th>
                        <th>GI</th>
                        <th>Imprimir</th>
                      </tr>
                      </thead>
                      <tbody>
                          <?php
                            if(!$Semana){
                            }else{
                              foreach ($Semana as $key ) {
                                echo "<tr>
                                    <td>".$key["No_DH"]."</td>
                                    <td>".$key["Fecha"]."</td>
                                    <td>".$key["Descripcion_DH"]."</td>
                                    <td>".$key["Precio_Bruto"]."</td>
                                    <td>".number_format($key["Costo_Total"],2)."</td>
                                    <td>".number_format($key["Gasto_MOD"],2)."</td>
                                    <td>".number_format($key["GI"],2)."</td>
                                    <td>
                                    <a class='center' onclick='printDeshRango(".'"'.$key["No_DH"].'"'.")' href='javascript:void(0)' class='right' target='_blank'>
                                        <i class='material-icons green-text'>print</i>
                                    </a>
                                    </td>
                                 </tr>";
                              }
                            }
                          ?>
                      </tbody>
                        <br><br>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
