<?php 
 $con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 $sql ="SELECT * FROM deliverydb.workertbl WHERE workerID='".$_GET['workerID']."'";
 
 $ret = mysqli_query($con, $sql);
 if($ret) { 
 $count = mysqli_num_rows($ret);
 if($count==0) { 
echo $_GET['workerID']." 해당 아이디의 택배 기사가 없습니다"."<BR>";
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

?>


<HTML> 
<HEAD>
 <META http-equiv="content-type" content="text/html; charset=utf-8"> 
 </HEAD> 
 <BODY>
 
 <H1>택배기사 삭제</H1> 
 <FORM METHOD="post" ACTION="workerDelete_result.php"> 
 택배기사ID : <INPUT TYPE="text" NAME="workerID" VALUE=<?php echo $workerID ?> READONLY> <BR> 기사이름 : 
<INPUT TYPE="text" NAME="workerName" VALUE=<?php echo $workerName ?> READONLY> 
<BR>
 <BR><BR> 
 위 택배기사를 삭제하겠습니까?
 <INPUT TYPE="submit" VALUE="택배기사 삭제"> 
 </FORM> 

 </BODY> 
 </HTML>