<?php

echo utf8_encode('test'.chr(205))."\n";
echo utf8_decode('test')."\n";

echo "utf_encode: ".utf8_encode("�")."\n";

printf("%s -> %s\n", urlencode("�"), urlencode(utf8_encode("�")));
printf("%s <- %s\n", urlencode(utf8_decode(urldecode("%C3%A6"))), "%C3%A6");

?>