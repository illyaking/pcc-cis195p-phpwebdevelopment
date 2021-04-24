<?php

$first_way = 'This is some \'text\'.';
echo $first_way;

echo '<pre>';
$second_way = "This is some other text which includes $first_way.\nThis is the second line.";
echo $second_way;

echo '</pre>';

$blob_of_text = <<<'MY_TEXT_BLOB'
\n 	linefeed (LF or 0x0A (10) in ASCII)
\r 	carriage return (CR or 0x0D (13) in ASCII)
\t 	horizontal tab (HT or 0x09 (9) in ASCII)
\v 	vertical tab (VT or 0x0B (11) in ASCII)
\e 	escape (ESC or 0x1B (27) in ASCII)
\f 	form feed (FF or 0x0C (12) in ASCII)
\\ 	backslash
\$ 	dollar sign
\" 	double-quote
\[0-7]{1,3} 	the sequence of characters matching the regular expression is a character in octal notation, which silently overflows to fit in a byte (e.g. 400 === 000)
\x[0-9A-Fa-f]{1,2} 	the sequence of characters matching the regular expression is a character in hexadecimal notation
\u{[0-9A-Fa-f]+} 	the sequence of characters matching the regular expression is a Unicode codepoint, which will be output to the string as that codepoints UTF-8 representation 
MY_TEXT_BLOB;

echo "<pre>$blob_of_text</pre>";

$first_name = "Marc";
$full_name = $first_name;
$last_name = "Goodman";
$full_name .= ' ' . $last_name;

echo "<br>Your name is $full_name";

$text = "Here iS A PIECE of text";
echo "ucfirst: " . ucfirst($text) . "<br>";
echo "lcfirst: " . lcfirst($text) . "<br>";
echo "ucwords: " . ucwords($text) . "<br>";
echo "ucwords(strtolower($text)): " . ucwords(strtolower($text)) . "<br>";
echo "strtrupper(text): " . strtoupper($text) . "<br>";

echo "ASCII value of 'H' is : " . ord($text[01]) . "<br>";
echo "The character with ASCII value 65 is : " . chr(65) . "<br>";
echo "The length of $full_name is " . strlen($full_name) . ".";
echo "$full_name backwards is " . ucwords(strtolower(strrev($full_name))) . ".";