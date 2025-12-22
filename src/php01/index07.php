<?php
function triangle($width, $height)
{
    return $width * $height / 2;
}
function box($width, $height)
{
    return $width * $height;
}
function trapezoid($width, $height, $topwidth)
{
    return ($width + $topwidth) * $height / 2;
}

echo triangle(8,5) . "\n";
echo box(10,10) . "\n";
echo trapezoid(8,5,4) ;