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
$totalFrames = 60;
$low = 0;
$high = 100;

for($i=0; $i<$totalFrames; $i++) {
	$position = \Haberco\Easing::easeOutQuint($i, $high, $low, $totalFrames);
	print "Position is: $position\n";
}
```
