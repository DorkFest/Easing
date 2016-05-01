# Easing Formulas

Robert Penner's JavaScript Easing formulas (http://gizma.com/easing/) ported to PHP. Similar to jQuery Easing. 

> The "Penner easing functions" have become a standard component of tweening/animation libraries in many languages, from jQuery to Processing. http://www.google.com/#q="penner+easing"
> https://www.linkedin.com/in/robertpenner

I used this to generate an animated series of computer-generated frames generated in ImageMagick assembled with ffmpeg.

## Installation

```json
{
    "require": {
        "haberco/easing": "dev-master"
    }
}
```

## Usage

```php
use \Haberco\Easing\Tween;

$totalFrames = 30;
$startValue = 50;
$changeInValue = 100; // final = 150, startValue + changeInValue

for($frame=0; $frame<$totalFrames; $frame++) {
	$position = Tween::easeInCubic($frame, $startValue, $changeInValue, $totalFrames);
	print "Position is: $position\n";
}

print "Done.\n";
```

Following methods are available:

Linear is a convenience utility for animation support.
* linear

Quadratic
* easeInQuad
* easeOutQuad
* easeInOutQuad

Cubic
* easeInCubic
* easeOutCubic
* easeInOutCubic

Quartic
* easeInQuart
* easeOutQuart
* easeInOutQuart

Quintic
* easeInQuint
* easeOutQuint
* easeInOutQuint

Sinusoidal
* easeInSine
* easeOutSine
* easeInOutSine

Exponential
* easeInExpo
* easeOutExpo
* easeInOutExpo

Circular
* easeInCirc
* easeOutCirc
* easeInOutCirc

