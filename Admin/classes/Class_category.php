<?php
	require('includes/DBconnection.php');

	class category extends dbconnection
	{
		public $id;
		public $category_name;
		public $category_description;
		public $image;
		

		public function CreateCategory(){
			$query  = "INSERT INTO category(category_name,category_description,category_image) 
			VALUES('$this->category_name','$this->category_description',
            '$this->image') ";
			$this->performQuery($query);
		} 

		public function ReadCategory(){
			$query  = "SELECT * FROM category";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		public function DeleteCategory(){
			$query = "DELETE FROM category where category_id = '$this->id' ";
			return $this->performQuery($query);
		}

		public function UpdateCategory(){
			$query = "UPDATE category   SET 
				category_name  		          = '$this->category_name',
				category_description  		  = '$this->category_description',
				category_image  			  = '$this->image'
				WHERE category_id = '$this->id'"; 
			$this->performQuery($query);
		}

		public function UpdateCategoryByID(){
			$query  = "SELECT * FROM category WHERE category_id = '$this->id' ";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		


	}






?>