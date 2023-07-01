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
    <video src="../video\4. Meeting Marakli t'Kerrev Ferizaj\MK Ferizaj Final.mp4" controls></video>
    <a href="../portal.php" class="back-button">
      <img src="../img\logosmall.png" alt="Logo" />
      <span>Kthehu prapa</span>
    </a>
  </div>

  <div class="text-content">
    <h1>Meeting Marakli t'Kerrev Ferizaj</h1>
    <p>Një tjetër event i madh i veturave, me organizim nga grupi "Marakli t'kerrev", u mbajt më 26 Tetor, 2022, në qytetin e Ferizajit. Festë e shumëpritur nga dashamirët e veturave, ky event u shënuar nga prezantimi i modeleve të reja dhe të vjetra, sportive dhe luksoze, dhe nga prania e një numri të madh pjesëmarrësish.

Ferizaj, një qytet i njohur për pasionin e banorëve të tij për veturat, u kthye në skenën e një eventi të veçantë ku entuziastët e veturave patën mundësinë të shfaqin dhe ndajnë dashurinë e tyre për makinat. Grupi "Marakli t'kerrev" si organizator i këtij eventi, u përqendrua jo vetëm në prezantimin e makinave të bukura, por edhe në kriimin e një atmosfere të ngrohtë dhe festive.

Qyteti i Ferizajit u mbush me ndritjen e metalit dhe zërin e motorëve. Makinat, si modele të reja ashtu edhe klasike, filluan të mbërrijnë nga mëngjesi, duke tërhequr vëmendjen e të gjithëve.

Më shumë se vetëm një event i makinave, kjo festë ishte një manifestim i forcës dhe unitetit të komunitetit të dashamirëve të veturave. Kjo ishte një ditë e veçantë ku pasioni për makinat u shndërrua në një lidhje që bashkoi të gjithë pjesëmarrësit.

Organizatori "Marakli t'kerrev" dha një shembull të shkëlqyer se si pasioni mund të lidhë njerëzit dhe të krijojë një komunitet të fortë. Festën e 26 Tetorit në Ferizaj do ta mbajnë mend të gjithë si një ditë e mbushur me emocione, adrenalinë dhe dashuri për makinat.
</p>  </div>
</body>
</html>
