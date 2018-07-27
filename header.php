
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/wargame">UHMTOTO'S WARGAME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/wargame/problem">Problems</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/wargame/auth">Auth</a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="/wargame/writeup">Write-Ups</a>
            </li>
            <li class="navbar-nav">
                <a class="nav-link" href="/wargame/rank">Rank</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/wargame/about">About</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <?php if (!$_SESSION['id']) { ?>
                <a href="/wargame/login"><button type="button" class="btn btn-light">Login</button></a>
                <a href="/wargame/join"><button type="button" class="btn btn-light">Join</button></a>
            <?php } ?>
            <?php if ($_SESSION['id']) { ?>
                <a href="/wargame/user/<?php echo ($_SESSION['id']); ?>"><button type="button" class="btn btn-light"><i class="fas fa-user"></i>&nbsp; <?php echo ($_SESSION['id']); ?></button></a>
                <a href="/wargame/logout"><button type="button" class="btn btn-light">Logout</button></a>
            <?php } ?>
        </form>
    </div>
</nav>