<!DOCTYPE html> 
<html lang="en-US" dir="ltr">  <!--direction of language l to r-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Delivery Services</title>
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
      <form action="" method="POST">
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
  <div class="container">

<?php


$servername = "127.0.0.1";
$username = "hanapuan";
$password = "warEhou!se";
$dbname = "hanapuan";

//starting sql connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking that the username is not already taken in users table
 $sql4 = "SELECT * from Users where Username='" . $_POST['shipUname'] . "';";
 $sql4 = htmlspecialchars($sql4);
 //echo $sql4;

$result = mysqli_query($conn, $sql4);

//echo $result->num_rows . " MEEOWMEOWMEOW";
if($result->num_rows > 0){
  echo "<center><br><br><br><h2>Error: Account with that email already exists!</h2></center>";
  echo "<center><br> <button onclick='goBack()'>Go Back?</button></center>";
}
else{
echo "<br><br><center><h2>Welcome, " . $_POST['shipUname'] . "</h2><br></center><center><p>Account successfully created!</p></center>";
//if the username isnt taken, continue with adding user info into table and shipping and billing info to tables

//create hashed verifier
  //echo $_POST['pw1'];
$salt = mcrypt_create_iv(15, MCRYPT_DEV_URANDOM);
//echo "Hello/n";
$verifier = $salt . hash("SHA256", $salt . htmlspecialchars($_POST['pw1']));
//echo $verifier;


  $sql3 = 'INSERT INTO Users (Username, Salt, Verifier) VALUES ( ' . "'" . $_POST['shipUname'] . "', '" . $salt . "', '" . $verifier ."');";
 
//echo $sql3;

  if($conn->query($sql3) === TRUE){
  }else{
    echo "Error: " . $sql3 . "<br>" . $conn->error;
  }

   if($conn->connect_error){
        die("Connection to ShippingInfo Failed: ". $conn->connect_error);
}

//insert shipping info for user
$sql = 'INSERT INTO ShippingInfo (FirstName, LastName, Street, Rm, City, State, Zipcode, Username) VALUES ( ' . "'" . htmlspecialchars($_POST['shipFname']) . "', '" . htmlspecialchars($_POST['shipLname']) . "', '" . htmlspecialchars($_POST['shipStreet']) . "', '" . htmlspecialchars($_POST['shipRm']). "', '" . htmlspecialchars($_POST['shipCity']). "', '" . htmlspecialchars($_POST['shipState']) . "', '" . htmlspecialchars($_POST['shipZipcode']) . "', '". htmlspecialchars($_POST['shipUname']) . "');";

  if($conn->query($sql) === TRUE){
  }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


//insert same billing info as shipping info if not otherwise specified
if($_POST['billFname'] != null){
  $sql2 = 'INSERT INTO BillingInfo (FirstName, LastName, Street, Rm, City, State, Zipcode, Username) VALUES ( ' . "'" . htmlspecialchars($_POST['billFname']) . "', '" . htmlspecialchars($_POST['billLname']) . "', '" . htmlspecialchars($_POST['billStreet']). "', '" . htmlspecialchars($_POST['billRm']) . "', '" . htmlspecialchars($_POST['billCity']) . "', '" . htmlspecialchars($_POST['billState']) . "', '" . htmlspecialchars($_POST['billZipcode']) ."', '". htmlspecialchars($_POST['shipUname']) . "');";
}
//inserting different billing info
else{
  $sql2 = 'INSERT INTO BillingInfo (FirstName, LastName, Street, Rm, City, State, Zipcode, Username) VALUES ( ' . "'" . htmlspecialchars($_POST['shipFname']) . "', '" . htmlspecialchars($_POST['shipLname']) . "', '" . htmlspecialchars($_POST['shipStreet']). "', ' " . htmlspecialchars($_POST['shipRm']). "', '" . htmlspecialchars($_POST['shipCity']). "', '" . htmlspecialchars($_POST['shipState']) . "', '" . htmlspecialchars($_POST['shipZipcode']) ."', '". htmlspecialchars($_POST['shipUname']) ."');";
}
//echo "\n" . $sql2;

  if($conn->query($sql2) === TRUE){
  }else{
    echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
}
//echo "Saved Shipping Info: <br>"
//while( $row = mysqli_fetch_array($result)){
  // echo $row[FirstName] . $row[LastName] . "<br>";
  // echo $row[Street] . "<br>";
  // echo $row[Rm] . "<br>";
  // echo $row[City] . ", " $row[State] . " " . $row[Zipcode]."<br><br>";
  //echo 'hi';
//}

//close connection
$conn->close();

?>

</div>
<!-- search -->

<!-- Modal --> <!-- aria hidden is for screen-readers -->
<div class="modalDialog" id="signup-modal" aria-hidden="true">
  <div class="modalInner">
    <h3><div id="signInHeader">Sign In</div></h3>
    <form class="col s12">
      <div class="row">
        <i class = "material-icons signin">email</i>
        <input id="email" type="text" class="validate" placeholder="Email">

      </div>
      <div class="row">
        <i class = "material-icons signin" >vpn_key</i>
        <input id="pw" name="pw" type="text" class="validate" placeholder="Password">

      </div>
      <div class="row">
        <a class="waves-effect waves-light btn" id="signInButton">Sign In</a>
      </div>
      <a href="#close" id="close">x</a>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js">
  </script>
  <script>
  $(document).ready(function() {
    $('select').material_select();
  });
  $('.search').click(function(){
    $('.searchBar').toggle("swing");

  });
  $('#checkbox').change(function(){
    if (this.checked){
      $("#hideOrNo").fadeIn("slow");
    }
    else if (!this.checked){
      $("#hideOrNo").fadeOut("slow");
    }
  });

  
  </script>
  <script>
  function showHide(){
    if(document.getElementsByClassName('wrapper')[0].style.opacity == 1){
      document.getElementsByClassName('wrapper')[0].style.opacity = 0;
      document.getElementsByTagName("body")[0].style.background = '#fff';
    }
    else{
      document.getElementsByClassName('wrapper')[0].style.opacity = 1;
      document.getElementsByTagName("body")[0].style.background = 'rgba(0, 0, 0, 0.2)';
    }
  }

  function goBack(){
    window.history.back();
  }
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
</html>
