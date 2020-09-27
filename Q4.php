  <?php
  class Animal{
  	public $family;
  	public $food;

  	function set_family($family,$food){
  		$this->family = $family;
  		$this->food = $food;
  	}
  	function get_family(){
  		return $this->family ." ". $this->food;
  	}
  }


  $cat = new Animal();
  $dog = new Animal();
  $cat->set_family('Cat' , 'milk');
  $dog->set_family('Dog','rice');

  echo $cat->get_family();
  echo "<br>";

  echo $dog->get_family();
  ?>