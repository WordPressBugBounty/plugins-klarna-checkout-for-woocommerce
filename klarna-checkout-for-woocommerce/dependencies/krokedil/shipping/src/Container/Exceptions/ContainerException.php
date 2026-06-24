<?php

namespace KrokedilKlarnaCheckoutDeps\Krokedil\Shipping\Container\Exceptions;

use KrokedilKlarnaCheckoutDeps\Psr\Container\NotFoundExceptionInterface;
/**
 * Class ContainerException
 *
 * Handles the exception thrown when a service is not found in the container.
 */
class ContainerException extends \Exception implements NotFoundExceptionInterface
{
}
