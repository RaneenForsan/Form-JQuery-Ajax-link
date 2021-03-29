
	<?php  include('includes/DBconnection.php');

        class vendor extends dbconnection{
            public $vendor_id;
            public $vendor_name;
            public $vendor_email;
            public $vendor_password;
            public $vendor_mobile;
            public $image;
           

        public function Read_Request_Vendor(){
          $query  = "SELECT * FROM vendor";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
            public function Read_Post(){
          $query  = "SELECT * FROM post";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
            
           public function Read_Postss(){
          $query  = "SELECT * FROM posts";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
        public function Read_Request_customer(){
          $query  = "SELECT * FROM customer ";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
             public function contact(){
          $query  = "SELECT * FROM contact";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
  public function Read_Vendors(){
          $query  = "SELECT * FROM vendors";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
         
       public function delete_Vendor($id){
		$query = "DELETE FROM vendors where vendor_id=$id";
		$this->performQuery($query);
	}
        public function delete_post($id){
		$query = "DELETE FROM posts where post_id=$id";
		$this->performQuery($query);
	}   
            
            
               public function delete_Vendors($id){
		$query = "DELETE FROM vendor where vendor_id=$id";
		$this->performQuery($query);
	}
                      public function delete_posts($id){
		$query = "DELETE FROM post where post_id=$id";
		$this->performQuery($query);
	}
            
             public function delete_Customer($id){
		$query = "DELETE FROM customer where customer_id=$id";
		$this->performQuery($query);
	}
        public function insertvendorData($id){
            $q  =  "INSERT INTO vendors(vendor_name,vendor_email,vendor_password,vendor_mobile,image)
                    VALUES
                    ('$this->vendor_name','$this->vendor_email','$this->vendor_password',
                     '$this->vendor_mobile','$this->image')";
                     $this->performQuery($q);  
                        

        }
            
        public function Read_Orders(){
          $query  = "SELECT * FROM orders,customer,vendors where orders.vendor_id=vendors.vendor_id and orders.customer_id=customer.customer_id";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}

            
            
            public function Read_Products(){
          $query  = "SELECT * FROM product,category,vendors where product.category_id=category.category_id and product.vendor_id=vendors.vendor_id";
			$result	= $this->performQuery($query);
			return 	  $this->fetchAll($result);		
		}
            
        public function delete_product($id){
		$query = "DELETE FROM product where product_id=$id";
		$this->performQuery($query);
	}
        public function delete_orders($id){
		$query = "DELETE FROM orders where order_id=$id";
		$this->performQuery($query);
	}
        }







?>