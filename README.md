# Easing Formulas

Robert Penner's JavaScript Easing formulas (http://gizma.com/easing/) ported to PHP. Similar to jQuery Easing.

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

$totalFrames = 60;
$low = 0;
$high = 100;

for($i=0; $i<$totalFrames; $i++) {
	$position = Tween::easeOutQuint($i, $high, $low, $totalFrames);
	print "Position is: $position\n";
}
```

```text
Following methods are available. Linear is a convenience utility for animation support.

	// Linear
	linearTween

	// Quadratic
	easeInQuad
	easeOutQuad
	easeInOutQuad

	// Cubic
	easeInCubic
	easeOutCubic
	easeInOutCubic

	// Quartic
	easeInQuart
	easeOutQuart
	easeInOutQuart

	// Quintic
	easeInQuint
	easeOutQuint
	easeInOutQuint

	// Sinusoidal
	easeInSine
	easeOutSine
	easeInOutSine

	// Exponential
	easeInExpo
	easeOutExpo
	easeInOutExpo

	// Circular
	easeInCirc
	easeOutCirc
	easeInOutCirc
```


