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
    <video src="../video\3. Kampioni botëror për DRIFT nga RedBull\RedBull.mp4" controls></video>
    <a href="../portal.php" class="back-button">
      <img src="../img\logosmall.png" alt="Logo" />
      <span>Kthehu prapa</span>
    </a>
  </div>

  <div class="text-content">
    <h1>Kampioni botëror për DRIFT nga RedBull</h1>
    <p>Adrenalina e driftit dhe zhurmat e motorëve të fuqishëm kanë mbushur atmosferën e Prishtinës në një ngjarje të paharrueshme. Organizuar nga Red Bull, ky event i veçantë solli në kryeqytetin e Kosovës yllin e driftit, kampionin botëror, Abdo Feghali.

Ngjarja, e cila u mbajt pranë Stadiumit "Fadil Vokrri", ishte një festë e madhe e motorsportit, ku entuziastët e makinave dhe sporteve me motor patën mundësinë të shohin nga afër spektaklin e Feghalit. Abdo, një figurë e madhe në botën e driftit, jo vetëm që e demonstroi talentin e tij, por edhe ndau pasionin dhe dashurinë e tij për sportin me të gjithë ata që ishin prezent.

Feghali, i cili u shfaq me veturën e tij të famshme, Nissan GTR, i dhuroi spektatorëve një spektakël të vërtetë. Me lëvizje të shpejta dhe të saktë, ai u tregoi të gjithëve se çfarë do të thotë të jesh një kampion i driftit. Zhurma e motorit, tymi i gomave dhe shpejtësia e makinës së Feghalit krijoi një atmosferë të ngarkuar me emocione dhe adrenalinë.

Kjo ngjarje nuk ishte vetëm një spektakël i driftit, por edhe një mundësi për të festuar dashurinë për makinat dhe sportet me motor. Red Bull dhe Abdo Feghali arritën të sjellin një festë të vërtetë për të gjithë ata që e ndajnë këtë pasion.

Shikoni videon e krijuar nga ParkingTV për të parë eventin. </p> </div>
</body>
</html>
