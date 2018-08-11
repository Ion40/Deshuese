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
            text-transform:;
            border-collapse: collapse;
            width: 1031px;
            margin: 0 auto;
            margin-bottom: 5px;
        }

        table {
            color: black;
            font-size: 11.3pt;
            font-family: 'robotoblack'!important;
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
            margin:5px;
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
            text-align: right;
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
            window.print();
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
                <td class="encabezado" colspan="13">Liquidación De Deshuese</td>
            </tr>
            <tr>

            </tr>
            <tr>
                <td colspan="9" class="negrita">
                    <hr class="encabezadohr"></td>
            </tr>
            <tr style="float: left;">
                <td class="" id="nodh"></td>
                <td style="">
                    
                </td>
            </tr>
            <tr>
                <td colspan="" style="" class="negrita">
                    Deshueses Realizados del  
                    <span style="margin-left:6px; margin-right:6px;"><?php echo $this->uri->segment(2); ?> </span>
                      al
                    <span style="margin-left:6px;"><?php echo $this->uri->segment(3); ?> </span>
                </td>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <br>
        <table class="table">
            <thead>
            <tr>
                <td>
                    Cantidad Deshueses Realizados:
                    <?php  
                      $cantidad = 0;
                      if(!$repo){}else{
                          foreach ($repo as $key) {
                              $cantidad += $key["Cantidad_DH"]; 
                          }
                      }
                      echo "<span>".$cantidad."</span>";
                    ?> 
                </td>
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
            <br>
            <tr class="encabezado">
                <td style="text-align:center;">Fecha</td>
                <td style="text-align:center;">No_DH</td>
                <td style="text-align:center;">Descripcion</td>
                <td style="text-align:center;">Masa Deshuesada (kg)</td>
                <td style="text-align:center;">Costo Total</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="9" class="negrita">
                    <hr class="tablahr"></td>
            </tr>
                <?php
                   if (!$repo) {
                       
                   }else{
                       foreach ($repo as $key) {
                           echo "
                              <tr>
                                 <td style='text-align:center;'>".$key["Fecha"]."</td>
                                 <td style='text-align:center;'>".$key["No_DH"]."</td>
                                 <td style='text-align:center;'>".$key["Descripcion_DH"]."</td>
                                 <td style='text-align:center;'>".number_format($key["Precio_Bruto"],2)."</td>
                                 <td style='text-align:center;'>".number_format($key["Costo_Total"],2)."</td>
                              </tr>
                           ";
                       }
                   }
                ?>
            </tbody>
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
