<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema De Dotaciones</title>

    <link rel="stylesheet" href="css/sidebar.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-user"title= "Admin"></i>
            <h4>Admin</h4>
        </div>

        <div  class="options__menu">	

            <a href="sidebar.php" class="selected">
                <div class="option">
                <i class="fa-sharp fa-solid fa-file-import"title="Carga"></i>
                    <h4>Modulo de Carga</h4>
                    
                </div>
            </a>

            <a href="registro personal.php">
                <div class="option">
                   <i class="fa-sharp fa-solid fa-magnifying-glass"title="busqueda de personal"></i>
                    <h4>busqueda de personal </h4>
                </div>
            </a>
            
            <a href="busqueda personal.php">
                <div class="option">
                  <i class="fa-sharp fa-solid fa-truck"title="entrega de dotacion"></i>
                    <h4>entrega de dotacion  </h4>
                </div>
            </a>

            <a href="inventario.php">
                <div class="option">
                    <i class="fa-solid fa-shirt"title="inventario"></i>
                    <h4>inventarios</h4>
                </div>
            </a>

            <a href="reportes.php">
                <div class="option">
                    <i class="fa-sharp fa-solid fa-paste"title="das/reportes"></i>
                    <h4>das/reportes</h4>
                </div>
            </a>

        </div> 
            
    </div> 
            
    <main>
        <h1>inventario</h1><br>
    
    </main> 
    
    
    
    
    <script src="js/script.js"></script>


    
    
</body>
</html>