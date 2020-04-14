<?php
$ip = $_SERVER['REMOTE_ADDR'];
$time = gmdate("H:i:s",time()+8*3600);
$file = "123.txt" ;
$fp=fopen ("123.txt","a") ;
$txt= "$ip"."----"."$time"."\n";
fputs($fp,$txt);
?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?a2e2e465098d883036e3cfad66f7203d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
