<?php
trait xabar1 {
    public function msg1() {
        echo "PHP OOP is fun!";
    }
}

trait xabar2 {
    public function msg1() {
        echo "TRAITS reduce code duplication!";
    }
}

class xabar1 {
    use xabar1;
}

class xabar2 {
    use xabar, xabar2;
}

$obj = new xabar1();
$obj -> msj1();
echo "<br>";

$obj = new xabar2();
$obj -> msj1();
$obj -> msj2();

