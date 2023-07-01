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
    <video src="../video\2. Meeting Marakli t'Kerrev DIASPORA\Maraklit FINISHED.mp4" controls></video>
    <a href="../portal.php" class="back-button">
      <img src="../img\logosmall.png" alt="Logo" />
      <span>Kthehu prapa</span>
    </a>
  </div>

  <div class="text-content">
    <h1>Meeting Marakli t'Kerrev DIASPORA</h1>
    <p>Në fund të muajit Korrik, një ngjarje e veçantë ka mbledhur Shqiptarët e Diasporës në një festë të vërtetë të veturave luksoze dhe sportive. Me 31 Korrik 2022, grupi "Marakli t'kerrev" ka organizuar "Meeting Diaspora", një event ku entuziastët e veturave kanë marrë pjese për të treguar dhe ndarë pasionin e tyre për makinat me të tjerët.

Ne, si ekipi i "ParkingTV", ishim atje për të regjistruar çdo moment të kësaj ngjarje të jashtëzakonshme. Kemi bërë intervista me pjesëmarrësit, kemi regjistruar veturat luksoze dhe sportive në detaje dhe kemi ndarë përvojat tona në një video që tregon bukurinë dhe emocionet e kësaj feste.

"Meeting Diaspora" ka qenë jo vetëm një event ku veturat luksoze dhe sportive kanë qenë yjet, por edhe një hapësirë ku Shqiptarët nga Diaspora kanë mundur të ndajnë pasionin e tyre, të lidhin dhe të festojnë së bashku. Atmosfera ishte e ngarkuar me emocione, entuziazëm dhe respekt për makinat.

Veturat e pranishme ishin të çdo lloji dhe stili, duke përfshirë makina sportive, luksoze dhe modele klasike, të gjitha në gjendje të shkëlqyer. Cdo makinë kishte historinë e vet, dhe ne i dhamë pjesëmarrësve mundësinë të tregonin për këtë në intervistat tona.

Ne shpresojmë që videoja jonë të sjellë ndjenjat dhe emocionet e kësaj feste për të gjithë ata që nuk mundën të jenë atje. "Meeting Diaspora" ishte më shumë se vetëm një festë e veturave, ishte një festë e bashkimit dhe pasionit, një manifestim i forcës dhe dashurisë së shqiptarëve për makinat dhe për njëri-tjetrin.</p>
</p> </div>
</body>
</html>
