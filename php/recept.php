<?php
	include "db_conect.php";
	if(isset($_POST['search'])){
		$search=mysql_real_escape_string(trim($_POST['search']));
		$sql="SELECT * FROM meals  ";
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
									
					<div class="col-lg-3">
					<h4 atr='.$row["id"].'>'.$row["title"].'</h4>
					<img src="./image/'.$row["img"].'"  atr='.$row["id"].'/>
						
					<p atr='.$row["id"].'>'.$row["minDsc"].'</p> 					
					<p atr='.$row["id"].'>'.$row["author"].'</p>
					<span atr='.$row["id"].'>'.$row["data"].'</span><br>
					<button type="button" class="btn btn-link" atr="'.$row["id"].'">click me... </button>	 
						
					</div>
					  ';
					 			
				}
				else{
					$text.='
					<div class="col-lg-3">
					<h4 atr='.$row["id"].'>'.$row["title"].'</h4>
					<div class="tilt"><img src="./image/'.$row["img"].'"  atr='.$row["id"].'/>
					</div>	
					<span atr='.$row["id"].'>'.$row["minDsc"].'</span> <span></span><br><br>
					<div class="btn-group">
					<button type="button"  class="btn btn-primary add_cart">
					<i class=" fa fa-shopping-cart fa-lg tilt"aria-hidden="true"></i></button>
					<button type="button" class="btn btn-primary pay" atr="'.$row["id"].'">подробнее... </button>	 
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