<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/occupation')) {
            // occupation
            if (rtrim($pathinfo, '/') === '/occupation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'occupation');
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\OccupationController::indexAction',  '_route' => 'occupation',);
            }

            // occupation_show
            if (preg_match('#^/occupation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupation_show')), array (  '_controller' => 'CoreBundle\\Controller\\OccupationController::showAction',));
            }

            // occupation_new
            if ($pathinfo === '/occupation/new') {
                return array (  '_controller' => 'CoreBundle\\Controller\\OccupationController::newAction',  '_route' => 'occupation_new',);
            }

            // occupation_create
            if ($pathinfo === '/occupation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_occupation_create;
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\OccupationController::createAction',  '_route' => 'occupation_create',);
            }
            not_occupation_create:

            // occupation_edit
            if (preg_match('#^/occupation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupation_edit')), array (  '_controller' => 'CoreBundle\\Controller\\OccupationController::editAction',));
            }

            // occupation_update
            if (preg_match('#^/occupation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_occupation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupation_update')), array (  '_controller' => 'CoreBundle\\Controller\\OccupationController::updateAction',));
            }
            not_occupation_update:

            // occupation_delete
            if (preg_match('#^/occupation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_occupation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'occupation_delete')), array (  '_controller' => 'CoreBundle\\Controller\\OccupationController::deleteAction',));
            }
            not_occupation_delete:

        }

        if (0 === strpos($pathinfo, '/industry')) {
            // industry
            if (rtrim($pathinfo, '/') === '/industry') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'industry');
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\IndustryController::indexAction',  '_route' => 'industry',);
            }

            // industry_show
            if (preg_match('#^/industry/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'industry_show')), array (  '_controller' => 'CoreBundle\\Controller\\IndustryController::showAction',));
            }

            // industry_new
            if ($pathinfo === '/industry/new') {
                return array (  '_controller' => 'CoreBundle\\Controller\\IndustryController::newAction',  '_route' => 'industry_new',);
            }

            // industry_create
            if ($pathinfo === '/industry/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_industry_create;
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\IndustryController::createAction',  '_route' => 'industry_create',);
            }
            not_industry_create:

            // industry_edit
            if (preg_match('#^/industry/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'industry_edit')), array (  '_controller' => 'CoreBundle\\Controller\\IndustryController::editAction',));
            }

            // industry_update
            if (preg_match('#^/industry/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_industry_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'industry_update')), array (  '_controller' => 'CoreBundle\\Controller\\IndustryController::updateAction',));
            }
            not_industry_update:

            // industry_delete
            if (preg_match('#^/industry/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_industry_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'industry_delete')), array (  '_controller' => 'CoreBundle\\Controller\\IndustryController::deleteAction',));
            }
            not_industry_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'CoreBundle\\Controller\\UserController::showAction',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'CoreBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'CoreBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'CoreBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'CoreBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/subindustry')) {
            // subindustry
            if (rtrim($pathinfo, '/') === '/subindustry') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'subindustry');
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\SubindustryController::indexAction',  '_route' => 'subindustry',);
            }

            // subindustry_show
            if (preg_match('#^/subindustry/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subindustry_show')), array (  '_controller' => 'CoreBundle\\Controller\\SubindustryController::showAction',));
            }

            // subindustry_new
            if ($pathinfo === '/subindustry/new') {
                return array (  '_controller' => 'CoreBundle\\Controller\\SubindustryController::newAction',  '_route' => 'subindustry_new',);
            }

            // subindustry_create
            if ($pathinfo === '/subindustry/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_subindustry_create;
                }

                return array (  '_controller' => 'CoreBundle\\Controller\\SubindustryController::createAction',  '_route' => 'subindustry_create',);
            }
            not_subindustry_create:

            // subindustry_edit
            if (preg_match('#^/subindustry/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subindustry_edit')), array (  '_controller' => 'CoreBundle\\Controller\\SubindustryController::editAction',));
            }

            // subindustry_update
            if (preg_match('#^/subindustry/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_subindustry_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subindustry_update')), array (  '_controller' => 'CoreBundle\\Controller\\SubindustryController::updateAction',));
            }
            not_subindustry_update:

            // subindustry_delete
            if (preg_match('#^/subindustry/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_subindustry_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'subindustry_delete')), array (  '_controller' => 'CoreBundle\\Controller\\SubindustryController::deleteAction',));
            }
            not_subindustry_delete:

        }

        // core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'core_homepage');
            }

            return array (  '_controller' => 'CoreBundle\\Controller\\UserController::newAction',  '_route' => 'core_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
