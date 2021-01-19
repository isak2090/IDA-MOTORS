
<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDA MOTORS</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
</head>
<body>

    <div> 
        <nav class="navbar navbar-expand-l navbar-dark bg-light col-md-12">
                <div>
                    <a href="index.php" class="navbar-brand font-weight-bold text-dark">IDA MOTORS</a>                    
                </div>
                <div>
                
                
                <div class="navbar-brand dropdown">
                    <button class="btn btn-default dropdown-toggle text-dark" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Precio</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="categorias/frutasyv.php" type="submit    ">0-30,000</a>
                            <a class="dropdown-item" href="categorias/carniceria.php">30,000-70,000</a>
                            <a class="dropdown-item" href="categorias/lacteos.php">70,000-150,000</a>
                            <a class="dropdown-item" href="categorias/gym.php">150,000-300,000/a>
                            <a class="dropdown-item" href="categorias/electronicos.php">300,000+</a>
                        </div>
                </div>
                
                       
                        <!-- <form class = "form-inline my-2 my-lg-0"> -->
                        
                            <button class = "btn btn-dark my-2 my-sm-0" type = "submit"> buscar</button>
                </div>   
                        <!-- </form> -->
                
                <div>
                    <button class = "btn btn-light border border-dark my-2 my-sm-0" type = "submit"> vender mi auto</button>
                </div>
        </nav>
    </div>



    <div class="container-fluid  shadow-lg p-4 mb-4 bg-white " id="carroDesc">


        <div class="d-flex justify-content-center">
            
            <div class="col-lg-4 "></div>
            <div class="col-sm-12 col-lg-8 col-md-12">
                <div class="row justify-content-center">
                    <h4 class="font-weight-bold text-dark mt-2" type="submit" id="nombre">nombre del auto</h4>
                </div>
            </div>
            
            <!-- <h2 class="font-weight-bold text-dark mt-2" type="submit" id="nombre">nombre del auto</h2> -->
        </div>

        <div class="row">
            <div class="col-sm-12 col-lg-4 col-md-4">
                    <div class="d-flex justify-content-center ">
                        <img src="images/BMW-X1.webp" class="img-fluid" id="img" alt="Responsive image" width=100% height=250px>
                    </div>
            </div>
            <div class="col-lg-8 col-sm-12 col-md-8 p-4 mb-4 bg-white">
                <!-- <div class="d-flex justify-content-center">
                    <h4 id="descrip"></h4>
                    
                    
                </div> -->
                

                <div class="row justify-content-center">
                    <div class="col-4 border border-right-0">
                        <h4 class="text-dark ">Modelo:</h4>
                    </div>
                    <div class="col-4 border border-left-0 text-right">
                        <h4 id="modelo" class="">  </h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <h4 class="text-dark">Marca:</h4>
                    </div>
                    <div class="col-4 text-right">
                        <h4 id="marca">  </h4>
                    </div>
                </div>

                
                <div class="row justify-content-center">
                    <div class="col-4 border border-right-0">
                        <h4 class="text-dark">Vendedor:</h4>
                    </div>
                    <div class="col-4 text-right border border-left-0">
                        <h4 id="vendedor">  </h4>
                    </div>
                </div>
                <div class="row justify-content-center border border-warning mr-2">
                    <div class="col-4">
                        <h4 class="text-dark font-weight-bold font-italic">Contacto:</h4>
                    </div>
                    <div class="col-4 text-right font-weight-bold font-italic">
                        <h4 id="contacto">   </h4>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 border border-right-0">
                        <h4 class="text-dark">Precio:</h4>
                    </div>
                    <div class="col-4 text-right border border-left-0">
                        <h4 id="precio">  </h4>
                    </div>
                </div>
            
       
                
            </div>
        </div>
        
    </div> 


    <div class="" id="productos">
        
        <div class="d-flex justify-content-center">
            <h1 class="font-weight-bold text-dark mt-2" >Destacados</h1>
        </div>

        <div class="d-flex justify-content-center">
            <div class="col-sm-10 ml-4">

                        <div class="container-fluid padding">
                            <div class="row padding mt-4" id="lista_p">
                            
                                <script src="mostrarAutos.js"></script>
                            </div>
                        </div>
            </div>
        </div>
        

    </div>

    <script type="text/javascript">
        var p='<?php echo $_GET["p"]; ?>';
        if(p==""){
            $('#carroDesc').hide();
        }
    
    </script>  
    
      
    
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
              crossorigin="anonymous"></script>
<!-- <script src="app.js"></script> -->
</body>
</html>