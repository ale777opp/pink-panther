<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="/<?=PATH_STYLE?>font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/<?=PATH_STYLE?>bootstrap.min.css">
  <!-- jQuery -->
  <script defer src="/<?=PATH_JS?>jquery.min.js"></script>
  <!-- Bootstrap JS + Popper JS -->
  <script defer src="/<?=PATH_JS?>bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="/<?=PATH_STYLE?>style.css">

  <title><?php echo $title?></title>

<!-- Yandex.Metrika counter

Yandex.Metrika counter -->

 <script>
    function patch(){
        let div = document.createElement('div');
        div.innerHTML = `<div class="card badge-warning" style="position:absolute;left:400px;top:250px; width:500px;background-color:#daa520;font-size:20px;"><div class="card-body"><p class="h5 text-center">В настоящий момент данный пункт меню находится в разработке</p></div></div>`;
        document.body.append(div);
        setTimeout(() => div.remove(), 2000);
    }
</script>
   </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="/index.php">Главная</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/site_components/controllers/slider.php">Мои фото<span class="sr-only">(current)</a>
              </li>
              <?php if(empty($_SESSION['id'])): ?>
                <li class="nav-item">
                <a class="nav-link disabled" href="/lk.php">Личный кабинет</a>
                </li>
             <?php else: ?>
                 <li class="nav-item">
                <a class="nav-link" href="/lk.php">Личный кабинет</a>
                </li>
             <?php endif ?>

              <li class="nav-item">
                <a class="nav-link" href="#" onclick="patch()">Контакты</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="patch()">Отзывы</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Список проектов</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="desknote/desknote.php">Drag&drop</a>
				  <!--
                  <a class="dropdown-item" href="#" onclick="patch()">Кофе-машина</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" onclick="patch()">Парсер</a>
				  -->
                </div>
              </li>
            </ul>
            <?php if(empty($_SESSION['id'])): ?>
            <a class ="btn btn-outline-primary mr-sm-2" href="/auth.php">Вход</a>
            <a class ="btn btn-outline-primary my-2 my-sm-0" href="/reg.php">Регистрация</a>
             <?php else: ?>
             <a class ="btn btn-outline-primary my-2 my-sm-0" href="/exit.php">Выход</a>
             <?php endif ?>
        </div>
    </nav>