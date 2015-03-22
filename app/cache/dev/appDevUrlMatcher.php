<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/6df880c')) {
            // _assetic_6df880c
            if ($pathinfo === '/css/6df880c.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6df880c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6df880c',);
            }

            if (0 === strpos($pathinfo, '/css/6df880c_part_1_')) {
                // _assetic_6df880c_0
                if ($pathinfo === '/css/6df880c_part_1_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6df880c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6df880c_0',);
                }

                // _assetic_6df880c_1
                if ($pathinfo === '/css/6df880c_part_1_style_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6df880c',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6df880c_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/28ca083')) {
            // _assetic_28ca083
            if ($pathinfo === '/js/28ca083.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '28ca083',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_28ca083',);
            }

            if (0 === strpos($pathinfo, '/js/28ca083_')) {
                // _assetic_28ca083_0
                if ($pathinfo === '/js/28ca083_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28ca083',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_28ca083_0',);
                }

                // _assetic_28ca083_1
                if ($pathinfo === '/js/28ca083_script_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28ca083',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_28ca083_1',);
                }

                // _assetic_28ca083_2
                if ($pathinfo === '/js/28ca083_autoformat_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '28ca083',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_28ca083_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
