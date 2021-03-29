function sans(){

	$.post('treatment_no_allergen.php',function(data){
		$('.dessous').hide();
				});	
	

}

	function add_cost(name){
	var cost = $('#List2').html();
	var total = $('#List').html();
	$.post('treatment_cost_add.php',{name:name,cost:cost},function(data){
		$('#List2').html(data);
				});	
}



    $(function(){
        var a = $('#valeur[2]').val();
        alert(a);
                
                for(i=1;i<21;i++){
                    var e = $('#valeur['+i+']').val();
                    alert(e);
                    if (e != FALSE)
                       $('div[class="X"]').hide();
                }

                $(':checkbox#H:checked').val(); // Lit l'état du boutton check H, renvoie true si le boutton est séléctionné sinon false.
                

              });