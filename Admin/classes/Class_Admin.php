<?php
	require('includes/DBconnection.php');

	class Admin extends dbconnection
	{
		public $id;
		public $email;
		public $password;
		public $image;
		public $admin_name;
		

		public function CreateAdmin(){
			$query  = "INSERT INTO admin(email,password,image,admin_name) 
			VALUES('$this->email','$this->password',
            '$this->image','$this->admin_name') ";
			$this->performQuery($query);
		} 

		public function ReadAdmin(){
			$query  = "SELECT * FROM Admin";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		public function DeleteAdmin(){
			$query = "DELETE FROM admin where admin_id = '$this->id' ";
			return $this->performQuery($query);
		}

		public function UpdateAdmin(){
			$query = "UPDATE admin   SET 
				email       		              = '$this->email',
				password             	    	  = '$this->password',
				image           		     	  = '$this->image',
				admin_name           			  = '$this->admin_name'
				WHERE admin_id  = '$this->id'"; 
			$this->performQuery($query);
		}

		public function UpdateAdminByID(){
			$query  = "SELECT * FROM admin WHERE admin_id = '$this->id' ";
			$result = $this->performQuery($query);
			return    $this->fetchAll($result);
		}

		


	}






?>