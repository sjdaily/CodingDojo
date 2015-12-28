<?php
class Human {
  public $health;
  public $clan;
  public $strength = 3;
  public $intelligence = 3;
  public $stealth = 3;
  public function __construct() {
    echo "I am alive";
    $this->health = 100;
  }

  public function get_health()
  {
    return $this->health;
  }

  public function set_health($health)
  {
    $this->health = $health;
  }

  public function __get($property)
  {
    if (property_exists($this, $property))
    {
      return $this->property;
    }
  }

  public function __set($property, $value) 
  {
    if (property_exists($this, $property)) 
    {
      $this->$property = $value;
    }
    return $this;
  }

  public function trashTalk() 
  {
    echo "You want a piece of me?";
  }

  public function attack($human) 
  {
    $this->trashTalk();
    $luck = rand(0, 100);
    if($luck * $this->$intelligence > 1000) 
    {
      if($luck > $human->stealth) 
      {
        $human->health -= $this->strength;
        return true;
      } 
      else 
      {
        return false;
      }
    } 
    else 
    {
       return false;
    }
  }
}
$julius = new Human();
$clarkson = new Human();
$julius->set_health(80);

?>