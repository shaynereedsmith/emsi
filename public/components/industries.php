<div class="">
  <h2>Industries Employing <?php echo $object->object->occupation->title; ?></h2>
  <div class="">
    <table style="width:100%">
      <tr>
        <th>Industry</th>
        <th>Occupation Jobs in Industry (<?php echo $object->object->employing_industries->year; ?>)</th>
        <th>% of Occupation in Industry (<?php echo $object->object->employing_industries->year; ?>)</th>
        <th>% of Total Jobs in Industry (<?php echo $object->object->employing_industries->year; ?>)</th>
      </tr>

      <?php

        $arr = (array) $object->object->employing_industries;
        foreach ($arr['industries'] as $industry) {
          ?>
          <tr>
            <td><?php echo $industry->title; ?></td>
            <td><?php echo $industry->in_occupation_jobs; ?></td>
            <td><?php echo round(($industry->in_occupation_jobs/$object->object->employing_industries->jobs)*100,1); ?>%</td>
            <td><?php echo round(($industry->in_occupation_jobs/$industry->jobs)*100,1); ?>%</td>
          </tr>

        <?php }

      ?>
    </table>

  </div>
</div>
