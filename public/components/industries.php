<div class="">
  <h2>Industries Employing <?php echo $object->object->occupation->title; ?></h2>
  <div class="">
    <table style="width:100%">
      <tr>
        <th><span class="industry">Industry</span></th>
        <th>Occupation Jobs in Industry (<?php echo $object->object->employing_industries->year; ?>)</th>
        <th>% of Occupation in Industry (<?php echo $object->object->employing_industries->year; ?>)</th>
        <th>% of Total Jobs in Industry (<?php echo $object->object->employing_industries->year; ?>)</th>
      </tr>

      <?php

        $arr = (array) $object->object->employing_industries;
        foreach ($arr['industries'] as $industry) {
          ?>
          <tr style="background: linear-gradient(90deg, #dcf1f3 <?php echo round(($industry->in_occupation_jobs/$object->object->employing_industries->jobs)*100,1); ?>%, #fff 0%)">
            <td><span style="padding: 0.6em; color: cornflowerblue; display: inline-block;"><i class="fas fa-building"></i><?php echo $industry->title; ?></spam></td>
            <td><span class="ind_td"><?php echo $industry->in_occupation_jobs; ?></span></td>
            <td><span class="ind_td"><?php echo round(($industry->in_occupation_jobs/$object->object->employing_industries->jobs)*100,1); ?>%</span></td>
            <td><span class="ind_td"><?php echo round(($industry->in_occupation_jobs/$industry->jobs)*100,1); ?>%</span></td>
          </tr>

        <?php }

      ?>
    </table>

  </div>
</div>
