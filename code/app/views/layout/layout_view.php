<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app/assets/css/style.css">
    <title><?php echo $title; ?></title>
</head>

<body>
    <main>
        <?php if (isset($_SESSION['user']) && $_SESSION['user']) : ?>
            <div class="chat-list">
                <div class="chat-list__dialogs">
                    <p>1</p>
                </div>
                <hr>
                <div class="chat-list__groups">
                    <p>2</p>
                </div>
            </div>
            <hr>
        <?php endif; ?>
        <div class="content">
            <?php include_once APP_DIR . '/views/' . $content_view; ?>
        </div>
        <hr>
        <div class="side-menu">
            <?php if (isset($_SESSION['user']) && $_SESSION['user']) : ?>
            <ul class="side-menu__list">
                <li class="side-menu__list__item">Профиль</li>
                <li class="side-menu__list__item">Настройки</li>
                <li class="side-menu__list__item">Создать группу</li>
                <li class="side-menu__list__item"><a href="/logout">Выйти</a></li>
            </ul>
            <?php else : ?>
            <ul class="side-menu__list">
                <li class="side-menu__list__item">
                    <a href="/login">Войти</a>
                </li>
                <li class="side-menu__list__item">
                    <a href="/registration">Зарегестрироваться</a>
                </li>
            </ul>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>
