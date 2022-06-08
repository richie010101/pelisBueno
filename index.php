<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href=diseño.css rel="stylesheet" type="text/css">
</head>
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

    <div class="lastPEL">
        <h1> Ultimas peliculas agregadas</h1>
    </div>

    
    <justify>
    <div class="img_ultimas">
        
        <?php
                     include("conexion2.php"); 
                     $conn =  new mysqli($servidor, $user, $password, $bd , $port);
                     if ($conn->connect_error){
                           die("Error al conectar a la base de datos");
                                        }
                           $sql="Select * from peliculas LIMIT 1 ";
                           
                           $result=$conn->query($sql);
                           
                             while($row =$result->fetch_assoc()) {
                                   ?>  <a href= <?php echo $row['linkPagina'] ;?>>
                                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['poster']); ?>" width = "18%" height = "9%">
                                       </a> 
                                       <?php
                                     }
                                    
                            $conn->close();
                                    
        ?>
    
    </div>
        </justify>
    

    <div class="lastPEL">
        <h1> Todas las peliculas</h1>
       
    </div>
       <justify>
    <div class="img_ultimas">
        
        <?php
                     include("conexion2.php"); 
                     $conn =  new mysqli($servidor, $user, $password, $bd , $port);
                     if ($conn->connect_error){
                           die("Error al conectar a la base de datos");
                                        }
                           $sql="Select * from peliculas";
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
    
    </div>
        </justify>

    <div class="info">
        <div class="logoB">
        <img src="logo.png" width = "127" height = "52" > 
        <p>Todos los derechos reservados</p> 
        <p> Pelis1234 S.A de C.V</p>
        </div>
    </div>


</body>
</html>