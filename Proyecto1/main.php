<!DOCTYPE html>
<html lang="en">
<head>
  <title>Proyecto 01</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Javier Segarra Martínez</a>
    </div>
    <div>
       <ul class="nav navbar-nav">
        <?php
        $idioma="sp";
        $hijos= "tipos de juego";
        $menu = array(
          "titulo"=>array("sp"=>"Math Dice","en"=>"Math Dice"),
          "portada" => array("sp"=>"Inicio", "en"=>"Home"),
          "instrucciones" => array("sp"=>"Instrucciones", "en"=>"Instruccions"),
          "tipos de juego" => array("sp"=>"Tipos de juego", "en"=>"Game choice",
            "submenu" => array(
              "tipo1" => array("sp"=>"Juego Tradicional", "en"=>"Tradicional game",),
              "tipo2" => array("sp"=>"Juego modificado", "en"=>"Game modified",),
              "tipo3" => array("sp"=>"Juego niños", "en"=>"Kid game",)
                      )
            )
        );


        foreach ($menu as $valores => $value) {
          foreach ($value as $key =>$valor ) {
           echo"<li class=''> ";
            if ($key == $idioma) {
              if ($valores == "tipos de juego") {
              echo "<a class='dropdown-toggle' 
              data-toggle='dropdown' href='#''>
              $valor<span class='caret'></span></a>";
              echo "<ul class='dropdown-menu'>";

              }else echo "<a href=''>$valor</a>";

            }elseif ($key == "submenu" && $valores == "tipos de juego") {
               echo"<li>";
                foreach ($menu as $valores => $value) {
                  foreach ($value as $key => $valor ) {
                    foreach ($valor as $hijo => $value2) {
                      foreach ($value2 as $key2 => $valor2) {
                        if ($key2 == $idioma) {
                           echo"<a href=''>$valor2</a>";
                        }  
                      }
                    }
                  }
                }
              echo "</ul>";
              }
            else
            {
              echo "</li>";
            }
          }
            
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
