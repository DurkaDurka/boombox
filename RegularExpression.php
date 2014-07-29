<?php
//Using Regular expressions
/*
\d = any number
\D = anything but a number
\s = any space
\S = anything but a space
\w = Any character
\W = Anything but a character
\b = any space that preceeds or follows a whole word
\B = match for when there is no space seperating character.
\. = A fullstop
\e = escape
\f = form feed
\n = newline
\r = Carriage Return
\t = tab
. = Any character except for a line break (<br>?)
^ = beginning of a sentence etc: (^cat)
$ = End of a sentence etc: (Cat$)
? = 0 or 1 repetitions
* = 0 or more repetitions
+ = 1 or more characters
{n} = Exact number(n) of repetitions
[a-z0-9A-Z] = Any lowercase letter from a-z, any number from 0-9, any uppercase letter from A-Z. This can me modified.
*/

$html = "71322273222745673222278910";

$regex = "/3/";

preg_match_all($regex, $html, $match);

var_dump($match);

?>