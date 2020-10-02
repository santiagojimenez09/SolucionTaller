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

                        <form class="mt-4" action="index3.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="CantidadPares" name="pares">
                                
                                <button type="submit" class="btn btn-primary mt-1 btn-block" name="botonCalcular">Calcular </button>
        
        <?php $numerospares=array('1'=>2,'2'=>4,'3'=>6,'4'=>8,'5'=>10,'6'=>12,'7'=>14,'8'=>16,'9'=>18,'10'=>20,'11'=>22,'12'=>24,'13'=>26,'14'=>28,'15'=>30,'16'=>32,'17'=>34,'18'=>36,'19'=>38,'20'=>40,'21'=>42,'22'=>44,'23'=>46,'24'=>48,'25'=>50,'26'=>52,'27'=>54,'28'=>56,'29'=>58,'30'=>60,'31'=>62,'32'=>64,'33'=>66,'34'=>68,'35'=>70,'36'=>72,'37'=>74,'38'=>76,'39'=>78,'40'=>80,'41'=>82,'42'=>84,'43'=>86,'44'=>88,'45'=>90,'46'=>92,'47'=>94,'48'=>96,'49'=>98,'50'=>100)
        ?>
<div>         
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Cantidad de pares</th>
                <th scope="col">Numeros pares</th>
      
            </tr>
        </thead>
        <tbody>
            <?php foreach($numerospares as $clave=>$valor):  ?> 
                <?php if(isset($_POST["botonCalcular"])): ?>
                <?php 
                
                $npares=$_POST["pares"];
                 
                ?>
                <th > <?php  echo($clave) ?> </th>
                <td > <?php   echo($valor) ?> </td>
                
                </tr>
                <?php endif ?>
            <?php endforeach ?>    
    
        </tbody>
    </table>
</div>                      
                        
                        
                        

                    

    </main>

