<header class='loginheader' >
	
		<!--<img class='logo' src="<?php echo CIT_BASE_URL;?>public/img/home-icon.png" title="Home"/>-->
		<span class='logo'><a class='atrangchu' href='<?php echo CIT_BASE_URL.'home/index';?>'>CITGMS</a></span>
		<span class='orgfullname'> HỆ THỐNG QUẢN LÝ NHÓM SINH VIÊN CNTT</span>
        <span class="hello">
			<?php if (isset($hoten) && !empty($hoten)){
				echo "Chào, ";
					foreach($hoten as $row) {
						echo $row->hoten; 
					} 
				}
			?> 
			<?php if (isset($username) && !empty($username) ){
						echo "(".$username; 
						echo ") ";
						echo '<a href="'.CIT_BASE_URL.'auth/logout'.'" class="btn btn-danger  btn-sm square-btn-adjust" title="Nhấp để đăng xuất">Logout</a>';
				}
			?>
        </span>

</header>


