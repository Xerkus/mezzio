<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @see       https://github.com/zendframework/zend-expressive for the canonical source repository
 * @copyright Copyright (c) 2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Expressive\Router;

use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Interface defining required router capabilities.
 */
interface RouterInterface
{
    /**
     * @param Route $route
     */
    public function addRoute(Route $route);

    /**
     * @param  Request $request
     * @return RouteResult
     */
    public function match(Request $request);
}
