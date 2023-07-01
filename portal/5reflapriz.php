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
    <video src="../video\5. Reli i Flamurit Prizren - Vlorë\28 Nentori Final.mov" controls></video>
    <a href="../portal.php" class="back-button">
      <img src="../img\logosmall.png" alt="Logo" />
      <span>Kthehu prapa</span>
    </a>
  </div>

  <div class="text-content">
    <h1>Reli i Flamurit Prizren - Vlorë</h1>
    <p>Shfaqja e Dashurisë për Veturat dhe Patriotizmit nga AMTKK

Me 28 Nëntor 2022, AMTKK organizoi "Rrelin e Flamurit" nga Prizreni deri në Vlorë, një garë që shënoi festën e Flamurit me një spektakël të vërtetë të veturave. Pjesëmarrësit e këtij eventi u nisën nga Prizreni dhe udhëtuan deri në destinacionin final, Vlorën.

Pas mbërritjes në Vlorë, garat filluan dhe shfaqja e veturave të bukura, kombinuar me atmosferën festive të Dëshmorëve të Kombit, krijoi një përvojë të paharrueshme për pjesëmarrësit dhe spektatorët. "Rreli i Flamurit" solli së bashku dashurinë për makinat dhe festimin e festës kombëtare, duke dhënë një ton të veçantë festimit.
</p>  </div>
</body>
</html>
