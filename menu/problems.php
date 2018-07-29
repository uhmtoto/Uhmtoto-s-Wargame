
<div class="content">
    <h1><i class="fas fa-terminal"></i>&nbsp;&nbsp;Problems</h1><br>
    <div class="card-columns">
        <?php
            $usrid = $_SESSION['warid'];
            $query = "SELECT * FROM `war_problems`";
            $res = mysql_query($query);
            while ($row = mysql_fetch_array($res)) {
                $code = (string)$row['code'];
                $query = "SELECT * FROM `war_solvers` WHERE `usrid` = '$usrid' and `probcode` = $code";
                if(mysql_num_rows(mysql_query($query, $conn))) $sflag=1;
                else $sflag=0;
                echo '<div class="card">';
                echo '<div class="card-body">';
                if($sflag) echo '<s>';
                echo '<h5 class="card-title">['.$row['point'].'p] '.$row['title'].'</h5>';
                if($sflag) echo '</s>';
                echo '<h6 class="card-subtitle mb-2 text-muted">'.$row['description'].'</h6>';
                if($row['link'] != '') {
                    echo '<a href="'.$row['link'].'" class="card-link">link</a>';
                }
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>