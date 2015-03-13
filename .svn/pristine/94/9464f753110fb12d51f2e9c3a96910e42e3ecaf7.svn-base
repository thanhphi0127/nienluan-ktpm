<!DOCTYPE html>
<html><head>
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
<link rel="stylesheet" type="text/css" href="public/template/css/normalize.css">
<link rel="stylesheet" type="text/css" href="public/template/css/manipulation.css">
<link rel="stylesheet" type="text/css" href="public/template/css/common_advanced.css">
<link rel="stylesheet" type="text/css" href="public/template/css/common_header.css">

<link rel="stylesheet" type="text/css" href="public/template/css/manipulation.css">
<script src='public/template/js/manipulation.js'></script>

<link rel="stylesheet" href="public/template/css/cssmenu.css">
<script language='javascript' src="public/template/js/cssmenu.js" ></script>

<link rel='stylesheet' href='public/template/css/home_index.css' />

<script language='javascript' src="public/template/js/home.js" ></script>
<script language='javascript' src="public/template/js/top.js" ></script>
<style>
	header.loginheader{
		height:70px;
	}
</style>




<?php if ('giangvien/download' == $template || 'giangvien/danhsachsinhvien' == $template ){
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/bootstrap.css'>";
			echo "<script language='javascript' src='public/template/js/giangvien/download.js' ></script>";
			
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/custom.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/style.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/download.css'>";
		}
		else if ('giangvien/quanlymaunhom' == $template){
				echo "<style >header span.orgfullname{top:21px;}span.logo{top:21px !important;}</style>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/quanlymaunhom.css'>";
				echo "<script src='public/template/js/giangvien/quanlymaunhom.js' language='javascript'></script>";				
		}
		else if ('giangvien/tiendocongviec' == $template) {
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/quanlysinhvien.css'>";
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/style.css'>";	
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/bootstrap.css'>";
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/bootstrap-theme.min.css'>";
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/custom.css'>";
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/tiendocongviec.css'>";
		  echo "<script src='public/template/js/giangvien/tiendocongviec.js' language='javascript'></script>";  
		  echo "<script src='public/template/js/giangvien/jquery-ui-1.10.2.min.js'></script>";
		  echo "<script src='public/template/js/giangvien/bootstrap.js'></script>";
		  echo "<script src='public/template/js/giangvien/bootstrap.min.js'></script>";
		  /*echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js'></script>"; */
		  echo "<script src='public/template/js/giangvien/jquery.min.js'></script>";
		  echo "<script src='public/template/js/giangvien/datatables/jquery.dataTables.js' type='text/javascript'></script>";
		  echo "<script src='public/template/js/giangvien/datatables/dataTables.bootstrap.js' type='text/javascript'></script>";
		  
		  echo "<script type='text/javascript'>";
		  echo "$(function() {";
		  echo "$('#example1').dataTable({";
		  echo "    'bPaginate': true,";
		  echo "    'bLengthChange': true,";
		  echo "    'bFilter': true,";
		  echo "    'bSort': true,";
		  echo "	  'oPaginate': true,";
		  echo "    'bInfo': true,";
		  echo "    'bAutoWidth': false,";
		  echo " 	 'bStateSave': true,";
		  echo "});";
		  echo "});";
		  echo "</script>";
				
		}
		else if ('giangvien/thongke' == $template) {
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/custom.css'>";	
		  echo "<script src='public/template/js/giangvien/thongke.js' language='javascript'></script>";
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/style.css'>";
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/quanlysinhvien.css'>";
		  		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/bootstrap.css'>";
		  echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/bootstrap-theme.min.css'>";
		   echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/thongke.css'>";
		  echo "<script src='public/template/js/giangvien/datatables/jquery.dataTables.js' type='text/javascript'></script>";
		  echo "<script src='public/template/js/giangvien/datatables/dataTables.bootstrap.js' type='text/javascript'></script>";
		  echo "<script src='public/template/js/giangvien/thongke.js' type='text/javascript'></script>";
		 
		}
		else if ('giangvien/bieudocongviec' == $template) {
			
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.min.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/bieudocongviec.css'>";
			echo "<script src='public/template/js/giangvien/bieudocongviec.js' language='javascript'></script>";
			
			//Css cho bieu do
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/font-awesome.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/js/giangvien/morris/morris-0.4.3.min.css'>";

			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/custom.css'>";

			//Js cho bieu do
			echo "<script src='public/template/js/giangvien/jquery-1.10.2.js' language='javascript'></script>";
			echo "<script src='public/template/js/giangvien/bootstrap.min.js' language='javascript'></script>";
			echo "<script src='public/template/js/giangvien/jquery.metisMenu.js' language='javascript'></script>";
			echo "<script src='public/template/js/giangvien/morris/raphael-2.1.0.min.js' language='javascript'></script>";
			echo "<script src='public/template/js/giangvien/morris/morris.js' language='javascript'></script>";
			/*echo "<script src='public/template/js/giangvien/custom.js' language='javascript'></script>"; */
    
		} 
		else if ('giangvien/thongtingiangvien' == $template) {
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.min.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>";
			echo "<script src='public/template/js/giangvien/thongtingiangvien.js' language='javascript'>";
		} 
		else if ('giangvien/index' == $template) {
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.min.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/index.css'>";
			echo "<script src='public/template/js/giangvien/jquery.min.js'></script>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>";
			//echo "<script src='public/template/js/giangvien/thongtingiangvien.js' language='javascript'>";
						
		} 
		else if ('giangvien/xembaocaotiendo' == $template) {
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.min.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>";
		} 
		else if('giangvien/thongbao' == $template) {
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/bootstrap.min.css'>";
			echo "<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>";
		} else if ('giangvien/diendan' == $template || 'giangvien/xemchude' == $template) {
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
			

	}
		
		
?>
<script src="public/template/js/jquery-alerts/jquery.alerts.js" type="text/javascript"></script>
<script src="public/template/js/jquery-alerts/jquery.dragable.js" type="text/javascript"></script>
		<link href="public/template/js/jquery-alerts/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />

<script>
	$(document).ready(function(){
	
  $("#notice span").click(function(){
    $("#giangvien_top iframe").fadeToggle("slow");
  });
});

</script>
</head>
<body>
<?php 
	$this->load->view ('layout/bluesky/login_top', isset($data)?$data:NULL);
	$this->load->view ('layout/bluesky/giangvien_top');
	$this->load->view ($template, isset($data)?$data:NULL);
	$this->load->view ('layout/bluesky/bottom.php');
?>
</body>
</html>
