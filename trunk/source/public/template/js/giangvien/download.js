$(document).ready(function(){
	$('input[type=checkbox]').addClass('check');
	
	$("section.config_download form fieldset fieldset > p:not('.nothide')").hide();
	$("#detail").click(function(){
		$("section.config_download form fieldset fieldset > p:not('.nothide')").toggle(1000);
	});
	$("section.config_download label input[type=checkbox]").click(function(){
		var $des;
		$des = $(this).get(0).name;
		if (! $(this).is(':checked'))
			$('.'+$des).hide();
		else $('.'+$des).show();
	});
	$('section.config_download label input[name=list]').click(function(){
		if ($(this).is(':checked')) {
			location.reload();
		}
		else 
			$('fieldset.config_list label input[type=checkbox]').prop("checked",false);
		
	});
	$('fieldset.config_list > label > input[type=checkbox]').click(function(){			
	alert('dsd');
	/*	var des = $(this).get(0).name;
		$(this).prop('disabled', true);
		
		
		var array_list = ['taskname', 'startdate', 'enddate', 'estimate', 'description', 'asignee', 'level', 'type'];
		
	
		$.each (array_list, function(index, val) {
			alert(val);
				if (! $(this).is(':checked')){
					if (val == des){
						$('*').hide();
						$('.review_area table.list tr td:nth-child(' + (intval(index) + 1) + ')').css('display','none');
						return;
					}
				}
		});*/
	});
	$('input[type=reset]').click(function(){
		location.reload();
	});
	
	$('#sl_mh').change(function(){
		var MA_MH = $('#sl_mh').val();
		$('#xuat_excel').attr('href','http://localhost/cit-quanlynhom/giangvien/indanhsanhsv?ma_mh=' + MA_MH);
	});
});
