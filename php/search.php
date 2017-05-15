<?php
	include "db_conect.php";
	if(isset($_POST['search'])){
		$search=mysql_real_escape_string(trim($_POST['search']));
		$sql="SELECT * FROM about";
		$result=mysql_query($sql);
		$text='<h1>xzzz</h1>';

		
			while($row=mysql_fetch_array($result))
			{
				$text="<h3>".$row['title']."</h3>";
				$text.="<img src='./image/".$row['logo']."' width=200 height=135 />";
				$text.="<p id='about'>".$row['text']."</p>";

			}
			
		echo $text;
	} 
 ?>