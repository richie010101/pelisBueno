<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Uncharted</title> 
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
                 <p> Uncharted</p>
                 <p> Año: 2022</p>
                 <p> Dirección: Ruben Fleischer</p>
                 <p> Duración: 116 minutos</p>
                 <p> Productora: Warner Bros</p>
                 <p> Sinopsis: Victor Sullivan recluta a Nathan Drake para que lo ayude a recuperar una fortuna</p>
                 </div>
                 <?php
                     include("conexion2.php"); 
                     $conn =  new mysqli($servidor, $user, $password, $bd , $port);
                     if ($conn->connect_error){
                           die("Error al conectar a la base de datos");
                                        }
                           $sql="Select * from peliculas where linkPagina='Uncharted.php'";
                           $result=$conn->query($sql);
                            
                             while($row =$result->fetch_assoc()) {
                                   ?><img src="data:image/jpg;base64,<?php echo base64_encode($row['poster']); ?>" width = "20%" height = "10%"><?php
                                     }
                                  
                            $conn->close();
                  ?>
                 <p></p>
                 <div class="reproductor">
                     <IFRAME SRC="https://mega.nz/embed/BugDHY4Q#8upEfsXgIFOcEXnh0btcIZDsvU5E1RXJ5jXyib5LXaI" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=700 HEIGHT=470 allowfullscreen></IFRAME>
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
