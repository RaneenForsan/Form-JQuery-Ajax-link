<?php  include('includes/DBconnection.php');?>
	<?php

	class Reports extends dbconnection
	{
		public function ReadNumProduct(){
			$query 	= "SELECT product_id,COUNT(product_id) AS num_product FROM product";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        public function ReadNumCustomer(){
			$query 	= "SELECT customer_id,COUNT(customer_id) AS num_customer FROM customer";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        
           public function sales(){
			$query 	= "SELECT total,sum(total) AS sum_total FROM lastorders";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
           public function Vendornumber(){
			$query 	= "SELECT vendor_id,COUNT(vendor_id) AS vendor_number FROM vendors";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        
           public function ordernumber(){
			$query 	= "SELECT order_id,COUNT(order_id) AS order_id  FROM orders";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
            public function categoriesnumber(){
			$query 	= "SELECT category_id,COUNT(category_id) AS category_id FROM category";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
        public function TopThreeCategories(){
			$query 	= " SELECT *
FROM product
GROUP BY category-id
ORDER BY COUNT(category-id) DESC
LIMIT 3";
			$result = $this->performQuery($query);
			return $this->fetchAll($result);
		}
    }
?>