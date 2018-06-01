<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'api' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ApiController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_get_products' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\ApiController::apiGetProductById',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/api/get/product',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_get_manufacturers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ApiController::apiGetManufacturers',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/get/manufacturers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'api_get_events' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ApiController::apiGetCalendarEvents',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/get/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\CalendarController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendar_events' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\CalendarController::showEvents',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendar/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_event' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\CalendarController::deleteEvent',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/calendar/events/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'expense_reports' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ExpenseReportController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/expense-reports/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_expense_report' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\ExpenseReportController::delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/expense-reports/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_home_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\HomeController::show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'manufacturers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ManufacturerController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manufacturers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'products_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProductController::showAllProducts',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/products',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_product' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\ProductController::deleteProduct',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/products/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'create_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::createAdminUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/createAdmin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::login',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::logout',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_user' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\Controller\\SecurityController::deleteUser',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete_user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_account' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserAccountController::index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/account',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\Controller\\UserManagementController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
