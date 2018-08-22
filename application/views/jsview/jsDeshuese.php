<script>
    $(document).ready(function() {
        Ultima();
        $("#searchMain").on("keyup", function() {
            var t = $("#tblDeshueses").DataTable();
            t.search(this.value).draw();
        });

        $("#Ndh").numeric();
        $("#PB").numeric();
        $("#CT").numeric();
        $(".validar").numeric();
        $(".validar2").numeric();
        $("#CPDH").numeric();

        var table = $("#tblMateriaPrima").DataTable({
            responsive: true,
            "autoWidth": false,
            "info": false,
            "sort": true,
            "paging": false,
            "order": [
                [0, "asc"]
            ],
            /*"dom": 'T<"clear">lfrtip',
             "tableTools": {
                 "sSwfPath": "< echo base_url(); ?>assets/data/swf/copy_csv_xls_pdf.swf",
             },*/
            "pagingType": "full_numbers",
            "lengthMenu": [
                [15, 20, 100, -1],
                [15, 20, 100, "Todo"]
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
            },
            "columnDefs": [{
                className: "habilitar",
                "targets": [2]
            }]
        });

        $("#tblDeshueses").DataTable({
            responsive: true,
            "autoWidth": false,
            "info": true,
            "sort": true,
            "paging": true,
            "ordering": false,
            "order": [
                [0, "asc"]
            ],
            /*"dom": 'T<"clear">lfrtip',
             "tableTools": {
                 "sSwfPath": "< echo base_url(); ?>assets/data/swf/copy_csv_xls_pdf.swf",
             },*/
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 20, 100, -1],
                [10, 20, 100, "Todo"]
            ],
            "language": {
                "info": "Registro _START_ a _END_ de _TOTAL_ deshueses",
                "infoEmpty": "Registro 0 a 0 de 0 deshueses",
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

        $("#dropMP").change(function() {
            var texto = $("#dropMP option:selected").text();
            var valor = $("#dropMP option:selected").val();
            var descdh = $('#DescDH option:selected').val();
            var input = $("#calculobase" +descdh+valor).val();

            var input2 = "<input class='validar2' onkeyup='calculate()' onkeydown='Calcular()' onmouseenter='habilitar()' " +
                "type='number' name='Kilos' id='Kilos" + valor + "'>";

            var input3 = "<input disabled value='0' class='VTMercado' type='text' name='VTMercado' id='VTMercado" + valor + "'>";
            table.row.add([
                valor,
                texto,
                input,
                input2,
                input3
            ]).draw(false);
        });

        $("#tblMateriaPrima tbody").on("click", "tr", function() {
            if ($(this).hasClass("selected")) {
                $(this).removeClass("selected");
            } else {
                table.$("tr.selected").removeClass("selected");
                $(this).addClass("selected");
            }
        });

        $("#btnDeleteRow").click(function() {
            table.row(".selected").remove().draw(false);
        });
    });

    $("#btnNewDeshuese").on("click", function() {
        $("#mdlnewDeshuese").openModal();
    });

    function habilitar() {
        var table = $("#tblMateriaPrima").DataTable();
        table.$("tr.selected").removeClass("selected");
    }

    function Calcular() {
        var table = $("#tblMateriaPrima").DataTable();
        var calculo = 0;
        var descdh = $('#DescDH option:selected').val();
        table.rows().eq(0).each(function(index) {
            var row = table.row(index);
            var data = row.data();
            $("#Kilos" + data[0]).on("keyup", function() {
                if ($("#Kilos" + data[0]).val() != "") {
                    calculo = ($("#calculobase" +descdh+data[0]).val() * $("#Kilos" + data[0]).val());
                    $("#VTMercado" + data[0]).val(calculo.toFixed(3));
                } else {
                    $("#VTMercado" + data[0]).val(calculo);
                }
            });
        });

    }

    $("#btnSaveDeshuese").on("click", function() {
        guardarEncabezado();
        guardarInfoDes();
    });
    /**********************************************************/
    function calculate() {
        var kilos = 0,
            gi = 0,
            gmod = 0 ,
            suma = 0;
        $(".validar2").each(function() {
            kilos += Number($(this).val());
        });
        gi = Number($("#GIL").val()) * kilos;
        suma = Number($("#CPDH").val()) + Number($("#MOD").val()) + gi;
        $("#CT").val(suma.toFixed(2));
        
        gmod = kilos * 2.04;
        $("#MOD").val(gmod.toFixed(2));
    }
    /***********************************************************/
    function guardarEncabezado() {
        var kilos = 0,
            gi = 0;
        $(".validar2").each(function() {
            kilos += Number($(this).val());
        });

        gi = Number($("#GIL").val()) * kilos;

        var form_data = {
            Ndh: $("#Ndh").val(),
            FechaDH: $("#FechaDH").val(),
            DescDH: $("#DescDH option:selected").text(),
            PB: $("#PB").val(),
            CT: $("#CT").val(),
            MOD: $("#MOD").val(),
            GI: gi,
            ID: $("#IdDisCont").val(),
            CPDH: $("#CPDH").val()
        };
        $.ajax({
            url: "GuardarEncabezado",
            data: form_data,
            type: "POST",
            beforeSend: function() {
                if ($("#Ndh").val() == "" || $("#FechaDH").val() == "" || $("#DescDH").val() == "" ||
                    $("#PB").val() == "" || $("#CT").val() == "") {
                    swal({
                        type: "info",
                        title: "Informacion Incompleta",
                        text: "Uno o mas datos de informacion base estan vacios"
                    });
                    $.ajax.abort();
                }
            },
            success: function(data) {
                swal({
                    text: "Deshuese Guardado con exito",
                    type: "success",
                    allowOutsideClick: false,
                }).then(function() {
                    location.reload();
                });
            },
            error: function() {
                console.log("error!");
            }
        });
    }

    function ActualizarPrecio() {
        var num = $("#Ndh").val();
        $.ajax({
            url: "ActualizarPrecioAnt/" + num,
            type: "POST",
            success: function() {
                console.log("echo!");
            },
            error: function() {
                console.log("Error");
            }
        });
    }

    function guardarInfoDes() {
        espere();
        var suma = 0;
        $(".VTMercado").each(function() {
            suma += Number($(this).val());
        });
        var i = 0;
        var array = new Array();
        var table = $("#tblMateriaPrima").DataTable();
        table.rows().eq(0).each(function(index) {
            var row = table.row(index);
            var data = row.data();
            if ($("#VTMercado" + data[0]).val() != 0) {
                var rb = rendimientoBruto($("#Kilos" + data[0]).val(), $("#PB").val());
                var rd = rendimientoDistribucion($("#VTMercado" + data[0]).val(), suma);
                var cu = CostoUnitario($("#CT").val(), rd, $("#Kilos" + data[0]).val());
                var ta = totalActual($("#CT").val(), rd, $("#Kilos" + data[0]).val());
                ta.toFixed(2);
                array[i] =
                    $("#Ndh").val() + "," + data[0] + "," + data[1] + "," + cu + "," + $("#calculobase" + data[0]).val() + "," + rb + "," + rd + "," +
                    $("#Kilos" + data[0]).val() + "," + $("#VTMercado" + data[0]).val() + "," + cu + "," + ta;
                i++;
            }
        });

        var form_data = {
            deshuese: array
        };

        $.ajax({
            url: "GuardarDeshuese",
            type: "POST",
            data: form_data,
            beforeSend: function() {
                if (table.rows().count() == 0) {
                    swal({
                        type: "error",
                        title: "Datos vacíos",
                        text: "No hay datos en la tabla"
                    });
                    $.ajax.abort();
                }
            },
            success: function(data) {
                ActualizarPrecio();
                if (data == true) {
                    swal({
                        type: "success",
                        title: "Exito",
                        text: "Los datos se almacenaron con éxito"
                    }).then(function() {
                        location.reload();
                    });
                }
            }
        });
    }

    function espere() {
        swal({
            title: "Procesando datos",
            showConfirmButton: false,
            showCloseButton: false,
            allowOutsideClick: false,
            html: '<p>Espere por favor...</p><br>' + '<div class="preloader-wrapper active">' +
                '<div class="spinner-layer spinner-blue-only">' +
                '<div class="circle-clipper left">' +
                '<div class="circle"></div>' +
                '</div><div class="gap-patch">' +
                '<div class="circle"></div>' +
                '</div><div class="circle-clipper right">' +
                '<div class="circle"></div>' +
                '</div>' +
                '</div>' +
                '</div>'
        }).then();
    }


    /*Funciones de Calculos */
    function rendimientoBruto(kilos, PB) {
        var calculo = (kilos / PB) * 100;
        return calculo.toFixed(3);
    }

    function rendimientoDistribucion(valorTotalMercado, sumatoria) {
        var calculo = (valorTotalMercado / sumatoria) * 100;
        return calculo.toFixed(2)
    }

    function CostoUnitario(costoTotal, rd, kilos) {
        var calculo = (costoTotal * rd / kilos) / 100;
        return calculo.toFixed(3);
    }

    function totalActual(costoTotal, rd, kilos) {
        var calculo = ((costoTotal * rd / kilos) / 100) * kilos;
        return calculo;
    }
    /*Funciones de Calculos */

    function Ultima() {
        $.ajax({
            url: "UltimaDistribucion",
            type: "GET",
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(datos) {
                if (true) {
                    $.each(datos, function(key, value) {
                        $("#GIL").val(value[0].Gasto_Indirecto_Libra);
                        $("#IdDisCont").val(value[0].Id_Dis_Rec);
                    });
                }
            }
        });
    }

    $("#DescDH").on('change', function(event) {
        var descdh = $('#DescDH option:selected').val();
        $.ajax({
            url: "GetProductosAjax/" + descdh,
            type: "POST",
            async: true,
            success: function(data) {
                $('#dropMP').empty();
                $.each(JSON.parse(data), function(i, item) {
                    $("#dropMP").append('<option value="' + item['Materia_prima'] + '">' + item['Descripcion'] + '</option>');
                    $("#input").append("<input class='validar' onkeydown='habilitar()' onmouseenter='habilitar()' " +
                        "type='hidden' value='" + item['Calculo_base'] + "' name='calculobase' id='calculobase"+item['Codigo']+item['Materia_prima']+"'>");
                });
                $('#dropMP').trigger("chosen:updated");
            }
        });
    });

</script>
