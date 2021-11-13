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
        table{
            width:800px;
            position:relative;
            margin:auto 50px auto 250px;
            
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
        fieldset{
            text-align:center;
            margin-left:450px;
            padding:20px;
        }
        #member{
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
        echo("<br><br>");
        echo ("<h1>". "請選擇要訂購的數量". "<h1>");
        echo("<table >");
        
        echo("<tr>");
            echo("<th>"."數量"."</th>");
            echo("<th>"."產品編碼"."</th>");
            echo("<th>"."產品口味"."</th>");
            echo("<th>"."單價"."</th>");
            echo("<th>"."成分"."</th>");
            echo("<th>"."葷/素"."</th>");
        echo("</tr>");
    
   
         echo("<form id='myform' method='POST' action='insert_o.php'>");
         $counter=0;
         while($row=sqlsrv_fetch_array($qury)){
            
             echo ("<tr>");
             echo ("<td>"."<select id='quantity[]' name='quantity[]'>".
                          "<option value='0'>0</option>".
                          "<option value='1'>1</option>".
                          "<option value='2'>2</option>".
                          "<option value='3'>3</option>".
                          "<option value='4'>4</option>".
                          "<option value='5'>5</option>"."</select>");
                          $counter+=1;
             echo ("<td>").$row['productid'].("</td>");
             echo ("<td>").$row["productname"].("</td>");
             echo ("<td>").$row["price"].("</td>");
             echo ("<td>").$row["ingredient"].("</td>");
             echo ("<td>").$row["mv"].("</td>");
             echo ("</tr>");
            } 
            echo("</table >");  
        echo("<form>");
            
?>
</div>  

<form id='myform' method='POST' action='insert_o.php'>
  <fieldset>
		<legend>請輸入個人資訊</legend>
			<div id="member">
				<p><label for="customerid" class="title"><div id="member">會員ID:</div></label>
				<input type="text" id="customerid" name="customerid"/></br></p>
				
				<p><label for="orderaddress" class="title"><div id="member">到貨地址:</div></label>
                <input type="text" id="orderaddress" name="orderaddress"/></br></p>

                <p><label for="orderdate" class="title"><div id="member">到貨時間:</div></label>
                <input type="date" id="orderdate" name="orderdate"/></p>
                
				<input type="reset" value="清除表單">
				<input type="submit" align="right" value="確認">
			</div>
	</fieldset>
</form>
          
</body>

</html>