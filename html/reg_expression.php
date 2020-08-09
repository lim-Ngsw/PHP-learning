<?php
if(preg_match('/(-?)[0-9]+(\.[0-9]+)?/','q-6.83p', $m)){
  print("match: $m[0] ");
  if($m[1] == "-")
    print("minus! ");
  if(isset($m[2]))
    print("decimal!");
} else {
  print("not match");
}
?>