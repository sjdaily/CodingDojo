<?php

class Bike 
{	
	// add following attributes to class
	public $miles = "miles";
	public $price;
	public $max_speed;	

	// add constructor function to set default miles and allow for user input
	public function __construct($price, $max_speed)
    {
        // echo $price . ' - ' . $max_speed . '<br>';
        // pull each input from creation of each new instance below and use in function
        $this->price = $price;
        $this->max_speed = $max_speed;
        $this->miles = 0;
    }

    // Add the following functions for this class:
    // displayInfo() - have this method display the bike's price, maximum speed, and the total miles driven
	// drive() - have it display "Driving" on the screen and increase the total miles driven by 10
	// reverse() - have it display "Reversing" on the screen and decrease the total miles driven by 5...

    public function displayInfo()
    {
    	return " Price: " . $this->price . '<br>' . " Max speed: " . 
    	$this->max_speed .'<br>' . " Total miles driven: " . $this->miles; 
    }
    public function drive()
    {
    	echo "Driving - total miles driven: ";
    	$this->miles += 10;
    	return $this->miles . " miles. <br>";
    }
    public function reverse()
    {
    	echo "Reversing - total miles driven ";
    	$this->miles -= 5;
    	if($this->miles < 0) // What would you do to prevent the instance from having negative miles?
    	{
    		$this->miles = 0;
    	}
    	return $this->miles . " miles <br>";
    }
}

$red = new Bike(200, '25mph'); // param will be passed into the __construct
// Have the first instance drive three times, reverse once and have it displayInfo(). 
	echo "<h4>Bike instance red </h4>";
	echo $red -> drive();  
	echo $red -> drive();  
	echo $red -> drive();  
	echo $red -> reverse();  
	echo $red -> displayInfo();
	echo '<hr>';

$black = new Bike(150, "20mph"); 
// Have the second instance drive twice, reverse twice and have it displayInfo(). 
	echo "<h4>Bike instance black</h4>";
	echo $black -> drive(); 
	echo $black -> drive();
	echo $black -> reverse(); 
	echo $black -> reverse(); 
	echo $black -> displayInfo();
	echo '<hr>';

$blue = new Bike(300, "35mph");
// Have the third instance reverse three times and displayInfo().
	echo "<h4>Bike instance blue </h4>";
	echo $blue -> reverse(); 
	echo $blue -> reverse(); 
	echo $blue -> reverse(); 
	echo $blue -> displayInfo();
	echo '<hr>';

?>