<div class="ds thongtingiangvien" style="float:left; width: 430px;">				
    <table class="table_tt">
        <?php
           if (isset($thongtingiangvien) && !empty($thongtingiangvien)){
                foreach ($thongtingiangvien as $row)
                {       
                      echo "<tr>";
                          echo "<td>MSCB</td><td>".$row['MSCB']."</td>";
                      echo "<tr>";
					  
					  echo "<tr>";
                          echo "<td>Họ tên</td><td>".$row['HOTEN']."</td>";
                      echo "<tr>";
                      echo "<tr>";
                          echo "<td>Số điện thoại</td><td>0".$row['SDT']."</td>";
                      echo "<tr>";   
					  
					 echo "<tr>";
                          echo "<td>Email</td><td>".$row['MAIL']."</td>";
                      echo "<tr>"; 
                }
            }
            else 
              echo "<tr><td > click Tên môn học để hiển thị thông tin giảng viên</td></tr>";
        ?>
    </table>
			  
</div> <!-- COL-MD-6 -->