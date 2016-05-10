<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use Doctrine\DBAL\Driver\PDOException;
use AppBundle\Entity\Image;
use AppBundle\Entity\Commentaire;
/**
 * 
 * @Route {"/blog"}
 *
 */

class BlogController extends Controller {
	/**
	 * @Route("/blog/{page}",name="blog_homepage",defaults={"page":1},requirements={"page":"\d+"})
	 * )
	 */
	public function indexAction(Request $request, $page) {
		// replace this example code with whatever you need
		
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$articles=$repA->findAll();
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
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$article=$repA->find($id);
		return $this->render ( 'blog/detail.html.twig', [ 
				'article' => $article 
		] );
	}
	/**
	 * @Route("/blog/modification/{id}",name="blog_modif", defaults={"id":1}, requirements={"id":"\d+"})
	 * )
	 */
	public function modifAction(Request $request, $id) {
		$em=$this->getDoctrine()->getManager();
		$repA=$em->getRepository('AppBundle:Article');
		$article=$repA->find($id);
		
		$article->setTitre('Update - '.$article->getTitre());
		$em->flush();
		return $this->render ( 'blog/modification.html.twig', [ 
				'id' => $id
		] );
	}
	
	/**
	 * @Route("/blog/ajout/{id}",name="blog_ajout",defaults={"id":1}, requirements={"id":"\d+"})
	 * )
	 */
	public function ajouterAction(Request $request,$id) {
		$article =new Article();
		$article->setAuteur('moi');
		$article->setContenu('Whoa, ça ressemble a ça !');
		$article->setTitre('Hello World !');
		
		$image =new Image();
		$image-> setUrl('http://vignette4.wikia.nocookie.net/fairy-tail/images/c/c5/Fro_GMG.png/revision/latest?cb=20130105210355&path-prefix=fr');
		$image->setAlt('Mon image');
		
		$article->setImage($image);
		
		$commentaire1= new Commentaire();
		$commentaire1->setArticle($article);
		$commentaire1->setAuteur('Happy');
		$commentaire1->setContenu('Tu aimes le poisson, moi oui !');
		
		$commentaire2= new Commentaire();
		$commentaire2->setArticle($article);
		$commentaire2->setAuteur('Charles');
		$commentaire2->setContenu('Arrete avec tes poissons ! e(>_<)');
		
		
		
		$em=$this->getDoctrine()->getManager();
		$em->persist($article);
		$em->persist($commentaire1);
		$em->persist($commentaire2);
		try {
			$em->flush();
			return $this->redirectToRoute('blog_detail',['id'=>$article->getId()]);
		}
			catch (\PDOException $e) {
			
		}
	
		
		return $this->render ( 'blog/ajout.html.twig', [
		'article'=>$article,]);
	}
	
	/**
	 * @Route("/blog/supprimer/{id}",name="blog_supprimer",defaults={"id":1}, requirements={"id":"\d+"})
	 * )
	 */
	public function supprimerAction(Request $request,$id) {
		$em=$this->getDoctrine()->getManager();
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		
		$article=$repA->find($id);
		$em->remove($article);
		
		try {
			$em->flush();
		}
		catch (\PDOException $e) {
				
		}
		return $this->render ( 'blog/supprimer.html.twig', [
				'id'=>$id
		]);
	}
	
	public function footerAction(Request $request) {
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$articles=$repA->findBy(['publication'=>true],array('date'=>'desc'),3,0);
		return $this->render ( 'blog/footer.html.twig', [
				'articles' => $articles,
				]);
	}
}