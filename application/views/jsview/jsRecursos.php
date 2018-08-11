<script>
 $(document).ready(function () {
     $("#searchMain").on("keyup", function () {
         var t =  $("#tblDistribuciones").DataTable();
         t.search(this.value).draw();
     });
     $("#MOB").numeric();
     $(".Kilos").numeric();
     var table = $("#tblDistRecursos").DataTable({
         responsive: true,
         "autoWidth":false,
         "info": false,
         "sort":true,
         "paging":false,
         "order": [
             [0, "asc"]
         ],
         /*"dom": 'T<"clear">lfrtip',
          "tableTools": {
              "sSwfPath": "< echo base_url(); ?>assets/data/swf/copy_csv_xls_pdf.swf",
          },*/
         "pagingType": "full_numbers",
         "lengthMenu": [
             [15,20,100, -1],
             [15,20,100, "Todo"]
         ],
         "language": {
             "info": "Registro _START_ a _END_ de _TOTAL_ articulos",
             "infoEmpty": "Registro 0 a 0 de 0 articulos",
             "zeroRecords": "No se encontro coincidencia",
             "infoFiltered": "(filtrado de _MAX_ registros en total)",
             "emptyTable": "NO HAY DATOS DISPONIBLES",
             "lengthMenu": '_MENU_ ',
             "search": '<i class=" material-icons">search</i>',
             "loadingRecords": "Cargando...",
             "paginate": {
                 "first": "Primera",
                 "last": "Última ",
                 "next": "Siguiente",
                 "previous": "Anterior"
             }
         }
     });

     $("#tblDistribuciones").DataTable({
         responsive: true,
         "autoWidth":false,
         "info": true,
         "sort":true,
         "paging":true,
         "ordering":false,
         "order": [
             [0, "asc"]
         ],
         /*"dom": 'T<"clear">lfrtip',
          "tableTools": {
              "sSwfPath": "< echo base_url(); ?>assets/data/swf/copy_csv_xls_pdf.swf",
          },*/
         "pagingType": "full_numbers",
         "lengthMenu": [
             [10,20,100, -1],
             [10,20,100, "Todo"]
         ],
         "language": {
             "info": "Registro _START_ a _END_ de _TOTAL_ distribuciones",
             "infoEmpty": "Registro 0 a 0 de 0 distribuciones",
             "zeroRecords": "No se encontro coincidencia",
             "infoFiltered": "(filtrado de _MAX_ registros en total)",
             "emptyTable": "NO HAY DATOS DISPONIBLES",
             "lengthMenu": '_MENU_ ',
             "search": '<i class=" material-icons">search</i>',
             "loadingRecords": "Cargando...",
             "paginate": {
                 "first": "Primera",
                 "last": "Última ",
                 "next": "Siguiente",
                 "previous": "Anterior"
             }
         }
     });

     $("#dropMP").change(function () {
         var texto = $("#dropMP option:selected").text();
         var valor = $("#dropMP option:selected").val();
         var input = "<input type='number' class='kilos' name='Kilos' onkeyup='Calcular()' id='Kilos"+valor+"'>";

         var input2 = "<input type='number' readonly class='aplicados' name='Aplicado' id='Aplicado"+valor+"'>";

         table.row.add([
             valor,
             texto,
             input,
             input2
         ]).draw(false);
     });

     $("#tblDistRecursos tbody").on("click","tr", function () {
         if ($(this).hasClass("selected"))
         {
             $(this).removeClass("selected");
         }else{
             table.$("tr.selected").removeClass("selected");
             $(this).addClass("selected");
         }
     });

     $("#btnDeleteRow").click(function () {
         table.row(".selected").remove().draw(false);
     });
 });

$("#btnNewDistribucion").on("click", function () {
    $("#mdlnewDRecursos").openModal();
});

 function Calcular()
 {
     var table = $("#tblDistRecursos").DataTable();
     var calculo = 0;

     var recurso = 0.35;
     table.rows().eq(0).each(function (index) {
         var row = table.row(index);
         var data = row.data();
         $("#Kilos"+data[0]).on("keyup", function () {
             if ($("#Kilos"+data[0]).val() != "")
             {
                 calculo = ($("#Kilos"+data[0]).val() * recurso) / $("#MOB").val();
                 $("#Aplicado"+data[0]).val(calculo.toFixed(2));
             }else{
                 $("#Aplicado"+data[0]).val(calculo);
             }
         });
     });
 }

 function kilos()
 {
     var kilos = 0;
     $(".kilos").each(function () {
         kilos += Number($(this).val());
     });
     $("#TotalKg").html(kilos);
 }

 function aplicados()
 {
     var aplicados = 0;
     $(".aplicados").each(function () {
         aplicados += Number($(this).val());
     });
     $("#TotalApli").html(aplicados.toFixed(2));
 }

 $("#Calcular").on("click", function () {
     if ($("#MOB").val() == "")
     {
         swal({
             text: "Debe introducir el valor de la masa obtenida para realizar la distribucion",
             type: "error"
         });
     }else{
         kilos();
         aplicados();
         var diferencia = $("#TotalKg").html() - $("#MOB").val();
         if ($("#TotalKg").html() < $("#MOB").val())
         {
             swal({
                 text: "La suma de los kilogramos no debe ser menor a la masa obtenida, verifique los datos e intente de nuevo "+
                 "hacen falta "+Math.abs(diferencia)+" kg",
                 type: "info"
             }).then(function () {
                 if ($("#TotalApli").html() != 0.35)
                 {
                     swal({
                         text: "El porcentaje debe ser 0.35, verifique los datos e intente de nuevo",
                         type: "info"
                     });
                     $("#TotalApli").css("color","red");
                 }
             });
             $("#TotalKg").css("color","red");
             $("#btnSaveDistribucion").hide();
         }
         else if($("#TotalKg").html() > $("#MOB").val())
         {
             swal({
                 text: "La suma de los kilogramos no debe ser mayor a la masa obtenida, verifique los datos e intente de nuevo "+
                 "se sobrepasa "+diferencia+" kg",
                 type: "info"
             }).then(function () {
                 if ($("#TotalApli").html() != 0.35)
                 {
                     swal({
                         text: "El porcentaje debe ser 0.35, verifique los datos e intente de nuevo",
                         type: "info"
                     });
                     $("#TotalApli").css("color","red");
                 }
             });
             $("#TotalKg").css("color","red");
             $("#btnSaveDistribucion").hide();
         }
         else
         {
             $("#TotalKg").css("color","black");
             $("#TotalApli").css("color","black");
             $("#btnSaveDistribucion").show();
         }
     }
 });

 $("#btnSaveDistribucion").on("click",function () {
     var table = $("#tblDistRecursos").DataTable();
     var i = 0;
     var array = new Array();
     table.rows().eq(0).each(function (index) {
         var row = table.row(index);
         var data = row.data();
         if ($("#Kilos"+data[0]) != "" && $("#Aplicado"+data[0]).val() != "")
         {
            array[i] = $("#MOB").val()+","+data[0]+","+data[1]+","+$("#Kilos"+data[0]).val()+","+$("#Aplicado"+data[0]).val()+","+$("#fechaDis").val();
            i++;
         }
     });

     var form_data = {
         recursos: array
     };

     $.ajax({
         url: "GuardarDistribucion",
         type: "POST",
         data: form_data,
         beforeSend: function () {
            if (table.rows().count() == 0 )
            {
                swal({
                    text: "La tabla no contiene datos",
                    type: "warning"
                });
                $.ajax.abort();
            }
            if ($("#MOB").val() == "" || $("#fechaDis").val() == "")
             {
                 swal({
                     text: "Fecha distribucion o Masa obtenida estan vacíos, verifique los datos en intente de nuevo",
                     type: "warning"
                 });
                 $.ajax.abort();
             }
         },
         success: function (data) {
             if (data)
             {
                 swal({
                    text: "Datos almacenados con éxito",
                     type: "success"
                 }).then(function () {
                     location.reload();
                 });
             }
         },
         error: function () {
            swal({
                text: "Ocurrió un error al intentar guardar la información, Contáctece con el administrador",
                type: "error"
            });
         }
     });
 });

 var options = {

url:"GetArticulos",
getValue:"Cod_Articulo",
list:{
  maxNumberOfElements: 15,
  match:{
    enabled:true
  },
  onSelectItemEvent: function (){
    var value = $("#square").getSelectedItemData().Descripcion;
    $("#result").val(value).trigger("change");
  }
}
};
  $("#square").easyAutocomplete(options);
</script>
