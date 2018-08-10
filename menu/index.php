<div class="content">
    <div class="front" id="notice">
        <h3>Notice</h3>
        <?php
            $query = "SELECT * FROM `war_notice` ORDER BY `top` DESC, `date` ASC";
            $res = mysql_query($query, $conn);
            while ($row = mysql_fetch_array($res)) {
                echo ("<p>".$row['content']."<br>".$row['date']."</p>");
            }
        ?>
    </div>
    <script src="/wargame/data/ez.js"></script>
    <div class="front" id="top3">
        <h3>Top 3</h3>
        <?php
            $query = "SELECT * FROM `war_users` WHERE `id` != 'admin' ORDER BY `point` DESC LIMIT 3";
            $res = mysql_query($query, $conn);
            for ($i=1; $row = mysql_fetch_array($res); $i++) {
                echo "<p>";
                echo '<i class="fas fa-medal"></i>';
                echo "<b>";
                if($i == 1) echo '1rd';
                if($i == 2) echo '2nd';
                if($i == 3) echo '3rd';
                echo "</b>&nbsp;&nbsp;";
                echo ($row['id'].'('.$row['point'].'p)');
                echo "</p>";
            }
        ?>
    </div>
</div>
