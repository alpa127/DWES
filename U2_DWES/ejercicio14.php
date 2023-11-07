<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="ejercicio14_tratamiento.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Datos personales</legend>
            <div>
                <label>Nombre</label>
                <br>
                <input type="text" name="nombre" />
            </div>
            <div>
                <label>Contraseña</label>
                <br>
                <input type="password" name="ps" />
            </div>
            <div>
                <label>Sexo</label>
                <br>
                <input type="radio" name="sexo" checked="cheked" value="H"/>Hombre
                <input type="radio" name="sexo" value="M"/>Mujer
            </div>
            <div>
                <label>Fecha</label>
                <br>
                <input type="date" name="fecha" />
            </div>
            <div>
                <label>Pais</label>
                <br>
                <select name="pais[]" multiple="multiple">
                    <option selected="selected">España</option>
                    <option>Fracia</option>
                    <option>Italia</option>
                </select>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información adicional</legend>
            <div>
                <label>Nº de hijos</label>
                <br>
                <select name="nHijos">
                    <option>1</option>
                    <option selected="selected">2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div>
                <label>Sube tu foto</label>
                <br>
                <input type="file" name="foto" />
            </div>
            <div>
                <label>Aficciones</label>
                <br>
                <input type="checkbox" name="aficc[]" value="Cine"/>Cine
                <input type="checkbox" name="aficc[]" />Deporte
                <input type="checkbox" name="aficc[]" />Literatura
            </div>
            <div>
                <label>Nombre</label>
                <br>
                <textarea placeholder="Escribe más sobe tí" name="informacion_xtra"></textarea>
            </div>
        </fieldset>
        <input type="submit" name="validar" value="Validar">
        <input type="submit" name="enviar" value="Enviar">
    </form>

</body>

</html>