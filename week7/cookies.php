<?php

// header("Set-Cookie: my_new_cookie=some_value; expires=Fri 23-Nov-2021 00:00:01 GMT;");
// setcookie('my_new_cookie', '', time() - 60 * 60 * 24 * 7);
// setcookie('my_second_cookie', 'some_other_value', time() + 60 * 60 * 24 * 7);
setcookie('my_second_cookie', '', 0);
echo 'Hello World!';