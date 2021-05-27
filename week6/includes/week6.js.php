<?php

header('Content-Type: text/javascript');
require_once('constants.php');
?>
var MY_STRING = '<?php echo HELLO_STRING; ?>';
function init() {
    document.getElementById('my_div').innerText = MY_STRING;
}
