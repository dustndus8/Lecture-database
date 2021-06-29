<?php 
 $con = mysqli_connect("localhost", "id201901575", "pw201901575", "deliverydb") or die("MySQL 접속 실패!!");
 $sql ="SELECT * FROM deliverydb.companytbl WHERE companyID='".$_GET['companyID']."'";
 
 $ret = mysqli_query($con, $sql);
 if($ret) { 
 $count = mysqli_num_rows($ret);
 if($count==0) { 
echo $_GET['companyID']." 해당 아이디의 택배 회사가 없습니다"."<BR>";
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
 $companyID = $row['companyID'];
 $companyName = $row["companyName"];

?>


<HTML> 
<HEAD>
 <META http-equiv="content-type" content="text/html; charset=utf-8"> 
 </HEAD> 
 <BODY>
 
 <H1>택배기사 삭제</H1> 
 <FORM METHOD="post" ACTION="companyDelete_result.php"> 
 택배회사ID : <INPUT TYPE="text" NAME="companyID" VALUE=<?php echo $companyID ?> READONLY> <BR> 기사이름 : 
<INPUT TYPE="text" NAME="companyName" VALUE=<?php echo $companyName ?> READONLY> 
<BR>
 <BR><BR> 
 위 택배회사를 삭제하겠습니까?
 <INPUT TYPE="submit" VALUE="택배회사 삭제"> 
 </FORM> 

 </BODY> 
 </HTML>