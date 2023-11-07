 <?php
    function marcarClaseSeleccionada($clase,$clasePieza){
        if($clase== $clasePieza){
            return 'selected="selected"';
        }
    }

?>
  <div class="container p-5 my-5 border">
 <!-- Mostrar piezas y dar opción a modificar y borrar -->
 <?php
            if($bd->getConexion()!=null){
            //Obtener piezas 
            $piezas = $bd->obtenerPiezas();
            }
            //Mostramos las piezas en una tabla  
        ?>
    <section>
        <form action="#" method="post">
       
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Código</th>
                <th>Clase</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach($piezas as $p){
                    echo '<tr>';
                    if(isset($_POST['modif']) and $_POST['modif']==$p->getCodigo()){
                        //Pintar campos para poder modificar
                        echo '<td> <input type="text" name="codigo" value="" '.$p->getCodigo().'"/></td>';
                        echo '<td><select name="clase">';
                        echo 'option'.marcarClaseSeleccionada('Refrigeración',$p->getClase()).'>Refrigeración</option>';
                        echo 'option'.marcarClaseSeleccionada('Filtro',$p->getClase()).'>Filtro</option>';
                        echo 'option'.marcarClaseSeleccionada('Motor',$p->getClase()).'>Motor</option>';
                        echo 'option'.marcarClaseSeleccionada('Otros',$p->getClase()).'>Otros</option>';
                        echo '</select></td>';
                        echo '<td> <input type="text" name="desc" value="" '.$p->getDescripcion().'"/></td>';
                        echo '<td> <input type="number" name="preico" step="0.01" value="" '.$p->getPrecio().'"/></td>';
                        echo '<td> <input type="number" name="stock" value="" '.$p->getStock().'"/></td>';
                        echo '<td>';
                        echo '<button type="submit" class="btn btn-outline-dark" name="update" value="'.$p->getCodigo().'">Guardar</button>';
                        echo '<button type="submit" class="btn btn-outline-dark"  name="cancelar">Cancelar</button>';
                        echo '</td>';
                    }else{
                    echo '<td>'.$p->getCodigo().'</td>';
                    echo '<td>'.$p->getClase().'</td>';
                    echo '<td>'.$p->getDescripcion().'</td>';
                    echo '<td>'.$p->getPrecio().'</td>';
                    echo '<td>'.$p->getStock().'</td>';
                    echo '<td>';
                    echo '<button class="btn btn-outline-dark" name="modif" value="'.$p->getCodigo().'"><img src="../icon/modif25.png"/></button>';
                    echo '<button class="btn btn-outline-dark"  data-bs-toggle="modal" data-bs-tager="#a'.$p->getCodigo().'"><img src="../icon/delete25.png"/></button>';
                    echo '</td>';
                    }
                    echo '</tr>';

                    //Definir ventana modal
                    ?>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                    <div class="modal-dialog">
                    <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Borrar Pieza</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                       Estas seguro que desea borrar la pieza?
                    </div>

                  <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
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