<?php

use App\Quote;

/**
 * Checking is admin or not
 * 
 * 
 * @return boolean true/false
 */
function newQuoteCount()
{
   return Quote::where('status', 0)->count();
}

/**
 * Checking is admin or not
 * 
 * 
 * @return boolean true/false
 */
function isAdmin()
{
  if (auth()->user() && auth()->user()->is_admin == 1) {
    return true;
  }
  return false;
}


/**
 * Checking Visitor Main Menu Have Or Not by Route Name
 *
 * @return boolean
 */
function singlePage()
{
  $routes = [
    'login',
    'register',
    'password.request',
    'password.email',
    'password.reset',
    'password.update',
    'verification.notice',
    'verification.verify',
    'verification.resend',
  ];

  return in_array(Route::currentRouteName(), $routes) ? true : false;
}

/**
 * Checking current route
 *
 * @param String route A route name
 * @param Any valid A data when valid
 * @param Any invalid A data when invalid
 * @return $valid/$invalid
 */
function isRoute($route, $valid = true, $invalid = false)
{
  return (strpos(' ' . Route::currentRouteName() . ' ', $route) === false) ? $invalid : $valid;
}

/**
 * Checking Status Of Expression
 *
 * @param boolean expression Boolean expression to check
 * @param any true Value to return if status true
 * @param any false Value to return if status false
 * @return true/false
 */
function isValid($expression, $true = 'Published', $false = 'Un Published')
{
  if (is_array($expression)) {
    if (empty($expression[1]) && array_key_exists(2, $expression))
      $expression = $expression[2];
    else
      return in_array($expression[0], $expression[1]) ? $true : $false;
  }
  return $expression ? $true : $false;
}
