<HTML>

<HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>肥卡肥卡 卡哩卡哩</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
        .container_box{width: 100%;max-width: 1170px;margin-top: 50px ;text-align: center;}

        a{color: #333;}
        a:hover{color: #999;}

        .fr{float: right}
        .fl{float: left}

        .container_box .up{padding: 20px 0;}
        .container_box .up .title{font-size: 20px;}
        .container_box .up .subtitle{color:white;margin-bottom: 10px;}
        .container_box .down{margin: 0 auto;text-align: center;width: 50%;}
        .container_box .down .input{margin-bottom: 10px;overflow: hidden;}
        .container_box .down .input input{width: 46%;line-height: 30px;padding:4px;}
        .container_box .down .content{width: 98%;display: block;margin-bottom: 10px;padding:4px;}
        .container_box .down .sub{width: 100%;display: block;height: 35px;background-color:#995c00;color:#fff;border: 0;cursor: pointer;}
        /* 鼠标移到按钮上去更换背景色 */
        .container_box .down .sub:hover{background-color: #75849c;}

        /* 列表 */
        p{padding: 20px 0;width: 100%;margin: 0 auto;text-align: left;}
        p{line-height: 30px;color: #4d3319;}
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
	
        include('connect.php');//連結資料庫
        $sql="SELECT * FROM dbo.mess ";
        $qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
        
	?>
     <div class="container_box">
            <div class="up">
                <br>
                <h3 class="title">留言板</h3>
                <h5 class="subtitle">LIST</h5>
            </div>
            <div class="down list">
            
    <?php
        while($row=sqlsrv_fetch_array($qury)){
    ?>
        <p>
            <?php echo $row['nickname']." : ";
                  echo $row['content']."<hr> ";}?><br>
        </p>
        
    </div>
    </div>
    
    <div class="container_box">

            <div class="up">
                <h3 class="title">新增留言</h3>
                <h5 class="subtitle">FEEDBACK</h5>
            </div>
            <div class="down">
                <form  id='myform'action="mess.php" method="post">
                    <div class="input">
                        <input type="text" class="fl" name="nickname" placeholder="輸入您的暱稱" /> 
                        
                    </div>
                    <textarea class="content" cols="30" rows="10" name="content" placeholder="請留下評論"></textarea>
                    <input type="submit" value="提交您的留言" class="sub" />
                </form>
            </div>
    </div>
		
</BODY>

</HTML>