<div class="content">
    <h1><i class="fas fa-medal"></i>&nbsp;&nbsp;Rank</h1><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <!-- <th scope="col">Comment</th> -->
                <th scope="col">Point</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM `users` WHERE `id` != 'admin' ORDER BY `point` DESC";
                $res = mysql_query($query, $conn);
                $count = mysql_num_rows($res);
                for ($i=1; $i<=$count; $i++) {
                    $row = mysql_fetch_array($res);
                    $usrid = $row['id'];
                    $usrcmt = htmlentities($row['comment']);
                    $usrpoint = (string)$row['point'];
                    echo ("<tr>");
                    echo ("<th scope=\"row\">$i</th>");
                    echo ("<td>$usrid</td>");
                    //echo ("<td>$usrcmt</td>");
                    echo ("<td>$usrpoint</td>");
                    echo ("</tr>");
                }
            ?>
        </tbody>
    </table>
</div>