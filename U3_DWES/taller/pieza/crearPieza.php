<div class="container p-5 my-5 border">
        <!-- Crear Pieza -->
        <form action="#" method="post">
        <div class="row">
                <div class="col">
                <label>Código</label>
                <input type="text" name="codigo" placeholder="F01"/>
                </div>
                <div class="col">
                <label>Clase</label>
                <select class="form-select form-select-sm">
                    <option>Refrigeración</option>
                    <option>Filtro</option>
                    <option>Motor</option>
                    <option>Otros</option>
                </select>
                </div>
               <div class="col">
               <label>Descripción</label>
                <input type="text" name="desc" placeholder="Nombre Pieza"/>
               </div>
                <div class="col">
                <label>Precio</label>
                <input type="number" name="precio" placeholder="0.01"/>
                </div>
                <div class="col">
                <label>Stock</label>
                <input type="number" name="stock"/>
                </div>
                <div class="col">
                <input type="submit" name="crear" value="Crear">
                <input type="reset" name="limpiar" value="Cancelar">
                </div>
            </div>
        </form>
        </div>