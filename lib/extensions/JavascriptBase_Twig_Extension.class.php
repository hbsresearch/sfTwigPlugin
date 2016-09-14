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
 * JavascriptBase helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class JavascriptBase_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      'link_to_function'               => new Twig_Function_Function('link_to_function'),
      'button_to_function'             => new Twig_Function_Function('button_to_function'),
      'javascript_tag'                 => new Twig_Function_Function('javascript_tag'),
      'end_javascript_tag'             => new Twig_Function_Function('end_javascript_tag'),
      'javascript_cdata_section'       => new Twig_Function_Function('javascript_cdata_section'),
      'if_javascript'                  => new Twig_Function_Function('if_javascript'),
      'end_if_javascript'              => new Twig_Function_Function('end_if_javascript'),
      'array_or_string_for_javascript' => new Twig_Function_Function('array_or_string_for_javascript'),
      'options_for_javascript'         => new Twig_Function_Function('options_for_javascript'),
      'boolean_for_javascript'         => new Twig_Function_Function('boolean_for_javascript'),
    );
  }

  public function getName()
  {
    return 'javascriptbase';
  }
}
