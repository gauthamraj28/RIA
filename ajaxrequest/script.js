$(document).ready(function(){

	$('#formsubmit').click(function(){
		$.post("submit.php", 
			{fname: $('#fname').val(), surname: $('#surname').val()}, 
			function(data){
				$('#response').html(data);
			}
		);
		
	});

});