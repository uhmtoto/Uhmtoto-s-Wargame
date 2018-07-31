
<div class="center">
    <?php
        if(!isset($_SESSION['warid'])) {
            echo ("<h1>Login First!</h1>");
            exit();
        }
    ?>
    <h1><i class="fas fa-flag"></i>&nbsp;&nbsp;Auth</h1><br>
    <form method="POST" action="/wargame/process/auth">
        <div class="form-group">
            <input type="text" name="flag" class="form-control" placeholder="FLAG (Do NOT BruteForce!!)">
        </div>
        <button type="submit" class="btn btn-dark">Auth</button>
    </form>
</div>