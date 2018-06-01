<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/a')) {
            // api
            if ('/api' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ApiController::index',  '_route' => 'api',);
            }

            if (0 === strpos($pathinfo, '/api/get')) {
                // api_get_products
                if (0 === strpos($pathinfo, '/api/get/product') && preg_match('#^/api/get/product/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_products')), array (  '_controller' => 'App\\Controller\\ApiController::apiGetProductById',));
                }

                // api_get_manufacturers
                if ('/api/get/manufacturers' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ApiController::apiGetManufacturers',  '_route' => 'api_get_manufacturers',);
                }

                // api_get_events
                if ('/api/get/events' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\ApiController::apiGetCalendarEvents',  '_route' => 'api_get_events',);
                }

            }

            // user_account
            if ('/account' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\UserAccountController::index',  '_route' => 'user_account',);
            }

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            // calendar
            if ('/calendar' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\CalendarController::index',  '_route' => 'calendar',);
            }

            if (0 === strpos($pathinfo, '/calendar/events')) {
                // calendar_events
                if ('/calendar/events' === $pathinfo) {
                    return array (  '_controller' => 'App\\Controller\\CalendarController::showEvents',  '_route' => 'calendar_events',);
                }

                // delete_event
                if (0 === strpos($pathinfo, '/calendar/events/delete') && preg_match('#^/calendar/events/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_event')), array (  '_controller' => 'App\\Controller\\CalendarController::deleteEvent',));
                }

            }

            // create_admin
            if ('/createAdmin' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SecurityController::createAdminUser',  '_route' => 'create_admin',);
            }

        }

        elseif (0 === strpos($pathinfo, '/expense-reports')) {
            // expense_reports
            if ('/expense-reports' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'App\\Controller\\ExpenseReportController::index',  '_route' => 'expense_reports',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_expense_reports;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'expense_reports'));
                }

                return $ret;
            }
            not_expense_reports:

            // delete_expense_report
            if (0 === strpos($pathinfo, '/expense-reports/delete') && preg_match('#^/expense\\-reports/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_expense_report')), array (  '_controller' => 'App\\Controller\\ExpenseReportController::delete',));
            }

        }

        // app_home_show
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomeController::show',  '_route' => 'app_home_show',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_home_show;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_home_show'));
            }

            return $ret;
        }
        not_app_home_show:

        // manufacturers
        if ('/manufacturers' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\ManufacturerController::index',  '_route' => 'manufacturers',);
        }

        if (0 === strpos($pathinfo, '/products')) {
            // products_list
            if ('/products' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ProductController::showAllProducts',  '_route' => 'products_list',);
            }

            // delete_product
            if (0 === strpos($pathinfo, '/products/delete') && preg_match('#^/products/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_product')), array (  '_controller' => 'App\\Controller\\ProductController::deleteProduct',));
            }

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::logout',  '_route' => 'logout',);
        }

        // delete_user
        if (0 === strpos($pathinfo, '/delete_user') && preg_match('#^/delete_user/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_user')), array (  '_controller' => 'App\\Controller\\SecurityController::deleteUser',));
        }

        // user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\UserManagementController::registerAction',  '_route' => 'user_registration',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
