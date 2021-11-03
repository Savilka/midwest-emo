<div id="menu">
    <a href="index.php">
        <h1 class="unselectable header-top">midw</h1>
        <h1 class="unselectable header-low">estemo</h1>
    </a>
    <div id="nav-bar">
        <p class="nav-button"><a href="news.php" data-title="новости">новости</a></p>
        <p class="nav-button"><a href="releases.php" data-title="релизы">релизы</a></p>
        <p class="nav-button"><a href="" data-title="афиша">афиша</a></p>
        <p class="nav-button"><a href="login.php" data-title="афиша">войти</a></p>
        <?php
        if (isset($_SESSION['admin']) && ($_SESSION['admin'] > 0)) {
            print ('<p class="nav-button"><a href="add_news.php" data-title="афиша">добавить новость</a></p>');
            print ('<p class="nav-button"><a href="unlogin.php" data-title="афиша">выйти</a></p>');
        }
        ?>
    </div>
</div>


