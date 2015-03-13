<script type='text/javascript'>
            
		function submitform()
		{
		  document.form_list_topic.submit();
		  
		}
		

		function trimSpace(str) {
			return str.replace(/^\s*/, "").replace(/\s*$/, "");
		}

</script>
    <script>
    		
        $(function (){
			var ch = $('#hidden_add').attr('value');
            if (ch == 1) { //Neu khong hop le
				//$('.loginheader').css({'opacity': '0.4'});
				$('.loginheader').css('disable');
				$('#giangvien_top').css({'opacity': '0.4'});
				$('#cit_wrapper').css({'opacity': '0.4'});
                $('#show_add').show(); 
            }
			
			var mod = $('#hidden_modify').attr('value');
			if (1 == mod) {
				$('.loginheader').css({'opacity': '0.4'});
				$('#giangvien_top').css({'opacity': '0.4'});
				$('#cit_wrapper').css({'opacity': '0.4'});
				$('#modify_Topic').show();
			}
			
			$('input.modify').click(function(){
				var ma_chude = $(this).parent('td').parent('tr').find($('.layma')).html();
				ma_chude = trimSpace(ma_chude);
				
				$('#ma_chude').attr('value', ma_chude);
				var tieude = $(this).parent('td').parent('tr').find($('a.laytieude')).html();
				tieude = trimSpace(tieude);

				var noidung = $(this).parent('td').parent('tr').find($('.laynoidung')).html();
				noidung = trimSpace(noidung);
				
				//alert(trangthai);
				$('#tieude').attr('value', tieude);
				$('#noidung').html(noidung);
				$('#modify_Topic').show(1000);
				$('.loginheader').css({'opacity': '0.4'});
				$('#giangvien_top').css({'opacity': '0.4'});
				$('#cit_wrapper').css({'opacity': '0.4'});

			});
			
			$('input.delete').click(function(){
				var dl_ma_chude = $(this).parent('td').parent('tr').find($('.layma')).html();
				dl_ma_chude = trimSpace(dl_ma_chude);
				$('#dl_ma_chude').attr('value', dl_ma_chude);
				//alert(dl_ma_chude);
				$('#delete_Topic').show(1000);
				$('.loginheader').css({'opacity': '0.4'});
				$('#giangvien_top').css({'opacity': '0.4'});
				$('#cit_wrapper').css({'opacity': '0.4'});
			});
			
			$('#delete_cancel').click(function(){
				$('#delete_Topic').hide(1000);
				$('.loginheader').css({'opacity': '1'});
				$('#giangvien_top').css({'opacity': '1'});
				$('#cit_wrapper').css({'opacity': '1'});
			})
			
			$('a.laytieude').click(function(){
				<!--ma_chude-->
				var get_machude = $(this).parent('td').parent('tr').find($('.layma')).html();
				get_machude = trimSpace(get_machude);
				$('#get_machude').attr('value', get_machude);
				<!--tieude-->
				var get_tieude = $(this).parent('td').parent('tr').find($('.laytieude')).html();
				get_tieude = trimSpace(get_tieude);
				$('#get_tieude').attr('value', get_tieude);
				<!--hoten-->
				var get_hoten = $(this).parent('td').parent('tr').find($('.layusername')).html();
				get_hoten = trimSpace(get_hoten);
				$('#get_hoten').attr('value', get_hoten);
				<!--ngaytao-->
				var get_ngaytao = $(this).parent('td').parent('tr').find($('.layngaytao')).html();
				get_ngaytao = trimSpace(get_ngaytao);
				$('#get_ngaytao').attr('value', get_ngaytao);
				<!--trangthai-->
				var get_trangthai = $(this).parent('td').parent('tr').find($('.laytrangthai')).html();
				get_trangthai = trimSpace(get_trangthai);
				$('#get_trangthai').attr('value', get_trangthai);
				<!--noidung-->
				var get_noidung = $(this).parent('td').parent('tr').find($('.laynoidung')).html();
				get_noidung = trimSpace(get_noidung);
				$('#get_noidung').attr('value', get_noidung);
				$('#get_noidung').attr('html', get_noidung);
				//$('#get_noidung').html() = get_noidung;
				//$('#id_form_submit').attr('submit', true);
				jQuery('#id_form_submit').click();
				//submitform();
			})
			
			
			var username = <?php echo $username; ?>;
			
			$('.suachude').each( function(e) {
				if (username == $(this).val()) {
					$(this).parent('td').find($('input[type=image]')).show();
				}
				else {
					$(this).parent('td').find($('input[type=image]')).hide();
				}
			});


			$('.xoachude').each( function(e) {
				if (username == $(this).val()) {
					$(this).parent('td').find($('input[type=image]')).show();
				}
				else {
					$(this).parent('td').find($('input[type=image]')).hide();
				}
			});			


         });
        
    </script>
    
    
<form name="form_list_topic" action="<?php echo CIT_BASE_URL; ?>diendan/xemchude" method="get">
    <input type="hidden" id="get_machude" name="get_machude"/>
    <!--<input type="hidden" id="get_tieude" name="get_tieude"/>
    <input type="hidden" id="get_hoten" name="get_hoten"/>
    <input type="hidden" id="get_trangthai" name="get_trangthai"/>
    <input type="hidden" id="get_noidung" name="get_noidung"/>
    <input type="hidden" id="get_ngaytao" name="get_ngaytao"/>-->
    <input type="submit" id="id_form_submit" name="form_submit" hidden/>
</form>
                


<!-- ----------------------------------------------------------
                    MODIFY TOPIC MODAL
------------------------------------------------------------ -->

<div id="modify_Topic" role="dialog" style="position:absolute; margin-left: 355px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Cập nhật bài viết</h4>
            </div>
            <form name="form_modify" action="" method="post">
                <div class="modal-body">
                    <!-- Text Input -->
                    <div class="form-group">
                        <label>Chủ đề</label>
                        <input id="ma_chude" type="hidden" name="modify[ma_chude]"/>
                        <input id="tieude"  type="text" name="modify[tieude]" class="form-control" value="<?php echo set_value('tieude'); ?>"/>
                        <?php echo form_error('tieude'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="noidung" name="modify[noidung]" class="form-control" rows="2"><?php echo set_value('noidung'); ?></textarea>
                        <?php echo form_error('noidung'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="modify[trangthai]">
                          <option value="Đang thảo luận">Đang thảo luận</option>
                          <option value="Đóng">Đóng</option>
                        </select>
                        
                    </div>
                </div>
                <div class="modal-footer clearfix">
                	<input type="hidden" id="hidden_modify" name="valid_modify" value="<?php if (!empty($check_modify)) echo $check_modify; ?>"/>
                    <input id="btn_cancel_modify" type="button" class="btn btn-danger" data-dismiss="modal" value="Thoát" />
                    <input id="btn_update" name="btn_update_save" type="submit" class="btn btn-primary pull-left" value="Lưu lại"/>
                </div>                
            </form>
        </div>
    </div>
</div>

<!-- ---------------------------------------------------------------------------------
                            ADD TOPIC MODAL
----------------------------------------------------------------------------------- -->
<div id="show_add"  class="add_Topic" role="dialog" style="position:absolute; margin-left: 355px"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Thêm mới bài viết</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <!-- Text input -->
                    
                    <div class="form-group">
                        <label>Chủ đề</label>
                        <input type="text" class="form-control" name="add[tieude]" placeholder="Nhập chủ đề bài viết" value="<?php echo set_value('tieude'); ?>"/>
                        <?php echo form_error('tieude'); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea name="add[noidung]" class="form-control" rows="2" placeholder="Nhập nội dung"><?php echo set_value('noidung'); ?></textarea>
                        <?php echo form_error('noidung'); ?>
                    </div>
                        
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <select class="form-control" name="add[trangthai]">
                          <option value="Đang thảo luận">Đang thảo luận</option>
                          <option value="Đóng">Đóng</option>
                        </select>
                    </div>
                </div>
                
                <div class="modal-footer clearfix">
                    <input type="hidden" id="hidden_add" name="valid_add" value="<?php echo $check_add; ?>" /> 
                    <button id="btn_cancel" type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                    <input id="btn_save" name="btn_add_save" type="submit" class="btn btn-primary pull-left" value="Lưu lại"/>
                </div>
            </form>
        </div>
    </div>
</div>

<!----------------------------------------------------------
                    DELETE TOPIC MODAL
------------------------------------------------------------>
<div id="delete_Topic" role="dialog" style="position:absolute; margin-left: 355px">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Xóa bài viết</h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <img src="<?php echo CIT_BASE_URL?>public/img/warning-6-256.png" width="19px" height="19px"/>
                        Bạn có chắc chắn xóa bài viết này?
                    </div>
                </div>
                
                <!-- Save data to tranfer to controller-->
                <input type="hidden" name="delete[ma_chude]" id="dl_ma_chude"/>
                <!--<input type="text" id="dl_ma_chude"/>-->
                
                
                <div class="modal-footer clearfix">
                    <input type="submit" value="Yes" name="btn_delete" class="btn btn-warning"/>
                    <button type="button" id="delete_cancel" class="btn btn-warning"><img src="<?php echo CIT_BASE_URL?>public/img/delete.png" width="14px" height="14px"/> No</button>
                </div>                
            </form>
        </div>
    </div>
</div>

<!-- -------------------------------------------------------------------------
							CONTENT OF FORUM
-------------------------------------------------------------------------- -->
<div id='cit_wrapper' >
    <header class='quanly' style="height: 55px">
    	<img src='public/img/forum-icon.png' style="height: 50px; width: 50px;"></img>
        <span class='title'>Diễn đàn trao đổi</span>
    </header>

        <!-- Chu de moi nhat-->
        <div class="widthPanel panel panel-success" style="width: 95%; margin:auto;">
            <div class="panel-heading"><b>Chủ đề mới nhất</b></div>
            <div class="panel-body">
                <table class="table table-bordred table-hover" style="margin-bottom:0px">
                    <thead>
                        <th>STT</th>
                        <th>Chủ đề</th>
                        <th>Người khởi tạo</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Nội dung</th>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            foreach ($newTopic as $item) {
                                $i++;
                                echo "<tr>";
                                echo "<td>$i</td>";
								echo "<td hidden class='layma'>
                                            $item->ma_chude
                                        </td>";
                                echo "<td>
                                      <a class='laytieude' title='Nhấp để xem chi tiết chủ đề'>$item->tieude</a>
                                    </td>";
                                echo "<td class='layusername'>
                                        $item->hoten
                                    </td>";
                                echo "<td class='laytrangthai'>
                                        $item->trangthai
                                    </td>";
                                echo "<td class='layngaytao'> 
                                        $item->ngaytao
                                    </td>";
                                echo "<td class='laynoidung'>
                                         $item->noidung
                                    </td>";
                                echo "</tr>";
                            }
                            
                        ?>
                    </tbody>
                </table>
            </div>
        </div> <!--End div widthPanel -->
        
      
        <!--Noi dung-->
        <div class="widthPanel panel panel-success" style="margin: auto; margin-top: 10px; margin-bottom:10px; width: 95%;">
        	<div class="panel-heading" style="font-weight: bold; font-size: 14px">Diễn đàn trao đổi</div>
            <div class="panel-body">
                
                <!--Tim kiem-->
                <div style="margin-bottom: 25px" class="pull-right">
                    <div class="col-sm-6">
                        <input class="inputSearch form-control" placeholder="Chủ đề/Ngày tạo/Người tạo"/>
                    </div>
                    <div class="col-sm-6">
                        <button style="margin-left: 35px" type="submit" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                </div>
                
                <!--Them bai viet-->
                <button name="add[add_Submit]" id="btn_add" class="btn btn-primary">Thêm bài viết</button>
                

                <!--Table-->
                
                    <table class="table table-bordred table-hover">
                        <thead>
                            <th>STT</th>
                            <th>Chủ đề</th>
                            <th>Người khởi tạo</th>
                            <th>Ngày tạo</th>
                            <th>Trạng thái</th>
                            <th>Nội dung</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </thead>
                        <tbody>

                            <?php
                                $i = 0;
                                foreach($list as $item) {
                                    $i++;
                                    echo "<tr>";
									echo "<td>$i</td>";
                                    echo "<td hidden class='layma'>
                                            $item->ma_chude
                                        </td>";
									echo "<td>
                                            <a class='laytieude' title='Nhấp để xem chi tiết chủ đề'>$item->tieude</a>
                                        </td>";
                                    echo "<td class='layusername'>
                                            $item->hoten
                                        </td>";
                                    echo "<td class='layngaytao'>
                                            $item->ngaytao
                                        </td>";
                                    echo "<td class='laytrangthai'>
                                            $item->trangthai
                                        </td>";
                                    echo "<td class='laynoidung'>
                                            $item->noidung
                                        </td>";
                                    echo "<td><input type='image' hidden class='modify'  title='Nhấp để chỉnh sửa chủ đề' value='$item->ma_chude' src='";
                                    echo CIT_BASE_URL;
                                    echo "public/img/pencil-512.png'>
									<input type='hidden' value='$item->username' class='suachude'/>
									</td>";
									
                                    echo "<td><input type='image' hidden title='Nhấp để xóa chủ đề'  class='delete' src='";
                                    echo CIT_BASE_URL;
                                    echo "public/img/trashRed.png'/>
									<input type='hidden' value='$item->username' class='xoachude'/>
									</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>     
</div> <! -- end div cit_ -->
