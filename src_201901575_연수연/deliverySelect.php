<?php 
$con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 $sql = "SELECT * FROM deliverydb.deliverytbl WHERE trackingNumber='".$_GET['trackingNumber']."' AND companyName='".$_GET['companyName']."'";

 $ret = mysqli_query($con, $sql);
 if($ret) { 
 $count = mysqli_num_rows($ret);
 } 
 else { 
 echo "companytbl 데이터 검색 실패!!!"."<br>";
 echo "실패 원인 :".mysqli_error($con);
 exit();
 }

 echo "<H1>택배 조회 결과</H1>";
 echo "<TABLE BORDER=1>";
 echo "<TR>";
 echo "<TH>회사이름</TH> <TH>송장번호</TH> <TH>물건이름</TH> <TH>발송인</TH> <TH>수신인</TH> <TH>주소</TH> <TH>배송날짜</TH>";

 while($row = mysqli_fetch_array($ret)) {
 echo "<TR>";
 echo "<TD>", $row['companyName'], "</TD>";
 echo "<TD>", $row['trackingNumber'], "</TD>";
 echo "<TD>", $row['item'], "</TD>";
 echo "<TD>", $row['sender'], "</TD>";
 echo "<TD>", $row['receiver'], "</TD>";
 echo "<TD>", $row['address'], "</TD>";
 echo "<TD>", $row['date'], "</TD>";
 echo "</TR>";
 }
 
 mysqli_close($con);
 echo "</TABLE>";
 echo "<BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
 ?>
