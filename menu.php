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
    <style>
        h1{
            text-align:left;
        }
        table{
            width:800px;
            position:relative;
            margin:auto 50px auto 250px;
            
        }
        th,td{
            padding:7px 10px 10px 10px;
            text-align:center;
            
        }
        th{
            letter-spacing:0.1em;
            font-size:90%;
            border-bottom:2px solid #111111;
            border-top:1px solid #999;
            text-align:center;
        }
    </style>
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
    

    <div id="class">

<?php
        include('connect.php');
        $sql="SELECT * FROM dbo.product ";
        $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
        echo("<br><br><br>");
        echo ("<h1>". "菜單一覽". "<h1>");
        echo("<br><br>");
        echo("<table >");
        echo("<tr>");
            echo("<th>"."產品編碼"."</th>");
            echo("<th>"."產品口味"."</th>");
            echo("<th>"."單價"."</th>");
            echo("<th>"."成分"."</th>");
            echo("<th>"."葷/素"."</th>");
        echo("</tr>");
    
   
   
         while($row=sqlsrv_fetch_array($qury)){
             echo ("<tr>");
             echo ("<td>").$row['productid'].("</td>");
             echo ("<td>").$row["productname"].("</td>");
             echo ("<td>").$row["price"].("</td>");
             echo ("<td>").$row["ingredient"].("</td>");
             echo ("<td>").$row["mv"].("</td>");
             echo ("</tr>");
            }    
    ?>
    </table>
        
        
</body>

</html>