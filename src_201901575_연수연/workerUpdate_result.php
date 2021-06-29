<?php 
 $con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 $workerID = $_POST["workerID"];
 $workerName = $_POST["workerName"];
 $area = $_POST["area"];
 $mobile = $_POST["mobile"];
 $companytbl_companyID = $_POST["companytbl_companyID"];
 
$sql = "UPDATE workertbl SET workerName='".$workerName."', area='".$area."', mobile='".$mobile."', companytbl_companyID='".$companytbl_companyID."' WHERE workerID='".$workerID."'";
 
 $ret = mysqli_query($con, $sql);
 
 echo "<H1>회원 정보 수정 결과</H1>";
 if($ret) { 
 echo "데이터가 성공적으로 수정됨.";
 }
 else { 
 echo "데이터 수정 실패!!!"."<BR>";
 echo "실패 원인 :".mysqli_error($con);
 } 
 mysqli_close($con);
 
 echo "<BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
 ?>