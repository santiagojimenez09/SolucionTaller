<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">Taller</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="index2.php">Punto 2</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index3.php">Punto 3</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index4.php">Punto 4</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index5.php">Punto 5</a>
                    </li>
                    
                    
                </ul>
            </div>
        </nav>
    </header>
    <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-4">

                        <form class="mt-4" action="index2.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="PesoCorporal" name="peso">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Altura" name="altura2">
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary mt-2 btn-block" name="botonCalcular">Calcular IMC</button>
                    
                    </form>
                    <?php if(isset($_POST["botonCalcular"])):  ?>
                        <h4>
                        <?php
                        $peso=$_POST["peso"];
                        $altura2=$_POST["altura2"];
                        
                        $total=$peso/($altura2*$altura2);
                        echo('Su IMC es ' .$total);
                        if($total < 18.5){
                            echo(' su peso es insuficiente');
                        } elseif ($total >=18.5 && $total <=24.9){
                            echo(' su peso es normal');
                        }
                        if($total >=25 && $total <=26.9 ){
                            echo(' tiene sobrepeso grado 1');
                        } elseif ($total >=27 && $total <=29.9 ){
                            echo(' tiene sobrepeso grado 2 (preobesidad)');
                        }
                        if($total >=30 && $total <=34.9 ){
                            echo(' tiene obesidad tipo 1');
                        } elseif ($total >=35 && $total <=39.9 ){
                            echo(' tiene obesidad tipo 2');
                        }
                        if($total >=40 && $total <=49.9 ){
                            echo(' tiene obesidad tipo 3 (morbida)');
                        } elseif ($total >=50 ){
                            echo(' tiene obesidad tipo 4 (extrema)');
                        }
                        
                        ?>
                        </h4>

                        <?php endif ?>
        
    </main>
    
    
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

                       