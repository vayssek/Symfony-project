<?php

namespace Kevin\CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Kevin\CatalogueBundle\Entity\Categorie;

class CatalogueController extends Controller
{

	/**
	 * @Route("/catalogue/{page}",name="cataloge_homepage",defaults={"page":1},requirements={"page":"\d+"})
	 * )
	 */
		
	public function indexAction($page) {
		// replace this example code with whatever you need
		$repA= $this->getDoctrine()->getManager()
		->getRepository('KevinCatalogueBundle:Categorie');
		$categories=$repA->getCategoriesIndex();
	
	
		return $this->render ( 'KevinCatalogueBundle:Front:index.html.twig', [
				'categories' => $categories,
// 				'pagination' => $pagination,
				'base_dir' => realpath ( $this->getParameter ( 'kernel.root_dir' ) . '/..' )
		] );
	
	}
	
	/**
	 * @Route("/catalogue/listebycat/{id}",name="catalogue_categoriedetail",defaults={"id":1},requirements={"id":"\d+"})
	 * )
	 */
	public function indexArticleByCat($id) {
		// replace this example code with whatever you need
		$repA=$this->getDoctrine()->getManager()->getRepository('KevinCatalogueBundle:Categorie');
		$categorie=$repA->find($id);
		
		$repA= $this->getDoctrine()->getManager()
		->getRepository('KevinCatalogueBundle:Article');
		$articles=$repA->getArticlesByCat($categorie);

	
		return $this->render ( 'KevinCatalogueBundle:Front:articlebycat.html.twig', [				
				'articles' => $articles,
		] );	
	}
	
	/**
	 * @Route("/catalogue/listebycat/article/{id}",name="catalogue_articledetail",defaults={"id":1},requirements={"id":"\d+"})
	 * )
	 */
	
	public function detailArticle($id) {
		$repA=$this->getDoctrine()->getManager()->getRepository('KevinCatalogueBundle:Article');
		$article=$repA->find($id);
	
	
		return $this->render ( 'KevinCatalogueBundle:Front:detailarticle.html.twig', [
				//renvoie de la vue du formulaire dans le template twig
				'article' => $article ,
				] );
	}
		public function footerAction() {
			$repA=$this->getDoctrine()->getManager()->getRepository('KevinCatalogueBundle:Article');
			$articles=$repA->findAll();
			return $this->render ( 'KevinCatalogueBundle:Front:footer.html.twig', [
					'articles' => $articles,
			]);
		}
	}
	