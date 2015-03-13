

$(document).ready(function(){
	//////////////////////////////////////////////////////
	//Kiem tra du lieu: Neu khong hop he thi hien thi lai
	var t = $('#temp').attr('value');
	if (t != 1)
		$('#hienthi_mk').hide();
	else {
		$('#hienthi_mk').show();
	}
	//////////////////////////////////////////////////////
	
	$('#huybo').click( function () {
		$('#hienthi_mk').hide();
	});
	$('#doimatkhau').click( function () {
		$('#hienthi_mk').show(500);
	});
	
	$('#luulai').click( function () {
		//$('#hienthi_mk').hide();

		
	});

	
	$('#cssmenu ul li.thongtincanhan').css('background','white');
	$('#cssmenu ul li.thongtincanhan a').css('color','black');
});

