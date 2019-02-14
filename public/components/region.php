<div class="regional">
  <table style="width:100%">
    <tr>
      <th class="region">Region</th>
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
            <td><?php echo $object->get_icon($key); echo ucfirst($key); ?></td>
            <td><span class="ind_td"><?php echo number_format(reset($value)); ?><span></td>
            <td><span class="ind_td"><?php echo number_format(end($value)); ?><span></td>
            <td><span class="ind_td"><?php echo number_format( end($value) - reset($value) ); ?><span></td>
            <td><span class="ind_td"><?php echo str_replace('-', '', round((1-end($value)/reset($value))*100,1)); ?>%<span></td>
          </tr>
          <?php
        }
      }
    ?>
  </table>
</div>
