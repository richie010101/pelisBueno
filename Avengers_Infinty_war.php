<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Avengers Infinty war</title> 
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
                 <p> Avengers Infinty war</p>
                 <p> Año: 2018</p>
                 <p> Dirección:  Anthony & Joe Russo</p>
                 <p> Duración: 149 minutos</p>
                 <p> Productora: Marvel Studios</p>
                 <p> Sinopsis: los vengadores pelean contra thanos</p>
                 </div>
                 <?php
                     include("conexion2.php"); 
                     $conn =  new mysqli($servidor, $user, $password, $bd , $port);
                     if ($conn->connect_error){
                           die("Error al conectar a la base de datos");
                                        }
                           $sql="Select * from peliculas where linkPagina='Avengers_Infinty_war.php'";
                           $result=$conn->query($sql);
                           if ($result->num_rows > 0) {
                            while($row =$result->fetch_assoc()) {
                                  ?>  <a href= <?php echo $row['linkPagina'] ;?>>
                                       <img src="data:image/jpg;base64,<?php echo base64_encode($row['poster']); ?>" width = "18%" height = "9%">
                                      </a> 
                                      <?php
                                    }
                                   }
                            $conn->close();
                  ?>
                 <p></p>
                 <div class="reproductor">
                 <iframe src="https://slmaxed.com/e/XAQ9qzxM6Jjl4mME" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="800" height="600" allowfullscreen></iframe>
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
