<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Recursividad</title>
        <link rel="stylesheet" href="./style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    </head>
    <?php
            class Factorial{
                public function funcionfactorial($n){
                    if ($n<=0) {
                        return 1;
                    }else {
                        $s = $n*$this->funcionfactorial($n-1);
                        echo "<span> El factorial de: $n es: $s  <br> </span>";
                        return $s;
                    }
                }
            }
        ?>
    <body>
        <header>
            <h1>Recursividad</h1>
            <h3>Funcion factorial</h3>
            <h4> <i> <a href="https://aulavirtual.cuc.edu.co/moodle/user/profile.php?id=149989" target="_blank" rel="noopener noreferrer">Jesus Garcia</a> - <a href="https://aulavirtual.cuc.edu.co/moodle/user/profile.php?id=149267" target="_blank" rel="noopener noreferrer">Nelson Morales</a> - <a href="https://aulavirtual.cuc.edu.co/moodle/user/profile.php?id=151565" target="_blank" rel="noopener noreferrer">Yan De la Torre</a></p><i></h4>
        </header>

        <div class="funcionfactorial">
            <form action="index.php" method="post" id="funcion">
                <h3>Agrege el valor a partir del cual desea iniciar el conteo de factoriales</h3>
                <br>
                <input type="number" name="Numero" placeholder="Ingrese el numero" required>
                <input type="submit" value="Agregar">
            </form>
        </div>
        <div class="resultado">
            <?php
            if (isset($_POST["Numero"])) {
                $n = new Factorial();
                $n->funcionfactorial($_POST["Numero"]);
            }
            ?>
        </div>
    </body>
</html>