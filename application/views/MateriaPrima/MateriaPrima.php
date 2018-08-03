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
                <button id="btnNewDeshuese" class="Btnadd btn waves-effect waves-light">Nuevo
                    <i class="material-icons right">note_add</i>
                </button>
            </div>
            <div class="row center">
                <table class="table striped RobotoR" id="tblDeshueses">
                    <thead>
                    <tr>
                        <th>Materia Pima</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- Modal Structure -->
<div id="mdlnewMateria" class="modal">
    <div class="modal-content">
        <a href="javascript:void(0)" class="modal-close right"><i class="material-icons">close</i></a>
        <h3 class="TextColor center">Nueva Materia Prima</h3>

    </div>
</div>

