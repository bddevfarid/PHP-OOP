PHP What is OOP?
OOP stands for Object-Oriented Programming.

Objects - 
1. Properties - ki ki ace 
2. Methods - ja ja korte pare

class Man{
  public $name;
  public $age;

  //Methods
  public function name(){
     return "My name is " . $this->name;
  }

  public function age(){
     return "I am " . $this->name . " years old";
  }

}

$man = new Man();
echo $man->name("Farid");
echo $man->age(27);
