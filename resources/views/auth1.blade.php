<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід Legacy of  Sothorys</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/styles/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>
<link rel="shortcut icon" href="/images/web.ico" type="image/x-icon">
<body>
  @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
              </ul>
          </div>
  @endif
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
    <section class="Log">
        <section class="login-section">
            <h2>Вхід</h2>
            <form action="auth/check" method="post">
              @csrf
              <div class="form-group">
                <label for="login">Логін</label>
                <input type="text" id="login" name="login" required>
              </div>
              <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" required>
              </div>
                <button class="logbtn" type="submit">Увійти</button>
            </form>
            <div class="links">
              <a href="reg">Зареєструватися</a>
            </div>
          </section>
          
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