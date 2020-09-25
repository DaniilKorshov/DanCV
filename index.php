<!DOCTYPE html>
<html lang="ru">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>DK_CV</title>
  <base target="_blank">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">


  <?php
  require_once "php/news.php";
  $works=getWorks(5);//число в скобках-ограничение количества блоков с моими работами
  ?>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script><!--Для скролла и для bootstrap-->
  <script type="text/javascript" src="js/slide.js"></script><!--Плавный скролл-->
  <script type="text/javascript" src="js/parallax.js"></script>

  <script src="https://use.fontawesome.com/da37c8fb7f.js"></script><!--для иконок в контактах-->
</head>

<body>   
  <main>

    <div id="header" class="parallax-window" data-parallax="scroll" data-image-src="img/bg_header.jpg">
      <div class=container>
        <div class="col-12" id="welcome">
          <h2 class="text-center">Привет, меня зовут Даниил</br>Я начинающий программист</h2>
        </div>
        <div id="ScrollButton">
        <a href="#about"><span></span></a>
        </div>
      </div>
    </div>

    <div id="about">
      <div class="container">
        <div class="col-12" class="title">
          <h3 class="text-center">Обо мне</h3>
        	<div id="text_about_me" class="col-12">
        		<p>
        		Привет, меня зовут Даниил. Я начинающий программист и на данный момент учусь в Белорусском Государственном Университете информатики и радиоэлектронике по специальности программист, бизнес-аналитик. Я очень заинтересован в развитии в области программирования и открыт для любых предложений касающихся этого.
        	    </p>
        	    <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
            </div>
        </div>
      </div>
    </div>

    <div id="resume" class="parallax-window" data-parallax="scroll" data-image-src="img/bg_resume.jpg">
      <div class="container">
        <div class="col-12" class="title">
          <h3 class="text-center">Резюме</h3>
          <p id="resume_text">Нажмите на кнопку чтобы скачать мое резюме. Если это вам не нужно, вы можете просто пролистать ниже и посмотреть краткий перечень моих навыков.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Мое резюме</a></p>
        </div>
      </div>
    </div>

    <div id="skills">
      <div class="container">
        <div class="col-12" class="title">
          <h3 class="text-center">Навыки</h3>
        </div>
        <div class="col-12">
        	<div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">HTML</div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">CSS</div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">JS</div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">PHP</div>
            </div>
             <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">C++</div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">JAVA</div>
            </div>
        </div>
        <p>Это не все навыки которыми я владею.Но они на данный момент являются основными.На данный момент я продолжаю свое обучение и не собираюсь останавливаться на достигнутом. </p>
      </div>
    </div>

    <div id="works" >
      <div class="container" >
        <div class="col-12" class="title">
          <h3 class="text-center">Мои проекты</h3>
        </div>


        <?php
        foreach($works as $one)
        {
          echo '
          <div class="work_block col-lg-12">
          <div class="row">
          <div class="col-lg-6 col-sm-12">
              <img class="work_img" src="img/works/'.$one["id"].'.png" >
          </div>
          <div class="col-lg-6 col-sm-12">
              <h3>'.$one["title"].'</h3>
              <button class="btn btn-primary" data-toggle="modal" data-target="#largeModal'.$one["id"].'"><h3>Подробнее</h3></button>
          <div class="container">
          <div id="largeModal'.$one["id"].'" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
          <div class="modal-header"><h3 class="modal-title">'.$one["title"].'</h3></div>
          <div class="modal-body"><p>'.$one["text"].'</p></div>
          <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button> </div>
          </div>
          </div>
          </div>
          </div>

            </div>
          </div>
        </div>';
        }
        ?>

        </div>
    </div>
  
    <div id="contacts">
      <div class="container">
        <div class="col-12" class="title">
          <h3 class="text-center">Контакты</h3>
        </div>
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <h3 class="text-center">Обратная связь</h3>
            <form id="form">
              <div class="form-group">
                <label for="name">Ваше имя:</label>
                <input type="name" name="name" class="form-control" id="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="message">Сообщение:</label>
                <textarea class="form-control" name="message" rows="3"></textarea>
              </div>
                <button id="send_button" type="submit" class="btn btn-info">Отправить сообщение</button>
            </form> 
          </div>
          <div class="col-lg-6 col-sm-12">
            <h3 class="text-center">Другие контакты</h3>
              <div id="links_group" class="text-center">
                <a href="https://vk.com/id147095166"><i class="fa fa-vk fa-3x" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-skype fa-3x" aria-hidden="true"></i></i></a>
                <a href="#"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
      </div>
    </div>

  </main>

<script type="text/javascript" src="common.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>