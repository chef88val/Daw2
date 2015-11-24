<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href=<?=$menu["titulo"][url]?>><?=$menu["titulo"][$idioma]?></a>
		    </div>
              <!--Comienza el menu-->
		    <div>
		       <ul class="nav navbar-nav">
		        <?php
		       /* $idioma="sp";
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
		        );*/
		
		//Aquí comienza el recorrido de la array
		        foreach ($menu as $valores => $value) {
		          foreach ($value as $key =>$valor ) {
		           echo"<li class=''> ";
		            if ($key == $idioma) {
		              if ($valores == "tipos de juego") {
		              echo "<a class='dropdown-toggle' 
		              data-toggle='dropdown' href=>
		              $valor<span class='caret'></span></a>";
		              echo "<ul class='dropdown-menu'>";
		
		              }else if ($valores == "titulo"){
		              	echo "";
		              }else echo "<a href=".$menu[$valores][url].">$valor</a>";
		//A partir de aquí busca los elementos padre que tienen hijos
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

                <!--Finaliza el menu-->
               
                	
              
		    </div>
		   
		  </div>
		</nav>