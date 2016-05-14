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
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'redirection_facebook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\UserBundle\\Controller\\DefaultController::facebookRedirectionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/check-facebook',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'path_to_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/back/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\NavController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_joueur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\NavController::joueurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_ajouterjoueur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\NavController::ajouterjoueurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/ajouterjoueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_modifierjoueur' => array (  0 =>   array (    0 => 'idpersonne',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::modifierjoueurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpersonne',    ),    1 =>     array (      0 => 'text',      1 => '/back/modifierjoueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_supprimerjoueur' => array (  0 =>   array (    0 => 'idpersonne',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::supprimerjoueurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpersonne',    ),    1 =>     array (      0 => 'text',      1 => '/back/supprimerjoueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_addjoueurtodb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::addjoueurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/addplayer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshyback_nav_listerjoueurs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::affichejoueursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/listerjoueurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_addMedecin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\MedecinController::addMedecinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/addMedecin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_listMedecin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\MedecinController::afficheMedecinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/listMedecin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_updateMedecin' => array (  0 =>   array (    0 => 'cin',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\MedecinController::ModifierMedecinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cin',    ),    1 =>     array (      0 => 'text',      1 => '/back/updateMedecin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_deleteMedecin' => array (  0 =>   array (    0 => 'cin',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\MedecinController::deleteMedecinAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cin',    ),    1 =>     array (      0 => 'text',      1 => '/back/deleteMedecin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_ajoutEvent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::ajoutEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/ajoutEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_affEvent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::afficheEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/affEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_modifEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::ModifierEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/back/modifEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_deleteEvent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::deleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/back/suppEvent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_ajoutCompte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduController::ajoutCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/addCompteMed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_ajoutCompteMatch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduMatchController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/addCompteMatch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_ajoutActu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/addActu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_affActu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::afficheActualiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/affActu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_modifactu' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::ModifierActuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/back/modifActu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_deleteactu' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::deleteActuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/back/suppactu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_affcompte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduController::afficheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/affcompte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_suppcompte' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/back/suppcompte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_ajoutVid' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::ajoutVideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/addVid',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_affVideo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::afficherVideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/affVid',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_modifVideo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::ModifierVideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/back/modifVideo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_affActuFront' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::afficheactufrontAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/back/affActufront',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_suppVideo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::deleteVideoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/back/suppVid',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tft_DetailsActu' => array (  0 =>   array (    0 => 'idactualite',  ),  1 =>   array (    '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::detailActuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idactualite',    ),    1 =>     array (      0 => 'text',      1 => '/back/detailActu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshynav_front_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'wyshy\\navFrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/front/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshynav_front_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\navFrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'wyshynav_front_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'wyshy\\navFrontBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/front/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hwi_oauth_service_redirect' => array (  0 =>   array (    0 => 'service',  ),  1 =>   array (    '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'service',    ),    1 =>     array (      0 => 'text',      1 => '/connect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hwi_oauth_connect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/log/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
