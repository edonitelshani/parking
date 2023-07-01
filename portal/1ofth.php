<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking TV</title>
  <style>
    body{
      margin: 0 20px;
    }
    /* Adjust styles as needed */
    .video-container {
      position: relative;
      padding-bottom: 56.25%; /* 16:9 aspect ratio for responsive videos */
      height: 0;
      overflow: hidden;
    }
    .video-container video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .text-content {
      padding: 20px;
    }
    .back-button {
      position: fixed;
      top: 10px;
      left: 10px;
      display: flex;
      align-items: center;
      background-color: #ffffff;
      border: none;
      border-radius: 4px;
      padding: 6px 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 1; /* Set a higher z-index to make the button appear on top */
    }
    .back-button img {
      width: 20px;
      height: 20px;
      
      margin-right: 5px;
    }
    header {
    background-color: #a43131;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 55px; /* add margin of 20px from left and right */
    border-radius: 0 0 100px 100px;
  }
  
  .header-container {
    max-width: 1200px;
    width: 100%;
    padding: 0 20px;
    display: contents;

  }
  
  .header-img {
    max-width: 100px;
    height: auto;
  }
  </style>
</head>
<body>
<header>
            <div class="header-container">
                <img src="../img/logo-me-text bardh.png" alt="your-image-alt" class="header-img">
            </div>
</header>
  <div class="video-container">
    <video src="../video\1. OffRoad Theranda Festojnë Ditën e Pavarësisë së Kosovës\Extreme Off Road Secret.mp4" controls></video>
    <a href="../portal.php" class="back-button">
      <img src="../img\logosmall.png" alt="Logo" />
      <span>Kthehu prapa</span>
    </a>
  </div>

  <div class="text-content">
    <h1>OffRoad Theranda Festojnë Ditën e Pavarësisë së Kosovës</h1>
    <p>OffRoad Theranda, një grup i pasionuar për veturat malore, ka shënuar ditën e Pavarësisë së Kosovës më 17 Shkurt, 2022. Ky event unik nisi tek pazari i qytetit të Suharekës, dhe destinacioni final ishte tek Guri i Dellocit - një pikë orientimi natyral e famshme në Kosovë.

OffRoad Theranda nuk ishte vetëm. Grupet nga pothuajse të gjitha qytetet e Kosovës dhe edhe disa të ftuar nga Shqipëria u bashkuan në këtë udhëtim ku makinat nuk janë thjesht mjet transporti, por edhe simbol i bashkimit dhe vullnetit për të përjetuar të panjohurën.

Në këtë ditë, Shqipëria dhe Kosova nuk ishin të ndara nga kufijtë, por u bashkuan në një festë të vërtetë. Kjo nuk ishte vetëm një festë për të shënuar pavarësinë e Kosovës, por edhe për të theksuar lidhjet e forta midis dy vendeve, dhe pasionin që kanë për aventurat off-road.

Atmosfera në këtë event ishte e pabesueshme. Pjesëmarrësit ndanin historitë e tyre, sfidat dhe triumfet që kishin përjetuar gjatë udhëtimit. Energjia ishte e lartë, të gjithë ishin të gëzuar, të ngarkuar me entuziazëm dhe gatishmëri për të sfiduar vetveten dhe natyrën.

Për më shumë shikoni videon e realizuar nga ekipi i Parking TV.</p>
  </div>
</body>
</html>
