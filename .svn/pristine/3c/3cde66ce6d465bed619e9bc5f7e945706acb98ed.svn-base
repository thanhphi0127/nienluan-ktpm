<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>He thong quan ly nhom</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>template/assets/css/style.css">
    <script src="<?php echo base_url();?>template/assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>template/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>template/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>template/assets/js/bootstrap.notify.min.js"></script>

  </head>
  
  <body style="font-family:'Times New Roman'">
	<!--TIEU DE -->
	<div class="login-header">
		<div class="col-md-8">
            <p style="float:left">
                <a href="<?php echo base_url();?>index.php/home"><img src="<?php echo base_url();?>template/assets/img/home-icon.png"title="Home"/></a><span>CIT</span><span style="color: #00B200; font-size:18pt;">GMS</span>
            </p>
            <div class="title" style="size:30px"><b>HỆ THỐNG QUẢN LÝ NHÓM SINH VIÊN CNTT</b></div>
		</div> <!--end div col-md-9-->
        
        <div class="col-md-4" style="margin-right:0">
  			<div class="name-home">
            	<h5>Hi, Nguyễn Thanh Phi (<?php echo $username;?>)</h5>
                <a style="float:right" href="<?php echo base_url();?>index.php/home/logout" class="btn btn-danger square-btn-adjust">Logout</a>
            </div>
		</div> <!--end div col-md-3-->
    </div><!--end div login-header-->

    <div class="container" style="padding:0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading" style="padding:0px; border-radius:0px;">
                            <ul class="nav nav-tabs" style="padding:0px; border-radius:0px;">
                                <li><a href="#tab1default" data-toggle="tab">Trang chủ</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/home" data-toggle="tab">Diễn đàn</a></li>
                                <li class="active"><a href="<?php echo base_url(); ?>index.php/home" data-toggle="tab">Quản lý người dùng<span class="caret"></span></a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/home" data-toggle="tab">Quản lý thành viên</a></li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Thông báo<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                        <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>   
    </div>

        
	<!-- NOI DUNG -->
    <div class="container khung" style="font-family:'Times New Roman'">
        <div class="row">
        <div class="col-md-12 nguoidung">
            <div class="row">
            <div class="col-md-4">
            <table class="user_table">
            <tr>
                <td>Sinh Viên</td>
                <td>Giảng Viên</td>
                <td>Admin</td>
            </tr>
            </table>
            <p style="margin-top:10px;"><span> Chọn số lượng hiển thị&nbsp;&nbsp;</span>
            <select class="form-control">
                <option>10</option>
                <option>20</option>
                <option>50</option>
            </select>
            </p>
            
            <!--
                        <p><span>Chọn nhóm người dùng&nbsp;&nbsp;</span>
            <select class="form-control">
                <option>Sinh Viên</option>
                <option>Giảng Viên</option>
                <option>Admin</option>
            </select>
            </p>
            -->
            </div>
            
            <div class="col-md-8">
            	 <div class="form-group input-group">
                     <input type="text" class="form-control" placeholder="Nhập thông tin tìm kiếm">
                     <span class="input-group-btn">
                     <button class="btn btn-default" type="button"><i class="fa fa-search"></i> Tìm kiếm
                     </button>
                     </span>
                  </div>
            </div>
            </div>
        <h5>Thông tin người dùng</h5>
<table id="table_nguoidung" border="1">
               <thead>
                   <tr>
                   	   <th><input type='checkbox' name='1'/></th>
                       <th>STT</th>
                       <th>MSSV</th>
                       <th>Họ tên</th>
                       <th>Giới tính</th>
                       <th>Ngày sinh</th>
                       <th>Địa chỉ</th>
                       <th>Mail</th>
                       <th>Ngành</th>
                       <th>Khóa học</th>
                   </tr>
               </thead>
	<tbody>
 <tr>
    
    <td><input type='checkbox' name='1111319'/></td><td>1</td><td>1111319</td><td>Huỳnh Thanh Nhã</td><td>Nữ</td><td>23-09-1993</td><td>Trần Đề, TP.Sóc Trăng</td><td>nha111319@student.ctu.edu.vn</td><td>Kĩ thuật phần mềm</td><td>37</td>
    
    </tr>
    
    <tr><td><input type='checkbox' name='1111325'/></td><td>2</td><td>1111325</td><td>Nguyễn Thanh Phi</td><td>Nam</td><td>27-01-1993</td><td>Thới Hưng, Cờ Đỏ, TP.Cần Thơ</td><td>phi111325@student.ctu.edu.vn</td><td>Kĩ thuật phần mềm</td><td>37</td></tr>
    
    <tr><td><input type='checkbox' name='1111336'/></td><td>3</td><td>1111336</td><td>Nguyễn Vương Thành Tâm</td><td>Nam</td><td>20-01-1993</td><td>Nguyễn Trung Trực, TP.Sóc Trăng</td><td>tam11336@student.ctu.edu.vn</td><td>Kĩ thuật phần mềm</td><td>37</td></tr>
    
    <tr><td><input type='checkbox' name='1111504'/></td><td>4</td><td>1111504</td><td>Nguyễn Minh Trí</td><td>Nam</td><td>20-06-1993</td><td>Châu Đốc, An Giang</td><td>tri111354@student.ctu.edu.vn</td><td>Kĩ thuật phần mềm</td><td>37</td></tr>
    
    <tr><td><input type='checkbox' name='1111352'/></td><td>5</td><td>1111352</td><td>Nguyễ Gia Trang</td><td>Nữ</td><td>11-07-1993</td><td>Mỹ Xuyên, TP.Sóc Trăng</td><td>nha111319@student.ctu.edu.vn</td><td>Kĩ thuật phần mềm</td><td>37</td></tr>

    <tr><td><input type='checkbox' name='1111359'/></td><td>6</td><td>1111359</td><td>Trần Trọng Nhân</td><td>Nam</td><td>09-01-1993</td><td>Ninh Kiều, TP.Cần Thơ</td><td>anh111359@student.ctu.edu.vn</td><td>Hệ thống thông tin</td><td>37</td></tr>
    
    <tr>
    <td><input type='checkbox' name='3113687'/></td><td>7</td><td>1113687</td><td>Pham Trung Tính</td><td>Nam</td><td>02-05-1993</td><td>Long Mỹ, Hậu Giang</td><td>tuan113687@student.ctu.edu.vn</td><td>Mạng máy tính</td><td>37</td>
    </tr>

    <tr><td><input type='checkbox' name='1234567'/></td><td>8</td><td>1111715</td><td>Nguyễn Minh Tuấn</td><td>Nam</td><td>16-04-1993</td><td>Long Xuyên, An Giang</td><td>nha111319@student.ctu.edu.vn</td><td>Kĩ thuật phần mềm</td><td>37</td></tr>
    
    <tr><td><input type='checkbox' name='123456799'/></td><td>9</td><td>1111987</td><td>Huỳnh Trần Tuấn Anh</td><td>Nam</td><td>06-05-1993</td><td>Cần Thơ</td><td>anh111987@student.ctu.edu.vn</td><td>Hệ thống thông tin</td><td>37</td></tr>
    
    <tr><td><input type='checkbox' name='Admin'/></td><td>10</td><td>1111357</td><td>Phạm Thị Hương</td><td>Nữ</td><td>01-11-1993</td><td>Tam Bình, Vĩnh Long</td><td>huong111357@student.ctu.edu.vn</td><td>Kĩ thuật phần mềm</td><td>37</td></tr>	
    </tbody>
              <tfoot>
                   	   <th><input type='checkbox' name=''/></th>
                       <th>STT</th>
                       <th>MSSV</th>
                       <th>Họ tên</th>
                       <th>Giới tính</th>
                       <th>Ngày sinh</th>
                       <th>Địa chỉ</th>
                       <th>Mail</th>
                       <th>Ngành</th>
                       <th>Khóa học</th>
              </tfoot>
           </table>
           <div class="row">
           <div class="col-md-4"><p class="tongso">Hiển thị từ 1 đến 10 trong tổng số 293 người dùng</p></div>
             <div class="col-md-8">
                    <p class="sotrang">
                        <input type="button"  class="btn btn-info list_btn" value="<< Trang đầu"</input>
                        <input type="button" class="btn btn-default btn-xs" value="Trước"</input>
                        <input type="button" class="btn btn-success btn-xs" value="1"</input>
                        <input type="button" class="btn btn-default btn-xs" value="2"</input>
                        <input type="button" class="btn btn-default btn-xs" value="3"</input>
                        <input type="button" class="btn btn-default btn-xs" value="4"</input>
                        <input type="button" class="btn btn-default btn-xs" value="5"</input>
                        <input type="text" style="width: 35px; height:25px"/>
                        <input type="button" class="btn btn-default btn-xs" value="Chuyển đến"</input>
                        <input type="button" class="btn btn-default btn-xs" value="Kế tiếp"</input>
                        <input type="button" class="btn btn-info list_btn" value=">> Trang cuối"</input></p>
             </div><!--end div col-md-8-->
    
         </div><!--end div row-->
         
         <div class="row btn_border">
         <div class="col-md-2"></div>
         	<div class="col-md-8 btn_nguoidung">
				<button class="btn btn-default"><i class="fa fa-refresh"></i> Làm mới</button>
				<button class="btn btn-default"><i class="fa fa-dedent"></i> Thêm</button>
                <button class="btn btn-default"><i class="fa fa-edit"></i> Cập nhật</button>
				<button class="btn btn-default"><i class="fa fa-pencil"></i> Xóa</button>
                <div style="background-color:#CCC"
            </div>
            <div class="col-md-2"></div>
         </div><!--end div row -->
         
        </div>
        <!--end div col-md-12-->
<!--        
        <div class="col-md-2" style=" border:1px solid red">
        	<div ><input class="btn btn-success" type="button" value="Luu lai" /></div>
			<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Default <span class="caret"></span></button>
							
            <div class="col-md-7">
            	<p class="sotrang" style="margin-top: 35px">
                	<input type="button"  class="btn btn-info list_btn" value="<< Trang đầu"</input>
                	<input type="button" class="btn btn-default btn-xs" value="Trước"</input>
                	<input type="button" class="btn btn-default btn-xs" value="1"</input>
                    <input type="button" class="btn btn-default btn-xs" value="2"</input>
                    <input type="text" style="width: 35px; height:25px"/>
                    <input type="button" class="btn btn-default btn-xs" value="Chuyển đến"</input>
                    <input type="button" class="btn btn-default btn-xs" value="Kế tiếp"</input>
                	<input type="button" class="btn btn-info list_btn" value=">> Trang cuối"</input></p>
            </div>


        </div><!--end div col-md-3 -->
        
    	</div><!--end div row-->
	</div><!--end div contener-->
    
    
            <br />
		<div style="border: 1px dashed #F0F5F5;"></div>
		<div class="footer">
        <div class="container">
        <br />
			<p>Khoa Công nghệ Thông tin & Truyền thông - Trường Đại học Cần Thơ</p>
			<p>Số 01 Lý Tự Trọng, Q. Ninh Kiều, TP. Cần Thơ, Việt Nam; Điện thoại: 84 710 3831301; Fax: 84 710 3830841</p>
            </div>
		</div>
		<hr />
        <br /><br />
    

</body>
</html>
