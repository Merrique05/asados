<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menu";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM platos ORDER BY tipo";
$resultado = '';

$result = $conn->query($sql);
$veces = 1;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      
        
        if ($row["tipo"] == "1" && $veces == 1) {
            $resultado .= '<div class="hero" id="entradas"> <h1>Entradas y Aperitivos</h1> </div><div class="row">';
            $veces++;
        } elseif ($row["tipo"] == "2" && $veces == 2) {
            $resultado .= '</div><div class="hero" id="platos-personales"> <h1>Platos personales</h1> </div><div class="row">';
            $veces++;
        } elseif ($row["tipo"] == "3" && $veces == 3) {
            $resultado .= '</div><div class="hero" id="platos-mixto"> <h1>Platos Mixtos</h1> </div><div class="row">';
            $veces++;
        } elseif ($row["tipo"] == "4" && $veces == 4) {
            $resultado .= '</div><div class="hero" id="platos-dobles"> <h1>Platos Dobles</h1> </div><div class="row">';
            $veces++;
        } elseif ($row["tipo"] == "5" && $veces == 5) {
            $resultado .= '</div><div class="hero" id="extras"> <h1>Extras</h1> </div><div class="row">';
            $veces++;
        }elseif ($row["tipo"] == "6" && $veces == 6) {
            $resultado .= '</div><div class="hero" id="bebidas"> <h1>Bebidas</h1> </div><div class="row">';
            $veces++;
        }elseif ($row["tipo"] == "7" && $veces == 7) {
            $resultado .= '</div><div class="hero" id="Bebidas Nacionales-Internacionales"> <h1>Bebidas Nacionales e Internacionales</h1> </div><div class="row">';
            $veces++;
        }elseif ($row["tipo"] == "8" && $veces == 8) {
            $resultado .= '</div><div class="hero" id="postres"> <h1>Postes</h1> </div><div class="row">';
            $veces++;
        }

        $resultado .= '
        <div class="card" style="width: 300px ; margin: 10px;">
         <img class="card-img-top" style="width: 250px; height: 200px;" src="' . $row["foto"] . '" width="250px">
            <div class="card-body">
                <h4 class="card-title">' . $row["nombre"] . '</h4>
                <p class="card-text">' . $row["descripcion"] . '</p>
                <h2> L.' . $row["precio"] . '.00</h2>
                <div class="add-button">
                      <button data-type="' . $row["tipo"] . '">Ordenar </button>
                </div>
            </div>
        </div>';
        

            if ($veces == 10) {
            $resultado .= '</div>';
            $veces = 1;
        }
    }
    echo $resultado;
} else {
    echo "No hay datos en el menú";
}
$conn->close();
?>
