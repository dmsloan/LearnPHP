<!-- ForEach.php -->
<html>
 <head></head>
 <title> Loops: ForEach </title>
 <body>
   <h2>
		<?php echo "Hello, today is " . date('l') . "<br /><br />";
   
		$ages = array(4,8,15,16,23,46,23);
	
		foreach ($ages as $age){
			echo "Age: {$age}<br />";
		}
		echo "<br />";

		$person1 = array(
			"first_name" 	=> "Ralph",
			"last_name" 	=> "Sloan",
			"address" 	=> "6100 Rod Ave",
			"City"		=> "Woodland Hills",
			"state" 	=> "California",
			"zip_code" 	=> "91367",
		);
                
		$person2 = array(
			"first_name" 	=> "Sam",
			"last_name" 	=> "Sloan",
                        "Hobby"         => "Skater",
			"address" 	=> "6100 Rod Ave",
			"City"		=> "Woodland Hills",
			"state" 	=> "California",
			"zip_code" 	=> "91367",
		);
                
                $people = array($person1, $person2);
                
                foreach($people as $peeps){
                        foreach($peeps as $attribute => $data){
                                $attr_nice=ucwords(str_replace("_", " ", $attribute));
                                echo"{$attr_nice}: {$data}<br />";
                        }
                    echo "<br />";    
                }
		echo "<br />";
		
		$prices = array("Brand New Computer" => 2000,
						"1 month of Lynda.Com" => 25,
						"Learning PHP" => null);
		foreach($prices as $item => $price){
			echo "{$item}: ";
			if (is_int($price)){
				echo "$" . $price;
			} else {
				echo "Priceless";
			}
			echo "<br />";
		}
		
		for($count=0; $count<=10;$count++){
			if ($count % 3 !=0) {continue;}
				echo $count . ", ";
		}
		
		?>
		.</h2>
 </body>
</html>