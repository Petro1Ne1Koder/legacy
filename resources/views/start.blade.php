<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Початок гри Legacy of  Sothorys</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/styles/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>
<link rel="shortcut icon" href="/images/web.ico" type="image/x-icon">
<body>
    <header>
        <div class="header">
            <a href="index" class="header__logo"><img src="/images/Logo.png" alt="Logo"></a>
            <nav>
                <ul class="nav">
                    <li class="nav__item">
                        <a href="info" class="nav__link">Кодекс</a>
                    </li>
                    <li class="nav__item">
                        <a href="news" class="nav__link">Новини</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">Форум</a>
                    </li>
                    <li class="nav__item">
                        <a href="auth" class="nav__link">Особистий кабінет</a>
                    </li>
                </ul>
            </nav>
            <div class="navbar-toggle">&#9776;</div>
        </div>
    </header>
    <section class="start">
        <h2 class="start__title">Початок гри</h2>
        <div class="step">
            <div class="step__first">
                <img class="step__first__img" src="/images/firststep.png" alt="first">
                <h3 class="step__first__title">Реєстрація</h3>
                <p class="step__first__text">Насамперед, за традицією, давайте ознайомимося з правилами проекту та пройдемо реєстрацію.</p>
                <a href="#" class="step__first__rools">Прочитати правила</a>
                <a href="reg" class="step__first__registration">Пройти реєстрацію</a>
            </div>
            <div class="step__two">
                <img class="step__two__img" src="/images/twostep.png" alt="two">
                <h3 class="step__two__title">Встановлення лаунчера</h3>
                <p class="step__two__text">Далі, після ознайомлення з правилами та реєстрацією, давайте скачаємо ігровий клієнт.</p>
                <a href="#" class="step__two__windows">
                    <span class="step__two__windows__text">Завантажити лаунчер</span>
                    <span class="step__two__windows__subtext">Windows</span>
                  </a>
                <a href="#" class="step__two__linux">
                    <span class="step__two__windows__text">Завантажити лаунчер</span>
                    <span class="step__two__windows__subtext">Linux</span>
                </a>
            </div>
            <div class="step__last">
                <img class="step__last__img" src="/images/laststep.png" alt="last">
                <h3 class="step__last__title">Грати!</h3>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var navbarToggle = document.querySelector('.navbar-toggle');
            var navbarMenu = document.querySelector('.nav');

            navbarToggle.addEventListener('click', function () {
                navbarMenu.classList.toggle('navbar-open');
            });
        });
    </script>
</body>
</html>