<div class="sticky-top">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <a href="index.php" class="navbar-brand">Midwest emo</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="my-link nav-link my-link">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a href="releases.php" class="nav-link my-link">Релизы</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link disabled">Афиша</a>
                    </li>
                    <?php
                    if (isset($_SESSION['admin']) && ($_SESSION['admin'] > 0)) {
                        ?>
                        <li class="nav-item">
                            <a href="add_news.php" class="nav-link">Добавить новость</a>
                        </li>
                        <li class="nav-item">
                            <a href="unlogin.php" class="nav-link">Выйти</a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link">Войти</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</div>
