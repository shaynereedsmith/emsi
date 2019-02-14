<div class="">
  <h2>Occupation Summary for <?php echo $object->object->occupation->title; ?></h2>
  <div class="">
    <div class="">
      <?php echo $object->object->summary->jobs->regional; ?> <br>
      jobs (<?php echo $object->object->summary->jobs->year; ?>) <br>
      <?php echo $object->calculatePercentage($object->object->summary->jobs->national_avg, $object->object->summary->jobs->regional); ?> <?php echo $object->aboveBelow($object->calculatePercentage($object->object->summary->jobs->national_avg, $object->object->summary->jobs->regional)); ?> National average
    </div>
    <div class="">
      + <?php echo $object->object->summary->jobs_growth->regional; ?>% <br>
      % Change (<?php echo $object->object->summary->jobs_growth->start_year; ?>-<?php echo $object->object->summary->jobs_growth->end_year; ?>) <br>
      Nation: +<?php echo $object->object->summary->jobs_growth->national_avg; ?>

    </div>
    <div class="">
      <?php echo $object->object->summary->earnings->regional; ?>/hr <br>
      Median Hourly Earnings <br>
      Nation: <?php echo $object->object->summary->earnings->national_avg; ?>/hr
    </div>
  </div>
</div>
