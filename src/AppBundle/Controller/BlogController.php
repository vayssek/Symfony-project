<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller {
	/**
	 * @Route("/blog/{page}",name="blog_homepage",defaults={"page":1},requirements={"page":"\d+"})
	 * )
	 */
	public function indexAction(Request $request, $page) {
		// replace this example code with whatever you need
		$articles = [[
				'page' => 1,
				'titre' => "Nouvelle article",
				'contenu' => "Commencez à écrire",
				'date' => new \DateTime (),
				'image'=>'https://media.giphy.com/media/pD0mWWXxbd3gI/giphy.gif',
				//'image'=>'https://www.buzz2000.com/coloriage/fairy-tail-happy/coloriage-fairy-tail-happy-10098.png',
		],
		[
		'page' => 2,
		'titre' => "Nouvelle article",
		'contenu' => "Commencez à écrire",
		'date' => new \DateTime ()
		],
		[ 
				'page' => 3,
				'titre' => "Nouvelle article",
				'contenu' => "Commencez à écrire",
				'date' => new \DateTime () 
		]];
		return $this->render ( 'blog/index.html.twig', [ 
				'articles' => $articles,
				'base_dir' => realpath ( $this->getParameter ( 'kernel.root_dir' ) . '/..' ) 
		] );
		
	}
	/**
	 * @Route("/blog/detail/{id}",name="blog_detail",defaults={"id":1},requirements={"id":"\d+"})
	 * )
	 */
	public function detailAction(Request $request, $id) {
		$article = [ 
				'id' => $id,
				'titre' => "Nouvelle article",
				'contenu' => "Commencez à écrire",
				'date' => new \DateTime () 
		];
		return $this->render ( 'blog/detail.html.twig', [ 
				'article' => $article 
		] );
	}
	/**
	 * @Route("/blog/modification/{modif}",name="blog_modif", requirements={"modif":"\d+"})
	 * )
	 */
	public function modifAction(Request $request, $modif) {
		return $this->render ( 'blog/modification.html.twig', [ 
				'modif' => $modif 
		] );
	}
	
	/**
	 * @Route("/blog/ajout/{ajout}",name="blog_ajout", requirements={"ajout":"\d+"})
	 * )
	 */
	public function ajoutAction(Request $request, $ajout) {
		return $this->render ( 'blog/modification.html.twig', [
				'ajout' => $ajout
		] );
	}
	
	public function footerAction(Request $request) {
		$articles = [[
				'page' => 1,
				'titre' => "Nouvelle article",
				'contenu' => "Commencez à écrire",
				'date' => new \DateTime (),
				'image'=>'https://media.giphy.com/media/pD0mWWXxbd3gI/giphy.gif',
				//'image'=>'https://www.buzz2000.com/coloriage/fairy-tail-happy/coloriage-fairy-tail-happy-10098.png',
		],
				[
						'page' => 2,
						'titre' => "Nouvelle article",
						'contenu' => "Commencez à écrire",
						'date' => new \DateTime ()
				],
				[
						'page' => 3,
						'titre' => "Nouvelle article",
						'contenu' => "Commencez à écrire",
						'date' => new \DateTime ()
				]];
		return $this->render ( 'blog/footer.html.twig', [
				'articles' => $articles,
				]);
	}
}