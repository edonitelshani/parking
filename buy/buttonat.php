<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
    <style>.bottom-buttons {
  position: fixed;
  bottom: 0;
  width: 100%;
  display: flex;
  justify-content: space-evenly;
  /* padding: 10px; */
  /* background-color: red; */
  align-items: center;
  align-content: center;
  flex-wrap: nowrap;
  background-image:url("img\BG e kuqe.png");
  z-index: 1;
  
}

.bottom-left-button,
.bottom-right-button {
  padding: 10px 20px;
  color: white;
  font-weight:bold;
  border:1px solid black;
  text-decoration:none;
  border-radius:30px 30px 0 0;
  width:7rem;
  text-align:center;
  background-image:url("../img/BG e kuqe.png");
  position: relative;
  /* left: 5rem; */
  bottom: -6px;
}
}

.bottom-left-button {
  background-image:url(../"img/BG e kuqe.png");
}

.bottom-right-button {
    background-image:url("../img/BG e kuqe.png");
}
.bottom-left-button:hover {
  background-image:url("../img/BG.png");
    color: white;
    font-weight:bold;
    
}
.bottom-right-button:hover {
    background-image:url("../img/BG.png");
    color: white;
    font-weight:bold;
}
</style>
</head>
<body>
<div class="bottom-buttons">
  <a href="../ks.php" class="bottom-left-button">Produktet</a>
  <a href="../portal.php" class="bottom-right-button">Portali</a>
</div>
</body>
</html>