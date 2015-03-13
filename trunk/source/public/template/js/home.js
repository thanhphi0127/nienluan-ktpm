$(document).ready(function(){
  $('img.closeall').click(function(){
		location.reload();
		
	});
	$('#menu_thongbao').parent().click(function(){
		if ($('#frame_thongbao').css('display') == 'none') {
			$('#frame_thongbao').fadeIn(300);	
			$('#frame_thongbao').css('display','block');	
			$('#cit_wrapper').css('opacity', '0.2');
			$('body').css('background','#FFF');
		}
		else {
			$('#frame_thongbao').fadeOut("slow");	
			$('#frame_thongbao').css('display','none');		
			$('#cit_wrapper').css('opacity', '1');
			$('body').css('background','#EFF8FF');
		}
		
	});
});
