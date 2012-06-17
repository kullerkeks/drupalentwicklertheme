<?php
 /**
  * Tweet Reply Link
  *
  *
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>

<?php 

// print_r ($row); 
$urlparts = explode("/",$row->feeds_item_url);
$reply = "https://twitter.com/?status=@".$urlparts[3]."%20&in_reply_to_status_id=".$urlparts[5]."&in_reply_to=".$urlparts[3];

print '<a href="'.$reply.'">'.t("Reply").'</a>';
?>

