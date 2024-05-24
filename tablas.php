<?php include 'Header.php'?>

    <h1>Calculador tablas del 1 al 10 </h1>

    <div class="todo2">
    <form method="post" >

<label for="numero">Ingrese un número</label>
<input type="number" id="numero" name="numero" min=1 required>
<button type="submit">Calcular</button>
<?php

include 'funciones.php';

if (isset($_POST['numero'])) {
$numero = intval($_POST['numero']); 

if($numero<=100){
        echo tablas($numero);
        }
        else{
            echo "<p>El número ingresado es demasiado grande</p>";
        }
}
?>
</form>
    </div>
    

    
    <?php include 'Footer.php'?>
