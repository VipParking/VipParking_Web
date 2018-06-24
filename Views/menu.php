
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand  navbar-brand-centered" href="#">Vip Parking</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item <?php echo MenuLebel == 0 ? 'active' : ''  ?>">
                <a class="nav-link" href="mainDashboard.php">Dashboard</a>
            </li>
            <li class="nav-item <?php echo MenuLebel == 1 ? 'active' : ''  ?>">
                <a class="nav-link" href="prenotazione.php">Prenotazioni</a>
            </li>
            <li class="nav-item <?php echo MenuLebel == 2 ? 'active' : ''  ?>">
                <a class="nav-link" href="clienti.php">Clienti</a>
            </li>
            <li class="nav-item <?php echo MenuLebel == 3 ? 'active' : ''  ?>">
                <a class="nav-link disabled" href="report.php">Report</a>
            </li>
            <li class="nav-item <?php echo MenuLebel == 4 ? 'active' : ''  ?>">
                <a class="nav-link disabled" href="tariffario.php">Tariffario</a>
            </li>
        </ul>
    </div>
</nav>
