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
        .mark{
            text-align:center;
        }
        table{
            width:auto;
            
        }
        th,td{
            padding:7px 10px 10px 10px
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


    <div id="class">

<?php
        include('connect.php');
        $sql="SELECT * FROM dbo.customer ";
        $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
        echo("<br><br>");
        echo ("<h1 class='mark'>". "顧客資訊清單". "<h1>");
    echo("<table >");
        echo("<tr>");
            echo("<th>"."顧客ID"."</th>");
            echo("<th>"."姓名"."</th>");
            echo("<th>"."手機"."</th>");
            echo("<th>"."地址"."</th>");
            echo("<th>"."email"."</th>");
        echo("</tr>");
    
   
   
         while($row=sqlsrv_fetch_array($qury)){
             echo ("<tr>");
             echo ("<td>").$row['id'].("</td>");
             echo ("<td>").$row["customername"].("</td>");
             echo ("<td>").$row["customerphone"].("</td>");
             echo ("<td>").$row["customeraddress"].("</td>");
             echo ("<td>").$row["customeremail"].("</td>");
             echo ("</tr>");
            }    
    ?>
    </table>
        
        
</body>

</html>