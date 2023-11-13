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
                data-bs-toggle="modal"
                data-bs-target="#crearPropietario">+</button>
            </div>
          
            <div class="col">
                <input type="text" name="matricula" placeholder="1234AAA" pattern="[0-9]{4}[A-Z]{3}" />
            </div>
            <div class="col">
            <input type="color" name="color"/>
            </div>
            <div class="col">
                <input type="submit" name="crear" value="Crear" class="btn btn-outline-dark" />
                <input type="submit" name="mostrarV" value="Vehiculos" class="btn btn-outline-dark" />
                <input type="reset" name="limpiar" value="Cancelar" class="btn btn-outline-dark" />
            </div>
        </div>
    </form>
</div>
 <!-- The Modal -->
 <div class="modal" id="crearPropietario">
       <div class="modal-dialog">
               <div class="modal-content">
                 <!-- Modal Header -->
                 <div class="modal-header">
                    <h4 class="modal-title">Nuevo Propietario</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="#" method="post">
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
                    <button type="submit" name="insertP" value="insertP" data-bs-dismiss="modal">Crear</button>
                    <button type="button" name="cancerlar" value="cancelar" data-bs-dismiss="modal">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>