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



<?PHP
	header("Content-Type: text/html; charset=utf8");

	include('connect.php');//連結資料庫
	$username = $_POST['user'];//post獲得使用者名稱錶單值
	$passowrd = $_POST['password'];//post獲得使用者密碼單值
	if ($username=='fatka' && $passowrd=='5656'){//如果使用者名稱和密碼都不為空
		
		echo "<script type='text/javascript'>";
        echo "alert('!!歡迎進入管理平台!!');";
        echo "location.href='manage.html';";
        echo "</script>";//如果成功跳轉至welcome.html頁面
		exit;
		
	}
	else{
		echo "<script type='text/javascript'>";
        echo "alert('!!帳號或密碼錯誤!!');";
        echo "location.href='member2.html';";
        echo "</script>";
		//如果錯誤使用js 1秒後跳轉到登入頁面重試;
	}

?>

</BODY>

</HTML>
