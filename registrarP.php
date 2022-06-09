<?php
//Obtener datos
include("conexion2.php");    
$peli = $_POST['peli'];
//echo($peli);
$año = $_POST['año'];
$direc = $_POST['Director'];
$dura = $_POST["Duracion"];
$Prod = $_POST['Prod'];
$Sinop = $_POST['Sinop'];
$post = addslashes(file_get_contents($_FILES['Poster']['tmp_name']));
//$post1 = $_GET["Poster"];
$LinkR = $_POST['LinkR'];
    

//$archivo = fopen("datos.txt", "w+b"); 

$file_handle = fopen("$peli.php" ,'w+b');
fwrite($file_handle, '<!DOCTYPE html>' . "\n" .  
                       '<html lang="en">' .  "\n" .
                       '<head>' . "\n" .
                       '    <meta charset="UTF-8">' . "\n" .
                       '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n" .
                       '    <meta name="viewport" content="width=device-width, initial-scale=1.0"> ' . "\n" .
                       '    <title>'."$peli".'</title> ' . "\n" .
                       '    <link href=diseño.css rel="stylesheet" type="text/css">' . "\n" .
                       '</head>); ' . "\n" .
                       '<body>'    . "\n" .  
                       '    <div class="titulo">' . "\n" . 
                       '            <div class="logoA">' . "\n" . 
                       '              <a href="index.php">' . "\n" . 
                       '              <img src="logo.png"> ' . "\n" . 
                       '              </a> '  . "\n" . 
                       '            </div>'      . "\n" . 
                       '            <div class="desarrollo">' . "\n" . 
                       '          <h2>Pagina desarrollada por: Miguel y Ricardo</h2>' . "\n" . 
                       '            </div>    ' . "\n" . 
                       '    </div>'           . "\n"  .
                       '    <div class="rtx">'   . "\n"  .
                       '            <div class="contenidoInfo">'  . "\n"  .
                       '                 <p> '."$peli" .'</p>'   . "\n"  .
                       '                 <p> Año: ' . "$año" . '</p>'  . "\n"  .
                       '                 <p> Dirección: '. "$direc" . '</p>'  . "\n"  .
                       '                 <p> Duración: ' . "$dura" . ' minutos</p>'   . "\n"  .
                       '                 <p> Productora: '. "$Prod".'</p>'  . "\n"  .
                       '                 <p> Sinopsis: '. "$Sinop".'</p>'  . "\n"  .
                       '                 </div>'  . "\n"  .
                       '                 <?php' . "\n"  .
                       '                     include("conexion2.php"); '  . "\n"  .
                       '                     $conn =  new mysqli($servidor, $user, $password, $bd , $port);'. "\n"  .
                       '                     if ($conn->connect_error){'. "\n"  .
                       '                           die("Error al conectar a la base de datos");'. "\n"  .
                       '                                        }'. "\n"  .
                       '                           $sql="Select * from peliculas where linkPagina=' . "'$peli.php'" .'";' . "\n"  .
                       '                           $result=$conn->query($sql);'. "\n"  .
                       '                            ' . "\n"  .
                       '                             while($row =$result->fetch_assoc()) {'. "\n"  .
                       '                                   ?><img src="data:image/jpg;base64,<?php echo base64_encode($row['."'poster'".']); ?>" width = "20%" height = "10%"><?php'. "\n"  .
                       '                                     }' . "\n"  .
                       '                                  ' . "\n"  .
                       
                       '                  ?>'. "\n"  .
                       '                 <p></p>'  . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '                   <br>' . "\n"  .
                       '             </div>'      . "\n"  .
                       '    <div class="rtx">'   . "\n"  .
                       '                 <div class="reproductor">'  . "\n"  .
                       '                     <IFRAME SRC="'.$LinkR .'" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=75% HEIGHT=80% allowfullscreen></IFRAME>'   . "\n"  .
                       '                            <?php'
                       '                           $conn->close();'
                       '                           ?>'
                       '                 </div>'  . "\n"  .
                       '             </div>'      . "\n"  .
                       '             <div class="info">'   . "\n"  .
                       '                   <div class="logoB">'    . "\n"  .
                       '                           <img src="logo.png" width = "127" height = "52" > '   . "\n"  .
                       '                           <div class="contenidoPel">'   . "\n"  .
                       '                                  <p>Todos los derechos reservados</p> '   . "\n"  .
                       '                                  <p> Pelis1234 S.A de C.V</p>'    . "\n"  .
                       '                           </div>'  . "\n"  .
                       '                   </div>'  . "\n"  .
                       '              </div>'  . "\n"  .
                       '     </body>'  . "\n"  .
                       ' </html>'  . "\n"  
                       );

/*
<?php
 
$conn =  new mysqli($servidor, $user, $password, $bd , $port);
if ($conn->connect_error){
    die("Error al conectar a la base de datos");
} 
//Observe que se pueden pasar las variables directamente sin concatenar al utilizar comillas dobles en la cadena
$sql="Select * from peliculas where linkReproductor='asdsda'";
$result=$conn->query($sql);
while($row =$result->fetch_assoc()) {
 ?><img src="data:image/jpg;base64,<?php echo base64_encode($row['poster']); ?>" width = "20%" height = "10%"><?php
}  
$conn->close();
?> */ 



$conn =  new mysqli($servidor, $user, $password, $bd , $port);

if ($conn->connect_error){
    die("Error al conectar a la base de datos");
}

//Observe que se pueden pasar las variables directamente sin concatenar al utilizar comillas dobles en la cadena
$sql="INSERT INTO  peliculas  (Titulo, Ano, Direccion, linkPagina, Duracion, Productora, Sinopsis, linkReproductor, poster)" .
" VALUES( '$peli', $año, '$direc' , '$peli.php' , $dura , '$Prod' , '$Sinop' , '$LinkR' ,'$post')";
//echo($sql);

//Verificamos que se haya ejecutado la consulta con éxito
if($conn->query($sql)===TRUE){
   //echo("Pelicula registrada con éxito"); 
   ?>
   <h1>Pelicula registrada con éxito</h1>
   <p>Regresar a la página de <a href="index.php"> inicio</a></p>
   <?php

   
}else{
   echo("Error al crear la pelicula:".$conn->connect_error); 
}

$conn->close();
?>

<br>

<br>
<p>Regresar a la página de <a href="index.php"> inicio</a></p>