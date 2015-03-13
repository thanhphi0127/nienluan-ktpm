$(document).ready(function(){
	
	$('#sel_sl_nhom').change(function(){
		var STT_NHOM = $(this).val();
		
		$('table.table_tiendo').hide();
		var i=0;
		$('table.table_tiendo').each(function(){
			i++;
			if (i == parseInt(STT_NHOM))
				$(this).show();
		});
	});
});

