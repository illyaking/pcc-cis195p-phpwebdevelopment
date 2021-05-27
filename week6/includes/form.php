<?php



function output_form($method, $action)
{
    echo "<form method='{$method}' action='{$action}'>";
    echo"   <input type='hidden' name='" . USER_INPUT_KEY . "' value='" . urlencode(json_encode(MY_FRUITS)) . "'>\n";
    echo"   <input type='submit' value='submit'>\n";
    echo"   </form>\n";
}