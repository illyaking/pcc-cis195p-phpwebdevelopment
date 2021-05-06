<?php

define('SCORE', 'score');
define('TYPE', 'type');
define('LETTER_GRADE', 'letter');
define('PASS_FAIL', 'pf');
define('AUDIT', 'audit');

if (!isset($_GET[SCORE])):
    echo "<h1>You need to specify a score for the student!</h1>";
    exit;
endif;

if (!isset($_GET[TYPE])):
    echo "<h1>You need to specify a grade for the student!</h1>";
    exit;
endif;

$score = $_GET[SCORE];
if (!is_numeric($score)):
    echo "<h1>The score must be a number!</h1>";
    exit;
endif;
$grade_type = $_GET[TYPE];

switch ($grade_type):
    case LETTER_GRADE:
    case PASS_FAIL:
    case AUDIT:
        break;
    default:
        echo "<h1>The grade type must either be 'letter', 'audit' or 'pf'!</h1>";
        exit;
endswitch;
switch ($grade_type) :
    case LETTER_GRADE:
        if ($score >= 90):
            $grade = 'A';
        elseif ($score >= 80):
            $grade = 'B';
        elseif ($score >= 70):
            $grade = 'C';
        elseif ($score >= 60):
            $grade = 'D';
        else:
            $grade = 'F';
        endif;
        echo "<h1>The student's grade is " . $grade . "</h1>";
        break;
    case PASS_FAIL:
        if ($score >= 70):
            echo "<h1>The student passed!</h1>";
        else:
            echo "<h1>The student failed!</h1>";
        endif;
        break;
    case AUDIT:
        echo "<h1>The student is auditing!</h1>";
        break;
    default:
        echo "<h1>Unknown grade type" . $grade_type . "!</h1>";
        break;
endswitch;
