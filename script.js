$(document).ready(function(){
	//------------------------------------------zapros k mysql o tovare------------------------------->
	$.ajax({
		beforeSend: function(){},
		type:"POST",
		url:"php/search.php",
		data: "search=",
		success: function(response){
			$('#content').html(response);
			},
		complete: function(){
			//$('#content').css({'color':'red','font-size':'20px'});
		}
	});
	$('#menu li').on('click',function(){
		$('#menu li').css({'backgroundColor':'#E4E8F3','border':'0px solid #0041F3','padding-top':'1.7%'});
		$(this).css({'borderTop':'4px solid #0041F3','borderBottom':'0px solid white','paddingTop':'1.9%','backgroundColor':'white'});

		});
	var i=1;
	$('#log').click(function(){
		if(i%2==0){
			$(this).html('<i class="fa fa-sign-in" aria-hidden="true"></i>');
		}
		else $(this).html('<i class="fa fa-sign-out" aria-hidden="true"></i>');
		i++;
	})
	
		



		
		
		
		
		
		
		
		
						   
});