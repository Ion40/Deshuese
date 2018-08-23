<script type="text/javascript">
$(document).ready(function () {
    $("#tblProductosdh").DataTable();
    
  $("#t1").DataTable({
    "ajax": "MatPrima",
    "paging": false,
    "destroy":true,
    "columns":[
      {"data": "Materia_prima"},
      {"data": "Descripcion"},
      {"data": "Campo"}
    ]
  });
});

$('#t1 tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected1');
    });
    $('#t2 tbody').on( 'click', 'tr', function () {
        $(this).toggleClass('selected1');
    });

  $("#btnMove").click(function (){
      var table = $("#t1").DataTable();
      var table2 = $("#t2").DataTable();
      var data = table.rows(".selected1").data();
      for (var i = 0; i < data.length; i++) {
        table2.row.add([
          data[i]["Materia_prima"],
          data[i]["Descripcion"],
          data[i]["Campo"]
        ]).draw();
      }
       var rows = table.rows( '.selected1' ).remove().draw();

  });

  $("#btnReverse").click(function (){
      var table = $("#t1").DataTable();
      var table2 = $("#t2").DataTable();
      var data = table2.rows(".selected1").data();
      for (var i = 0; i < data.length; i++) {
        table.row.add({
          "Materia_prima": data[i][0],
          "Descripcion": data[i][1],
          "Campo": data[i][2]
        }).draw();
      }
       var rows = table2.rows( '.selected1' ).remove().draw();
  });

  $("#newProd").on("click", function () {
    $("#mProducto").openModal();
    $("#t2").DataTable({
      "paging": false,
      "destroy":true
    });
    comparar();
  });

  function comparar(){
    var tabla = $("#t1").DataTable();
    var tabla1 = $("#t2").DataTable();
    var posi = 0 , posi1 = 0;
    var datos = new Array();
    var datos1 = new Array();

    //var contador = posiciones.length;

    tabla.rows().eq(0).each(function(index){
        var row = tabla.row(index);
        var data = row.data();
        datos[posi] = data.data[0].Materia_prima;
        posi++;
    });

    tabla1.rows().eq(0).each(function(index){
        var row = tabla1.row(index);
        var data = row.data();
        datos1[posi1] = data[0];
        posi1++;
    });

    //alert(datos+","+datos1);

     for(x=0;x<datos.length;x++)
     {
        for(v=0;v<datos1.length;v++)
        {
            if(datos[x]===datos1[v])
            {
                $('#t1 tbody').find("tr").eq(x).addClass('teal-text');
            }
        }
     }

    var rows = tabla.row( '.teal-text' ).remove().draw();
}

$("#btnSave").click( function () {
  var i = 0;
  var array = new Array();
  var table = $("#t2").DataTable();
  table.rows().eq(0).each(function (index) {
    var row = table.row(index);
    var data = row.data();
   if($("#base"+data[0]).val() != 0)
      {
         array[i] = $("#Codigo").val()+","+$("#Producto").val()+","+data[0]+","+data[1]+","+$("#base"+data[0]).val();
         i++;
      }else{
          console.log("uno o mas datos de calculo base estan en 0");
      }             
  });

  var formdata = {
    Array : array
  };

  $.ajax({
    url: "GuardarProdh",
    type: "POST",
    data: formdata,
    beforeSend: function ()
    {
      if (table.rows().count() == 0) {
        swal({
          text: "La tabla no contiene datos",
          type: "warning"
        });
        if ($("#Codigo").val() == "" || ("#Producto").val() == "") {
          swal({
            text: "Campo codigo o Producto esta vacío",
            type: "warning"
          });
        }
        if ($(".base").val() == 0) {
           swal({
            text: "el valor del calculo base debe ser mayor a 0",
            type: "warning"
          }); 
        }
        $.ajax.abort();
      }
    },
    success: function (data)
    {
      swal({
            text: "Datos almacenados con éxito",
            type: "success"
        }).then(function () {
          location.reload();
        });
    },
    error: function()
    {
      swal({
            text: "Error al guardar los datos",
            type: "error"
       });
      console.log(data);
    }
  });

});

       
    function detalle(callback,id,div){
	$.ajax({
		url: "GetProductosAjax/"+id,
		async: true,
		success:function(response){
			var thead = '',
				tbody= '';
			var cont = 0;
			if (response != "false") {
				var obj = $.parseJSON(response);
				var temp = obj.length; var cantRows = 0;
				thead += "<tr class='tblcabecera1'><th class='center'>MateriaPrima</th>";
				thead += "<th class='center'>Descripcion</th>";
				thead += "<th class='center'>Calculo Base</th></tr>";

				$.each(JSON.parse(response), function(i, item){
					tbody += "<tr>"+
						"<td>"+item["Materia_prima"]+"</td>"+
						"<td>"+item["Descripcion"]+"</td>"+
						"<td>"+item["Calculo_base"]+"</td>";
				});
				callback($("<table id='detOrdenS' class='table striped'>"+ thead + tbody + "</table>")).show();
				$('#loader' + div).hide();
                $('#more' + div).hide();
				$('#less' + div).show();
			} else {
				thead += "<tr class='tblcabecera1'><th class='center'>MateriaPrima</th>";
				thead += "<th class='center'>Fecha Descripcion</th>";
				thead += "<th class='center'>Calculo Base</th></tr>";
				tbody += '<tr >' +
					'<td></td>' +
					'<td>No hay datos disponibles</td>' +
					'<td></td>' +
					'</tr>';
				callback($('<table id="detProd" class="table striped">' + thead + tbody + '</table>')).show();
				$('#loader' + div).hide();
				$('#more' + div).show();
                $('#less' + div).hide();
			}
		}
	});

}
    
     $("#tblProductosdh").on("click","tbody .detalles", function () {
        var table = $("#tblProductosdh").DataTable();
        var tr = $(this).closest("tr");
        $(this).addClass("detalleNumOrdOrange");
        var row = table.row(tr);
        var data = table.row($(this).parents("tr")).data();
        
        if(row.child.isShown())
           {
              row.child.hide();
               tr.removeClass("shown");
               $("#more"+data[0]).show();
               $("#less"+data[0]).hide();
           }else{
               $("#loader"+data[0]).show();
               $("#more"+data[0]).show();
               $("#less"+data[0]).hide();
               detalle(row.child,data[0],data[0]);
               tr.addClass("shown");
           }
    });
    
    function Eliminar(codigo)
    {
        swal({
              title: '¿Estas seguro que deseas eliminar este producto?',
              text: "Esta operacion no se podra revertir!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Borrar!',
              cancelButtonText: 'Cancelar'
            }).then( function (){
                $.ajax({
                    url: "EliminarProd/"+codigo,
                    type: "POST",
                    success: function ()
                    {
                        swal({
                            title: 'Eliminado',
                            text: "Producto eliminado con exito",
                            type: "success"
                        }).then(function () {
                            location.reload();
                        });
                    },
                    error: function ()
                    {
                        swal({
                            title: 'Error',
                            text: "Se produjo un error al tratar de eliminar el producto, contactece con el administrador",
                            type: "error"
                        });
                    }
                }); 
        });
    }
</script>
