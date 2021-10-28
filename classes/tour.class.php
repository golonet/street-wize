<?php

require_once 'connect.class.php';

class Tour {

	public function __construct(){}

	private $id;
	private $title;
	private $keywords;
	private $long_text;
	private $image_path;
	private $internal_page_pic1;
	private $internal_page_pic2;


	public function getId() {
		return $this->id;
	}
	public function getTitle() {
		return $this->title;
	}
	public function getKeywords() {
		return $this->keywords;
	}
	public function getLong_text() {
		return $this->long_text;
	}
	public function getImagePath() {
		return $this->image_path;
	}
	public function getInternalPagePic1() {
		return $this->internal_page_pic1;
	}
	public function getInternalPagePic2() {
		return $this->internal_page_pic2;
	}

	private function initSelf($row) {
		$this->id					= $row["id"];
		$this->title				= $row["title"];
		$this->keywords	   			= $row["keywords"];
		$this->long_text			= $row["long_text"];
		$this->image_path			= $row["image_path"];
		$this->internal_page_pic1	= $row["internal_page_pic1"];
		$this->internal_page_pic2	= $row["internal_page_pic2"];
	}


	public static function getTours(){

		$con = Connect::connectToDB();

		$result = mysqli_query($con,"SELECT * FROM `tours` order by `id` asc");
		
		$numrows = mysqli_num_rows($result);
		
		$group = array();
		while ($row = mysqli_fetch_array($result))  {
				
			$obj = new Tour();
			$obj->initSelf($row);

			$objs[] = $obj;
		}
		mysqli_close($con);
				
		return  $objs;
	}

	public static function getTourById($tourId){
	
		$con = Connect::connectToDB();
	
		$result = mysqli_query($con,"SELECT * FROM `tours` WHERE `id`=$tourId");
	
		$numrows = mysqli_num_rows($result);
	
		$group = array();
		while ($row = mysqli_fetch_array($result))  {
	
			$obj = new Tour();
			$obj->initSelf($row);
	
			$objs[] = $obj;
		}
		mysqli_close($con);
	
		return  $objs;
	}
	
	//



}