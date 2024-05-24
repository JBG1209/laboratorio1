<?php include 'Header.php'?>
<h1>Calculadora de probabilidades </h1>

<div class="todo">
<div class="foto"></div>

<form method="post">
        <label for="numero">¿Cuáles son tus probabilidades de ganar el 5 de oro?</label>
        <input type="number" id="numero" name="numero" min="0" required placeholder="Ingrese las jugadas">
        <button type="submit">Calcular</button>

        <?php include 'funciones.php';

    if (isset($_POST['numero'])) {
        $jugadas = intval($_POST['numero']);
        
        if ($jugadas > 1712304) {
            echo "<p> El número de jugadas no puede ser mayor a 1712304. Por favor, ingresa un número válido.<br> </p>";
        } else {
            $resultado=cincodeoro($jugadas);
            echo "<p> Tu probabilidad de ganar el 5 de oro es de: $resultado% </p>";
        }
    }
    ?>
    </form>
</div>
    
<?php include 'Footer.php'?>
