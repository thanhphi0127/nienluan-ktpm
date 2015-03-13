<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name='keyword' content="<?php echo isset($seo['keyword']) ? htmlspecialchars($seo['keyword']) : '';?>" />
<meta name='description' content="<?php echo isset($seo['description']) ? htmlspecialchars($seo['description']) : '';?>" />
<title><?php echo isset($seo['title']) ? htmlspecialchars($seo['title']) : '';?></title>
<meta name="viewport" content="width=device-width" />
<base href="<?php echo CIT_BASE_URL;?>" />
<link rel='stylesheet' type='text/css' href='public/template/css/giangvien/bootstrap.css'>
<link rel='stylesheet' type='text/css' href='public/template/css/style.css'>
<style>
	body {
		background:none;
	}
</style>
</head>
<body>
<?php 
	
	$this->load->view ($template, isset($data)?$data:NULL);
	
?>
</body>
</html>
