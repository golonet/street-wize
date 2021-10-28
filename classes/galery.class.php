<?php

require_once 'connect.class.php';

class Galery {

	public function __construct(){}

	private $id;
	private $img_path;
	private $title;



	public function getId() {
		return $this->id;
	}
	public function getImgPath() {
		return $this->img_path;
	}
	public function getImgTitle() {
		return $this->title;
	}


	private function initSelf($row) {
		$this->id			= $row["id"];
		$this->img_path		= $row["img_path"];
		$this->title		= $row["title"];
	}


	public static function getGaleryPics(){

		$con = Connect::connectToDB();

		$result = mysqli_query($con,"SELECT * FROM `galery`");
		$group = array();
		while ($row = mysqli_fetch_array($result))  {
				
			$obj = new Galery();
			$obj->initSelf($row);

			$objs[] = $obj;
		}
		mysqli_close($con);
		return  $objs;
	}





}