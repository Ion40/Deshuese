<header class="demo-header mdl-layout__header ">
    <div class="centrado  ColorHeader"><span class=" title"><?php echo $this->uri->segment(1);?></span></div>
</header>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="row TextColor center">Elige un Reporte</div>
        <div class="row" style="width:100%">

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
                            <a href="#" class="center">
                                <i class="material-icons large">assessment</i>
                            </a>
                            <p class="center" style="font-family: robotoblack">Distribución de Recursos</p>
                        </div>
                    </div>
                </div>
                <div class="col s4 m4 l4">
                    <div class="card  blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <a href="#" class="center">
                                <i class="material-icons large">date_range</i>
                            </a>
                            <p class="center" style="font-family: robotoblack">Deshuese Mes Anterior</p>
                        </div>
                    </div>
                </div>
            </div>

    </div>
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
                </div>
            </div>
        </div>
         <div class="container">
             <div class="row">
                 <div class="col s3 m3 l6 ">
                     <p class="left" style="font-family: robotoblack;">No DH: <span id="spanNoDH"></span></p>
                 </div>
               <div class="col s3 m3 l6 right">
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
                            <th>Costo Actual</th>
                            <th>Valor Total C$</th>
                            <th>Valor Total %</th>
                            <th>Asig Costo T</th>
                            <th>Costo Unit kg</th>
                            <th>Rendi</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                 </table>
             </div>
         </div>
       </div>
    </div>
</div>


