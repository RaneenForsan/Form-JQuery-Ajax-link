<?php  include('includes/DBconnection.php');

        class register extends dbconnection{
            public $vendor_id;
            public $vendor_name;
            public $vendor_email;
            public $vendor_password;
            public $vendor_mobile;
            public $image;
           

        public function insertvendorData(){
            $q  =  "INSERT INTO vendor(vendor_name,vendor_email,vendor_password,vendor_mobile,image)
                    VALUES
                    ('$this->vendor_name','$this->vendor_email','$this->vendor_password',
                    $this->vendor_mobile,'$this->image')";

            $this->performQuery($q);        
        }
        public function VerifyLogin(){
          $query  = "SELECT * FROM vendor WHERE vendor_email = '$this->vendor_email' 
          AND vendor_password = 
           '$this->vendor_password'";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
                  
     
        
  


        }




?>