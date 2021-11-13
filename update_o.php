<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="author" content="www.frebsite.nl" />
    <meta name="viewport" content="width=device-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no" />

    <title>肥卡肥卡 卡哩卡哩</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="demo.css" />
    <link type="text/css" rel="stylesheet" href="mmenu.css" />
</head>

<body>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
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
    <div id="page">
        <div class="header">
            <a href="#menu"><span></span></a>
            
        </div>
        
        <nav id="menu">
            <ul>
                <li> <span>訂單管理</span>
                    <ul>
                        <li><a href="info_o.php">查看訂單</a></li>
                        <li> <a href="update_o.html">修改訂單</a></li>
                    </ul>
                <li>
                    <span>產品管理</span>
                    <ul>
                        <li><a href="info_p.php">產品清單</a></li>
                        <li> <a href="update_p.html">修改產品資訊</a></li>
                        <li> <a href="insert_p.html">新增產品</a></li>
                    </ul>
                </li>
                <li><span>顧客管理</span>
                    <ul>
                        <li><a href="info_c.php">顧客資訊清單</a></li>
                        <li> <a href="update_c.html">修改顧客資料</a></li>
                    </ul>
                </li>

                
            </ul>
        </nav>
    </div>

    <!-- mmenu scripts -->
    <script src="mmenu.polyfills.js"></script>
    <script src="mmenu.js"></script>
    <script>
        new Mmenu(document.querySelector('#menu'));

        document.addEventListener('click', function (evnt) {
            var anchor = evnt.target.closest('a[href^="#/"]');
            if (anchor) {
                alert("Thank you for clicking, but that's a demo link.");
                evnt.preventDefault();
            }
        });
    </script>


<div id="contents">

<?php 
	
	include('connect.php');//連結資料庫
	
    if(empty($_POST['orderid']))	
    {
      
        echo "<script type='text/javascript'>";
        echo "alert('請輸入訂單編號!');";
        echo "location.href='opdate_o.html';";
        echo "</script>";
    }
    else
    {        
    $orderid=$_POST['orderid'];
    $sql="SELECT * FROM dbo.orders WHERE orderid='$orderid'";
    $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
    $row=sqlsrv_fetch_array($qury);
    if(empty($row['orderid']))	
    {
       
        echo "<script type='text/javascript'>";
        echo "alert('無此訂單!');";
        echo "location.href='opdate_o.html';";
        echo "</script>";
    }
    else
    {	
?>
 <form name="form" action="update_data_o.php" method="POST" accept-charset="UTF-8" align="center">
		<div class="detail_box clearfix">
        <div class="link_box">
        <h3>修改訂單資料</h3>
        <table height="2">
            <tr>
               <th >訂單編號:</th><td><input id="orderid"type="text" name="orderid" size="30" value="<?php echo $row['orderid']; ?>" readonly /></td>
			</tr>  
			<tr>
               <th >顧客ID:</th><td><input id="customerid" type="text" name="customerid" size="30" value="<?php echo $row['customerid']; ?>" readonly/></td>
			</tr>  
            <tr>
                <th >購買總價:</th><td><input id="Tprice" type="text" name="Tprice" size="30" value="<?php echo $row['Tprice']; ?>"/></td>
            </tr> 
            <tr>
			   <th >送貨地址:</th><td><input id="orderaddress" type="text" name="orderaddress" size="30" value="<?php echo $row['orderaddress']; ?>"/></td>
            </tr> 
            <tr>
                <th >到貨日期:</th><td><input id="orderdate" type="date" name="orderdate" size="30" value="<?php 
                            if (isset($row['orderdate'])){ //check if the date exists
                                $date = $row['orderdate'];
                                $orderdate = $date->format('Y-m-d'); 
                             } else {
                                $orderdate = "Unknown Time"; 
                             }  echo $orderdate ; ?>"/></td>
            </tr>
            
            </table>
            <input type="reset" value="清除表單"/>
            <input id="submit" name="submit" type="submit" value="送出" />
</form>	</div></div>	
		<?php	} }?>

</div>
</body>
</HTML> 