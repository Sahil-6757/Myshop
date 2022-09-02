<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lucky Shop</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>

  <?php
  include('connection.php');
  ?>

  <div class="nav-container">
    <nav>
      <ul class="nav-list">
        <li id="home">Home</li>
        <li id="order">Order</li>
        <li id="team">View Gallary</li>
        <li>Contact Us</li>
        <li id="about">About</li>
      </ul>
    </nav>
  </div>

  <section>
    <div class="background-image">
      <img src="./Images/Main.jpg" alt="main" class="MainImage" height="600px" width="1349px" />
      <h2 class="ShopName">Lucky Maharashtra Nariyal Supplier</h2>
    </div>
  </section>
  <!--  -->
  <section>
    <form action="" method="post">
      <div class="order-container">
        <h2 class="Ordernow">Order Now</h2>
        <div class="order-form">

          <input type="text" name="name" autocomplete="off" placeholder="Enter Name" class="input-field" id="name" />
          <input type="text" placeholder="City" autocomplete="off" class="input-field" name="city" id="city" />
          <input type="text" placeholder="Enter Your Mobile" maxlength="10" autocomplete="off" class="input-field" name="mobile" id="mobile" />
          <input type="text" name="quantity" placeholder="Quantity" autocomplete="off" class="input-field" id="quantity" />
          <input type="submit" value="Order Now" name='submit' class="orderbtn" id="orderbtn" />

        </div>
      </div>
    </form>
  </section>
  <!--  -->
  <section>
    <div class="gallary-container container-fluid row">
      <h2 class="Ordernow">Gallary</h2>

      <img src="./Images/greencoconut1.jpg" alt="Group" class="col-6 col-sm-3" />
      <img src="./Images/greencoconut2.jpg" alt="Group" class="col-6 col-sm-3" />
      <img src="./Images/greencoconut1.jpg" alt="Group" class="col-6 col-sm-3" />
      <img src="./Images/greencoconut2.jpg" alt="Group" class="col-6 col-sm-3" />
      <img src="./Images/greencoconut1.jpg" alt="Group" class="col-6 col-sm-3" />
      <img src="./Images/greencoconut2.jpg" alt="Group" class="col-6 col-sm-3" />
      <img src="./Images/greencoconut1.jpg" alt="Group" class="col-6 col-sm-3" />
      <img src="./Images/greencoconut2.jpg" alt="Group" class="col-6 col-sm-3" />


    </div>
  </section>

  <!--  -->
  <section>
    <div class="about-section">
      <h2 class="about">About</h2>
      <div class="main-about">
        <ul class="about-list">
          <p class="about-lucky">Lucky Maharashtra Nariyal Supplier</p>
          <p class="about-address">
            <a href="https://goo.gl/maps/dASg1aWZmX3bVEw37">
              Shop No.293, Basement, New B.J. Market, Jalgaon <br />
              Green Coconut ,Mango ,Pineapple <br />
              Apple etc Retail seller.
            </a>
          </p>
          <div class="contacts">
            <div class="about-enquiry">For Enquiry <br /></div>
            <p>
              <b> Javed Pathan (Propriter)</b><br />
              9822516757
            </p>
            <p>
              <b> Roshan Khan </b><br />
              9307157585
            </p>

            <p>
              <b> Saeed Bhai </b><br />
              9673364257
            </p>
          </div>
        </ul>
      </div>
    </div>
  </section>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>