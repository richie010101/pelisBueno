<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>High_School_Musical</title> 
    <link href=diseño.css rel="stylesheet" type="text/css">
</head>); 
<body>
    <div class="titulo">
            <div class="logoA">
              <a href="index.php">
              <img src="logo.png"> 
              </a> 
            </div>
            <div class="desarrollo">
          <h2>Pagina desarrollada por: Miguel y Ricardo</h2>
            </div>    
    </div>
    <div class="rtx">
            <div class="contenidoInfo">
                 <p> High_School_Musical</p>
                 <p> Año: 2006</p>
                 <p> Dirección: Kenny Ortega</p>
                 <p> Duración: 90 minutos</p>
                 <p> Productora: Disney</p>
                 <p> Sinopsis: Troy y Gabriella se enamoran</p>
                 </div>
                 <?php
                     include("conexion2.php"); 
                     $conn =  new mysqli($servidor, $user, $password, $bd , $port);
                     if ($conn->connect_error){
                           die("Error al conectar a la base de datos");
                                        }
                           $sql="Select * from peliculas where linkPagina='High_School_Musical.php'";
                           $result=$conn->query($sql);
                            
                             while($row =$result->fetch_assoc()) {
                                   ?><img src="data:image/jpg;base64,<?php echo base64_encode($row['poster']); ?>" width = "20%" height = "10%"><?php
                                     }
                                  
                            $conn->close();
                  ?>
                 <p></p>
                 <div class="reproductor">
                     <IFRAME SRC="https://plusto.link/v/z5zj3tjdw7zedwz" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=700 HEIGHT=470 allowfullscreen></IFRAME>
                 </div>
             </div>
             <div class="info">
                   <div class="logoB">
                           <img src="logo.png" width = "127" height = "52" > 
                           <div class="contenidoPel">
                                  <p>Todos los derechos reservados</p> 
                                  <p> Pelis1234 S.A de C.V</p>
                           </div>
                   </div>
              </div>
     </body>
 </html>
