<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use Doctrine\DBAL\Driver\PDOException;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Categorie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Form\ArticleType;
use AppBundle\Form\CommentaireType;


/**
 * 
 * @Route {"/blog"}
 *
 */

class BlogController extends Controller {
	/////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////// INDEX //////////////////////////////////////////////
	
	/**
	 * @Route("/blog/{page}",name="blog_homepage",defaults={"page":1},requirements={"page":"\d+"})
	 * )
	 */
	
	
	public function indexAction(Request $request, $page) {
		// replace this example code with whatever you need
		
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$articles=$repA->getArticlesIndex();
		return $this->render ( 'blog/index.html.twig', [ 
				'articles' => $articles,
				'base_dir' => realpath ( $this->getParameter ( 'kernel.root_dir' ) . '/..' ) 
		] );
		
	}
	//Création de la route pour la prochaine action qui sera disponible dans le blog
	
	/////////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////////////////// Detail //////////////////////////////////////////////
	
	/**
	 * @Route("/blog/detail/{id}",name="blog_detail",defaults={"id":1},requirements={"id":"\d+"})
	 * @Method("GET")
	 */
	public function detailAction(Request $request, $id) {
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$repC=$this->getDoctrine()->getManager()->getRepository('AppBundle:Commentaire');
		$article=$repA->find($id);
		$commentaires=$repC->findBy(['article'=>$article],array('date'=>'desc'));
		
		$commentaire =new Commentaire();
		$form=$this->createForm(CommentaireType::class,$commentaire);
		
		return $this->render ( 'blog/detail.html.twig', [
				//renvoie de la vue du formulaire dans le template twig
				'form'=>$form->createView(),
				'article' => $article ,
				'commentaires'=>$commentaires,]);
	}
	
	//Création de la route pour la prochaine action qui sera disponible dans le blog
	/**
 	 * @Route("/blog/detail/{id}",name="blog_postdetail",defaults={"id":1},requirements={"id":"\d+"})
 	 * @Method("POST")
	 */
	public function detailPostAction(Request $request, $id) {
 		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$repC=$this->getDoctrine()->getManager()->getRepository('AppBundle:Commentaire');
		$article=$repA->find($id);
	
		//Création de l'entité a crée depuis le formulaire
		$commentaire =new Commentaire();
 		//Création du formulaire par l'utilisation d'entité de formulaire ArticleType.php
		$form=$this->createForm(CommentaireType::class,$commentaire);
		//Verification des données si l'hydratation des propriétés est correct
 		$form->handleRequest($request);
 		$session=$this->get('session');
 		if($form->isSubmitted()&& $form->isValid()){
			$em=$this->getDoctrine()->getManager();
			$commentaire->setArticle($article);
 			$em->persist($commentaire);
			try {
 			$em->flush();
 			$session->getFlashBag()->add('info','Commentaire enregistré avec succés');
 			return $this->redirectToRoute('blog_postdetail',['id'=>$article->getId()]);
 			} catch (\Exception $e) {
 				$session->getFlashBag()->add('info','Erreur(s) dans le formulaire');
 				return $this->redirectToRoute('blog_detail',['id'=>$article->getId()]);
 				}
 				}
 	}
 	
	/**
	 * @Route("/blog/modification/{id}",name="blog_modif", defaults={"id":1}, requirements={"id":"\d+"})
	 * @Method("GET")
	 * )
	 */
	public function modifAction(Request $request, $id) {
		$em=$this->getDoctrine()->getManager();
		$repA=$em->getRepository('AppBundle:Article');
		$article=$repA->find($id);
		//Création du formulaire par l'utilisation d'entité de formulaire ArticleType.php
		$form=$this->createForm(ArticleType::class,$article);
		
		return $this->render ( 'blog/modification.html.twig', [ 
				'form'=>$form->createView(),
				'id' => $id,
		] );
	}
	
	
	/**
	 * @Route("/blog/modification/{id}",name="blog_postmodif", defaults={"id":1}, requirements={"id":"\d+"})
	 * @Method("POST")
	 * )
	 */	
	public function modifPostAction(Request $request, $id) {
		$em=$this->getDoctrine()->getManager();
		$repA=$em->getRepository('AppBundle:Article');
		$article=$repA->find($id);
		//Création du formulaire par l'utilisation d'entité de formulaire ArticleType.php
		$form=$this->createForm(ArticleType::class,$article);
		
		$form->handleRequest($request);
		$session=$this->get('session');
		if($form->isSubmitted()&& $form->isValid()){
			try {
				$em->flush();
				$session->getFlashBag()->add('info','Article modifié avec succés');
				return $this->redirectToRoute('blog_postmodif',['id'=>$article->getId()]);
			} catch (\Exception $e) {
				$session->getFlashBag()->add('info','Erreur(s) dans le formulaire, article non modifié');
				return $this->redirectToRoute('blog_modif',['id'=>$article->getId()]);
			}
		}
		
	}
	
	
	/**
	 * @Route("/blog/ajout/{id}",name="blog_ajout",defaults={"id":1}, requirements={"id":"\d+"})
	 * )
	 */
	public function ajouterAction(Request $request,$id) {
		//Création de l'entité a crée depuis le formulaire
		$article =new Article();
		//Création du formulaire par l'utilisation d'entité de formulaire ArticleType.php
		$form=$this->createForm(ArticleType::class,$article);
		//Verification des données si l'hydratation des propriétés est correct
		$session=$this->get('session');
		if ($request->getMethod()=="POST"){
			$form->handleRequest($request);
			
			if($form->isSubmitted()&& $form->isValid()){
				//$article->SetOwner();
				$em=$this->getDoctrine()->getManager();
				$em->persist($article);
				try {
					$em->flush();
					$session->getFlashBag()->add('info','Article enregistré avec succés');
					return $this->redirectToRoute('blog_detail',['id'=>$article->getId()]);
				} catch (\Exception $e) {
					$session->getFlashBag()->add('info','Erreur(s) dans le formulaire');
					return $this->redirectToRoute('blog_ajout',['id'=>$article->getId()]);
				}
			}
		}

		return $this->render ( 'blog/ajout.html.twig', [
				//renvoie de la vue du formulaire dans le template twig
		'form'=>$form->createView(),]);
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
	
	/**
	 * @Route("/blog/categorie/{id}",name="blog_categorie",defaults={"id":1}, requirements={"id":"\d+"})
	 * )
	 */
	public function categorieAction(Request $request,$id) {
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Categorie');
		$categorie=$repA->find($id);
		
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$articles=$repA->getArticlesByCat($categorie);
		
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$valeur=$repA->countArticlesByCat($categorie);
		
		
		return $this->render ( 'blog/categorie.html.twig', [
				'articles' => $articles,
				'categorie'=>$categorie,
				'nbarticlebycat'=>$valeur
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