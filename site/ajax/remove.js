function remove_cost(name){
	var cost = $('#List2').html();
	var total = $('#List').html();
	$.post('treatment_cost_remove.php',{name:name,total:total,cost:cost},function(data){
		$('#List2').html(data);

				});
}

function remove_order(name){
	var cost = $('#List2').html();
	var total = $('#List').html();
	$.post('treatment_order_remove.php',{name:name,total:total,cost:cost},function(data){
		$('#List').html(data);
				});
}