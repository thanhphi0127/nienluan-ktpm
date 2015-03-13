$(document).ready(function(){
	$('#taothongbao').hide();
	if ($('input[name=seen_list]').val() != ''){
		var MA_TB  = $('input[name=seen_list]').val();
		$('table.chitiet tr').hide();
		$('table.chitiet tr.' + MA_TB).show();
		if ('gui' == $('input[name=seen_type]').val()){
			$('section.dsthongbaonhan').hide();
			$('#taothongbao').hide();
			$('section.dsthongbaogui').show(200);
		}
			
	}
	
	
	$('a.taothongbao').click(function(){
		$('#taothongbao').slideDown(200);
		
		
	});
	$('a.thongbaogui').click(function(){
		$('section.dsthongbaonhan').hide();
		$('#taothongbao').hide();
		$('section.dsthongbaogui').show(200);
		$('input[name=seen_type]').attr('value',  'gui');
		$('a.thongbaogui').css('cursor', 'default');
		$('a.thongbaogui:hover').css('text-decoration', 'none');
		$('a.thongbaoden').css('cursor', 'pointer');
		$('a.thongbaoden:hover').css('text-decoration', 'underline');
	});
	$('a.thongbaoden').click(function(){
		$('section.dsthongbaogui').hide();
		$('#taothongbao').hide();
		$('section.dsthongbaonhan').show(200);
		$('input[name=seen_type]').attr('value',  'nhan');
		$('a.thongbaoden').css('cursor', 'default');
		$('a.thongbaoden:hover').css('text-decoration', 'none');
		$('a.thongbaogui').css('cursor', 'pointer');
		$('a.thongbaogui:hover').css('text-decoration', 'underline');
	});
	$('#NGUOINHAN').focus(function(){
		$('#tips').show();
	});
	$('#NGUOINHAN').blur(function(){
		$('#tips').fadeOut(300);
	});
	
	$('span.tieude.tbnhan').click(function(){
		var MA_TB = $(this).parent().parent().siblings('input').val();
		//var seen_list = $('input[name=seen_list]').val();
		$('input[name=seen_list]').attr('value',  MA_TB);
		$(this).addClass('lighter');
		$('table.chitiet tr').hide();
		$('table.chitiet tr.' + MA_TB).show();
		$('input[name=update_thongbao]').click();
	});
	
	$('span.tieude.tbgui').click(function(){
		var MA_TB = $(this).parent().parent().siblings('input').val();
		//var seen_list = $('input[name=seen_list]').val();
		$('input[name=seen_list]').attr('value',  MA_TB);
		$(this).addClass('lighter');
		$('table.chitiet tr').hide();
		$('table.chitiet tr.' + MA_TB).show();
		
	});
	
	$('input[name=close]').click(function(){
		$('#taothongbao').hide();
		
	});
	
	$('img.close').click(function(){
		$('#taothongbao').hide();
		
	});
	
	
	
	
	
	
	
});
