<HTML>

<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>肥卡肥卡 卡哩卡哩</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="jquery-3.6.0.min.js"></script>
	<style>
		
		.title{
			text-align:center;
			
		}
         .subtitle{
			text-align:center;
			color:white;
			margin-bottom: 10px;
		}
		 table{
            width:auto;
			margin:auto 100px auto auto;
			text-align:center;
        }
        th,td{
            padding:7px 10px 10px 10px
        }
        th{
            letter-spacing:0.1em;
            font-size:90%;
            border-bottom:2px solid #111111;
            border-top:1px solid #999;
            
        }
	</style>
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
	header("Content-Type: text/html; charset=utf8");
	
	include('connect.php');//連結資料庫
	
	if($_POST['customerid']=="")	
    {
		echo "<script type='text/javascript'>";
        echo "alert('!!! 請輸入你的ID !!!');";
        echo "location.href='member1.html';";
        echo "</script>";
    }
    else
    {        
    $customerid=$_POST['customerid'];
    $sql="SELECT * FROM dbo.customer WHERE id='$customerid'";
    $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
	$row=sqlsrv_fetch_array($qury);
	
	$sql2="SELECT * FROM dbo.orders WHERE customerid='$customerid'";
    $qury2=sqlsrv_query($conn,$sql2) or die("sql error".sqlsrv_errors());
	
	
	
    if(empty($row['id']))	
    {
        
        echo "<script type='text/javascript'>";
        echo "alert('!!! 無此人 !!!');";
        echo "location.href='member1.html';";
        echo "</script>";
	}
	
    else
    {	
		
		echo "<br><br>";
		
		echo '<div class="link_box">';
		
		echo '<h3 class="title">我的個人資訊</h3>';
		echo '<h5 class="subtitle">INFORMATION</h5>';
		
		echo("<table >");
        echo("<tr>");
            echo("<th>"."顧客ID"."</th>");
            echo("<th>"."姓名"."</th>");
            echo("<th>"."手機"."</th>");
            echo("<th>"."地址"."</th>");
            echo("<th>"."email"."</th>");
        echo("</tr>");
        echo ("<tr>");
        echo ("<td>").$row['id'].("</td>");
        echo ("<td>").$row["customername"].("</td>");
        echo ("<td>").$row["customerphone"].("</td>");
        echo ("<td>").$row["customeraddress"].("</td>");
        echo ("<td>").$row["customeremail"].("</td>");
        echo ("</tr>");
		echo("</table >");

		echo "<br><br>";
	
		
		
		echo '<h3 class="title">我的訂單資訊</h3>';
		echo '<h5 class="subtitle">ORDERS</h5>';
		
		echo("<table style=margin-right:150px;>");
        echo("<tr>");
            echo("<th>"."訂單編號"."</th>");
            echo("<th>"."購買總價"."</th>");
            echo("<th>"."送貨地址"."</th>");
            echo("<th>"."到貨日期"."</th>");
        echo("</tr>");
		while($row2=sqlsrv_fetch_array($qury2)){
        echo ("<tr>");
             echo ("<td>").$row2['orderid'].("</td>");
             echo ("<td>").$row2["Tprice"].("</td>");
             echo ("<td>").$row2["orderaddress"].("</td>");
             if (isset($row2['orderdate'])){ //check if the date exists
				$date = $row2['orderdate'];
				$orderdate = $date->format('Y-m-d'); 
			 } else {
				$orderdate = "Unknown Time"; 
			 }
             echo ("<td>").$orderdate.("</td>");
		echo ("</tr>");}
		echo("</table >");
		echo "</div>";
		

    }    

	}
?>


</BODY>

</HTML>
