<?php 
$con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 
 $sql = "SELECT * FROM deliverydb.workertbl";
 
 $ret = mysqli_query($con, $sql);
 if($ret) { 
 $count = mysqli_num_rows($ret);
 } 
 else { 
 echo "userTBL 데이터 검색 실패!!!"."<br>";
 echo "실패 원인 :".mysqli_error($con);
 exit();
 }
 
 echo "<H1>택배 기사 조회 결과</H1>";
 echo "<TABLE BORDER=1>";
 echo "<TR>";
 echo "<TH>택배기사ID</TH> <TH>기사이름</TH> <TH>담당지역</TH> <TH>전화번호</TH> <TH>회사번호</TH>";

 while($row = mysqli_fetch_array($ret)) {
 echo "<TR>";
 echo "<TD>", $row['workerID'], "</TD>";
 echo "<TD>", $row['workerName'], "</TD>";
 echo "<TD>", $row['area'], "</TD>";
 echo "<TD>", $row['mobile'], "</TD>";
 echo "<TD>", $row['companytbl_companyID'], "</TD>";
 echo "</TR>";
 }
 
 mysqli_close($con);
 echo "</TABLE>";
 echo "<BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
 ?>
