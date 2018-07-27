<div class="card-columns" style="margin: 5%">
    <?php
        include_once('/wargame/config.php');
        $query = "SELECT * FROM `war_problems`";
        $res = mysql_query($query);
        while ($row = mysql_fetch_array($res)) {
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$row['title'].'</h5>';
            echo '<h6 class="card-subtitle mb-2 text-muted">'.$row['description'].'</h6>';
            if($row['link'] != '') {
                echo '<a href="'.$row['link'].'" class="card-link">link</a>';
            }
            echo '</div>';
            echo '</div>';
        }
    ?>
</div>