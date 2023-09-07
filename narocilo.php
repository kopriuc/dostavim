<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg" href="images/favicon.svg">
    <title>Dostavim</title>
    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="./images/preloader.gif" alt="" />
    </div>

    <header class="header">
      <a href="home.php" class="logo">Dostav<span class="yellow">im</span></a>

      <nav class="navbar">
        <a href="#home">Domov</a>
        <a href="#services">Storitve</a>
        <a href="#about">O nas</a>
        <a href="#contact">Kontaktiraj nas</a>
        <a href="index.php">Prijavi se</a>
        <a href="narocilo.php" class="btn">Opravi naročilo</a>
      </nav>

      <div class="hamburger">
        <img src="./images/grid-outline.svg" alt="" />
      </div>
    </header>


    <section class="order-form">
  <div class="content">
    <h2>Order Food</h2>
    <p>Fill out the form below to place your order:</p>
    <form id="food-order-form">
      <!-- Form fields will go here -->
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="food-item">Select Food Item:</label>
      <select id="food-item" name="food-item">
        <option value="pizza">Pizza</option>
        <option value="burger">Burger</option>
        <option value="pasta">Pasta</option>
      </select>

      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" min="1" required>

      <button type="submit" class="btn">Place Order</button>
    </form>
  </div>
</section>



    
    <!-- Footer -->
    <footer class="footer">
      <div class="top">
        <div class="content">
          <a href="" class="logo">Dostav<span class="yellow">im</span></a>
          <p>
            mal opisa spet mnde
          </p>
        </div>

        <div class="links">
          <div class="link">
            <h4>Kontaktne informacije</h4>
            <div>
              <img src="./images/location-cross.svg" alt="" />
              <span>Polule 80c, 3000 Celje, Slovenija</span>
            </div>
            <div>
              <img src="./images/sms-tracking.svg" alt="" />
              <span>Dostavim@gmail.com</span>
            </div>
          </div>

          <div class="link">
            <h4>Povezave:</h4>
            <a href="#">Storitve</a>
            <a href="#">O nas</a>
            <a href="#">Kontaktiraj nas</a>
            <a href="#">Prenesi</a>
          </div>

          <div class="link">
            <h4>Legal</h4>
            <a href="#">Privacy Policy</a>
            <a href="#">Pogoji uporabe</a>
            <a href="#">Pogoji</a>
            <a href="#">Lokacija</a>
          </div>

          <div class="link">
            <h4>Poveži se z nami</h4>
            <div>
              <img src="./images/instagram.svg" alt="" />
              <span>Instagram</span>
            </div>
            <div>
              <img src="./images/twitter.svg" alt="" />
              <span>Twitter</span>
            </div>
            <div>
              <img src="./images/facebook.svg" alt="" />
              <span>Facebook</span>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <p>Copyright © 2010-2021 Dostavim Company S.L. All rights reserved.</p>
      </div>
    </footer>

    <!-- Go To Top -->
    <div class="scroll-top">
      <img src="./images/arrow-up-outline.svg" alt="" />
    </div>
    <!-- Scripts -->
    <script src="js/main.js"></script>
  </body>
  <style>
    /* Order Form */
.order-form {
  background-color: var(--bg-yellow);
  padding: 5rem 9%;
}

.order-form .content {
  text-align: center;
  margin-top: 80px;
}

.order-form h2 {
  font-size: 4rem;
  margin-bottom: 1.5rem;
}

.order-form p {
  color: var(--grey);
  width: 80%;
  margin: 0 auto 3rem auto;
}

.order-form form {
  max-width: 500px;
  margin: 0 auto;
}

.order-form label {
  display: block;
  font-size: 1.8rem;
  margin-bottom: 0.5rem;
}

.order-form input,
.order-form select {
  width: 100%;
  padding: 1rem;
  font-size: 1.6rem;
  margin-bottom: 2rem;
  border: 2px solid #ccc;
  border-radius: 0.5rem;
}

.order-form button {
  display: inline-block;
  color: var(--yellow);
  background-color: var(--btn-yellow);
  padding: 1rem 1.5rem;
  border-radius: 0.5rem;
  font-size: 1.6rem;
  cursor: pointer;
  transition: var(--transition);
}

.order-form button:hover {
  box-shadow: var(--box-shadow);
}

  </style>
</html>
