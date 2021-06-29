<?php 
$con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 
$workerID = $_POST["workerID"];
$workerName = $_POST["workerName"];
$area = $_POST["area"];
$mobile = $_POST["mobile"];
$companytbl_companyID = $_POST["companytbl_companyID"];
$sql =" INSERT INTO deliverydb.workertbl VALUES ('".$workerID."','".$workerName."','".$area."','".$mobile."','".$companytbl_companyID."')";


 $ret = mysqli_query($con, $sql);
 
 echo "<H1>등록 완료</H1>";
 if($ret) { 
 echo "회원 등록이 성공적으로 완료되었습니다!";
 }
 else { 
 echo "회원 등록에 실패하였습니다"."<BR>";
 echo "실패 원인 :".mysqli_error($con);
 }
 mysqli_close($con);
 
 echo "<BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
?>