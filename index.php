
<?php 

class Get{
public $a;
public $b;
public $arr = [];

public function declarar($A, $B) {
  $this->a = $A;
  $this->b = $B;

  array_push($this->arr,$A, $B );
}

  public function car() {
echo reset($this->arr) . " Primeiro elemento <br>";
  }
  public function cdr() {
    
    echo end($this->arr) . " Ultimo elemento <br>";
  }
}

$teste1 = new Get;
$teste1->declarar(3,4);
$teste1->car();
$teste1->cdr();
?>