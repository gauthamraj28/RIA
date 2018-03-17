$(document).ready(function(){
	
   //Mega search 
	$('#search').click(function(){
		//alert($('select[name="country"]').val());
		
		$.post("load.php", 
			{
			
			//mega: $('input[name=mega_search]:checked').val(),
			mega: $('#text1').val()
			//select1:$('#select1').val()
			}
		);
		
	});

	//For the horizontal TABS
	/*
	//state response
	$('#state').click( function(){
    $.post("state.php",{},function(data){
		$('#state_response').html(data);
	}
	);
  });
	//crd response
	$('#crd').click( function(){
    $.post("crd.php",{},function(data){
		$('#crd_response').html(data);
	}
	);
  });
  
  //city response
  $('#city').click( function(){
    $.post("city.php",{},function(data){
		$('#city_response').html(data);
	}
	);
  });
	
	//postal response
	$('#postal').click( function(){
    $.post("postal.php",{},function(data){
		$('#postal_response').html(data);
	}
	);
  });
*/
	//toggle button to select all states
	$('#selectAll').on('click',()=>{
		alert("hello");
		//if($('#selectAll').prop('checked')==true)
		//	$('.codes').prop('checked', true);
		//else 
		//$('.codes').prop('checked', false);
	});
	
	/*
	//Get the checked states checkboxes as alert
	$("input#state-checked").click(function(){
            var favorite = [];
            $.each($("input[name='codes']:checked"), function(){            
                favorite.push($(this).val());
            });
			
			$.post("fetch.php", 
			{
			mega:favourite,
			}, 
			function(data){
				$('#states-list').html(data);
			}
		);
		
            
        });
*/		
});//enf or ready function