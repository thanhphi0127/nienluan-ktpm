<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='keyword' content="<?php echo isset($seo['keyword']) ? htmlspecialchars($seo['keyword']) : '';?>" />
<meta name='description' content="<?php echo isset($seo['description']) ? htmlspecialchars($seo['description']) : '';?>" />
<title><?php echo isset($seo['title']) ? htmlspecialchars($seo['title']) : '';?></title>
<meta name="viewport" content="width=device-width" />
<base href="<?php echo CIT_BASE_URL;?>" />
<script src='public/template/js/jquery-2.1.1.min.js'></script>
<link rel="stylesheet" type="text/css" href="public/template/css/login.css">
<link rel="stylesheet" type="text/css" href="public/template/css/standardform.css">
<link rel="stylesheet" type="text/css" href="public/template/css/standardcontrol.css">
<link rel="stylesheet" type="text/css" href="public/template/css/common_header.css">
<link rel="stylesheet" type="text/css" href="public/template/css/common_advanced.css">

<link rel="stylesheet" type="text/css" href="public/template/css/manipulation.css">
<link rel="stylesheet" type="text/css" href="public/template/css/normalize.css">

<link rel="stylesheet" href="public/template/css/cssmenu.css">
<script language='javascript' src="public/template/js/cssmenu.js" ></script>

<link rel='stylesheet' href='public/template/css/home_index.css' />
<script language='javascript' src="public/template/js/home.js" ></script>

<script language='javascript' src="public/template/js/top.js" ></script>
<script language='javascript'>
$(document).ready(function(){
	var t = $('#temp').attr('value');
	if (t != 1) {
		$('div.doimatkhau').hide();
	}
	else {
		$('div.doimatkhau').show();
	}
	$('#huybo').click( function () {
		$('div.doimatkhau').hide();
	});
	$('#doimatkhau').click( function () {
		$('div.doimatkhau').show(500);
	});
});
</script>
<?php if ('sinhvien/download' == $template){
			echo "<style >header span.orgfullname{top:21px !important;}span.logo{top:21px !important;}</style>";
			echo "<script language='javascript' src='public/template/js/sinhvien/download.js' ></script>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/sinhvien/download.css'>";

		}
		else if ('sinhvien/quanlynhom' == $template){
				echo "<style >header span.orgfullname{top:21px !important;}span.logo{top:21px !important;}a.btn.btn-danger{height:20px;}</style>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/sinhvien/quanlynhom.css'>";
				
				echo "<script src='public/template/js/sinhvien/quanlynhom.js' language='javascript'></script>";
		}
		else if ('sinhvien/quanlycongviec' == $template) {	
			echo "<style >header span.orgfullname{top:21px !important;}span.logo{top:21px !important;}</style>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/sinhvien/quanlycongviec.css'>";
			echo "<script src='public/template/js/sinhvien/quanlycongviec.js' language='javascript'></script>";
				
			echo "<link href='public/template/js/fullcalendar/fullcalendar.css' rel='stylesheet' />";
			echo "<link href='public/template/js/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />";
			echo "<script src='public/template/js/fullcalendar/lib/moment.min.js'></script>";
			echo "<script src='public/template/js/fullcalendar/fullcalendar.min.js'></script>";
			echo "<script src='public/template/js/calendar.js'></script>";
		}
		else if ('sinhvien/ttcanhan' === $template) {
			echo "<style >header.loginheader{ height:70px;}</style>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/sinhvien/thongtinsinhvien.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.min.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>";
			echo "<script src='public/template/js/sinhvien/ttcanhan.js' language='javascript'>";
			
		} else if('sinhvien/index' === $template) {
			echo "<style >header.loginheader{ height:70px;}</style>";
			
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.min.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/sinhvien/index.css'>";
			
			
		} else if ('sinhvien/diendan' == $template || 'sinhvien/xemchude' == $template) {
			echo '<link rel="stylesheet" type="text/css" href="public/template/css/login.css">
			<link rel="stylesheet" type="text/css" href="public/template/css/standardform.css">
			<link rel="stylesheet" type="text/css" href="public/template/css/standardcontrol.css">
			<link rel="stylesheet" type="text/css" href="public/template/css/normalize.css">
			<link rel="stylesheet" type="text/css" href="public/template/css/common_header.css">
			<link rel="stylesheet" type="text/css" href="public/template/css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="public/template/css/bootstrap.min.css">
			<link rel="stylesheet" href="public/template/css/cssmenu.css">
			<script language="javascript" src="public/template/js/cssmenu.js" ></script>
			<link rel="stylesheet" href="public/template/css/home_index.css" />
			<script language="javascript" src="public/template/js/home.js" ></script>';
		    echo "<script src='public/template/js/diendan.js' language='javascript'></script>";
            echo "<link rel='stylesheet' type='text/css' href='public/template/css/diendan.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/diendan.css'>";
			echo "<script src='public/template/js/giangvien/datatables/jquery.dataTables.js' type='text/javascript'></script>";
		  echo "<script src='public/template/js/giangvien/datatables/dataTables.bootstrap.js' type='text/javascript'></script>";
		  
		  echo "<script type='text/javascript'>";
		  echo "$(function() {";
		  echo "$('#diendan').dataTable({";
		  echo "    'bPaginate': true,";
		  echo "    'bLengthChange': true,";
		  echo "    'bFilter': true,";
		  echo "    'bSort': true,";
		  echo "	  'oPaginate': true,";
		  echo "    'bInfo': true,";
		  echo "    'bAutoWidth': true,";
		  echo " 	 'bStateSave': true,";
		  echo "});";
		  echo "});";
		  echo "</script>";
	}
		
?>

<script src='public/template/js/manipulation.js'></script>

<script>
	$(document).ready(function(){
  $("#notice span").click(function(){
    $("#sinhvien_top iframe").fadeToggle("slow");
	
  });
  
});
  </script>

</head>

<body>

<?php 
	$this->load->view("layout/bluesky/login_top", isset($data)?$data:NULL); 
	$this->load->view("layout/bluesky/sinhvien_top"); 
	$this->load->view ($template, isset($data)?$data:NULL);
	$this->load->view("layout/bluesky/bottom");
?>

</body>
</html>
