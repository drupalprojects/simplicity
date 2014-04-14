<?php
/**
 * @file
 * Default template for progressbars.
 */

$vars['!current'] =  number_format($current, 0);
$vars['!target'] = number_format($target, 0);
$vars['!needed'] = number_format($target - $current, 0);

$intro_message  = t($goal_reached ? $texts['full_intro_message']  : $texts['intro_message'], $vars);
$status_message = t($goal_reached ? $texts['full_status_message'] : $texts['status_message'], $vars) . "\n";
?>
<div class="pgbar-wrapper clearfix pgbar-wrapper-thermometer" data-pgbar-current="<?php print $current; ?>" data-pgbar-target="<?php print $target; ?>" data-pgbar-inverted="true" data-pgbar-direction="vertical">
  <div class="pgbar-labels">
    <p><?php print $status_message; ?></p> 
    <p><?php print $intro_message; ?></p>
  </div>
  <div class="pgbar-bg">
    <div class="pgbar-maxheight">
      <div class="pgbar-current" style="height:<?php echo $percentage; ?>%"> </div>
    </div>
    <div class="pgbar-overlay" style=""> </div>

  </div>
  <div class="pgbar-percent"><?php print number_format($percentage, 0) . '%'; ?></div>
    <div class="pgbar-target"><?php print t('Goal') .':<br />€' . number_format($target, 0); ?></div>
  <div class="pgbar-status"><?php print t('Raised') .':<br />€' .number_format($current, 0); ?></div>
</div>
