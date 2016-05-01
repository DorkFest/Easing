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
```

Outputs the following:

```text
Position is: 50
Position is: 50.003703703704
Position is: 50.02962962963
Position is: 50.1
Position is: 50.237037037037
Position is: 50.462962962963
Position is: 50.8
Position is: 51.27037037037
Position is: 51.896296296296
Position is: 52.7
Position is: 53.703703703704
Position is: 54.92962962963
Position is: 56.4
Position is: 58.137037037037
Position is: 60.162962962963
Position is: 62.5
Position is: 65.17037037037
Position is: 68.196296296296
Position is: 71.6
Position is: 75.403703703704
Position is: 79.62962962963
Position is: 84.3
Position is: 89.437037037037
Position is: 95.062962962963
Position is: 101.2
Position is: 107.87037037037
Position is: 115.0962962963
Position is: 122.9
Position is: 131.3037037037
Position is: 140.32962962963
```

## Available Methods

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

