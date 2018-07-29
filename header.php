<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/wargame">UHMTOTO'S WARGAME<small>(beta)</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/wargame/problems"><i class="fas fa-terminal"></i>&nbsp;Problems</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/wargame/auth"><i class="fas fa-flag"></i>&nbsp;Auth</a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="/wargame/writeup"><i class="fas fa-chalkboard-teacher"></i>&nbsp;Write-Ups</a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="/wargame/rank"><i class="fas fa-medal"></i>&nbsp;Rank</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/wargame/about"><i class="fas fa-info-circle"></i>&nbsp;About</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <?php if (isset($_SESSION['warid'])) { ?>
                <a href="/wargame/user/<?php echo ($_SESSION['warid']); ?>"><button type="button" class="btn btn-light"><i class="fas fa-user"></i>&nbsp; <?php echo ($_SESSION['warid']); ?></button></a>
                <a href="/wargame/logout"><button type="button" class="btn btn-light"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</button></a>
            <?php } ?>
            <?php if (!isset($_SESSION['warid'])) { ?>
                <a href="/wargame/login"><button type="button" class="btn btn-light"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</button></a>
                <a href="/wargame/join"><button type="button" class="btn btn-light"><i class="fas fa-user-plus"></i>&nbsp;Join</button></a>
            <?php } ?>
        </form>
    </div>
</nav>