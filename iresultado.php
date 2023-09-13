<h1>Resultados</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Etec Notas 
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $media = ($nota1 + $nota2) / 2;
        echo "Média das notas escolares: " . $media . "<br>";

        // IMC
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $imc = $peso / ($altura * $altura);
        echo "IMC: " . $imc . "<br>";

        // Área do Triângulo
        $base = $_POST["base"];
        $alturaTriangulo = $_POST["alturaTriangulo"];
        $areaTriangulo = ($base * $alturaTriangulo) / 2;
        echo "Área do Triângulo: " . $areaTriangulo . "<br>";

        // Bhaskara
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        $delta = ($b * $b) - (4 * $a * $c);
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Raízes da equação de Bhaskara: x1 = " . $x1 . " e x2 = " . $x2 . "<br>";
        } elseif ($delta == 0) {
            $x1 = -$b / (2 * $a);
            echo "Raíz única da equação de Bhaskara: x1 = " . $x1 . "<br>";
        } else {
            echo "A equação não possui raízes reais.<br>";
        }
    }