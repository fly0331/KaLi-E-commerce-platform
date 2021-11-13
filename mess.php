<HTML>

<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>肥卡肥卡 卡哩卡哩</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
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
    include 'connect.php';
	
    $nickname = $_POST["nickname"];
    $content = $_POST["content"];
    if(empty($nickname) or empty($content) ){
        
        echo "<script type='text/javascript'>";
        echo "alert('暱稱與評論請勿為空');";
        echo "location.href='comment.php';";
        echo "</script>";
        exit;
    }
    $sql = "INSERT INTO dbo.mess (nickname,content) VALUES ('$nickname',  '$content')";
    
    $query = sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());   
    
    
    
    echo "<script type='text/javascript'>";
    echo "alert('謝謝您的評論');";
    echo "location.href='comment.php';";
    echo "</script>";
    ?>
    

    
		
</BODY>

</HTML>