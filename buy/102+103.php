<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>


swiper-container {
      width: 100%;
      height: 800px;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 800px;
      /* object-fit: cover; */
    }
  
  </style>
</head>
<body>
    <?php include "header.php";  ?>
    <div class="blej">
      <a href="" type="button" style="width:100px;height: 100px;position: fixed;left: 137vh;top: 16vh;background: #891212;"> <img src="../img/Buy e bardh.png" style="width:1rem;">buy</a>
    </div>
    <swiper-container class="mySwiper" direction="vertical" pagination="true" pagination-clickable="true">
    <swiper-slide><img src="../img\Produktet\102+103\102+103.png"></swiper-slide>
    <swiper-slide><img src="prodfot\1.png"></swiper-slide>
    <swiper-slide><img src="prodfot\2.png"></swiper-slide>
    <swiper-slide><img src="prodfot\3.png"></swiper-slide>
    <swiper-slide><img src="prodfot\4.png"></swiper-slide>
    <!-- <swiper-slide>Slide 6</swiper-slide>
    <swiper-slide>Slide 7</swiper-slide>
    <swiper-slide>Slide 8</swiper-slide>
    <swiper-slide>Slide 9</swiper-slide> -->
  </swiper-container>
  <swiper-container class="mySwiper2" space-between="30" pagination="true" pagination-clickable="true">
    <swiper-slide><img src="../img\Produktet\102+103\102+103.png"></swiper-slide>
    <swiper-slide><img src="prodfot\1.png"></swiper-slide>
    <swiper-slide><img src="prodfot\2.png"></swiper-slide>
    <swiper-slide><img src="prodfot\3.png"></swiper-slide>
    <swiper-slide><img src="prodfot\4.png"></swiper-slide>
    <!-- <swiper-slide>Slide 6</swiper-slide>
    <swiper-slide>Slide 7</swiper-slide>
    <swiper-slide>Slide 8</swiper-slide>
    <swiper-slide>Slide 9</swiper-slide> -->
  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <!-- slideri -->
    <!-- <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img\Produktet\102+103\102+103.png" style="    
      height: 595px;
    position: relative;
    left: 12em;
    width: 70% !important;
}
" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img\Produktet\102+103\102+103.png" style="
    height: 595px;
    position: relative;
    left: 12em;
    width: 70% !important;
}
" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img\Produktet\102+103\102+103.png" style="
    height: 595px;
    position: relative;
    left: 12em;
    width: 70% !important;
}
" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<?php include "buttonat.php";  ?>
</body>
</html>