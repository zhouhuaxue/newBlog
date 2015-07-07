<?php
/**
 * Created by PhpStorm.
 * User: xue
 * Date: 15-6-19
 * Time: 下午10:42
 */
session_start();


?>
<!DOCUMENT html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" />
    <script src="../jquery-1.11.3.js"></script>
    <script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function disp_confirm()
        {
            var r=confirm("确定要离开吗?")
            if (r==true)
            {
                document.onload("test.php")
            }
            else
            {
                document.onload("login.php")
            }
        }
    </script>
</head>
<body>
<input type="button" onclick="disp_confirm()"
       value="Display a confirm box" />

</body>
</html>

