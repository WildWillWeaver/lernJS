<?php
	include "db_conect.php";
	if(isset($_POST['search'])){
		$search=mysql_real_escape_string(trim($_POST['search']));
		$sql="SELECT * FROM table_products  ";
		$result=mysql_query($sql);
		$text='';
		$col=4;
		$flag=0;
			while($row=mysql_fetch_array($result))
			{
				if($col%4==0)
				{
					$text.='	
					<div class="row centered">
					<br><br>				
					<div class="col-lg-3">
					<h4 atr='.$row["product_id"].'>'.$row["title"].'</h4>
					<div class="tilt"><img src="./up_img/'.$row["image"].'" width=185 
					height=241 atr='.$row["product_id"].'/>
					</div>	
					<span atr='.$row["product_id"].'>'.$row["price"].'</span> <span>uah</span><br><br>
					<div class="btn-group">
					<button type="button"  class="btn btn-primary add_cart">
					<i class=" fa fa-shopping-cart fa-lg tilt"aria-hidden="true"></i></button>
					<button type="button" class="btn btn-primary pay" atr="'.$row["product_id"].'">add </button>	 
					</div>	
					</div>
					  ';
					 			
				}
				else{
					$text.='
					<div class="col-lg-3">
					<h4 atr='.$row["product_id"].'>'.$row["title"].'</h4>
					<div class="tilt"><img src="./up_img/'.$row["image"].'" width=185
					 height=241 atr='.$row["product_id"].'/>
					</div>	
					<span atr='.$row["product_id"].'>'.$row["price"].'</span> <span>uah</span><br><br>
					<div class="btn-group">
					<a class="btn btn-primary add_cart" href="#" role="button">
					<i class=" fa fa-shopping-cart fa-lg tilt"
				 aria-hidden="true"></i></a>
					<button type="button" class="btn btn-primary pay" atr="'.$row["product_id"].'">add</button>	 
					</div>	
					</div>
					  ';
					   if($flag==1){				
					$text.='</div>';
					$flag=0;
					}	

				}
				$col++;
				if($col%7==0)$flag=1;

			}
			$text.='</div>';
		
		echo $text;
	} 
 ?>