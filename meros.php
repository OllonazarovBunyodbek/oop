<?php
    class Telefonlar {
        public $name;
        public $color;
        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        function get_deteils() {
            echo "yangi telefon nomi"."$this->name = $name;"."rangi"."$this->color = $color;";
        }
    }
    class Telefonlar extends smartfon {
        function __construct($name,$color) {
            public $name;
            public $color;
        }
        echo Telefonlar;
    }
?>
