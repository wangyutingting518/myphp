<?php
$x=5;
$y=9;
function myText(){
    global $x,$y;
    echo $y=$x+$y;
}
myText();
myText();
myText();