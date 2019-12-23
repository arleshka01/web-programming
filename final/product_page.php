<!DOCTYPE html>
<html>
<head>
  <title></title>

 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header>
    <div>
      <a href="" class="header_menu">
        English
      </a>
      <a href="" class="header_menu">
        USD
      </a>
    </div>
    <div>
      <a href="index.php" class="header_menu">
        Home
      </a>

      <a href="" class="header_menu">
        Help
      </a>
      <a href="about_us.php" class="header_menu">
        About Us
      </a>

      <a href="" class="header_menu">
        Wish List
      </a>
      <a href="register.php" class="header_menu">
        My Account
      </a>
    </div>

  </header>


    <section class="finder">
    <img src="logo.png" id="logo">
    <div id="search">
      <input type="text" name="" id="find_input" placeholder="Enter keywords here...">
      <a id="button_all_categories">All Categories</a>
      <a href="#" id="search_button"><img src="search.png" id="search_image"></a>
    </div>
    <div id="shopping_cart">
      <img id="cart" src="cart.png">
      <div id="shopping_cart_info">
        <a>Shopping Cart<br>0 item - 0.00$</a>
      </div>
    </div>
  </section>


<main class="container">
 
  <!-- Left Column / Headphones Image -->
  <div class="left-column">
    <img data-image="black" src="pants3.jpg" alt="">
    <img data-image="blue" src="pants2.jpg" alt="">
    <img data-image="red" class="active" src="pants1.jpeg" alt="">
  </div>
 
 
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <span>Sport Pants</span>
      <h1>Karter sport pants </h1>
      <p>In cotton fleece with ribbed finishes and an adjustable waistline, these Karter sport pants are available in a wide selection of colors. Take your pick.</p>
    </div>
 
    <!-- Product Configuration -->
    <div class="product-configuration">
 
      <!-- Product Color -->
      <div class="product-color">
        <span>Color</span>
 
        <div class="color-choose">
          <div>
            <input data-image="red" type="radio" id="red" name="color" value="red" checked>
            <label for="red"><span></span></label>
          </div>
          <div>
            <input data-image="blue" type="radio" id="blue" name="color" value="blue">
            <label for="blue"><span></span></label>
          </div>
          <div>
            <input data-image="black" type="radio" id="black" name="color" value="black">
            <label for="black"><span></span></label>
          </div>
        </div>
      </div>
 
      <!-- Cable Configuration -->
      <div class="cable-config">
        <span>Cable configuration</span>
 
        <div class="cable-choose">
          <button>XS</button>
          <button>S</button>
          <button>M</button>
          <button>L</button>
          <button>XL</button>
        </div>
 
        <a href="#">How to configurate your product</a>
      </div>
    </div>
 
    <!-- Product Pricing -->
    <div class="product-price">
      <span>$39</span>
      <a href="#" class="cart-btn">Add to cart</a>
    </div>
  </div>
</main>

    <footer class="footer">
        <div class="row">
          <div class="footer_about">
            <h6>About</h6>
            <p class="text-justify">Arlen Pants is an American multinational technology company based in Seattle that focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence. It is considered one of the Big Four tech companies, along with Google, Apple, and Facebook..</p>
          </div>

          <div class="footer_category">
            <h6>Categories</h6>
            <ul class="footer_links">
              <li><a href="#">Jeans</a></li>
              <li><a href="categoty.php">Sport</a></li>
              <li><a href="#">Casual</a></li>
              <li><a href="#">Classical</a></li>
              <li><a href="#">Jogger</a></li>
              
            </ul>
          </div>

          <div class="footer_link">
            <h6>Quick Links</h6>
            <ul class="footer_links">
              <li><a href="about_us.php">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Our Address</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Other Indormation</a></li>
            </ul>
          </div>
        </div>
        <div class="footer_line">
          <hr>
        </div>
    
    
          <div class="footer_copyright">
            <p class="copyright_text">Copyright &copy; 2019 All Rights Reserved by 
          <a href="about_us.php">Arlen Pants</a>.
            </p>
          </div>
</footer>


<script type="text/javascript">
  fetch('localhost/finalProject')
 $(document).ready(function() {

  $('.color-choose input').on('click', function() {
    var headphonesColor = $(this).attr('data-image');
    $('.active').fadeOut(500).removeClass('active');
    $('.left-column img[data-image = ' + headphonesColor + ']').fadeIn(250).addClass('active');
    $(this).addClass('active');
  });
});
</script>
</body>
</html>
