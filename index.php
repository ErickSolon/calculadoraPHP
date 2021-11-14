<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Calculadora</title>
  </head>
  <body>
    <div class="row container mx-auto">
      <div class="col-sm p-5">
        <form method="POST">
          <div class="mb-3">
            <label for="colFormLabelSmN1" class="col-sm-2 col-form-label col-form-label-sm">Número 1:</label>
            <input type="text" class="form-control" id="colFormLabelSmN1" name="n1">
          </div>
          <div class="mb-3">
            <label for="colFormLabelSmN2" class="col-sm-2 col-form-label col-form-label-sm">Número 2:</label>
            <input type="text" class="form-control" id="colFormLabelSmN2" name="n2">
          </div>
          <button type="submit" class="btn btn-primary w-100">Calcular</button>
        </form>
      </div>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  $n1 = $_POST["n1"];
  $n2 = $_POST["n2"];

  function Somar($n1, $n2) {
    return $n1 + $n2;
  }

  function Subtrair($n1, $n2) {
    return $n1 - $n2;
  }

  function Multiplicar($n1, $n2) {
    return $n1 * $n2;
  }

  function Dividir($n1, $n2) {
    return $n1 / $n2;
  }

  if($n1 != "" || $n2 != "") {
    $html = "<row class=\"row container mx-auto text-center\">"; 
    $html .= "<div class=\"col-sm p-5 \">";
    $html .= "<h1>";
    $html .= "Soma: ";
    $html .= Somar($n1, $n2)."<br>";
    $html .= "Subtrair: ";
    $html .= Subtrair($n1, $n2)."<br>";
    $html .= "Multiplicar: ";
    $html .= Multiplicar($n1, $n2)."<br>";
    $html .= "Dividir: ";
    $html .= Dividir($n1, $n2);
    $html .= "</h1>";
    $html .= "</div>";
    $html .= "</row>"; 

    echo $html;
  } else {
    $html = "<row class=\"row container mx-auto text-center\">"; 
    $html .= "<div class=\"col-sm p-5 \">";
    $html .= "<h1>";
    $html .= "Digite dois números e aperte o botão \"Calcular\"!";
    $html .= "</h1>";
    $html .= "</div>";
    $html .= "</row>";

    echo $html;
  }
?>