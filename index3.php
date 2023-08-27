
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>
    <?php 
        include "menu.php";
    ?>
    <div class="container-fluid ">

        <img src="https://img.freepik.com/vector-gratis/plantilla-logotipo-barbacoa-detallada_23-2149005964.jpg" style="width:200px; height: 200px;"></img>
        <p>Bienvenidos</p> 
    </div>

    <br><br>   
    <div class="word-container">
        <a href="#entradas">Entradas y Aperitivos</a>
        <a href="#platos-personales">Platos Personales</a>
        <a href="#platos-mixto">Platos Mixto</a>
        <a href="#platos-dobles">Platos Dobles</a>
        <a href="#pinchos">Pinchos</a>
        <a href="#extras">Extras</a>
        <a href="#bebidas">Bebidas</a>
        <a href="#Bebidas Nacionales-Internacionales">Bebidas Nacionales e Internacionales</a>
        <a href="#postres">Postres</a>
    </div>
    <br><br>

    <div class="container mt-5" id="cuerpo">
        
    </div>
    
    <br><br>

    <script type="text/javascript">
        function consultar() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("cuerpo").innerHTML = xhttp.responseText;
                const targetSection = document.querySelector(window.location.hash);
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: "smooth" });
                }
            };
            xhttp.open("POST", "mostrarMenu.php");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("");
        }
        consultar();
    </script>
</body>
</html>
