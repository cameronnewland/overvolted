<tr<?php echo $first ? ' class="first"' : ''; $first = false; ?>>
    <td class="first b"><?php echo $cpt_data->label; ?></td>
    <td class="t"> <strong><?php echo $cpt_data->name; ?>s</strong></td>
    <td class="b options" style="font-weight: bold;"><?php echo isset($post_count[$cpt_data->name]) ? intval($post_count[$cpt_data->name]) : 0; ?></td>
</tr>
