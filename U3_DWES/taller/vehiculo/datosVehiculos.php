<?php
function marcarOptionSeleccionado($option, $optionSeleccionado)
{
    if ($option == $optionSeleccionado) {
        return 'selected="selected"';
    }
}
?>
<div class="container p-2 my-2 border">
    <!-- Mostrar usuarios y dar opción a modificar y borrar -->
    <?php
    if (isset($vehiculos)) {
       
        //Mostramos los vehiculos en una tabla
    ?>
        <form action="#" method="post">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Propietario</th>
                        <th>Matricula</th>
                        <th>Color</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($vehiculos as $v) {
                        echo '<tr>';
                        if (isset($_POST['modif']) and $_POST['modif'] == $v->getId()) {
                            //Pintar campos para poder modificar
                            echo '<td> <input type="text" name="id" disabled="disabled" value="' . $v->getId() . '"/></td>';
                            echo '<td> <input type="text" name="dni" value="' . $v->getDni() . '"/></td>';
                            echo '<td> <input type="text" name="nombre" value="' . $v->getNombre() . '"/></td>';
                            echo '<td><select name="perfil">';
                            echo '<option value="A" ' . marcarOptionSeleccionado('A', $v->getPerfil()) . '>Administrador</option>';
                            echo '<option value="M" ' . marcarOptionSeleccionado('M', $v->getPerfil()) . '>Mecánico</option>';
                            echo '</select></td>';
                            echo '<td>';
                            echo '<button type="submit" class="btn btn-outline-dark" name="update" value="' . $v->getId() . '">Guardar</button>';
                            echo '<button type="submit" class="btn btn-outline-dark" name="cancelar">Cancelar</button>';
                            echo '</td>';
                        } else {
                            switch ($v->getPerfil()) {
                                case 'A':
                                    $perfil = 'Administrador';
                                    break;
                                case 'M':
                                    $perfil = 'Mecánico';
                                    break;
                                default:
                                    $perfil = 'Error';
                                    break;
                            }
                            echo '<td>' . $v->getId() . '</td>';
                            echo '<td>' . $v->getDni() . '</td>';
                            echo '<td>' . $v->getNombre() . '</td>';
                            echo '<td>' . $perfil . '</td>';
                            echo '<td>';
                            echo '<button type="submit" class="btn btn-outline-dark" name="modif" value="' . $v->getId() . '"><img src="../icon/modif25.png"/></button>';
                            echo '<button type="button" class="btn btn-outline-dark"  data-bs-toggle="modal"  data-bs-target="#a' . $v->getId() . '" name="avisar" value="' . $v->getId() . '"><img src="../icon/delete25.png"/></button>';
                            echo '</td>';
                        }
                        echo '</tr>';

                        //Definir ventana modal
                    ?>
                        <!-- The Modal -->
                        <div class="modal" id="a<?php echo $v->getDni(), $v->getNombre(); ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Borrar Usuario</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        ¿Está seguro que desea borrar el usuario?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="submit" name="borrar" value="<?php echo $v->getId(); ?>" class="btn btn-danger" data-bs-dismiss="modal">Borrar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </form>
    <?php
    }
    ?>
</div>