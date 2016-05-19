<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/catalogue')) {
            if (0 === strpos($pathinfo, '/catalogue/article')) {
                // Catarticle_index
                if (rtrim($pathinfo, '/') === '/catalogue/article') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_Catarticle_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Catarticle_index');
                    }

                    return array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\ArticleController::indexAction',  '_route' => 'Catarticle_index',);
                }
                not_Catarticle_index:

                // Catarticle_new
                if ($pathinfo === '/catalogue/article/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_Catarticle_new;
                    }

                    return array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\ArticleController::newAction',  '_route' => 'Catarticle_new',);
                }
                not_Catarticle_new:

                // Catarticle_show
                if (preg_match('#^/catalogue/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_Catarticle_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Catarticle_show')), array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\ArticleController::showAction',));
                }
                not_Catarticle_show:

                // Catarticle_edit
                if (preg_match('#^/catalogue/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_Catarticle_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Catarticle_edit')), array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\ArticleController::editAction',));
                }
                not_Catarticle_edit:

                // Catarticle_delete
                if (preg_match('#^/catalogue/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_Catarticle_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Catarticle_delete')), array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_Catarticle_delete:

            }

            // cataloge_homepage
            if (preg_match('#^/catalogue(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cataloge_homepage')), array (  'page' => 1,  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CatalogueController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/catalogue/listebycat')) {
                // catalogue_categoriedetail
                if (preg_match('#^/catalogue/listebycat(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogue_categoriedetail')), array (  'id' => 1,  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CatalogueController::indexArticleByCat',));
                }

                // catalogue_articledetail
                if (0 === strpos($pathinfo, '/catalogue/listebycat/article') && preg_match('#^/catalogue/listebycat/article(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'catalogue_articledetail')), array (  'id' => 1,  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CatalogueController::detailArticle',));
                }

            }

            if (0 === strpos($pathinfo, '/catalogue/categorie')) {
                // Catcategorie_index
                if (rtrim($pathinfo, '/') === '/catalogue/categorie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_Catcategorie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Catcategorie_index');
                    }

                    return array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CategorieController::indexAction',  '_route' => 'Catcategorie_index',);
                }
                not_Catcategorie_index:

                // Catcategorie_new
                if ($pathinfo === '/catalogue/categorie/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_Catcategorie_new;
                    }

                    return array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CategorieController::newAction',  '_route' => 'Catcategorie_new',);
                }
                not_Catcategorie_new:

                // Catcategorie_show
                if (preg_match('#^/catalogue/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_Catcategorie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Catcategorie_show')), array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CategorieController::showAction',));
                }
                not_Catcategorie_show:

                // Catcategorie_edit
                if (preg_match('#^/catalogue/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_Catcategorie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Catcategorie_edit')), array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CategorieController::editAction',));
                }
                not_Catcategorie_edit:

                // Catcategorie_delete
                if (preg_match('#^/catalogue/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_Catcategorie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Catcategorie_delete')), array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\CategorieController::deleteAction',));
                }
                not_Catcategorie_delete:

            }

        }

        // kevin_catalogue_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'kevin_catalogue_default_index');
            }

            return array (  '_controller' => 'Kevin\\CatalogueBundle\\Controller\\DefaultController::indexAction',  '_route' => 'kevin_catalogue_default_index',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_homepage
            if (preg_match('#^/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_homepage')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/blog/detail')) {
                // blog_detail
                if (preg_match('#^/blog/detail(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_detail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_detail')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::detailAction',));
                }
                not_blog_detail:

                // blog_postdetail
                if (preg_match('#^/blog/detail(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_blog_postdetail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_postdetail')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::detailPostAction',));
                }
                not_blog_postdetail:

            }

            if (0 === strpos($pathinfo, '/blog/modification')) {
                // blog_modif
                if (preg_match('#^/blog/modification(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_modif;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_modif')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::modifAction',));
                }
                not_blog_modif:

                // blog_postmodif
                if (preg_match('#^/blog/modification(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_blog_postmodif;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_postmodif')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::modifPostAction',));
                }
                not_blog_postmodif:

            }

            // blog_ajout
            if (0 === strpos($pathinfo, '/blog/ajout') && preg_match('#^/blog/ajout(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_ajout')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::ajouterAction',));
            }

            // blog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_supprimer')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::supprimerAction',));
            }

            // blog_categorie
            if (0 === strpos($pathinfo, '/blog/categorie') && preg_match('#^/blog/categorie(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_categorie')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::categorieAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/categorie')) {
            // admin_categorie_index
            if (rtrim($pathinfo, '/') === '/admin/categorie') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_categorie_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_categorie_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::indexAction',  '_route' => 'admin_categorie_index',);
            }
            not_admin_categorie_index:

            // admin_categorie_new
            if ($pathinfo === '/admin/categorie/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_categorie_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::newAction',  '_route' => 'admin_categorie_new',);
            }
            not_admin_categorie_new:

            // admin_categorie_show
            if (preg_match('#^/admin/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_categorie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorie_show')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::showAction',));
            }
            not_admin_categorie_show:

            // admin_categorie_edit
            if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_categorie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorie_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::editAction',));
            }
            not_admin_categorie_edit:

            // admin_categorie_delete
            if (preg_match('#^/admin/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categorie_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_admin_categorie_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
