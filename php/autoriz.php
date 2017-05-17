<?php
	include "db_conect.php";
	if(isset($_POST['name'])){
		$name=mysql_real_escape_string(trim($_POST['name']));
		$pass=mysql_real_escape_string(trim($_POST['pass']));
		$sql="SELECT * FROM adminka";
		$result=mysql_query($sql);
		$text='';

		
			while($row=mysql_fetch_array($result))
			{
				if($row['name']==$name&&$row['pass']==$pass){
					$text=1;
					break;
				}
				else trim($text=0);

			}
			
		echo $text;
	} 
 ?>