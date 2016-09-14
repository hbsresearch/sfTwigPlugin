<?php

/*
 * This file is part of the sfTwigPlugin package.
 *
 * (c) Henrik Bjornskov <henrik@bearwoods.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Date helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Date_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      'format_daterange'          => new Twig_Function_Function('format_daterange'),
      'format_date'               => new Twig_Function_Function('format_date'),
      'format_datetime'           => new Twig_Function_Function('format_datetime'),
      'distance_of_time_in_words' => new Twig_Function_Function('distance_of_time_in_words'),
      'time_ago_in_words'         => new Twig_Function_Function('time_ago_in_words'),
    );
  }

  public function getName()
  {
    return 'date';
  }
}
