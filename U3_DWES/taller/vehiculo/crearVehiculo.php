<div class="container p-2 my-2 border">
    <!-- Crear Pieza -->
    <form action="#" method="post">
        <div class="row">
            <div class="col">
                <label>Propietarios</label>
            </div>
            <div class="col">
                <label>Matricula</label>
            </div>
            <div class="col">
                <label>Color</label>
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php $propietarios = $bd->obtenerPropietarios()?>
                <select name="propietario">
                <?php
                    foreach($propietarios as $p){
                       
                        echo '<option value="'.$p->getId().'">'.$p->getDni().'-'.$p->getNombre().'</option>';
                    }
                ?>
                </select>
                <button type="button" name="crearP" class="btn btn-outline-dark"
                data-bs-togglr="modal"
                data-bs-target="#crearPropietario">+</button>
            </div>
            <div class="col">
                <input type="text" name="dni" placeholder="012345678A" maxlength="9" />
            </div>
            <div class="col">
                <input type="text" name="nombre" placeholder="Nombre Usuario" />
            </div>
            <div class="col">
                <select name="perfil" class="form-select form-select-sm">
                    <option value="A">Administrador</option>
                    <option value="M">Mecánico</option>
                </select>
            </div>
            <div class="col">
                <input type="submit" name="crear" value="Crear" class="btn btn-outline-dark" />
                <input type="reset" name="limpiar" value="Cancelar" class="btn btn-outline-dark" />
            </div>
        </div>
    </form>
</div>
 <!-- The Modal -->
 <div class="modal" id="a<?php echo $u->getDni(), $u->getNombre(); ?>">
       <div class="modal-dialog">
               <div class="modal-content">
                 <!-- Modal Header -->
                 <div class="modal-header">
                    <h4 class="modal-title">Nuevo Propietario</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="#" method="post"></form>
                 <!-- Modal body -->
                <div class="modal-body">
                <label for="dni">DNI</label>
                <input type="text" name="dni" placeholder="11111111A"/>
                <br>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="nombre"/>
                <br>
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" placeholder="641841321"/>
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="aa@aa.com"/>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" name="insertP" value="insertP" data-bs-dismiss="modal">Borrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>