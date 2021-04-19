<?php
	class Bike{
		public $price;
		public $max_speed;
		public $miles;

		public function __construct($bike){
			$miles = 0;
			echo ' New bike'.' '.$miles.' '.'miles'.' '.'<br>';
		}

		public function get_price(){
			return $this->price; 
		}

		public function set_price($value){
			$this->price = $value;
		}

		public function get_max_speed(){
			return $this->max_speed;
		}   

		public function set_max_speed($value){
			$this->max_speed = $value;
		}

		public function displayInfo(){
			echo ' Price is'.' '.$this->get_price().'<br>';
			echo ' Max speed is'.' '.$this->get_max_speed().'<br>';

		}
		public function drive(){
			echo' Driving'.' '.$this->$miles += 10,'<br>';
		}
		public function reverse(){
			if($this->$miles <= 0){
				echo'Stopped','<br>';
			}else{
				echo' Reversing'.' '.$this->$miles -= 5,'<br>';
			}
			
		}
	}
	echo 'Mountain bike <br>';
	$mountain_bike = new Bike('bike1');
	$mountain_bike->set_price(100);
	$mountain_bike->set_max_speed(30);
	$mountain_bike->drive();
	$mountain_bike->drive();
	$mountain_bike->drive();
	$mountain_bike->reverse();
	echo $mountain_bike->displayInfo().'<br>';
	
	echo 'Road bike <br>';
	$road_bike = new Bike('bike2');
	$road_bike->set_price(110);
	$road_bike->set_max_speed(45);
	$road_bike->drive();
	$road_bike->drive();
	$road_bike->drive();
	$road_bike->reverse();
	echo $road_bike->displayInfo().'<br>';

	echo 'Racer bike <br>';
	$racer_bike = new Bike('bike3');
	$racer_bike->set_price(125);
	$racer_bike->set_max_speed(60);
	$racer_bike->reverse();
	$racer_bike->reverse();
	$racer_bike->reverse();
	echo $racer_bike->displayInfo().'<br>';

?>
