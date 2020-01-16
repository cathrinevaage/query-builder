<?php

namespace Netflex\Query\Exception;

use Netflex\Query\Builder;

class InvalidSortingDirectionException extends QueryBuilderException
{
  /**
   * @param string $direction
   */
  public function __construct($direction)
  {
    parent::__construct("Unexpected sorting direction: $direction, expected: " . implode(',', Builder::SORTING_DIRS));
  }
}
