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

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/cliente')) {
                // cliente
                if (rtrim($pathinfo, '/') === '/cliente') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cliente');
                    }

                    return array (  '_controller' => 'GlavBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente',);
                }

                // cliente_show
                if (preg_match('#^/cliente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'GlavBundle\\Controller\\ClienteController::showAction',));
                }

                // cliente_new
                if ($pathinfo === '/cliente/new') {
                    return array (  '_controller' => 'GlavBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
                }

                // cliente_create
                if ($pathinfo === '/cliente/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cliente_create;
                    }

                    return array (  '_controller' => 'GlavBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
                }
                not_cliente_create:

                // cliente_edit
                if (preg_match('#^/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'GlavBundle\\Controller\\ClienteController::editAction',));
                }

                // cliente_update
                if (preg_match('#^/cliente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cliente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'GlavBundle\\Controller\\ClienteController::updateAction',));
                }
                not_cliente_update:

                // cliente_delete
                if (preg_match('#^/cliente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cliente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'GlavBundle\\Controller\\ClienteController::deleteAction',));
                }
                not_cliente_delete:

            }

            if (0 === strpos($pathinfo, '/cargo')) {
                // cargo
                if (rtrim($pathinfo, '/') === '/cargo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'cargo');
                    }

                    return array (  '_controller' => 'GlavBundle\\Controller\\CargoController::indexAction',  '_route' => 'cargo',);
                }

                // cargo_show
                if (preg_match('#^/cargo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_show')), array (  '_controller' => 'GlavBundle\\Controller\\CargoController::showAction',));
                }

                // cargo_new
                if ($pathinfo === '/cargo/new') {
                    return array (  '_controller' => 'GlavBundle\\Controller\\CargoController::newAction',  '_route' => 'cargo_new',);
                }

                // cargo_create
                if ($pathinfo === '/cargo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cargo_create;
                    }

                    return array (  '_controller' => 'GlavBundle\\Controller\\CargoController::createAction',  '_route' => 'cargo_create',);
                }
                not_cargo_create:

                // cargo_edit
                if (preg_match('#^/cargo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_edit')), array (  '_controller' => 'GlavBundle\\Controller\\CargoController::editAction',));
                }

                // cargo_update
                if (preg_match('#^/cargo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cargo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_update')), array (  '_controller' => 'GlavBundle\\Controller\\CargoController::updateAction',));
                }
                not_cargo_update:

                // cargo_delete
                if (preg_match('#^/cargo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cargo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_delete')), array (  '_controller' => 'GlavBundle\\Controller\\CargoController::deleteAction',));
                }
                not_cargo_delete:

            }

        }

        if (0 === strpos($pathinfo, '/empleado')) {
            // empleado
            if (rtrim($pathinfo, '/') === '/empleado') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empleado');
                }

                return array (  '_controller' => 'GlavBundle\\Controller\\EmpleadoController::indexAction',  '_route' => 'empleado',);
            }

            // empleado_show
            if (preg_match('#^/empleado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_show')), array (  '_controller' => 'GlavBundle\\Controller\\EmpleadoController::showAction',));
            }

            // empleado_new
            if ($pathinfo === '/empleado/new') {
                return array (  '_controller' => 'GlavBundle\\Controller\\EmpleadoController::newAction',  '_route' => 'empleado_new',);
            }

            // empleado_create
            if ($pathinfo === '/empleado/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empleado_create;
                }

                return array (  '_controller' => 'GlavBundle\\Controller\\EmpleadoController::createAction',  '_route' => 'empleado_create',);
            }
            not_empleado_create:

            // empleado_edit
            if (preg_match('#^/empleado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_edit')), array (  '_controller' => 'GlavBundle\\Controller\\EmpleadoController::editAction',));
            }

            // empleado_update
            if (preg_match('#^/empleado/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_empleado_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_update')), array (  '_controller' => 'GlavBundle\\Controller\\EmpleadoController::updateAction',));
            }
            not_empleado_update:

            // empleado_delete
            if (preg_match('#^/empleado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_empleado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empleado_delete')), array (  '_controller' => 'GlavBundle\\Controller\\EmpleadoController::deleteAction',));
            }
            not_empleado_delete:

        }

        // glav_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'glav_homepage')), array (  '_controller' => 'GlavBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
