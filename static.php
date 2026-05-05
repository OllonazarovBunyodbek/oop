
<?php
class homeland {
  public static function name() {
    echo "O'zbekiston";
  }
}

class thecapital {
  public function xabar() {
   homeland ::name();
  }
}

$object = new thecapital();
echo $object -> xabar();
?>
 