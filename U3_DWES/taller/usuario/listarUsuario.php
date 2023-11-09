 <?php
    function marcarOptionSeleccionado($option,$optionSeleccionado){
        if($option== $optionSeleccionado){
            return 'selected="selected"';
        }
    }

?>
  <div class="container p-5 my-5 border">
 <!-- Mostrar piezas y dar opción a modificar y borrar -->
 <?php
            if($bd->getConexion()!=null){
            //Obtener piezas 
            $piezas = $bd->obtenerUsuarios();
            }
            //Mostramos las piezas en una tabla  
        ?>
    <section>
        <form action="#" method="post">
       
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Perfil</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach($usuarios as $u){
                   
                    echo '<tr>';
                    if(isset($_POST['modif']) and $_POST['modif']==$p->getId()){
                        //Pintar campos para poder modificar
                        echo '<td> <input type="text" name="id" disabled="disabled" value="" '.$u->getId().'"/></td>';
                        echo '<td><select name="dni" value="'.$u->getDni().'/></td>';
                        echo '<td><select name="nombre" value="'.$u->getNombre().'/></td>';
                        echo '<td><select name="perfil">';
                        echo '<option value"A" '.marcarOptionSeleccionado('Administrador',$u->getPerfil()).'>Administrador</option>';
                        echo '<option value"M" '.marcarOptionSeleccionado('Mecanico',$u->getPerfil()).'>Mecanico</option>';
                        echo '</select></td>';
                        echo '<td>';
                        echo '<button type="submit" class="btn btn-outline-dark" name="update" value="'.$u->getId().'">Guardar</button>';
                        echo '<button type="submit" class="btn btn-outline-dark"  name="cancelar">Cancelar</button>';
                        echo '</td>';
                    }else{
                        switch($u->getPerfil()){
                            case 'A':
                                $perfil = "Administrador";
                                break;
                            case 'M':
                                $perfil = "Mecanico";
                                break;

                        }
                    echo '<td>'.$u->getId().'</td>';
                    echo '<td>'.$u->getDni().'</td>';
                    echo '<td>'.$u->getNombre().'</td>';
                    echo '<td>'.$u->getPerfil().'</td>';
                    echo '<td>';
                    echo '<button class="btn btn-outline-dark" name="modif" value="'.$u->getId().'"><img src="../icon/modif25.png"/></button>';
                    echo '<button class="btn btn-outline-dark"  data-bs-toggle="modal" data-bs-tager="#a'.$u->getId().'"><img src="../icon/delete25.png"/></button>';
                    echo '</td>';
                    }
                    echo '</tr>';

                    //Definir ventana modal
                    ?>
                    <!-- The Modal -->
                    <div class="modal" id="a<?php echo $u->getDni(), $u->getNombre(); ?>">
                    <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Borrar Usuario</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                       Estas seguro que desea borrar el usuario <?php echo $u->getDni(), '-',$u->getNombre();?>?
                    </div>

                  <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="submit" name="borrar" value="<?php echo $u->getId(); ?>">Close</button>
                    </div>

    </div>
  </div>
</div>          

            <?php
                }
                ?>
            </tbody>
        </table>
        </div>