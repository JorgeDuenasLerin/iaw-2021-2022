<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>
        <form action="">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" tabindex="1" />
                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" id="apellidos" type="text" tabindex="2" />
            </fieldset>

            <fieldset>
                <legend>Edad</legend>
                <label><input type="checkbox" tabindex="20" name="edad" value="20-39" /> 20-39</label>
                <label><input type="checkbox" tabindex="21" name="edad" value="40-59" /> 40-59</label>
                <label><input type="checkbox" tabindex="22" name="edad" value="60-79" /> 60-79</label>
            </fieldset>
        </form>
    </div>
</body>
</html>