<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Switch Statements</title>
    </head>
    <body>
        <?php
        $a=3;
        switch ($a){
            case 0:
                echo "a equals 0<br />";
                break;
            case 1:
                echo "a equals 1<br />";
                break;
            case 2:
                echo "a equals 2<br />";
                break;
            case 3:
                echo "a equals 3<br />";
                break;
            case 4:
                echo "a equals 4<br />";
                break;
            default:
                echo "it's something else<br />";
            }
        ?>
        <br />
        
        <?php
        // ChineseZodiac
        // remember whitespace doesn't matter
        // Colons, semicolons and breaks do
        $year=2004;
        switch (($year - 4) % 12){
            case  0: $zodiac = 'Rat';    break;
            case  1: $zodiac = 'Ox';     break;
            case  2: $zodiac = 'Tiger';  break;
            case  3: $zodiac = 'Rabbit'; break;
            case  4: $zodiac = 'Dragon'; break;
            case  5: $zodiac = 'Snake';  break;
            case  6: $zodiac = 'Horse';  break;
            case  7: $zodiac = 'Goat';   break;
            case  8: $zodiac = 'Monkey'; break;
            case  9: $zodiac = 'Rooster';break;
            case 10: $zodiac = 'Dog';   break;
            case 11: $zodiac = 'Pig';   break;
            default:                    break;
        }
        echo "{$year} is the year of the {$zodiac}.";
        ?>
        
        <br />
        
        <?php // case with multiple values
        
        $user_type='press';
        
        switch ($user_type) {
            case 'student':
                echo "Welcome " . $user_type . "! ";
                break;
            case 'press':
                echo "Greetings " . $user_type . "! ";
                break;
            case 'customer': // both customer and dude will be processed the same
            case 'dude':
                echo "Hello " . $user_type . "! ";
                break;
            default:
                break;
        }
        
        ?>
        
    </body>
</html>