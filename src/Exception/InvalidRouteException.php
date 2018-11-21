<?php
/**
 * This file is part of Tin.
 */
namespace Tin\Exception;

use Psr\Http\Message\ServerRequestInterface;

class InvalidRouteException extends \Tin\Exception\Exception
{
    public function __construct(string $route)
    {
        parent::__construct(sprintf('route "%s" is not found', $route));
    }
}
