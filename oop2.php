<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Telefonlar {
        public $name;
        public $color;
        public $year;
        function __constructor($name, $color, $year) {
            $this->name = $name;
            $this->year = $year;
            $this->color = $color;
        }
        function Samsung() {
            echo "yangi telefon nomi"."$this->name = $name;"."$this->color = $color;"."$this->year = $year;"."<br>";
        }
    }
    Samsung = new telefon(Samsung);
    ?>
</body>
</html>
