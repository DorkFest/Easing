<?php 

/**
 * Easing Functions: 
 * Ported from JavaScript
 * Robert Penner's page: http://gizma.com/easing/
 * 
 * @author  Robert Penner
 * @author  Eddie Haber
 * 
 * Format for all functions:
 * @param int $t current time
 * @param int $b start value
 * @param int $c change in value
 * @param int $d duration
 */
class Easing {

	public static function linearTween($t, $b, $c, $d) 
	{
		return $c*$t/$d + $b;
	}

	/**
	 * Quadratic
	 */
	public static function easeInQuad($t, $b, $c, $d) 
	{
		$t /= $d;
		return $c*$t*$t + $b;
	}

	public static function easeOutQuad($t, $b, $c, $d) 
	{
		$t /= $d;
		return -$c * $t*($t - 2) + $b;
	}

	public static function easeInOutQuad($t, $b, $c, $d) 
	{
		$t /= $d/2;
		if ($t < 1) return $c/2*$t*$t + $b;
		$t--;
		return -$c/2 * ($t*($t-2) - 1) + $b;
	}

	/**
	 * Cubic
	 */
	public static function easeInCubic($t, $b, $c, $d) 
	{
		$t /= $d;
		return $c*$t*$t*$t + $b;
	}

	public static function easeOutCubic($t, $b, $c, $d) 
	{
		$t /= $d;
		$t--;
		return $c*($t*$t*$t + 1) + $b;
	}

	public static function easeInOutCubic($t, $b, $c, $d) 
	{
		$t /= $d/2;
		if ($t < 1) return $c/2*$t*$t*$t + $b;
		$t -= 2;
		return $c/2*($t*$t*$t + 2) + $b;
	}

	/**
	 * Quartic
	 */

	public static function easeInQuart($t, $b, $c, $d) 
	{
		$t /= $d;
		return $c*$t*$t*$t*$t + $b;
	}

	public static function easeOutQuart($t, $b, $c, $d) 
	{
		$t /= $d;
		$t--;
		return -$c * ($t*$t*$t*$t - 1) + $b;
	}

	public static function easeInOutQuart($t, $b, $c, $d) 
	{
		$t /= $d/2;
		if ($t < 1) return $c/2*$t*$t*$t*$t + $b;
		$t -= 2;
		return -$c/2 * ($t*$t*$t*$t - 2) + $b;
	}

	/**
	 * Quintic
	 */
	public static function easeInQuint($t, $b, $c, $d) 
	{
		$t /= $d;
		return $c*$t*$t*$t*$t*$t + $b;
	}

	public static function easeOutQuint($t, $b, $c, $d) 
	{
		$t /= $d;
		$t--;
		return $c*($t*$t*$t*$t*$t + 1) + $b;
	}

	public static function easeInOutQuint($t, $b, $c, $d) 
	{
		$t /= $d/2;
		if ($t < 1) return $c/2*$t*$t*$t*$t*$t + $b;
		$t -= 2;
		return $c/2*($t*$t*$t*$t*$t + 2) + $b;
	}

	/**
	 * Sinusoidal
	 */

	public static function easeInSine($t, $b, $c, $d) 
	{
		return -$c * cos($t/$d * (M_PI/2)) + $c + $b;
	}

	public static function easeOutSine($t, $b, $c, $d) 
	{
		return $c * sin($t/$d * (M_PI/2)) + $b;
	}

	public static function easeInOutSine($t, $b, $c, $d) 
	{
		return -$c/2 * (cos(M_PI*$t/$d) - 1) + $b;
	}

	/**
	 * Exponential
	 */

	public static function easeInExpo($t, $b, $c, $d) 
	{
		return $c * pow( 2, 10 * ($t/$d - 1) ) + $b;
	}

	public static function easeOutExpo($t, $b, $c, $d) 
	{
		return $c * ( -pow( 2, -10 * $t/$d ) + 1 ) + $b;
	}

	public static function easeInOutExpo($t, $b, $c, $d) 
	{
		$t /= $d/2;
		if ($t < 1) return $c/2 * pow( 2, 10 * ($t - 1) ) + $b;
		$t--;
		return $c/2 * ( -pow( 2, -10 * $t) + 2 ) + $b;
	}


	/**
	 * Circular 
	 */

	public static function easeInCirc($t, $b, $c, $d) 
	{
		$t /= $d;
		return -$c * (sqrt(1 - $t*$t) - 1) + $b;
	}

	public static function easeOutCirc($t, $b, $c, $d) 
	{
		$t /= $d;
		$t--;
		return $c * sqrt(1 - $t*$t) + $b;
	}

	public static function easeInOutCirc($t, $b, $c, $d) 
	{
		$t /= $d/2;
		if ($t < 1) return -$c/2 * (sqrt(1 - $t*$t) - 1) + $b;
		$t -= 2;
		return $c/2 * (sqrt(1 - $t*t) + 1) + $b;
	}
}
