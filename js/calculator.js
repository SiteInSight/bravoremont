function calculate() 
{ 
	var rez = $('#calc-total-final');
	var kurs = $('#currency_usd').val();
	var metraj = parseFloat($('#metraj').val().replace(',', '.'));
	var repair_type = $('#repair_type').val()*kurs;
	var house_type = $('#house_type').val();

	var razr = metraj * repair_type * house_type/100;
	
	var itogo = razr.toFixed().replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
	if(itogo == 'NaN'){
		$('#calc-total-final').html('0');
	}else{		
		$('#calc-total-final').html(get_money_format(razr));
	}
}

function get_tooltip(elem){
	var id_option = $(elem).find('option:selected').attr('id_option');
	$.ajax({
		type: "POST",
		url: "https://content.nebo.by/functions/global_controller.php",
		data: { action: 'getCalcTooltip', id : id_option},
		cache: false,
		success: function(data){
			var parent_elem = $(elem).parent();
			if(data!=''){
				parent_elem.find('.tooltip').show();
				parent_elem.find('.tooltip span').html(data);
			}else{
				parent_elem.find('.tooltip').hide();
			}
		}
	});
}

$(document).ready(function(){
	get_tooltip($('#repair_type'));
	get_tooltip($('#house_type'));
});