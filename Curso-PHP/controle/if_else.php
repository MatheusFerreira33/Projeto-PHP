<div class="titulo">If Else</div>

<?php
if (true) {
    echo "Serei impresso? <br>";
}

if (false) {
    echo "verdadeiro - parte A <br>";
    echo "Verdadeiro - parte B <br>";
} else {
    echo "Falso - Parte A <br>";
    echo "Falso - Parte B <br>";
}

if (false) {
    echo "Passo A <br>";
} else if (false) {
    echo "Passo B <br>";
} elseif(false) {
    echo "Passo C <br>";
} elseif (false) {
    echo "Passo D <br>";
} elseif(false) {
    echo "Passo E <br>";
} else {
    echo "Ultimo Passo <br>";
}

echo "Fim <br>";