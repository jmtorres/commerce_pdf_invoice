<br/>
<?php print implode('<br />', array_filter(array(
    $address['name_line'],
    $address['thoroughfare'],
    $address['premise'],
    $address['sub_premise'],
    $address['dependent_locality'],
  )));
?>
<br/>
<?php print "{$address['locality']}, {$address['administrative_area']} {$address['postal_code']}";
