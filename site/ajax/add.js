
function add_order(name){
	var total = $('#List').html();
	$.post('treatment_order_add.php',{name:name,total:total},function(data){
		$('#List').html(data);
				});	
}


function add_cost(name){
	var cost = $('#List2').html();
	var total = $('#List').html();
	$.post('treatment_cost_add.php',{name:name,cost:cost},function(data){
		$('#List2').html(data);
				});	
}





/*
function article(name){
	var n = $('#nombre').val();
	$.post('treatment_nbr_article_add.php',{name:name,n:n},function(data){
		$('#nombre').val(data);
				});
	
}*/