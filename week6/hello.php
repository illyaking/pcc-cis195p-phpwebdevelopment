<?php

header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");

// include 'includes/constantsx.php';
require_once 'includes/constants.php';
require_once 'includes/form.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A test form</title>
    <link rel="stylesheet" type="text/css" href="includes/week6.css.php">
    <script src="includes/week6.js.php"></script>
</head>
<body onload="javascript:init();">
<?php output_form(METHOD, TARGET_PAGE); ?>
<br>
<pre>
    <?php print_r(MY_FRUITS);
    echo urlencode(json_encode(MY_FRUITS));
    ?>
</pre>
<a href="<?php echo TARGET_PAGE. "?" . USER_INPUT_KEY . '=' . urlencode(json_encode(MY_FRUITS)); ?>">Click here</a>
<div id="my_div"></div>
</body>
</html>
