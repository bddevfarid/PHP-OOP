PHP What is OOP?
OOP stands for Object-Oriented Programming.

Objects - 
1. Properties - ki ki ace 
2. Methods - ja ja korte pare

<?php
//Part One
class Man{

	// Properties
	public $eye = 2;
	public $hand = 2;

    //Methods
    public function name($name){
       echo "My name is " . $name . ". </br>";
    }

    public function age($age){
       echo "I am " . $age . " years old. </br>";
       echo "Amar " . $this->hand . " ta Hat ace. </br>";
       echo "Amar " . $this->eye . " ta Chokh ace.";
    }

}

$man = new Man();
$man->name("Farid");
$man->age(27);


//Part Two 
//PHP - Access Modifiers
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR


// Part Three
// PHP OOP - Inheritance
// extends
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  protected function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? ";
    // Call protected method from within derived class - OK
    $this -> intro();
  }
}

$strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

//PHP - Using Multiple Traits
trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();
?>
