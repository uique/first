<?php
    require_once'xiaoyan2.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>查找信息</title>
    </head>
    <body>
    <div class="content" align="center">
        <div class="header"><!--头部-->
            <h1>查找信息</h1>
        </div>
        <div class="middle"><!--中部-->
            <form  method="post" action="chazhao1.php">
                账号:
                <input type="text" name="id" />
               <tr>
                    <?php
                        $err=isset($_GET['err'])?$_GET['err']:"";
                        switch($err)
                        {
                        case 1:
                        echo "输入的信息有误,从新输入！";
                        break;
                        }
                    ?>
                </tr>
                <input type="submit" value="确定" name="submitBtn" />
                &nbsp;&nbsp
                <input type="reset" value="重置" name="submitBtn" />
            </form>
        </div>
    </div>
    </body>
</html>