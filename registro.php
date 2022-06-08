<!DOCTYPE html>
<html>
<head>
    
    <title>Registro de Peliculas</title>
    
    
</head>
<body>
    <header id="titulo">
        <h1>Registro de Peliculas</h1>
    </header>
    <form action="registrarP.php" method="POST" enctype="multipart/form-data">
        <label for="usuario">Titulo: </label>
        <input name="peli" type="text"  required="required">
        <br>
        <label for="año">Año de estreno </label>
        <input type="text"  id="año" name="año" required="required">
        <br>
        <label for="">Director: </label>
        <input type="text" id="Director" name="Director" required="required">
        <br>
        <label for="">Duracion: </label>
        <input type="text" id="Duracion" name="Duracion" required="required">
        <label for="">Mins </label>
        <br>
        <label for="">Productora: </label>
        <input type="text" id="Prod" name="Prod" required="required">
        <br>
        <label for="">Sinopsis </label>
        <input type="text" id="Sinop" name="Sinop" required="required">
        <br>
        <label for="">Poster </label>
        <input type="file" id="Poster" name="Poster"  required="required">
        <br>
        <label for="">Link del reproductor </label>
        <input type="text" id="LinkR" name="LinkR" required="required">
        <span id="error" style="color: red;"></span>
        <br>
        <button type="submit" id="registrar2">Registrar</button>
        <button type="reset">Limpiar</button>
    </form>
</body>
</html>