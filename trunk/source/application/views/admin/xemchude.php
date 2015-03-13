
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
    	<div style="height: 40px; float: left; margin-left: 10px; "><a style="width: 100px" href="diendan" class="btn btn-primary btn-sm" title="Nhấp để trở lại trang trước" >Trở lại</a></div>
		<img src='public/img/Comment-add.png' width="50px" height="50px"></img>
		<span class='title'>Chi tiết chủ đề</span>
    </header> <!-- End header -->

    
    <div class="widthPanel panel panel-success" style="width: 95%; margin: auto; border-radius: 2px;">
    	<div class="panel-heading" style="height: 40px;">
			<h4><?php foreach($content as $item){ echo '#'.$item->ma_chude.' '; echo $item->tieude;}?>
            <i><span class="xemchude_header">Đăng bởi: <?php foreach($content as $item){ echo $item->hoten;}?>&cedil;
			Ngày: <?php foreach($content as $item){ echo $item->ngaytao;} ?></span></h4></i>
                  		
        </div>
        <div class="panel-boding">
			<div class="noidung-chude">
					<?php 
                        foreach($content as $item){ 
							echo $item->noidung;
						}
                    ?>
            </div>
                        
            <?php 
                foreach($list_comment as $item){
                echo '<div id="show_comment">
                    <div class="thongtin">
                        <div class="avatar">
                            '.$item->hoten.'                     
						 </div>
                        <span class="arrow"></span>
                    </div>';
					
                    echo '
                    <div class="noidung-binhluan">
                        '.$item->noidung.'
						<p style="text-align: right">- <i>Đăng lúc: '.$item->thoigian.'</i></p>
					</div> 
			    </div><br/><!--End div show_comment-->  ';           
               }
               ?>
    
        </div>
        
            <form action="" method="post">
                <!-- Textarea comment -->
                <textarea name="ta_comment" style="margin-bottom: 0px; margin:5px; width: 1100px;" rows="3" cols="100" placeholder="Nhập bình luận của bạn" class="form-control"></textarea><?php echo form_error('noidung'); ?>
                
                <!-- Btn comment -->
                <div class="pull-right">
                    <input name="btn_comment" type="submit" value="Bình luận" id="btn_sm_comment" class="btn btn-primary"/>
                </div>
            </form>
            <br />
            <br />
            <br />
            
    </div> <!-- widthPanel --> 

</div> <!-- End div cit_wrapper -->