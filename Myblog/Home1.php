<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-11
 * Time: 下午2:45
 */
session_start();
if(!isset($_SESSION['user'])){
    header("Location:Index.php");
}
?>
<!DOCUTYPE html>

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="Homecss.css" />

   <script src="../jquery-1.11.3.js"></script>

    <title>乔雨分享快乐</title>


</head>
<body>
<div class="s_form">
    <span><?php echo $_SESSION['user']; ?>欢迎登陆 </span>
    <a href="exit.php"><input id="exit" type="button" value="退出登陆" /></a>
    </div>
<div class="relative" id="left_list">
    <div id="left_list_inner">
    <form>
        <div id="left_list_inner_header">
        朋友圈<br/><br/>个人主页<br/><br/>网站评论<br/><br/>
                <a href="">个人热点</a>
                    <ul>
                        <li>美容</li>
                        <li>时尚</li>
                        <li>瘦身</li>
                        <li>体育</li>
                        <li>股票</li>
                    </ul>
        </div>
    <div id="left_list_inner_footer">
    </div>
    </form>
        </div>
</div>
<div class="container">
    <div id="send_weibo">
        <form action="" method="post">
           <textarea  style="height:150px ;width: 780px" placeholder="今天开心吗?亲爱的" ></textarea>
            <input type="submit" name="submit" value="发表" id="input1" />
        </form>
    </div>
    <div class="show_area">
        <div id="show_form">
            <li></li>
            <textarea style="height:auto;width: 775px"></textarea>
        </div>
    </div>

</div>
<?php
  include("mysql.php");

?>
</body>
</html>
