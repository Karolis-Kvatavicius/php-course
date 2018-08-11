<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Lesson-6</title>
</head>

<body>
    <!-- programa atlieka dvieju skaiciu skaiciavimus -->
    <form action="index.php" method="GET">
        <p><b>X: </b></p>
        <input type="text" name="X" value="">
        <br>
        <p><b>Operatorius: </b></p>
        <div class="radio">
            <p>Sudėtis: </p>
            <input class="number-input" type="radio" name="operator" value="+">
            <p>Atimtis: </p>
            <input type="radio" name="operator" value="-">
            <p>Dalyba: </p>
            <input type="radio" name="operator" value="/">
            <p>Daugyba: </p>
            <input class="number-input" type="radio" name="operator" value="*">
            <p>Modulis: </p>
            <input type="radio" name="operator" value="%">
            </div>
        <p><b>Y: </b></p>
        <input type="text" name="Y" value="">
        <br>
        <br>
        <input id="btnsubmit" type="submit" value="Išsiųsti">
    </form>
    <?php


// $x = '';
// $y = '';
// $operator = '+';

if(isset($_GET['operator']) && isset($_GET['X']) && isset($_GET['Y'])) {
    $operator = substr($_GET['operator'], 0, 1);
    $x = $_GET['X'];
    $y = $_GET['Y'];

    if(is_numeric($x) && is_numeric($y) && preg_match('/^[\/%*\-+]{1}/', $operator)) {
        switch ($operator) {
                case '/':
                print '<p style="font-size: 20px; font-weight: bold;">Dalmuo: ' .($x / $y). '</p>';
                break;
    
                case '*':
                print '<p style="font-size: 20px; font-weight: bold;">Sandauga: ' .($x * $y). '</p>';
                break;
    
                case '-':
                print '<p style="font-size: 20px; font-weight: bold;">Skirtumas: ' .($x - $y). '</p>';
                break;
    
                case '+':
                print '<p style="font-size: 20px; font-weight: bold;">Suma: ' .($x + $y). '</p>';
                break;
    
                case '%':
                print '<p style="font-size: 20px; font-weight: bold;">Modulis: ' .($x % $y). '</p>';
                break;
        }
    } else {
        print '<p style="color: red; font-size: 20px; font-weight: bold;">Klaidingai nurodytas skaičius arba operatorius !!!</p>';
    }
} else {
    print '<p style="font-size: 20px; font-weight: bold;"></p>';
}
?>

        <!-- KOKS TAI GYVUNAS -->
        <h1> Apklausa </h1>
        <div>
            <?php
            $visiKlausimai = 4;
            $atsakymas = '';

            if (isset($_GET['spejam'])) {
                $teisingiAtsakymai = $_GET['answer'] + $_GET['answer1'] + $_GET['answer2'] + $_GET['answer3'];
                $procentas = ($teisingiAtsakymai/$visiKlausimai) * 100;
                print '<p id="result">Jūs atsakėte į ' .$teisingiAtsakymai. ' iš 4 klausimų teisingai. Surinkote ' .$procentas. ' %</p>';
            }
   
            ?>
        </div>
        <div class="form">

            <form id="animalForm" action="index.php" method="GET">

                <!-- pirmas klausimas -->
                <div class="question">
                    <img src="images/fox.jpg" alt="fox" height="300" width="450">
                    <div>
                        <h3>Atspėk koks tai gyvūnas</h3>
                        <div class="animal">
                            <input type="radio" name="answer" value="1" required>
                            <label for="fox">Lapė</label>
                        </div>
                        <div class="animal">
                            <input type="radio" name="answer" value="0">
                            <label for="tiger">Tigras</label>
                        </div>
                        <div class="animal">
                            <input type="radio" name="answer" value="0">
                            <label for="lion">Liūtas</label>
                        </div>
                        <div class="animal">
                            <input type="radio" name="answer" value="0">
                            <label for="panda">Panda</label>
                        </div>
                    </div>
                </div>
                <?php
                    if (isset($_GET['answer'])) {
                        $atsakymas = $_GET['answer'];
                        if ($atsakymas == '1') {
                            echo '<p class="answerType" style="color: green">Jūs atsakėte teisingai.</p>';
                        } else {
                            echo '<p class="answerType" style="color: red">Jūsų atsakymas neteisingas.</p>';
                        }
                    }
                    ?>

                    <!-- antras klausimas -->
                    <div class="question">
                        <img src="images/lion.jpg" alt="lion" height="300" width="450">
                        <div>
                            <h3>Atspėk koks tai gyvūnas</h3>
                            <div class="animal">
                                <input type="radio" name="answer1" value="0" required>
                                <label for="fox">Lapė</label>
                            </div>
                            <div class="animal">
                                <input type="radio" name="answer1" value="0">
                                <label for="tiger">Tigras</label>
                            </div>
                            <div class="animal">
                                <input type="radio" name="answer1" value="1">
                                <label for="lion">Liūtas</label>
                            </div>
                            <div class="animal">
                                <input type="radio" name="answer1" value="0">
                                <label for="panda">Panda</label>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_GET['answer1'])) {
                        $atsakymas = $_GET['answer1'];
                        if ($atsakymas == '1') {
                            echo '<p class="answerType" style="color: green">Jūs atsakėte teisingai.</p>';
                        } else {
                            echo '<p class="answerType" style="color: red">Jūsų atsakymas neteisingas.</p>';
                        }
                    }
                    ?>

                        <!-- trečias klausimas -->
                        <div class="question">
                            <img src="images/panda.jpg" alt="panda" height="300" width="450">
                            <div>
                                <h3>Atspėk koks tai gyvūnas</h3>
                                <div class="animal">
                                    <input type="radio" name="answer2" value="0" required>
                                    <label for="fox">Lapė</label>
                                </div>
                                <div class="animal">
                                    <input type="radio" name="answer2" value="0">
                                    <label for="tiger">Tigras</label>
                                </div>
                                <div class="animal">
                                    <input type="radio" name="answer2" value="0">
                                    <label for="lion">Liūtas</label>
                                </div>
                                <div class="animal">
                                    <input type="radio" name="answer2" value="1">
                                    <label for="panda">Panda</label>
                                </div>
                            </div>
                        </div>
                        <?php
                    if (isset($_GET['answer2'])) {
                        $atsakymas = $_GET['answer2'];
                        if ($atsakymas == '1') {
                            echo '<p class="answerType" style="color: green">Jūs atsakėte teisingai.</p>';
                        } else {
                            echo '<p class="answerType" style="color: red">Jūsų atsakymas neteisingas.</p>';
                        }
                    }
                    ?>

                            <!-- ketvirtas klausimas -->
                            <div class="question">
                                <img src="images/tiger.jpg" alt="tiger" height="300" width="450">
                                <div>
                                    <h3>Atspėk koks tai gyvūnas</h3>
                                    <div class="animal">
                                        <input type="radio" name="answer3" value="0" required>
                                        <label for="fox">Lapė</label>
                                    </div>
                                    <div class="animal">
                                        <input type="radio" name="answer3" value="1">
                                        <label for="tiger">Tigras</label>
                                    </div>
                                    <div class="animal">
                                        <input type="radio" name="answer3" value="0">
                                        <label for="lion">Liūtas</label>
                                    </div>
                                    <div class="animal">
                                        <input type="radio" name="answer3" value="0">
                                        <label for="panda">Panda</label>
                                    </div>
                                    <div class="animal submit">
                                        <input type="submit" name="spejam" <?php echo isset($_GET[ 'spejam']) ? "disabled" : ""?> value="Spėti">
                                    </div>
                                </div>
                            </div>
                            <?php
                    if (isset($_GET['answer3'])) {
                        $atsakymas = $_GET['answer3'];
                        if ($atsakymas == '1') {
                            echo '<p class="answerType" style="color: green">Jūs atsakėte teisingai.</p>';
                        } else {
                            echo '<p class="answerType" style="color: red">Jūsų atsakymas neteisingas.</p>';
                        }
                    }
                    ?>
            </form>
        </div>
</body>

</html>