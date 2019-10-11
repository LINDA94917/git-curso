<?php
 
 $resultado="";
 $color="";


if (isset($_POST["peso"]) && isset($_POST["altura"]) && is_numeric($_POST["peso"]) && is_numeric($_POST["altura"]) ) {
    $peso = $_POST["peso"];
    $altura = $_POST["altura" ];

    $imc = $peso / ($altura * $altura);

    $imc = round($imc,1); 
         
    
     if($imc<18.5){
         $resultado= "Peso  es inferior al normal";
         $color="orange";
     }

     if ($imc >= 18.5 && $imc< 24.9){

        $resultado= "Peso  es  normal";
        $color="green";
     }

     if ($imc >= 24.9 && $imc< 29.9){

        $resultado= "Peso superior al   normal";
        $color="blue";
     }


     if ($imc >=30 ){

        $resultado= "Obesidad";
        $color="orange ";
     }
     
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Calculadora IMC </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">CALCULADORA IMC </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Bienvenisdos a Calculadora IMC </h1>
      <p class="lead"> No es Belleza , Es Salud! </p>
      </div>

     

  </header>


  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="csrd mb-4">
            <img class="card-img-top" src="IMAGENES/BUENA SALUD.jpg" alt="Card image cap">
            <div class="card-body">
                <h2 class ="cardd-title" >Calcula Tu IMC </h2>
                <p class="card-tet">No es Belleza, es Salud!</p> 
                <div class="row">
                  <div clas="col-lg-6">
                      <form class="" action="index.php" method="POST">
                      Peso (kg) <br> <input type="number" step="0.01" name="peso" value="" placeholder=" tu peso en kilogramos"required ><br><br>
                      Altura(m)<br>  <input type="number" step="0.01" name="altura" value="" placeholder=" tu altura en metros" required ><br><br>
                      <input type="submit" class="btn btn-primary" name="" value="CALCULAR">
                      </form> <br>
                    </div> 
                  <div class="col-lg-6">

                    <?php echo "Tu I.M.C es de ->".$imc; ?>
                    <br>
                    <div style =" color:<?php echo $color;?>" >Resultado:<?PHP  echo $resultado;?> </div>
                  </div>
                </div>
            <div class="card-footer text-muted">
              Consulta más información
              <a href="#">Clinica De Salud</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services we offer</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->S
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019 </br> ELABORADO POR: Dina luz BosSa y Jesus Gonzalez</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
