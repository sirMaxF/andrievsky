<!DOCTYPE html>
<html lang="en">
<?php include('html/head.php'); ?>

<body>
  <div class="wrapper">
    <div class="content">
      <?php include('html/header.php'); ?>
      <div class="swiper">
        <!-- <h1 class="caption">Топ публикации</h1> -->
        <div class="swiper-wrapper">
          <div class="swiper-slide slide">
            <div class="slide__img"><img src="img/2.jpg" alt="">
              <div class="slide__text">Lorem, ipsum dolor.</div>
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="slide__img"><img src="img/image_1.png" alt="">
              <div class="slide__text">Lorem, ipsum dolor.</div>
            </div>
          </div>
          <div class="swiper-slide slide">
            <div class="slide__img"><img src="img/image_2.png" alt="">
              <div class="slide__text">Lorem, ipsum dolor.</div>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <main class="main">
        <h2 class="caption">Последние публикации</h2>
        <div class="main__text text">
          <div class="text__item">
            <div class="text__img"><img src="img/image_small.png" alt=""></div>
            <div class="text__caption caption"><a href="">Прикольная статья на тему динамического сайта...</a></div>
            <div class="text__author">Authot</div>
            <div class="text__date">Date</div>
            <div class="text__snippet">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio
              possimus a inventore maxime laborum.</div>
          </div>
          <div class="text__item">
            <div class="text__img"><img src="img/image_small.png" alt=""></div>
            <div class="text__caption caption"><a href="">Прикольная статья на тему динамического сайта...</a></div>
            <div class="text__author">Authot</div>
            <div class="text__date">Date</div>
            <div class="text__snippet">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio
              possimus a inventore maxime laborum.</div>
          </div>
          <div class="text__item">
            <div class="text__img"><img src="img/image_small.png" alt=""></div>
            <div class="text__caption caption"><a href="">Прикольная статья на тему динамического сайта...</a></div>
            <div class="text__author">Authot</div>
            <div class="text__date">Date</div>
            <div class="text__snippet">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio
              possimus a inventore maxime laborum.</div>
          </div>
          <div class="text__item">
            <div class="text__img"><img src="img/image_small.png" alt=""></div>
            <div class="text__caption caption"><a href="">Прикольная статья на тему динамического сайта...</a></div>
            <div class="text__author">Authot</div>
            <div class="text__date">Date</div>
            <div class="text__snippet">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio
              possimus a inventore maxime laborum.</div>
          </div>
          <div class="text__item">
            <div class="text__img"><img src="img/image_small.png" alt=""></div>
            <div class="text__caption caption"><a href="">Прикольная статья на тему динамического сайта...</a></div>
            <div class="text__author">Authot</div>
            <div class="text__date">Date</div>
            <div class="text__snippet">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio
              possimus a inventore maxime laborum.</div>
          </div>
          <div class="text__item">
            <div class="text__img"><img src="img/image_small.png" alt=""></div>
            <div class="text__caption caption"><a href="">Прикольная статья на тему динамического сайта...</a></div>
            <div class="text__author">Authot</div>
            <div class="text__date">Date</div>
            <div class="text__snippet">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem optio
              possimus a inventore maxime laborum.</div>
          </div>
        </div>
        <aside class="main__aside aside">
          <div class="aside__search">
            <form action="">
              <p class="caption">Поиск</p>
              <p><input type="text" name="text" id=""></p>
            </form>
          </div>
          <div class="aside__categories categories">
            <div class="categories__caption caption">Categories</div>
            <nav class="categories__row">
              <div class="categories__item">Lorem.</div>
              <div class="categories__item">Qui!</div>
              <div class="categories__item">Quis?</div>
              <div class="categories__item">Perspiciatis?</div>
            </nav>
          </div>
        </aside>
      </main>
    </div>
    <?php include('html/footer.php'); ?>
  </div>


  <script src="js/app.min.js"></script>
</body>

</html>