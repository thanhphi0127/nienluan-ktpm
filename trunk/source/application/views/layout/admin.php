<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='keyword' content="<?php echo isset($seo['keyword']) ? htmlspecialchars($seo['keyword']) : '';?>" />
<meta name='description' content="<?php echo isset($seo['description']) ? htmlspecialchars($seo['description']) : '';?>" />
<title><?php echo isset($seo['title']) ? htmlspecialchars($seo['title']) : '';?></title>
<meta name="viewport" content="width=device-width" />
<base href="<?php echo CIT_BASE_URL;?>" />

<link rel="stylesheet" type="text/css" href="public/template/css/login.css">


<link rel="stylesheet" href="public/template/css/cssmenu.css">
<script language='javascript' src="public/template/js/cssmenu.js" ></script>

<link rel='stylesheet' href='public/template/css/home_index.css' />
<script language='javascript' src="public/template/js/home.js" ></script>
<script src='public/template/js/jquery-2.1.1.min.js'></script>

<?php if ('admin/download' == $template){

		}
		else if ('admin/index' == $template){
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/index.css'>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/bootstrap.css'>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/bootstrap-theme.min.css'>";
		}
		else if ('admin/quanlysinhvien' == $template ) {
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/style.css'>";
				
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/custom.css'>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/bootstrap.css'>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/bootstrap-theme.min.css'>";

		    	echo "<script src='public/template/js/admin/jquery-ui-1.10.2.min.js'></script>";
    			echo "<script src='public/template/js/admin/bootstrap.js'></script>";
    			echo "<script src='public/template/js/admin/bootstrap.min.js'></script>";
				echo "<script src='public/template/js/admin/quanlysinhvien1.js'></script>";
				echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js'></script>";
				echo "<script src='public/template/js/admin/jquery.min.js'></script>";
				echo "<script src='public/template/js/admin/datatables/jquery.dataTables.js' type='text/javascript'></script>";
				echo "<script src='public/template/js/admin/datatables/dataTables.bootstrap.js' type='text/javascript'></script>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/quanlysinhvien.css'>";
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
		else if ('admin/quanlygiangvien' == $template) {
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/style.css'>";
				
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/custom.css'>";
				
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/bootstrap.css'>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/bootstrap-theme.min.css'>";

		    	echo "<script src='public/template/js/admin/jquery-ui-1.10.2.min.js'></script>";
    			echo "<script src='public/template/js/admin/bootstrap.js'></script>";
    			echo "<script src='public/template/js/admin/bootstrap.min.js'></script>";
				echo "<script src='public/template/js/admin/quanlysinhvien1.js'></script>";
				echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js'></script>";
				echo "<script src='public/template/js/admin/jquery.min.js'></script>";
				echo "<script src='public/template/js/admin/datatables/jquery.dataTables.js' type='text/javascript'></script>";
				echo "<script src='public/template/js/admin/datatables/dataTables.bootstrap.js' type='text/javascript'></script>";
				echo "<link rel='stylesheet' type='text/css' href='public/template/css/admin/quanlygiangvien.css'>";
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
	} else if ('admin/diendan' == $template || 'admin/xemchude' == $template) {
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
	$this->load->view ('layout/bluesky/login_top');
	$this->load->view ('layout/bluesky/admin_top');
	$this->load->view ($template, isset($data)?$data:NULL);
	$this->load->view ('layout/bluesky/bottom.php');
?>
</body>
</html>