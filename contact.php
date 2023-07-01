<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      text-align: center;
    }

    h2 {
      margin-bottom: 30px;
    }

    .contact-info {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .location {
      margin-top: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .location p {
      margin-left: 10px;
    }

    @media (max-width: 480px) {
      .container {
        padding: 10px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Contact Us</h2>
    <div class="contact-info">
      <p>Email: info@example.com</p>
      <p>Phone: +1 123-456-7890</p>
    </div>
    <div class="location">
      <img src="location-icon.png" alt="Location Icon" width="20">
      <p>123 Main Street, City, Country</p>
    </div>
  </div>
</body>
</html>
