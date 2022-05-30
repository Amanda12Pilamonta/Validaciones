
<?php   
include("Header.php");

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Amanda</title>
  <link rel="icon" href="#">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-light p-5">
  <main class="p-5">


    <body>
      
       <center> <div class="card" style="width: 30rem;">

        <center>  <div class="card-body" style="background-image: url('CAL.png'); width: 1000; height: 1000; background-repeat: no-repeat;">

            <div>
              <br>
              <br>
              <i class="fas fa-align-left ">
                <label for="">Numero 1:</label>
                  <input type="number" id="txtNum1">
                

              </i>
            </div>
            <div>
              <BR></BR>
              <i class="fas fa-align-left">
                <label for="">Numero 2:</label>
                <input type="number" id="txtNum2">
              </i>
              <br>
              <br>
              <br>
            </div>
            <div class="btn-group-3" role="group" aria-label="Basic mixed styles example">
             <center> <button type="button" class="btn btn-danger" id="btnsumar">Sumar</button>
                <button type="button" class="btn btn-warning" id="btnrestar">Restar</button>

                <br>
                <br>
                <div class="btn-group-3" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-success" id="btnmultiplicacion">Multiplicar</button>
                    <button type="button" class="btn btn-info" id="btndiv">Dividir</button>

                </div>
                <br>
                <h3>
                  <div id="respuesta"> </div>
                </h3>

            </div>
          </div>
        </div>

    </body>
    <br>
    <br>
    <br>
    <br>
    <br>
    </p>
    



  </main>

</body>

</html>