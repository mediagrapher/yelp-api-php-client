<head>
  <?php
  /**
  * Simple PHP Client to make requests to the Yelp Fusion API
  **/
  include 'includes/yelp-config.php';
  ?>
  <link rel="StyleSheet" href="css/style.css" type="text/css">
</head>
<body>
<div class="container">
  <div class="list-header">
    <h1>Simple PHP Client for Yelp Fusion API</h1>
  </div>
  <?php foreach($jsonData['businesses'] as $business): ?>
      <?php
          $businessName = $business['name'];
          $businessRate = $business['rating'];
          $businessImg = $business['image_url'];
          $businessLink = $business['url'];
          $businessAdrs = $business['location']['address1'];
          $businessZip = $business['location']['zip_code'];
          $businessCity = $business['location']['city'];
      ?>

  <div class="list-div">
    <img src="<?php echo $businessImg ?>" style="  width:160px;height:160px;object-fit: cover;float: left;margin-right:20px;">
    <h2><a href="<?php echo $businessLink ?>">
        <?php echo $businessName ?>
        </a>
    </h2>
    <p>
      Rating: <strong> <?php echo $businessRate ?> / 5 </strong> (based on <?php echo $businessReviewCount ?> reviews)
    </p>
    <p>
      <a href="<?php echo $businessLink ?>"><img style="float:right;" src="img/Yelp_Logo.svg.png"></a>
      <?php echo $businessAdrs . "<br>" . $businessZip . "\n" . $businessCity ?> <br><br>
    </p>
  </div>

  <?php endforeach; ?>
  </div>
</body>
