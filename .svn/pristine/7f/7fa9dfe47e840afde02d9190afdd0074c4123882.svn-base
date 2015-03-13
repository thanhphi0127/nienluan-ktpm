
<script>
	$(function() {
	/*var t = $('#gt').attr('value');
	if (t == 1) { 
		jQuery('#btn_xemchude').click();	
	}
	$('#gt').attr('value', 1);*/
		$('#btn_sm_comment').click(function(){
			$('#show_comment').show();
		});
	});
	
</script>

<!--<form action="" method="post" name="fxemchude">
	<input type="text"  name="sm_machude" value="<?php //echo $_GET['get_tieude']; ?>"/>
    <input type="submit" id="btn_xemchude" name="form_submit" />
</form>-->
<div id="cit_wrapper">
    <header class='quanly'>
		<img src='public/img/quanlycongviec_logo.png'></img>
		<span class='title'>Diễn đàn</span>
    </header> <!-- End header -->

    <div class="widthPanel panel panel-success">
        <div class="panel-body">
            Chào mừng đến với diễn đàn trên CIT_GMS </br>
            Để có thể tham gia thảo luận trên diễn đàn bạn phải đăng ký làm thành viên. Click vào đây để 
            <a href="<?php echo CIT_BASE_URL?>auth/register">đăng ký thành viên</a> diễn đàn.
        </div>
    </div><!--End div widthPanel -->
    
    <div class="widthPanel panel panel-success">
    	<div class="panel-heading">
			<h3><?php foreach($content as $item){ echo $item->tieude;}?></h3>
            Đăng bởi <?php foreach($content as $item){ echo $item->username;}?>&cedil;
			<?php foreach($content as $item){ echo $item->ngaytao;} ?>
                  		
        </div>
        <div class="panel-boding">
        	<div class="content">
            	<div class="posting">
					<?php 
                        foreach($content as $item){ echo $item->noidung;}
                    ?>
                </div>
            </div>
        </div>
    </div> <!-- widthPanel -->

	<!-- Show comment -->
	<div id="show_comment" style="display: none">
    <div class="col-md-3">
    	<div class="thongtin">
        	<div class="avatar">
            	<h3 class="userText"><?php foreach($list_comment as $item){ echo $item->username;} ?></h3>
                <img src="public/img/images.png" width="90px" height="90px"/>
            </div>
            <span class="arrow"><span></span></span>
        </div>
    </div> <!--end div col-md-3-->
    
    <div class="col-md-9">
        <h4><?php foreach($list_comment as $item){ echo $item->tieude;} ?></h4>
        <hr style="margin-bottom: 10px"/>
        <?php
            foreach($list_comment as $item) {
                echo $item->noidung;
            }
        ?>
    </div> <!--End div col-md-9-->
    </div><!--End div show_comment-->
    
    <form action="" method="post">
        <!-- Textarea comment -->
        <textarea name="ta_comment" style="margin-bottom: 0px; margin-top: 5px;" rows="2" cols="10" placeholder="Nhập bình luận của bạn" class="form-control"></textarea><?php echo form_error('noidung'); ?>
        
        <!-- Btn comment -->
        <div class="pull-right">
            <input name="btn_comment" type="submit" value="Bình luận" id="btn_sm_comment" class="btn btn-primary"/>
        </div>
    </form>
</div> <!-- End div cit_wrapper -->