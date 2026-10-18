<nav class="navbar navbar-expand-lg">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link <?= !isset($_GET['page']) || $_GET['page'] == "home" ? "active" : "" ?>" href="?page=home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isset($_GET['page']) && $_GET['page'] == "form" ? "active" : "" ?>" href="?page=form">FORM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isset($_GET['page']) && $_GET['page'] == "about" ? "active" : "" ?>" href="?page=about">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isset($_GET['page']) && $_GET['page'] == "contact" ? "active" : "" ?>" href="?page=contact">CONTACT</a>
                </li>
            </ul>

        </div>
        <div class="social-icons d-none d-lg-flex">
            <a href="http://" target="_blank" rel="noopener noreferrer">
                <img src="public/images/icons/facebook.svg" alt="Facebook">
            </a>
            <a href="http://" target="_blank" rel="noopener noreferrer">
                <img src="public/images/icons/x-twitter.svg" alt="X">
            </a>
            <a href="http://" target="_blank" rel="noopener noreferrer">
                <img src="public/images/icons/whatsapp.svg" alt="WhatsApp">
            </a>
        </div>
    </div>
</nav>