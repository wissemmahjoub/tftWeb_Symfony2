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

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // redirection_facebook
            if ($pathinfo === '/login/check-facebook') {
                return array (  '_controller' => 'wyshy\\UserBundle\\Controller\\DefaultController::facebookRedirectionAction',  '_route' => 'redirection_facebook',);
            }

            // path_to_index
            if ($pathinfo === '/login/index') {
                return array (  '_controller' => 'wyshy\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'path_to_index',);
            }

        }

        if (0 === strpos($pathinfo, '/back')) {
            // wyshyback_nav_homepage
            if (0 === strpos($pathinfo, '/back/hello') && preg_match('#^/back/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyshyback_nav_homepage')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\DefaultController::indexAction',));
            }

            // wyshyback_nav_1
            if (rtrim($pathinfo, '/') === '/back') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'wyshyback_nav_1');
                }

                return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\NavController::indexAction',  '_route' => 'wyshyback_nav_1',);
            }

            // wyshyback_nav_joueur
            if ($pathinfo === '/back/joueur') {
                return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\NavController::joueurAction',  '_route' => 'wyshyback_nav_joueur',);
            }

            // wyshyback_nav_ajouterjoueur
            if ($pathinfo === '/back/ajouterjoueur') {
                return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\NavController::ajouterjoueurAction',  '_route' => 'wyshyback_nav_ajouterjoueur',);
            }

            // wyshyback_nav_modifierjoueur
            if (0 === strpos($pathinfo, '/back/modifierjoueur') && preg_match('#^/back/modifierjoueur/(?P<idpersonne>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyshyback_nav_modifierjoueur')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::modifierjoueurAction',));
            }

            // wyshyback_nav_supprimerjoueur
            if (0 === strpos($pathinfo, '/back/supprimerjoueur') && preg_match('#^/back/supprimerjoueur/(?P<idpersonne>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyshyback_nav_supprimerjoueur')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::supprimerjoueurAction',));
            }

            // wyshyback_nav_addjoueurtodb
            if ($pathinfo === '/back/addplayer') {
                return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::addjoueurAction',  '_route' => 'wyshyback_nav_addjoueurtodb',);
            }

            // wyshyback_nav_listerjoueurs
            if ($pathinfo === '/back/listerjoueurs') {
                return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\JoueurController::affichejoueursAction',  '_route' => 'wyshyback_nav_listerjoueurs',);
            }

            // tft_addMedecin
            if ($pathinfo === '/back/addMedecin') {
                return array (  '_controller' => 'wyshybackNavBundle:Medecin:addMedecin',  '_route' => 'tft_addMedecin',);
            }

            // tft_listMedecin
            if ($pathinfo === '/back/listMedecin') {
                return array (  '_controller' => 'wyshybackNavBundle:Medecin:afficheMedecin',  '_route' => 'tft_listMedecin',);
            }

            // tft_updateMedecin
            if (0 === strpos($pathinfo, '/back/updateMedecin') && preg_match('#^/back/updateMedecin/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_updateMedecin')), array (  '_controller' => 'wyshybackNavBundle:Medecin:ModifierMedecin',));
            }

            // tft_deleteMedecin
            if (0 === strpos($pathinfo, '/back/deleteMedecin') && preg_match('#^/back/deleteMedecin/(?P<cin>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_deleteMedecin')), array (  '_controller' => 'wyshybackNavBundle:Medecin:deleteMedecin',));
            }

            if (0 === strpos($pathinfo, '/back/a')) {
                // tft_ajoutEvent
                if ($pathinfo === '/back/ajoutEvent') {
                    return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::ajoutEventAction',  '_route' => 'tft_ajoutEvent',);
                }

                // tft_affEvent
                if ($pathinfo === '/back/affEvent') {
                    return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::afficheEventAction',  '_route' => 'tft_affEvent',);
                }

            }

            // tft_modifEvent
            if (0 === strpos($pathinfo, '/back/modifEvent') && preg_match('#^/back/modifEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_modifEvent')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::ModifierEventAction',));
            }

            // tft_deleteEvent
            if (0 === strpos($pathinfo, '/back/suppEvent') && preg_match('#^/back/suppEvent/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_deleteEvent')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\EvenementController::deleteEventAction',));
            }

            if (0 === strpos($pathinfo, '/back/a')) {
                if (0 === strpos($pathinfo, '/back/add')) {
                    if (0 === strpos($pathinfo, '/back/addCompteM')) {
                        // tft_ajoutCompte
                        if ($pathinfo === '/back/addCompteMed') {
                            return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduController::ajoutCompteAction',  '_route' => 'tft_ajoutCompte',);
                        }

                        // tft_ajoutCompteMatch
                        if ($pathinfo === '/back/addCompteMatch') {
                            return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduMatchController::ajoutAction',  '_route' => 'tft_ajoutCompteMatch',);
                        }

                    }

                    // tft_ajoutActu
                    if ($pathinfo === '/back/addActu') {
                        return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::ajouterAction',  '_route' => 'tft_ajoutActu',);
                    }

                }

                // tft_affActu
                if ($pathinfo === '/back/affActu') {
                    return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::afficheActualiteAction',  '_route' => 'tft_affActu',);
                }

            }

            // tft_modifactu
            if (0 === strpos($pathinfo, '/back/modifActu') && preg_match('#^/back/modifActu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_modifactu')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::ModifierActuAction',));
            }

            // tft_deleteactu
            if (0 === strpos($pathinfo, '/back/suppactu') && preg_match('#^/back/suppactu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_deleteactu')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::deleteActuAction',));
            }

            // tft_affcompte
            if ($pathinfo === '/back/affcompte') {
                return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduController::afficheAction',  '_route' => 'tft_affcompte',);
            }

            // tft_suppcompte
            if (0 === strpos($pathinfo, '/back/suppcompte') && preg_match('#^/back/suppcompte/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_suppcompte')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\CompteRenduController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/back/a')) {
                // tft_ajoutVid
                if ($pathinfo === '/back/addVid') {
                    return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::ajoutVideoAction',  '_route' => 'tft_ajoutVid',);
                }

                // tft_affVideo
                if ($pathinfo === '/back/affVid') {
                    return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::afficherVideoAction',  '_route' => 'tft_affVideo',);
                }

            }

            // tft_modifVideo
            if (0 === strpos($pathinfo, '/back/modifVideo') && preg_match('#^/back/modifVideo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_modifVideo')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::ModifierVideoAction',));
            }

            // tft_affActuFront
            if ($pathinfo === '/back/affActufront') {
                return array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::afficheactufrontAction',  '_route' => 'tft_affActuFront',);
            }

            // tft_suppVideo
            if (0 === strpos($pathinfo, '/back/suppVid') && preg_match('#^/back/suppVid/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_suppVideo')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\VideoController::deleteVideoAction',));
            }

            // tft_DetailsActu
            if (0 === strpos($pathinfo, '/back/detailActu') && preg_match('#^/back/detailActu/(?P<idactualite>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tft_DetailsActu')), array (  '_controller' => 'wyshy\\backNavBundle\\Controller\\ActualiteController::detailActuAction',));
            }

        }

        if (0 === strpos($pathinfo, '/front')) {
            // wyshynav_front_homepage
            if (0 === strpos($pathinfo, '/front/hello') && preg_match('#^/front/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wyshynav_front_homepage')), array (  '_controller' => 'wyshy\\navFrontBundle\\Controller\\DefaultController::indexAction',));
            }

            // wyshynav_front_home
            if (rtrim($pathinfo, '/') === '/front') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'wyshynav_front_home');
                }

                return array (  '_controller' => 'wyshy\\navFrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wyshynav_front_home',);
            }

            // wyshynav_front_login
            if ($pathinfo === '/front/login') {
                return array (  '_controller' => 'wyshy\\navFrontBundle\\Controller\\DefaultController::loginAction',  '_route' => 'wyshynav_front_login',);
            }

        }

        // hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/connect') && preg_match('#^/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/log') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
