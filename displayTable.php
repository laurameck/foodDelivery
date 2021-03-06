<!DOCTYPE html> 
<html lang="en-US" dir="ltr">  <!--direction of language l to r-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Delivery Services</title>
  <!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css"  href="style.css" />
</head>

<body>
 <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#">Teal</a></li>
    <li><a href="#">Salmon</a></li>
    <li><a href="#">Black</a></li>
  </ul>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="./index.html" class="brand-logo">Delivery</a>
        <ul class="right ">
          <li><a href="./signup.html">Sign Up</a></li>
          <li><a href="#signup-modal">Sign In</a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#" data-activates="dropdown1">Theme</a></li>
          <li><a href="#shopping-cart" onclick="showHide()"><i class = "material-icons" id="cart">shopping_cart</i></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container">
   <div class="row flexbox">
    <div class="input-field col s1">
      <label>View</label>
      <!-- uncomment when php & sql fully implemented -->
      <!-- <form action='' method='get' > -->
      <select>
        <option value="10" selected>10</option>
        <option value="40">40</option>
        <option value="60">60</option>
        <option value="all">All</option>
      </select>
      <!-- </form> -->
    </div>

    <div class="input-field col s3">
      <label>Filter</label>
      <!-- uncomment when php & sql fully implemented -->
      <!-- <form action='' method='get' > -->
      <select multiple>
        <option value="Breakfast">Breakfast</option>
        <option value="Restaurant">Restaurant</option>
        <option value="Mexican">Mexican</option>
        <option value="Local Chain">Local Chain</option>
        <option value="Corn-Free">Corn-Free</option>
        <option value="Egg-Free">Egg-Free</option>
        <option value="Dairy-Free">Dairy-Free</option>
        <option value="Soy-Free">Soy-Free</option>
        <option value="Breakfast">Breakfast</option>
        <option value="Vegan Friendly">Vegan Friendly</option>
        <option value="Bakery">Bakery</option>
        <option value="Vegetarian Friendly">Vegetarian Friendly</option>
        <option value="Kid Friendly">Kid Friendly</option>
        <option value="Delivery">Delivery</option>
        <option value="Takeout">Takeout</option>
        <option value="Chain">Chain</option>
        <option value="Japanese">Japanese</option>
        <option value="Happy Hour">Happy Hour</option>
        <option value="Late Night">Late Night</option>
        <option value="Free Wi-Fi">Free Wi-Fi</option>
        <option value="Vegan Friendly">Vegan Friendly</option>
        <option value="Lunch">Lunch</option>
        <option value="Cafe">Cafe</option>
        <option value="Restaurant">Restaurant</option>
        <option value="Kid Friendly">Kid Friendly</option>
        <option value="Lunch">Lunch</option>
        <option value="Brunch">Brunch</option>
        <option value="Italian">Italian</option>
        <option value="Dairy-Free">Dairy-Free</option>
        <option value="Italian">Italian</option>
        <option value="Late Night">Late Night</option>
        <option value="Cafe">Cafe</option>
        <option value="Deli">Deli</option>
        <option value="Juice Bar">Juice Bar</option>
        <option value="Bar">Bar</option>
        <option value="Happy Hour">Happy Hour</option>
        <option value="Takeout">Takeout</option>
        <option value="Fast Food">Fast Food</option>
        <option value="Peanut-Free">Peanut-Free</option>
        <option value="Nut-Free">Nut-Free</option>
        <option value="Mexican">Mexican</option>
        <option value="Quick Service Restaurant">Quick Service Restaurant</option>
        <option value="Deli">Deli</option>
        <option value="Catering">Catering</option>
        <option value="Food Truck">Food Truck</option>
        <option value="Locally Sourced">Locally Sourced</option>
        <option value="Sustainable">Sustainable</option>
        <option value="Thai">Thai</option>
        <option value="Vietnamese">Vietnamese</option>
        <option value="Sushi">Sushi</option>
        <option value="Ice Cream">Ice Cream</option>
        <option value="Bar">Bar</option>
        <option value="Indian">Indian</option>
        <option value="Vegetarian Friendly">Vegetarian Friendly</option>
        <option value="Steakhouse">Steakhouse</option>
        <option value="Seafood">Seafood</option>
        <option value="Paleo Friendly">Paleo Friendly</option>
        <option value="Wine Bar">Wine Bar</option>
        <option value="Brunch">Brunch</option>
        <option value="Barbecue">Barbecue</option>
        <option value="Chinese">Chinese</option>
        <option value="Japanese">Japanese</option>
        <option value="Latin">Latin</option>
        <option value="Seafood">Seafood</option>
        <option value="Brazilian">Brazilian</option>
        <option value="Sports Bar">Sports Bar</option>
        <option value="Cash Only">Cash Only</option>
        <option value="Brazilian">Brazilian</option>
        <option value="Steakhouse">Steakhouse</option>
        <option value="Other">Other</option>
        <option value="Indian">Indian</option>
        <option value="Ice Cream">Ice Cream</option>
        <option value="Mediterranean">Mediterranean</option>
        <option value="Greek">Greek</option>
        <option value="Comfort Food">Comfort Food</option>
        <option value="Southern">Southern</option>
        <option value="Cajun">Cajun</option>
      </select>
      <!-- </form> -->
    </div>

  </div> <!-- end row -->
</div> <!-- end container -->
<table class="centered highlight">
  <thead>
    <tr>
      <th data-field="name">Restaurant</th>
      <th data-field="rating">Rating</th>
      <th data-field="celiac">Celiac Friendly</th>
      <th data-field="price">Price</th>
      <th data-field="address">Address</th>
      <th data-field="category">Category</th>

    </tr>
  </thead>
  <tbody>
<!--     <?php
    if($_GET['value'] == '10')) {
  $query = "SELECT * FROM ___ LIMIT 10";
}
else if($_GET['value'] == '40')) {
    // query to get all Earl records
  $query = "SELECT * FROM ____ LIMIT 40";
} 
else if($_GET['value'] == '60')) {
 $query = "SELECT * FROM ____ LIMIT 60";
}
else if($_GET['value'] == 'all')) { 
  $query = "SELECT * FROM ____";}
  // ADD TABLE NAME

  $sql = mysql_query($query);

// print stuff
  ?> -->
  <tr>
    <td>Salsa Brava</td>
    <td>
     <!-- https://codepen.io/Bluetidepro/pen/GkpEa -->
     <!-- change width to rating amount from sql database -->
     <div class="star-ratings">
      <div class="star-ratings-fill" style="width: 90%" >
        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
      </div>
    </div>
  </td>
  <td>
    100% of 11 votes
    <div class="progress">
      <!-- set width to whatever percentage is -->
      <div class="determinate" style="width: 100%"></div>
    </div>
  </td>
  <td>$$</td>
  <!-- set url to address, can include spaces -->
  <td><a href="http://maps.google.com/?q=52 West Springer Drive, Highlands Ranch, CO 80129">52 West Springer Drive, Highlands Ranch, CO 80129</a> </td>
  <td>Mexican, Restaurant, Local Chain</td>
</tr>

</tbody>
</table>
<!-- Modal --> <!-- aria hidden is for screen-readers -->
<div class="modalDialog" id="signup-modal" aria-hidden="true">
  <div class="modalInner">
    <h3><div id="signInHeader">Sign In</div></h3>
    <form class="col s12" action="verifyUser.php" method="POST">
      <div class="row">
        <i class = "material-icons signin">email</i>
               <input id="email" name="email" type="email" class="validate" placeholder="Email">

      </div>
      <div class="row">
        <i class = "material-icons signin" >vpn_key</i>
        <input id="pw" name="pw" type="password" class="validate" placeholder="Password">

      </div>
      <div class="row">
      <button class="btn waves-effect waves-light" type="submit" name="action" id='signupSubmit'><input type="submit">
      </button>

      </div>
      <a href="#close" id="close">x</a>
    </div>
  </div>
</div>

<!-- Cart -->
<!-- http://codepen.io/drehimself/pen/VvYLmV -->
<div class="wrapper" id="shopping-cart">
  <div class="cart">
    <div id="cart-header">
      <span class="badgee">Num Items</span>
      <span class="cart-total">
        <span id='tot'> Total</span> <span id="amount">$40</span>
      </span>
    </div><!-- end cart header -->
    <ul class="cart-items">
      <!-- if empty -->
      <div id='empty'> Empty Cart </div>
      <!-- else -->
      <li class="clearfix">
        <img src="http://economictimes.indiatimes.com/photo/22729131.cms" alt="item1" width="70" height="70"/>
        <span class="item-name">French Fries</span>
        <span class="item-price">$2</span>
        <span class="item-size">Medium</span>
        <span class="item-quantity">Quantity: 01</span>

      </li>
    </ul>
    <div id="cart-footer">  <script type="text/javascript" src="https://js.stripe.com/v1/"></script>
      <form action="" method="GET">
        <!--    <enter data amount here later>-->
        <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_live_SiH7iKhWhaCSDkSYNvum1Fju"

        data-amount="999"
        data-name="Food Truck Site"
        data-description="Pay Here!"
        data-image="http://usnwc.org/wp-content/uploads/2015/05/Foodtruck_icon1.png"
        data-locale="auto">
        </script>
      </form>



      <noscript><p>JavaScript is required for the checkout form.</p></noscript>

      <!-- change this path to card.js --></div>
    </div>
  </div>
  <script>
  function showHide(){
    if(document.getElementsByClassName('wrapper')[0].style.opacity == 1){
      document.getElementsByClassName('wrapper')[0].style.opacity = 0;
        }
        else{
          document.getElementsByClassName('wrapper')[0].style.opacity = 1;
        }
      }
      </script>
<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
  <script>
  $(document).ready(function() {
    $('select').material_select();
  });
  </script>
<script>
  $(document).ready(function(){
    $(".dropdown-button").dropdown();

    $("ul #dropdown1 li").click(function(){
      var string = $(this).text();
      if (string =="Teal"){
        $(".nav-wrapper").css("background-color", "#00bfa5");
      }
      else if (string=="Salmon"){$(".nav-wrapper").css("background-color", "#EE6E73");}
      else if (string =="Black"){$(".nav-wrapper").css("background-color", "#212121");}
    });

  });
  </script>
</body>

<footer>
</footer>

</html>
