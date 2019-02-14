<div class="">
  <table style="width:100%">
    <tr>
      <th>Region</th>
      <th><?php echo $object->object->trend_comparison->start_year; ?> Jobs</th>
      <th><?php echo $object->object->trend_comparison->end_year; ?> Jobs</th>
      <th>Change</th>
      <th>% Change</th>
    </tr>
    <?php
      $arr = (array) $object->object->trend_comparison;

      foreach ($arr as $key => $value) {
        if (!strpos($key, '_year')) { ?>
          <tr>
            <td><?php echo ucfirst($key); ?></td>
            <td><?php echo number_format(reset($value)); ?></td>
            <td><?php echo number_format(end($value)); ?></td>
            <td><?php echo number_format( end($value) - reset($value) ); ?></td>
            <td><?php echo str_replace('-', '', round((1-end($value)/reset($value))*100,1)); ?>%</td>
          </tr>
          <?php
        }
      }
    ?>
  </table>
</div>
