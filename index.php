 <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style>
  .card
  {
	  
	  margin:15px;
	  border-radius:15px;
  }
  img
  {
	  height:180px;
  }
  span
  {
	  font-weight:bolder;
	  font-size: large;
  }
  #visitsite
  {
	  text-decoration:none;
	  color:white;
  }
  .card-text
  {
	  font-weight:bolder;
	  font-size: large;
  }
</style>  
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark btn-dark">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">PriceComparison</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-dark" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<br><br>
<form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="index.php" method="POST">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" name="searchtext" value=""
    aria-label="Search"><br><br>
  <input class="btn btn-dark btn-rounded " type="submit" value="Search">
</form>

<!--Section: Group of personal cards-->
<section class="pt-5 mt-3 pb-3">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group">

        <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="flp.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">flipkart.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			 <?php
require 'simple_html_dom.php';


$searchtext="";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$searchtext = $_POST["searchtext"];

}
$searchtext = str_replace(' ', '%20', $searchtext);
$flp_str1="https://www.flipkart.com/search?q=";
$flp_str2="&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off&as-pos=1&as-type=HISTORY";
$flp_query=$flp_str1.$searchtext.$flp_str2;

$html = file_get_html($flp_query);

echo $html->find('div[class="_3wU53n"]',0)->plaintext;
echo "<span class='float-right'>";
echo $html->find('div[class="_1vC4OE _2rQ-NK"]',0)->plaintext;
echo "</span><br><br>";

echo $html->find('div[class="_3wU53n"]',1)->plaintext;
echo "<span class='float-right'>";
echo $html->find('div[class="_1vC4OE _2rQ-NK"]',1)->plaintext;
echo "</span><br><br>";

echo $html->find('div[class="_3wU53n"]',2)->plaintext;
echo "<span class='float-right'>";
echo $html->find('div[class="_1vC4OE _2rQ-NK"]',2)->plaintext;
echo "</span><br><br>";
?>
			
			
			
			
			</p>
            <hr>
            <button type="button" class="btn btn-primary"><a href="https://www.flipkart.com" id="visitsite">Visit Flipkart</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="amz.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">amazon.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			<?php


$amz_str1="https://www.amazon.in/s?k=";
$amz_str2="&ref=nb_sb_noss_2";

$amz_query=$amz_str1.$searchtext.$amz_str2;



$html = file_get_html($amz_query);
echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;

echo "<span class='float-right'>";
echo $html->find('span[class="a-price-whole"]',0)->plaintext;
echo "</span><br><br>";

echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',1)->plaintext;
echo "<span class='float-right'>";
echo $html->find('span[class="a-price-whole"]',1)->plaintext;
echo "</span><br><br>";

echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',2)->plaintext;
echo "<span class='float-right'>";
echo $html->find('span[class="a-price-whole"]',2)->plaintext;
echo "</span><br><br>";

?>
			
			
			
			
			
			
			
			
			</p>
            <hr>
           <button type="button" class="btn btn-deep-orange"><a href="https://www.amazon.com" id="visitsite">Visit amazon</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="snp.png" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
           
            <a>
              <h4 class="card-title">snapdeal.com</h4>
            </a>
            <a class="card-meta">Search Result</a>

           
            <p class="card-text">
			
			
			<?php
$snap_str1="https://www.snapdeal.com/search?keyword=";
$snap_str2="&santizedKeyword=samsung&catId=0&categoryId=0&suggested=true&vertical=p&noOfResults=20&searchState=&clickSrc=suggested&lastKeyword=&prodCatId=&changeBackToAll=false&foundInAll=false&categoryIdSearched=&cityPageUrl=&categoryUrl=&url=&utmContent=&dealDetail=&sort=rlvncy";
$snap_query=$snap_str1.$searchtext.$snap_str2;

$html = file_get_html($snap_query);
echo $html->find('p[class="product-title"]',0)->plaintext;
echo "<span class='float-right'>";
echo $html->find('span[class="lfloat product-price"]',0)->plaintext;
echo "</span><br><br>";

echo $html->find('p[class="product-title"]',1)->plaintext;
echo "<span class='float-right'>";
echo $html->find('span[class="lfloat product-price"]',1)->plaintext;
echo "</span><br><br>";

echo $html->find('p[class="product-title"]',2)->plaintext;
echo "<span class='float-right'>";
echo $html->find('span[class="lfloat product-price"]',2)->plaintext;
echo "</span><br><br>";

?>
			
			
			
			
			
			
			
			
			
			
			</p>
			
			
			
            <hr>
           <button type="button" class="btn btn-danger"><a href="https://www.snapdeal.com" id="visitsite">Visit Snapdeal</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Group of personal cards-->


<!-- Footer -->
<footer class="page-footer font-small  pt-4 btn-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Price Comparison Tool</h5>
        <p>Here you can compare prices of a product on various e-commerce platforms.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">E-commerce sites</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Amazon</a>
          </li>
          <li>
            <a href="#!">Flipkart</a>
          </li>
          <li>
            <a href="#!">Snapdeal</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">amazon.com</a>
          </li>
          <li>
            <a href="#!">flipkart.com</a>
          </li>
          <li>
            <a href="#!">snapdeal.com</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href=""> Created by Amol Dalwai</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





















<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>