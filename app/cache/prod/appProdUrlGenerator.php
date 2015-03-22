<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'occupation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\OccupationController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occupation/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'occupation_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\OccupationController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/occupation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'occupation_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\OccupationController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occupation/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'occupation_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\OccupationController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/occupation/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'occupation_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\OccupationController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/occupation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'occupation_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\OccupationController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/occupation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'occupation_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\OccupationController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/occupation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'industry' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\IndustryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/industry/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'industry_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\IndustryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/industry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'industry_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\IndustryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/industry/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'industry_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\IndustryController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/industry/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'industry_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\IndustryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/industry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'industry_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\IndustryController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/industry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'industry_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\IndustryController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/industry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subindustry' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\SubindustryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subindustry/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subindustry_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\SubindustryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subindustry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subindustry_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\SubindustryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subindustry/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subindustry_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\SubindustryController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subindustry/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subindustry_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\SubindustryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subindustry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subindustry_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\SubindustryController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subindustry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'subindustry_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\SubindustryController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/subindustry',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
