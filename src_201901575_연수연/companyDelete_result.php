<?php 
 $con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 $companyID = $_POST["companyID"];
 $sql = "DELETE FROM deliverydb.companytbl WHERE companyID='".$companyID."'";
 $ret = mysqli_query($con, $sql);
 echo "<H1>택배회사 삭제 결과</H1>";
 if($ret) { 
 echo $companyID." 택배회사의 정보가 성공적으로 삭제되었습니다.";
 }
 else { 
 echo "데이터 삭제를 실패했습니다"."<BR>";
 echo "실패 원인 :".mysqli_error($con);
 } 
 mysqli_close($con);
 
 echo "<BR><BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
 ?>