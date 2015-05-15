<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'automotor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\AutomotorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/automotor/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'automotor_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\AutomotorController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/automotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'automotor_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\AutomotorController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/automotor/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'automotor_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\AutomotorController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/automotor/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'automotor_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\AutomotorController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/automotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'automotor_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\AutomotorController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/automotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'automotor_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\AutomotorController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/automotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rubro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\RubroController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rubro/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rubro_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\RubroController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rubro_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\RubroController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rubro/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rubro_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\RubroController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rubro/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rubro_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\RubroController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rubro_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\RubroController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'rubro_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\RubroController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/rubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tiporubro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoRubroController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tiporubro/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tiporubro_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoRubroController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tiporubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tiporubro_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoRubroController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tiporubro/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tiporubro_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoRubroController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tiporubro/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tiporubro_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoRubroController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tiporubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tiporubro_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoRubroController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tiporubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tiporubro_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoRubroController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tiporubro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoautomotor' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoAutomotorController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tipoautomotor/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoautomotor_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoAutomotorController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tipoautomotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoautomotor_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoAutomotorController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tipoautomotor/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoautomotor_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoAutomotorController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tipoautomotor/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoautomotor_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoAutomotorController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tipoautomotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoautomotor_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoAutomotorController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tipoautomotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoautomotor_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\TipoAutomotorController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tipoautomotor',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\ClienteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\ClienteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\ClienteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\ClienteController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\ClienteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\ClienteController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\ClienteController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cargo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\CargoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cargo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cargo_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\CargoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cargo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cargo_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\CargoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cargo/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cargo_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\CargoController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cargo/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cargo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\CargoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cargo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cargo_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\CargoController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cargo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cargo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\CargoController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cargo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empleado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\EmpleadoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empleado/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empleado_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\EmpleadoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empleado_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\EmpleadoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empleado/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empleado_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\EmpleadoController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empleado/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empleado_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\EmpleadoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empleado_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\EmpleadoController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empleado_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\EmpleadoController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'glav_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GlavBundle\\Controller\\DefaultController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
