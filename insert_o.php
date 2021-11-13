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

    <div id="contents">
    <div class="detail_box clearfix">
    <div class="link_box">
<?php 
	
	include 'connect.php';//連結資料庫
	$sql="SELECT price FROM dbo.product ";
    $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
    
    $quantity=$_POST['quantity'];
	$customerid=$_POST['customerid'];
    $orderaddress=$_POST['orderaddress'];
    $orderdate=$_POST['orderdate'];
    $Tprice=0;
    $counter=0;
	
	
    while($row=sqlsrv_fetch_array($qury)){
		
        $Tprice+=(int)$quantity[$counter]*$row['price'];
        $counter+=1;
    }
    
	
	$q="INSERT into dbo.orders(customerid ,orderdate ,orderaddress,Tprice) values ('$customerid','$orderdate','$orderaddress','$Tprice')";//向資料庫插入表單傳來的值的sql
	echo("謝謝您的購買!<br>商品總價為:$Tprice"."元");
	$query=sqlsrv_query($conn,$q) or die("sql error".sqlsrv_errors());
	
	
	
?>
</div></div></div>
</body>
</HTML> 

