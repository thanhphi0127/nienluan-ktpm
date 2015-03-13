$(document).ready(function(){
	$('#sl_mh').change(function(){
		var MA_MH = $('#sl_mh').val();		
		$('#btn_monhoc').attr('href','http://localhost/cit-quanlynhom/giangvien/tiendocongviec/' + MA_MH);
	});
	$('section.reportprocess').hide();
	
	$(".view_workprocess").click(function(){
		$('header.quanly span.title').html("Tiến độ công việc");
		$('section.workprocess').show();
		$('section.reportprocess').hide();
	});
	
	$('.view_reportprocess').click(function(){
		$('section.workprocess').hide();
		$('section.reportprocess').show();
		$('header.quanly span.title').html("Báo cáo tiến độ");
	});
	
	
	/*                         */
	$('span.manipulation').click(function() {
		
		$('section.manipulation').show(1000);
		$('section.manipulation').siblings().css('opacity','0.2');
		if ($(this).hasClass('btnAddtask')){
			$('#addtask').show();
			$('img.manipulation').show();
		}
		else if ($(this).hasClass('btnModifytask')){
			$('#modifytask').show();
			$('img.manipulation').show();
		}
		else if ($(this).hasClass('btnDeletetask')){
			$("#iframe_login").slideDown("slow");
		}
	});
	/* end ----------------*/
	
	/* img manipulation           */
	$('img.manipulation').click(function (){
		
		$('section.manipulation').hide(500);
		$('section.manipulation').siblings().css('opacity','1');
		$('#addtask').hide();
		$('#modifytask').hide();
		$("#iframe_login").slideUp("slow");
		$('img.manipulation').hide();
	});
	
	/*--------------------------*/
	/* title */
	$('a').attr('title','Click để xem chi tiết');

	


	/************************************************
			 Xu ly hien thi theo mon hoc
	************************************************
	$('select#sl_mh').change(function(){
		var TEN_MH = $(this).children(':selected').html();
		$('table#example1 > tbody > tr').hide();
		if ('Tất cả' == TEN_MH) {
			$('table#example1 > tbody > tr').show(100);
		}
		else {
			$('table#example1 > tbody > tr > td:contains('+ TEN_MH +')').parent().show(100);
		}
	});
	
	***********************************************
			 Xu ly hien thi theo hoc ki
	************************************************
	$('select#chonhocki').change(function(){
		var TEN_HK = $(this).children(':selected').html();
		$('table#example1 > tbody > tr').hide();
		if ('Tất cả' == TEN_HK) {
			$('table#example1 > tbody > tr').show(100);
		}
		else {
			$('table#example1 > tbody > tr > td:contains('+ TEN_HK +')').parent().show(100);
		}
		
	});
	*/
	
	
	$('#sel_sl_nhom').change(function(){
		var STT_NHOM = $(this).val();
		$('table.table_tiendo').hide();
		var i=0;
		$('table.table_tiendo').each(function(){
			i++;
			if (i == STT_NHOM)
				$(this).hide();
		});
	});
});
