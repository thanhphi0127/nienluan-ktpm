<section id='cit_wrapper' >
	<header class='quanly'>
		<span class='title'>Tiến độ công việc</span>
	</header>
	<nav class='menu_quanly'>
			<ul class='main'>
			   <li class='main'><a  class='main view_workprocess'>Xem tiến độ công việc</a>  </li>
			   <li class='main'><a class='main view_reportprocess'>Xem báo cáo tiến độ</a> </li>			   
			</ul>
	</nav>
	
	<section class='list workprocess'>
		<header class='tab workprocess'>
			
			<ul>
				<li>
				<label>Xem lần lượt
								<select name='orderby'>
									<option>--1 nhóm--</option>
									<option>--2 nhóm--</option>
									<option>--3 nhóm-</option>
								</select>
				</label><br/>
				</li>
				<a href='<?php echo CIT_BASE_URL;?>giangvien/bieudocongviec'><span  class="btnAMD">Xem biểu đồ</span></a>
				</li>
			</ul>
			
		</header>
		<section class='view'>
			<section class='advance'>
				<div class='search'>
					<form action='' method='post'>
					<p>
						<label><div class='div_title'>Môn học giảng dạy</div>
							<select name='subject'>
								<option>--Tất cả-</option>
								<option>--Phân tích thiết kế hệ thống thông tin--</option>
								<option>--Niên luận kỹ thuật phần mềm-</option>
							</select> 
						</label>
					</p>
					
					<p><div class='div_title'>Tìm nhóm</div>
								<input type='text' class='text'  placeholder='Nhập stt nhóm'/>
								<input type='submit' value='Tìm' class='btnFind'  />
						</label>
					</p>
					
					</form>
				</div>
				<div class='tool'>
					
				</div>
			</section>
			<div class='list workprocess'>
				<div class='sub1'>
					
					<table>
						<tr><th><input type='checkbox' value='checkall'/></th>
							<th><span class='sort'>Môn  <img src='public/img/downarrowicon.png'></img></span></th>
							<th><span class='sort'>Nhóm  <img src='public/img/downarrowicon.png'></img></span></th>
							<th><span class='sort'>Đề tài  <img src='public/img/downarrowicon.png'></img></span></th>
							<th><span class='sort'>Nhóm trưởng <img src='public/img/downarrowicon.png'></img></span></th>
							
						<tr > 
						<tr > 
							
							<td class='center'><input type='checkbox' value='checkall'/></td>
							<td><a>Niên luận kỹ thuật phần mềm</a></td>
							<td><a>1</a></td>
							<td>Quản lý trường học</td>
							<td>Nguyễn Văn A</td>
							
						</tr>
						<tr>
							
							<td class='center'><input type='checkbox' value='checkall'/></td>
							<td><a>Niên luận kỹ thuật phần mềm</a></td>
							<td><a>2</a></td>
							<td>Quản lý nhà thuốc bán lẻ</td>
							<td>Trần Thị C</td>
							
						</tr>
							<td class='center'><input type='checkbox' value='checkall'/></td>
							<td><a>Phân tích thiết kế hệ thống thông tin</a></td>
							<td><a>1</a></td>
							<td>Quản lý khách sạn</td>
							<td>Nguyễn Văn D</td>
							
						</tr>
						<tr>
							<td class='center'><input type='checkbox' value='checkall'/></td>
							<td><a>Phân tích thiết kế hệ thống thông tin</a></td>
							<td><a>2</a></td>
							<td>Quản lý nhà trọ</td>
							<td>Trần Thị B</td>
							
						</tr>
						
					</table>
					<section class='pagination'>
						<ul>
							<li><a href='#'>Trang đầu</a></li>
							<li><a href='#'>Lùi lại</a></li>
							<li><a href='#'>1</a></li>
							<li><a href='#'>Tiếp theo</a></li>
							<li><a href='#'>Trang cuối</a></li>
							<li>
								<form action='' method='post' >
									<input type='text' class='search' placeholder='Nhập số trang'/> 
									<input type='submit' value='Chuyển đến'/>;
								</form>
							</li>
						</ul>
					</section>
				
				
			</div>	
			
		</section>
		
	</section>
    
	<section class='list reportprocess'>
		<header class='tab reportprocess'>
			
			<ul>
				<li><span  class="btnAMD manipulation btnAddreport">Tạo báo cáo</span></li>
			</ul>
		</header>
		<section class='view reportprocess'>
				<section class='advance'>
					<div class='search'>
						<form action='' method='post'>
						<p>
						<label><div class='div_title'>Môn học</div>
							<select name='subject'>
								<option>--Tất cả-</option>
								<option>--Phân tích thiết kế hệ thống thông tin--</option>
								<option>--Niên luận kỹ thuật phần mềm-</option>
							</select> 
						</label>
						</p>
						<p>
						<label><div class='div_title'>Sắp xếp</div>
							<select name='orderby'>
								<option>--Tên báo cáo--</option>
								<option>--Ngày tạo-</option>
							</select>
						</label>
						</p>
						<p>
							<label><div class='div_title'>Tìm kiếm</div>
							<input type='text' class='text' placeholder='Nhập từ khóa' /></label>
							<input type='submit' value='Tìm'  class='btnFind'>
						</p>
						</form>
					</div>
					<div class='tool'></div>
				</section>
				
				<div class='list reportprocess'>
				<table>
					<tr><th><span class='sort'>Tiêu đề<img src='public/img/downarrowicon.png'></img></span></th>
						<th><span class='sort'>Ngày tạo  <img src='public/img/downarrowicon.png'></img></span></th>
						<th>Xem ngày</th>
						<th><span class='sort'>Người gửi  <img src='public/img/downarrowicon.png'></img></span></th>
						<th>Tóm tắt</th>
						<th>Thao tác</th></tr>
					<tr style='font-weight:bold'> 
						<td><a>Họp nhóm</a></td>
						<td>13/08/2014</td>
						<td>--</td>
						<td>Nguyễn Vương Thành Tâm</td>
						<td></td>
						<td><span class='manipulation btnReply'><img src='public/img/replyicon.png'></img></span>
							</td>
						
					</tr>
					<tr>
						<td><a>Báo cáo tiến độ lần 1</a></td>
						<td>20/09/2014</td>
						<td>17/08/2014</td>
						<td>Nguyễn Vương Thành Tâm</td>
						<td>Tài liệu đặc tả</td>
						<td><span class='manipulation btnCheck'><img src='public/img/checkicon.png'></img></td>
					</tr>
				</table>
				<section class='pagination'>
					<ul>
						<li><a href='#'>Trang đầu</a></li>
						<li><a href='#'>Lùi lại</a></li>
						<li><a href='#'>1</a></li>
						<li><a href='#'>Tiếp theo</a></li>
						<li><a href='#'>Trang cuối</a></li>
						<li >
							<form action='' method='post'>
								<input type='text' class='search' placeholder='Nhập số trang'/> 
								<input type='submit' value='Chuyển đến'/>;
							</form>
						</li>
					</ul>
				</section>
				</div>	
		</section>
				
				
		
	</section>
	
	<section class='manipulation'>
		
		<img class='manipulation' src='public/img/iconclose.png'></img>
		<div id='addtask' class='form'>
			<form class='form' action="" method="post">
					<h2>Tạo công việc</h2>
				
					<p>
						Chọn môn học:<label>
							<select name='subject' >
								
									  <option value="mon1">Phân tích thiết kế hệ thống thông tin</option>
									  <option value="mon2">Nhập môn công nghệ phần mềm</option>
									  <option value="mon3">Lập trình web</option>
									  <option value="mon4">Luận văn</option>
								
							</select>
						</label>
					</p>
					<p>
						Tên công việc <label><input type="text" name='maxmember' value='2'>
						</label>
					</p> 
					<fieldset>
						<legend>Thời gian</legend>
						<p>
							<label>Ngày bắt đầu
								<input type="date" name='seminar'  >
							</label>
						</p>
						<p>
							<label>Ngày kết thúc  <input type="date" name='description'  ></label>
						</p>
						<p>
							<label>Uớc lượng thời gian (giờ) <input type="text" name='description'  ></label>
						</p>
					</fieldset>
					<p>Hoàn thành(%) 
						<label><input type="number" name='description'  ></label>
					</p> 
					<p>Mức độ công việc  
						<ul>
							<li><label>	<input type="radio" name='description'  >Không quan trọng</label></li>
							<li><label>	<input type="radio" name='description'  >Bình thường</label></li>
							<li><label>	<input type="radio" name='description'  >Quan trọng</label></li>
						</ul>
						
					</p>
							
					
					<p>Người được giao 
							<select name='level' >
								
									  <option value="mon1">Tôi</option>
									  <option value="mon2">Nguyễn Thanh Phi</option>
									  <option value="mon3">Huỳnh Thanh Nhã</option>
									  <option value="mon4">Trịnh Sa Lem</option>
								
							</select>
						</label>
					</p> 
					<p><label>Mô tả
						<input type="text" name='description'  ></label>
					</p> 
					<p>Loại công việc  
						<ul>
							<li><label>	<input type="radio" name='description'  >Nhiệm vụ</li></label>
							<li><label>	<input type="radio" name='description'  >Khó khăn</li></label>
						</ul>
					</p> 
					<p>Trạng thái
						<ul>
							<li><label>	<input type="radio" name='description'  >Đóng</li></label>
							<li><label><input type="radio" name='description'  >Mới</li></label>
							<li><label><input type="radio" name='description'  >Trong tiến trình</li></label>
						</ul>
						
						
					</p> 
					<p>
						<label>
							<input type="submit" class='submit-button'  value='Đăng kí'/>
							<input type='reset' class='submit-button'  value='Làm lại'/>
						</label>
					</p>
			</form>
		</div>
		<div id='modifytask' class='form'>
			<form class='form' action="" method="post">
					<h2>Chỉnh sửa công việc</h2>
				
					<p>
						<label>Tên công việc <input type="text" name='maxmember' value='2'>
						</label>
					</p> 
					<p>
						<label>Ngày bắt đầu</p><input type="date" name='seminar'  >
						</label>
					</p> 
					<p><label>Ngày kết thúc  </p><input type="date" name='description'  ></label></p> 
					<p><label>Hoàn thành(%)  </p><input type="number" name='description'  ></label></p> 
					<p><label>Uớc lượng thời gian (giờ)  </p><input type="text" name='description'  ></label></p> 
					<p><label>Mức độ công việc  
							<input type="radio" name='description'  >Không quan trọng
							<input type="radio" name='description'  >Bình thường
							<input type="radio" name='description'  >Quan trọng
						</label>
					</p>
							
					
					<p><label>Người được giao </p>
							<select name='level' >
								
									  <option value="mon1">Tôi</option>
									  <option value="mon2">Nguyễn Thanh Phi</option>
									  <option value="mon3">Huỳnh Thanh Nhã</option>
									  <option value="mon4">Trịnh Sa Lem</option>
								
							</select>
						</label>
					</p> 
					<p><label>Mô tả</p><input type="text" name='description'  ></label></p> 
					<p><label>Loại công việc  </p>
							<input type="radio" name='description'  >Nhiệm vụ
							<input type="radio" name='description'  >Khó khăn
						</label>
					</p> 
					<p><label>Trạng thái: 
							<input type="radio" name='description'  >Đóng
							<input type="radio" name='description'  >Mới
							<input type="radio" name='description'  >Trong tiến trình
						</label>
					</p> 
					<p>
						<label>
							<input type="submit" class='submit-button'  value='Đăng kí'/>
							<input type='reset' class='submit-button'  value='Làm lại'/>
						</label>
					</p>
			</form>
		</div>
		<div id='iframe_login'>
			<div class='verify'><?php $this->load->view('auth/login');?></div>
			<div  class='iframe_login_up' >
				<img src='public/img/buttonup.png'></img>
			</div>
		</div>
	</section>
</section>