<?php
    require_once'xiaoyan2.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>学生信息管理系统</title>
    </head>
    <body>
    <table border='1'>
        <tr><th>学号</th><th>密码</th><th>名字</th><th>性别</th><th>电话</th><th>身份证号</th><th>C成绩</th><th>英语成绩</th><th>总分</th></tr>
        <?php
        //查找信息
        $myid = isset($_POST['id'])?$_POST['id']:"";
        try{
            $dsn='mysql:host=localhost;dbname=database1';
            $username='root';
            $passwd='';
            $pdo=new PDO($dsn,$username,$passwd);
            $sql="SELECT * from table3 WHERE id='$myid'";
            $res=$pdo->query($sql);
            foreach($res as $row)
            {
                if($myid==$row['id'])
                {
                    $id=$row['id'];
                    $pass=$row['password'];
                    $name=$row['name'];
                    $sex=$row['sex'];
                    $number=$row['mynumber'];
                    $card=$row['card'];
                    $C=$row['C'];
                    $english=$row['english'];
                    $score=$row['score'];
                    echo "<tr><td>$id</td><td>$pass</td><td>$name</td><td>$sex</td><td>$number</td><td>$card</td><td>$C</td><td>$english</td><td>$score</td></tr>";
                }
            }
            }catch(PDOException $e){
            echo $e->getMessage();
        }
          ?>
          <div class="middle"><!--中部-->
          <a href="xinxi.php" title="返回">返回信息页面</a>
          </div>
        </table>
</body>
</html>