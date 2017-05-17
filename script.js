$(document).ready(function(){
	//------------------------------------------zapros k mysql o tovare------------------------------->
	$('#menu li:first').click(function(){
		$.ajax({
			beforeSend: function(){},
			type:"POST",
			url:"php/search.php",
			data: "search=",
			success: function(response){
				$('.result').html(response);
				},
			complete: function(){
				//$('#content').css({'color':'red','font-size':'20px'});
			}
		});
	});
	

	$('#menu li').on('click',function(){
		$('#menu li').css({'backgroundColor':'#E4E8F3','border':'0px solid #0041F3','padding-top':'1.7%'});
		$(this).css({'borderTop':'4px solid #0041F3','borderBottom':'0px solid white','paddingTop':'1.9%','backgroundColor':'white'});

		});
	
	//----------------click recept---------------
	$('#recipe').click(function(){
		$.ajax({
			beforeSend: function(){},
			type:"POST",
			url:"php/recept.php",
			data: "search=",
			success: function(back){
				//alert(back);
				$('.result').html(back);
				},
			complete: function(){
				//$('#content').css({'color':'red','font-size':'20px'});
				}
		});
	});

	var flag=false;
	var i=1;
	$('#log').click(function(){
		if(flag){
			$(this).html('<i class="fa fa-sign-out" aria-hidden="true"></i>');
			$(".result").html("<h1>Сессия окончена...</h1>");
			$(".result").fadeIn(2000,function(){
				$('#menu li:first').trigger('click');
			});
			flag=false;
		}
		else {
			$(".result").html($('.autoriz').html())
			$(this).html('<i class="fa fa-sign-in" aria-hidden="true"></i>');
		}
		if(flag==true)
		i++;
	})
	
	$('.result').on('click','.btn-info-outline',function(){
		$.ajax({
			beforeSend: function(){},
			type:"POST",
			url:"php/autoriz.php",
			data: {name:$(".name").val(),pass:$(".pass").val()},
			success: function(response){
				if(+(response)==1){
					$('.result').html("Успешно!");
					$('.result').html("<button type='button' class='btn btn-secondary'>Secondary</button>"+
					"<button type='button' class='btn btn-secondary'>Secondary</button>"+
					"<button type='button' class='btn btn-secondary'>Secondary</button>");
					flag=true;
				}
				},
			complete: function(){
				//$('#content').css({'color':'red','font-size':'20px'});
			}
		});
		$('.result').html("<button type='button' class='btn btn-secondary'>Мои блюда</button>"+
					"<button type='button' class='btn btn-secondary'>Добавить</button>"+
					"<button type='button' class='btn btn-secondary'>Выйти</button>"
					);
	});	



		
		
		
		
		
		
		
		
						   
});