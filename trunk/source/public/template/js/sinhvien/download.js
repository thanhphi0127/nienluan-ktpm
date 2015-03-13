$(document).ready(function(){
	
	$('input[type=checkbox]').addClass('check');
	$("section.config_download form  fieldset > p:not('.nothide')").hide();
	$("#detail").click(function(){
		$("section.config_download form  fieldset > p:not('.nothide')").toggle(1000);
	});
	
	$('#config_download > form').submit(function(){
		
		var MA_LOPHOCPHAN = $('#MA_LOPHOCPHAN').val();
		if ('0-0' == MA_LOPHOCPHAN){
			$('span.error.TEN_MH').html('Chưa chọn môn học');
			return false;
		}
		return true;
	});
	
	$('#list').click(function(){
		if ($(this).is(':checked')) {
			location.reload();
		}
		else
			$('#list').prop('checked', true);
			
		
	});
	$('fieldset.config_list p > label > input[type=checkbox]').click(function(){			
		
		var des = $(this).val();
		
		$(this).prop('disabled', true);
		$('#list').prop('checked', false);
		var array_list = ['TEN_CV', 'NGAYBD', 'NGAYKT','NGUOIDUOCGIAO', 'THOIGIANUL', 'MOTA' , 'TEN_MUCDO', 'TEN_TINHCHAT'];

		$.each (array_list, function(index, val) {
				if (! $(this).is(':checked')){
					if (val == des){
						$('.review_area table.list tr td:nth-child(' + (eval(index)+2) + ')').css('display','none');
						return;
					}
				}
		});
	});
	
	
	$('input[type=reset]').click(function(){
		location.reload();
	});
	$('#cssmenu ul li.download').css('background','white');
	$('#cssmenu ul li.download a').css('color','black');
});
