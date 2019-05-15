<?php
/**
 * 
 */
class product
{
	private $name;
	private $type;
	private $id;
	private $numberofpices;
	private $color;
	private $price;

	function __construct()
	{
		# code...
	}

	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name;
	}
	public function settype($type){
		$this->type = $type;
	}
	public function gettype(){
		return $this->type;
	}

	public function setid($id){
		$this->id = $id;
	}
	public function getid(){
		return $this->id;
	}

	public function setnumberofpices($numberofpices){
		$this->numberofpices = $numberofpices;
	}
	public function getnumberofpices(){
		return $this->numberofpices;
	}

	public function setcolor($color){
		$this->color = $color;
	}
	public function getcolor(){
		return $this->color;
	}

	public function setprice($price){
		$this->price = $price;
	}
	public function getprice(){
		return $this->price;
	}
}

?>