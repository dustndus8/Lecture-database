<?php 
 $con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
$sql = "SELECT * FROM deliverydb.workertbl WHERE workerID='".$_GET['workerID']."'";
 
 $ret = mysqli_query($con, $sql);
 if($ret) { 
 $count = mysqli_num_rows($ret);
 if($count==0) { 
 echo $_GET['workerID']." 아이디의 회원이 없음!!!"."<BR>";
 echo "<BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
 exit();
 } 
 } 
 else { 
 echo "데이터 검색 실패!!!"."<BR>";
 echo "실패 원인 :".mysqli_error($con);
 echo "<BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
 exit();
 }

$row = mysqli_fetch_array($ret);
$workerID = $row['workerID'];
$workerName = $row["workerName"];
$area = $row["area"];
$mobile = $row["mobile"];
$companytbl_companyID = $row["companytbl_companyID"];
 ?> 

 <HTML> 
 <HEAD>

<META http-equiv="content-type" content="text/html; charset=utf-8"> 
 </HEAD> 
 <BODY> 

 <H1>회원 정보 수정</H1> 
 <FORM METHOD="post" ACTION="workerUpdate_result.php"> 
 아이디 : <INPUT TYPE="text" NAME="workerID" VALUE=<?php echo $workerID ?> READONLY> <BR> 
 이름 : <INPUT TYPE="text" NAME="workerName" VALUE=<?php echo $workerName ?>> <BR> 
 담당지역 : <INPUT TYPE="text" NAME="area" VALUE=<?php echo $area ?>> <BR> 
 전화번호 : <INPUT TYPE="text" NAME="mobile" VALUE=<?php echo $mobile ?>> <BR> 
 소속회사ID : <INPUT TYPE="text" NAME="companytbl_companyID" VALUE=<?php echo $companytbl_companyID ?>> <BR> 
 <BR><BR>
 <INPUT TYPE="submit" VALUE="정보 수정"> 
 </FORM> 

 </BODY> 
 </HTML>
