<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/ksstyle.css">
    <title>Parking</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<link rel="icon" href="img/logosmall.png" type="image/x-icon">
<link rel="shortcut icon" href="img/logosmall.png" type="image/x-icon">
<script src="jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
   .container {
    display: flex;
    justify-content: center;
    background-color: #f5f5f5;
    border-radius: 25px;
    padding: 20px;
  }

  .photo-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .photo {
    flex: 0 0 calc(33.33% - 20px);
    max-width: calc(33.33% - 20px);
    margin-bottom: 20px;
    border-radius: 25px;
  }

  .swiper-container {
    flex: 0 0 calc(33.33% - 20px);
    max-width: calc(33.33% - 20px);
    margin-bottom: 20px;
    border-radius: 25px;
    
  }

  @media (max-width: 768px) {
    .photo,
    .swiper-container {
      flex: 0 0 calc(33.33% - 20px);
      max-width: calc(33.33% - 20px);
    }
  }

  @media (max-width: 480px) {
    .photo,
    .swiper-container {
      flex: 0 0 calc(33.33% - 20px);
      max-width: calc(33.33% - 20px);
    }
  }
  swiper-container {
      width: 100%;
      height: 300px;
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
      width: 400px;
      height: 100px;
      object-fit: cover;
    }
    .imgSlide
    {
      height: 300px;
    }
</style>

</head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">

<div class="container-fluid">
        <header>
            <div class="header-container">
                <img src="img/logo-me-text bardh.png" alt="your-image-alt" class="header-img">
            </div>
        </header>
    <div class="butonat">
        <a href="" type="button"> Rreth nesh</a> 
        <a href="" type="button"> Na Kontaktoni</a> 
    </div>
    <div class="translate">
        <select name="select" id="gjuhet">
        <option> Albanian </option>
        <option> English </option>
        <option> German </option>
        <option> Francias </option>
        <option> Rusian </option>
    </select>
    </div>

  <div class="Prod"><h1>Produktet</h1></div>


  <div class="container">
  <div class="photo-container">
    <img class="photo" src="img\Produktet\102+103\102+103.png" alt="Photo 1">
    <img class="photo" src="img\Produktet\102+103\102+103 Icon.png" alt="Photo 2">
    <div class="swiper-container">
      <!-- Swiper content here -->
      <swiper-container class="mySwiper">

    <swiper-slide><img  src="img\Produktet\102+103\Simbolet\Ikona 1.png" alt="Ikona 1" class="imgSlide"></swiper-slide>
    <swiper-slide><img src="img\Produktet\102+103\Simbolet\Ikona 2.png" alt="Ikona 2" class="imgSlide"></swiper-slide>
    <swiper-slide><img src="img\Produktet\102+103\Simbolet\Ikona 3.png" alt="Ikona 3" class="imgSlide"></swiper-slide>
    <swiper-slide><img src="img\Produktet\102+103\Simbolet\Ikona 4.png" alt="Ikona 4" class="imgSlide"></swiper-slide>

  </swiper-container>
    </div>
  </div>
</div>



<script>
  AOS.init();
</script>

</div>
</body>
</html>