<?php
    $start_tr = "<tr>";
    $end_tr = "</tr>";
    $row = "<td width=\"70\"><?php echo {$board['idx']}; </td>".
           "<td width=\"500\"><a href=\"\"><?php echo $title; ?></a></td>".
           "<td width=\"120\"><?php echo {$board['name']};</td>".
           "<td width=\"100\"><?php echo {$board['date']};</td>".
           "<td width=\"120\"><?php echo {$board['hit']};</td>";

    $result = $start_tr.$row.$end_tr;
?>