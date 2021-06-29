<?php 
$con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 $sql = "SELECT item, COUNT(*) AS '배송된 횟수' FROM deliverydb.deliverytbl WHERE date BETWEEN DATE_ADD('".$_GET['date']."',INTERVAL -1 WEEK) AND '".$_GET['date']."' GROUP BY item";

$ret = mysqli_query($con, $sql);
 if($ret) { 
 $count = mysqli_num_rows($ret);
 } 
 else { 
 echo "companytbl 데이터 검색 실패!!!"."<br>";
 echo "실패 원인 :".mysqli_error($con);
 exit();
 }
 echo "<H1>한 주간 많이 배송된 물건은?</H1>";
 echo "<TABLE BORDER=1>";
 echo "<TR>";
 echo "<TH>물건이름</TH> <TH>배송된 횟수</TH>";

 while($row = mysqli_fetch_array($ret)) {
 echo "<TR>";
 echo "<TD>", $row['item'], "</TD>";
 echo "<TD>", $row['배송된 횟수'], "</TD>";
 echo "</TR>";
 }
 
 mysqli_close($con);
 echo "</TABLE>";
 echo "<BR> <A HREF='deliveryMain.html'> <--초기 화면</A> ";
 ?>