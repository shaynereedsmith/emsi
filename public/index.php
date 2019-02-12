<!DOCTYPE html>
<html>
  <head>
    <?php
      require 'model/object.php';
      $object = new Object();
    ?>
    <title>Emsi Test Project</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="lineChart.js"></script>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="">
      <h1>Occupation Overview</h1>
      <p><?php echo $object->object->occupation->title; ?> in <?php echo $object->object->region->title;?></p>
    </div>
    <div class="">
      <h2>Occupation Summary for <?php echo $object->object->occupation->title; ?></h2>
    </div>
    <?php
      echo '<pre>';
      print_r($object);
    ?>
    <canvas id="lineChart" width="400" height="400"></canvas>

  </body>
</html>
