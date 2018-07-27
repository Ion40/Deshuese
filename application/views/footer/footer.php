
</div>
<!-- Modal Structure -->
<div id="modalAbout" class="modal">
    <div class="modal-content">
        <a href="#!" class="right modal-action modal-close"><img src="<?php echo base_url("assets/img/cerrar.png") ?>" width="20px" alt="Cerrar"></a>
        <div class="row">
            <div class="col s12 m12 s12">
                <h5 class="center negra indigo-text darken-4">INDUSTRIAS DELMOR, S.A.</h5>
            </div>
        </div>
        <h5 class="center negra indigo-text darken-4">DESARROLLADO POR DEPARTAMENTO INFORMATICA</h5>
        <p class="center negra indigo-text darken-4">Para consultas o sugerencias envíenos un correo a:<br>
        <span class="center negra indigo-text darken-4">informatica_id@delmor.com.ni</span><br>
         <span class="center negra indigo-text darken-4">sistemas@delmor.com.ni</span>
         </p>
    </div>
    <div class="modal-footer">
        <p class="center negra indigo-text darken-4">COPYRIGHT &copy; TODOS LOS DERECHOS RESERVADOS.</p>
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/extensions/dataTables.colVis.min.js"></script>
<script type="text/javascript" src="<?PHP echo base_url();?>assets/js/extensions/dataTables.tableTools.min.js"></script>

<script src="<?PHP echo base_url();?>assets/js/JS.js"></script>
<script src="<?PHP echo base_url();?>assets/js/material.min.js"></script>
<script src="<?PHP echo base_url();?>assets/js/materialize.js"></script>

<script src="<?PHP echo base_url(); ?>assets/js/sweetalert2.min.js"></script>

<script src="<?PHP echo base_url();?>assets/js/bootstrap.js"></script> 
<script src="<?PHP echo base_url();?>assets/js/chosen.jquery.js"></script>
<script>

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        format: 'yyyy-mm-dd',// Formats dateformat:dd/mm/yyyy
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['DO','LU','MA','MI','JU','VI','SA'],
        weekdaysShort: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        //showMonthsShort: true,
        showWeekdaysFull: true,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Cerrar'
    });
    
    var config = {
        '.chosen-select': {

        }
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
    function ModalInfo()
    {
        $("#modalAbout").openModal();
    }

    function modalPass()
{
    $("#modalPassword").openModal();
}

$("#showPass").on("change",function(){
    if($(this).is(":checked"))
    {
        $("#newPass").attr("type","text");
        $("#lblshowPass").html("Ocultar Contraseña");
    }
    else{
        $("#newPass").attr("type","password");
        $("#lblshowPass").html("Mostrar Contraseña");
    }
});

function actualizaPass()
{
    var form_data={
        idUser: $("#idUser").val(),
        newPass: $("#newPass").val()
    };
    $.ajax({
        url:"ActualizaUsuarios",
        type:"POST",
        data:form_data,
        beforeSend:function(){
            if($("#newPass").val() == ""){
                 swal({
                    "text":"Ooops! No puedes dejar este campo vacío",
                    "type":"warning",
                    "confirmButtonText":"CERRAR",
                    allowOutsideClick:false
                });
                $.ajax.abort();
            }
        },
        success:function(data){
            if("true"){
                swal({
                    "text":"Contraseña modificada",
                    "type":"success",
                    "confirmButtonText":"ACEPTAR"
                }).then(function(){
                    location.reload();
                });
            }else{
                 swal({
                    "text":"No se pudo cambiar tu contraseña",
                    "type":"error",
                    "confirmButtonText":"CERRAR"
                });
            }
        }
    });
}


$("#Salir").on("click",function(){
    window.location.href = "salir";
});
</script>
</body>
</html>