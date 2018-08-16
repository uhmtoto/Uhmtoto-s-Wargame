<div class="content">
    <?php
        $usrid = $_GET['id'];
        $query = "SELECT * FROM `users` WHERE `id`='$usrid'";
        $res = mysql_query($query, $conn);
        if(mysql_num_rows($res) == 0) {
            echo "<h1>사용자 '$usrid'를 찾을 수 없습니다!</h1>";
            exit();
        }
        $res = mysql_fetch_array($res);
        $usrpoint = $res['point'];
        echo "<h1>$usrid($usrpoint"."p)</h1><br>";

        $query = "SELECT * FROM `solvers` WHERE `usrid`='$usrid'";
        $res = mysql_query($query, $conn);
        $count = mysql_num_rows($res);
        if($count == 0) {
            echo ("<h2>Unsolved</h2>");
            exit();
        }
        echo "<h2>$count&nbsp;Solved</h2>";
        echo "<p>";
        for ($i=0; $i<$count; $i++) {
            $row = mysql_fetch_array($res);
            $pcode = (string)$row['probcode'];
            $query = "SELECT `title` FROM `problems` WHERE `code`=$pcode";
            $row2 = mysql_fetch_array(mysql_query($query, $conn));
            echo ($row2['title']);
            if($i != $count-1) {
                echo ", ";
            }
        }
        echo "</p>";
    ?>
</div>