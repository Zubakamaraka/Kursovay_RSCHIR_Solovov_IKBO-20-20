<header>
    <a id="logo-ref" href="../catalog.php"><img id="logo" src="icons/logo.png" alt="логотип"></a>
    <h1>Игро<span id="shop_name">тека</span></h1>
    <section>
        <div id="profile_btn">
            <a href="../profile.php">
            <?php 
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user']['login'];
                }
                else {
                    echo 'Войти';
                }
            ?></a>
        </div>
        <div class="dropdown">
            <img class="menu" src="../icons/menu.png" alt="menu">
            <nav class="dropdown-content">
                <a href="../catalog.php">Главная</a>
                <a href="#">Игры</a>
                <a href="#">О нас</a>
            </nav>
        </div>
    </section>
</header>