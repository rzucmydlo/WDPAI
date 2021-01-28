<nav class="navbar navbar-expand-lg navbar-pink pg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?page=board">
                    <i class="fa fa-fw fa-home"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=admin">
                    <i class="fas fa-heart"></i> Health insights
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=logout">
                    <i class="<img src="https://img.icons8.com/ios-filled/50/000000/sorting-options.png"></i> Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=logout">
                    <i class="fas fa-users"></i> Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=logout">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </li>
        </ul>
        <div class="navbar-font-color">
            <i class="fas fa-user"></i> <?= $_SESSION['id'] ?>
        </div>
        
    </div>
</nav>