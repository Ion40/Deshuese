<!doctype html>
<html lang="es">
<head>
    <meta>
    <title>Reporte Deshuese</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png" />
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.1.min.js')?>"></script>
    <style>
        #footer {
            padding: 30px 30px;
            width:1000px;
            height: auto;
            margin: 0 auto;
            font-family: 'arial'!important;
            text-transform: uppercase!important;
            margin-top:14vh;
        }
        .footer {
            margin-top: 80px;
        }
        .footer tr td {
            width: 50%;
            text-align: center;
            padding: 5px 5px;
            border: none;
        }
        table.table {
            color: black;
            font-size: 11.3pt;
            font-weight:bold;
            font-family: 'robotoblack'!important;
            text-transform: capitalize!important;
            width: 1031px;
            margin: 0 auto;
            margin-bottom: 5px;
        }

        table {
            color: black;
            font-size: 11pt;
            font-family: 'robotoblack'!important;
            text-transform: capitalize!important;
            border-collapse: collapse;
            width: 1031px;
            margin: 0 auto;
            margin-bottom: 5px;
        }

        table tfoot tr td{
            font-weight: bold;
            padding-top: 20px;
        }
        table th,td{
            /*text-align: center;
            border: 1px solid black;
            padding:2px 2px ;*/
        }
        .encabezado{
            margin:10px !important;
            padding: 5px;
            font-weight:800;
        }

        .negrita{
            font-weight:700;
            text-align:left;
        }

        .derecha{
            text-align: right;
            padding-right: 10px !important;
        }

        /*.contenedor {
            width: 80%;
            height: 100%;
            margin: 0 auto;
            border: 1px solid black;
            border-radius: 2px;
            padding: 2px 2px;
        }*/


        #nodh{
            width: 50px;
            text-align: right;
            padding-right: 155px !important;
        }
        /* .contenedor {
            width: 98%;
            height: 100%;
            margin: 0 auto;
            border: 1px solid black;
            border-radius: 2px;
            padding: 2px 2px;
        } */

        .black{
            background-color:grey;
            color:white;
            font-weight:bold;
        }

        #consecutivo{
            margin-left:-90px;
            float:right;
            margin-right:20px;
            border-left:1px solid black;
            padding-left:5px;
            font-size: 12px !important;
            line-height: 0.5;
            text-align:center;
        }

        .container{
            margin: 0 auto;
            max-width: 1280px;
            width: 90%;
        }
        hr.encabezadohr{
            border-top: 3px solid #595858;
        }
        hr.tablahr{
            border-top: 1px solid #595858;
        }
</style>
    <script>
        $(document).ready(function(){
          //window.print();
        });
    </script>
</head>

<body>
<?php
date_default_timezone_set("America/Managua");
setlocale(LC_ALL,'Spanish_Nicaragua');
?>
<div class="contenedor">
    <div class="contenedor-secundario">
        <table class="table">
            <thead>
            <tr>
                <td class="encabezado">
                   DELMOR, S.A
                </td>
                <td class="encabezado"></td>
            </tr>
            <tr>
                <td class="encabezado" colspan="13">Liquidación de Deshuese</td>
            </tr>
            <tr>

            </tr>
            <tr>
                <td colspan="9" class="negrita">
                    <hr class="encabezadohr"></td>
            </tr>
            <tr>
                <td class="" id="nodh">NoDH:</td>
                <td style="z-index: 100; padding-right: 500px;position: absolute">
                    <?php
                    $noDH;
                        if(!$repor){}else{
                            foreach ($repor as $item) {
                                $noDH = $item["No_DH"];
                            }
                            echo "<span>".$noDH."</span>";
                        }
                    ?>
                </td>
                <td class="derecha">Fecha:</td>
                <td>
                    <?php
                    date_default_timezone_set("America/Managua");
                    $fecha;
                    if(!$repor){}else{
                        foreach ($repor as $item) {
                            $fecha = date_format(new DateTime($item["Fecha"]),"d-M-y");
                        }
                        echo "<span style='text-transform:uppercase;'>".$fecha."</span>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="" style="width: 300px" class="negrita">
                    Producto Deshuesado:
                </td>
                <td style="">
                </td>
                <td class="negrita">
                    <?php
                    $Desc;
                    if(!$repor){}else{
                        foreach ($repor as $item) {
                            $Desc = $item["Descripcion_DH"];
                        }
                        echo "<span>".$Desc."</span>";
                    }
                    ?>
                </td>
                <td></td>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <br><br>

    <div class="contenedor-secundario">
        <table class="table-produccion">
            <thead>
              <tr id="" class="encabezado" >
                <?php
                    for ($i=0; $i <= 4; $i++)
                    {
                      echo "<td></td>";
                    }
                ?>
                <td colspan="3"  style="text-align:right;">Costo Producto DH:</td>
                <td style="text-align:center;"><?php
                    $CPDH;
                    if(!$repor){}else{
                        foreach ($repor as $item) {
                            $CPDH = $item["Costo_Prod_DH"];
                        }
                        echo "<span>".number_format($CPDH,2)."</span>";
                    }
                    ?></td>
              </tr>
              <tr id="idtr" class="encabezado" >
                <?php
                    for ($i=0; $i <= 4; $i++)
                    {
                      echo "<td></td>";
                    }
                ?>
                <td colspan="3"  style="text-align:right;">Costo M.O Directa:</td>
                <td style="text-align:center;"><?php
                    $MOD;
                    if(!$repor){}else{
                        foreach ($repor as $item) {
                            $MOD = $item["Gasto_MOD"];
                        }
                        echo "<span>".number_format($MOD,2)."</span>";
                    }
                    ?></td>
              </tr>
              <!---->
              <tr id="idtr" class="encabezado">
                <?php
                    for ($i=0; $i <= 4; $i++)
                    {
                      echo "<td></td>";
                    }
                ?>
                <td class=""  style="text-align:right;" colspan="3">Gastos Indirectos:</td>
                <td style="text-align:center;"><?php
                    $GI;
                    if(!$repor){}else{
                        foreach ($repor as $item) {
                            $GI = $item["GI"];
                        }
                        echo "<span>".number_format($GI,2)."</span>";
                    }
                    ?></td>
              </tr>
              <!---->
              <tr>
                <?php
                    for ($i=0; $i <= 5; $i++)
                    {
                      echo "<td></td>";
                    }
                ?>
                  <td colspan="3" style="text-align:right;" class="negrita">
                      <hr class="tablahr"></td>
              </tr>
              <tr class="encabezado" style="">
                <?php
                    for ($i=0; $i <= 4; $i++)
                    {
                      echo "<td></td>";
                    }
                ?>
                <td colspan="3" style="text-align:right;">Total costo:</td>
                <td style="text-align:right;">
                <?php
                    $CostoT;
                    if(!$repor){}else{
                        foreach ($repor as $item) {
                            $CostoT = $item["Costo_Total"];
                        }
                        echo "<span>".number_format($CostoT,2)."</span>";
                    }
                    ?></td>
              </tr>
            <tr class="encabezado">
                <td  width="150px">Masa Deshuesada:</td>
                <td><?php
                    $MasaDes;
                    if(!$repor){}else{
                        foreach ($repor as $item) {
                            $MasaDes = $item["Precio_Bruto"];
                        }
                        echo "<span>".number_format($MasaDes,2)."</span>";
                    }
                    ?></td>
            </tr>
            <br>
            <tr class="encabezado" style="padding-top:200px !important;">
                <td  style='text-align: center;'>MateriaPrima</td> <!--Concatenar matPrima y Descripcion-->
                <td  style='text-align: center;'>Obtenido <br> kg</td>
                <td  style='text-align: center;'>Calculo <br> Base</td>
                <td  style='text-align: center;'>Valor Total <br> C$</td>
                <td  style='text-align: center;'>Valor Total <br> %</td>
                <td  style='text-align: center;'>Costo <br> Prod DH</td>
                <td  style='text-align: center;'>Asig Costo <br> T</td>
                <td  style='text-align: center;'>Costo Unit <br> kg</td>
                <td  style='text-align: center; width:1%;'>Rendi</td>
                <td  style='text-align: center; width:7%;'>Prec Ant <br> Kilo</td>
                <td  style='text-align: center; width:7%;'>Prec Act <br> Kilo</td>
                <td  style='text-align: center;'>Dif</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="13" class="negrita">
                    <hr class="tablahr"></td>
            </tr>
            <?php
            if(!$repor){}else{
                foreach ($repor as $item) {
                   echo "<tr>
                            <td style='text-align: left;'>".$item["Materia_Prima"]." ".$item["Descripcion"]."</td>
                            <td style='text-align: center;'>".number_format($item["Kilos"],3)."</td>
                            <td style='text-align: center;'>".$item["Calculo_Base"]."</td>
                            <td style='text-align: center;'>".number_format($item["Valor_Total_Mercado"],3)."</td>
                            <td style='text-align: center;'>".$item["Rendimiento_D"]."</td>
                            <td style='text-align: center;'>".number_format($item["Costo_Product_DH"],3)."</td>
                            <td style='text-align: center;'>".number_format($item["Total_Actual"],3)."</td>
                            <td style='text-align: center;'>".$item["Costo_Unitario"]."</td>
                            <td style='text-align: center;'>".$item["Rendimiento_B"]."</td>
                            <td style='text-align: center;'>".$item['Prec_Ant_Kilo']."</td>
                            <td style='text-align: center;'>".$item['Prec_Act_Kilo']."</td>
                            <td style='text-align: center;'>".number_format($item['Dif'],2)."</td>
                        </tr>";
                }
            }
            ?>
            </tbody>
            <tfoot>
            <?php
            $kilos = 0; $valTotalc = 0; $valTotalp = 0; $AsigCost = 0; $rendiD = 0; $rendiB = 0; $CPDH = 0;
            if(!$repor){}else{
                foreach ($repor as $item) {
                    $kilos += $item["Kilos"];
                    $valTotalc += $item["Valor_Total_Mercado"];
                    $rendiD += $item["Rendimiento_D"];
                    $valTotalp += $item["Total_Actual"];
                    $rendiB += $item["Rendimiento_B"];
                    $CPDH += $item["Costo_Product_DH"];
                }
                echo "
                    <tr>
                      <td style='text-align:center; font-weight: bold;'>Totales</td>
                      <td style='text-align: center; font-weight: bold;'>".number_format($kilos,3)."</td>
                      <td style='text-align: center; font-weight: bold;'></td>
                      <td style='text-align: center; font-weight: bold;'>".number_format($valTotalc,3)."</td>
                      <td style='text-align: center; font-weight: bold;'>".number_format($rendiD,0)."</td>
                      <td style='text-align: center; font-weight: bold;'>".number_format($CPDH,3)."</td>
                      <td style='text-align: center; font-weight: bold;'>".number_format($valTotalp,3)."</td>
                      <td style='text-align: center; font-weight: bold;'></td>
                      <td style='text-align: center; font-weight: bold;'>".$rendiB."</td>
                    </tr>
                ";
            }
            ?>
            </tfoot>
        </table>
    </div>

    <div class="contenedor-secundario">
        <!-- Tabla -->
    </div>
    <div class="contenedor-secundario">
        <!-- Tabla -->
    </div>
    <br>
    <div id="">
        </table>
    </div>
</div>
</div>
</body>

</html>
