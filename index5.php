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

                        <form class="mt-4" action="index5.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="HorasTrabajadas" name="cantidadHoras">
                                
                                <button type="submit" class="btn btn-primary mt-1 btn-block" name="botonCalcular">Calcular </button>
    <?php
        if(isset($_POST["botonCalcular"])): ?>
            <h4>
            <?php
            $cantidadHoras=$_POST["cantidadHoras"];
            $diferenciaHoras;
            $pagoHorastrabajadas;
            $pagoDiferenciaHoras;
            if($cantidadHoras<=40){
                $pagoTotal=$cantidadHoras*20000;
                echo("El sueldo semanal del trabajador es: ".$pagoTotal);
            }elseif($cantidadHoras>40){
                $diferenciaHoras=$cantidadHoras-40;
                $pagoHorastrabajadas=40*20000;
                $pagoDiferenciaHoras=($diferenciaHoras*25000);
                $pagoTotal= $pagoDiferenciaHoras+$pagoHorastrabajadas;
                echo("La cantidad total de horas trabajadas es: ".$cantidadHoras);
                echo("<br>");
                echo("La cantidad de horas extras trabajadas es: ".$diferenciaHoras);
                echo("<br>");
                echo("El pago recibido por las horas extras trabajadas es: ".$pagoDiferenciaHoras);
                echo("<br>");
                echo("El pago total es: ".$pagoTotal);
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