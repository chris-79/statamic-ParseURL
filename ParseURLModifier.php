<?php

namespace Statamic\Addons\ParseURL;

use Statamic\Extend\Modifier;

class ParseURLModifier extends Modifier
{
  /**
   * Modify a value
   *
   * @param mixed  $value  The value to be modified
   * @param array  $params   Any parameters used in the modifier
   * @param array  $context  Contextual values
   * @return mixed
   */
  public function index($value, $params, $context)
  {
    if ($param = array_get($params, 0)) {
      $param = array_get($context, $param, $param);
      switch ($param) {
        case 'scheme':
          $desiredPiece = PHP_URL_SCHEME;
          break;
        case 'user':
          $desiredPiece = PHP_URL_USER;
          break;
        case 'pass':
          $desiredPiece = PHP_URL_PASS;
          break;
        case 'host':
          $desiredPiece = PHP_URL_HOST;
          break;
        case 'port':
          $desiredPiece = PHP_URL_PORT;
          break;
        case 'path':
          $desiredPiece = PHP_URL_PATH;
          break;
        case 'query':
          $desiredPiece = PHP_URL_QUERY;
          break;
        case 'fragment':
          $desiredPiece = PHP_URL_FRAGMENT;
          break;
        default:
          $desiredPiece = null;
          break;
      }
    }

    if ($desiredPiece) {
      $value = parse_url($value, $desiredPiece);
    } else {
      $value = var_dump(parse_url($value));
    }

    return $value;
  }
}
