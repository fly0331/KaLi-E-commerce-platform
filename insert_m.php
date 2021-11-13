<HTML>

<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>肥卡肥卡 卡哩卡哩</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="jquery-3.6.0.min.js"></script>
</HEAD>

<BODY BGCOLOR="#af9675">
	<div id="header">	
		
            <h1><a href="index.html" title="肥卡肥卡 卡哩卡哩"><img src="下載.png" Width=60% alt="發生錯誤" border="0"></a></h1>
       
			<ul id="navi">
				<li id="navi_02">
					<a href="index.html">首頁</a>
				</li>
				<li id="navi_03">
					<a href="menu.php">菜單一覽</a>
				</li>
				<li id="navi_04">
					<a href="info.html">店面資訊</a>		
				</li>
				<li id="navi_05">
					<a href="member.html">會員中心</a>
				</li>
				<li id="navi_06">
					<a href="comment.php">留言板</a>
				</li>
				<li id="navi_07" >
					<a href="car.php" title="購物車"><img src="a.png" width="50px" height="50px"  alt="發生錯誤" border="0"></a>
				</li>
			</ul>
        
	</div>

<?php 
	
	include('connect.php');//連結資料庫
	$sql="SELECT MAX(id) from dbo.customer " ;  
	
	
	$result=sqlsrv_query($conn,$sql)or die("sql error".sqlsrv_errors());
   
	
	
	
	
    $customername=$_POST['customername'];
	$customerphone=$_POST['customerphone'];
	$customeraddress=$_POST['customeraddress'];
	$customeremail=$_POST['customeremail'];//post獲取表單裡的name
	
	$q="INSERT into dbo.customer(customername,customerphone ,customeraddress ,customeremail ) values ('$customername','$customerphone' ,'$customeraddress','$customeremail')";//向資料庫插入表單傳來的值的sql
	
	$query=sqlsrv_query($conn,$q) or die("sql error".sqlsrv_errors());
	
	while($row=sqlsrv_fetch_array($result)){
		$num=$row[0];
		$num+=1;
		echo "<script type='text/javascript'>";
		echo "alert('!!歡迎加入會員!!\\n你的會員ID:$num');";
        echo "location.href='member.html';";
        echo "</script>";//如果成功跳轉至member.html頁面
		exit;
		
	}	
	
?>
</body>
</HTML> 