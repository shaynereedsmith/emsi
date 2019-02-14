<div class="">
  <h2>Occupation Summary for <?php echo $object->object->occupation->title; ?></h2>
  <div class="row">
    <div class="column">
      <span class="top"><?php echo number_format($object->object->summary->jobs->regional); ?> </span><br>
      <span class="bold"> jobs (<?php echo $object->object->summary->jobs->year; ?>)</span> <br>
      <?php echo $object->calculate_percentage($object->object->summary->jobs->national_avg, $object->object->summary->jobs->regional); ?>
      <span class="<?php echo $object->above_below($object->calculate_percentage($object->object->summary->jobs->national_avg, $object->object->summary->jobs->regional)); ?>">
      <?php echo $object->above_below($object->calculate_percentage($object->object->summary->jobs->national_avg, $object->object->summary->jobs->regional)); ?></span> National average
    </div>
    <div class="column center">
      <span class="top above">+ <?php echo $object->object->summary->jobs_growth->regional; ?>% </span><br>
      <span class="bold"> % Change (<?php echo $object->object->summary->jobs_growth->start_year; ?>-<?php echo $object->object->summary->jobs_growth->end_year; ?>)</span> <br>
      Nation: <span class="above">+<?php echo $object->object->summary->jobs_growth->national_avg; ?></span>

    </div>
    <div class="column">
      <span class="top">$<?php echo $object->object->summary->earnings->regional; ?>/hr </span><br>
      <span class="bold"> Median Hourly Earnings</span> <br>
      Nation: <?php echo $object->object->summary->earnings->national_avg; ?>/hr
    </div>
  </div>
</div>
