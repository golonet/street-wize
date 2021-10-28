<?php

require_once 'connect.class.php';

class Recommendations {

	public function __construct(){}

	private $id;
	private $title;
	private $text;



	public function getId() {
		return $this->id;
	}
	public function getTitle() {
		return $this->title;
	}
	public function getText() {
		return $this->text;
	}	



	private function initSelf($row) {
		$this->id			= $row["id"];
		$this->title		= $row["title"];
		$this->text		    = $row["text"];
	}

	
	public static function getRecommendations(){
		
		$con = Connect::connectToDB();
	
		$result = mysqli_query($con,"SELECT * FROM `recommendations` order by `sort` ASC");
		$group = array();
		while ($row = mysqli_fetch_array($result))  {
			
			$obj = new Recommendations();
			$obj->initSelf($row);

			$objs[] = $obj;
		}
		mysqli_close($con);
	    return  $objs;
	}	


	

	
}