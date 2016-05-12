<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Article;
use Doctrine\DBAL\Driver\PDOException;
use AppBundle\Entity\Image;
use AppBundle\Entity\Commentaire;
use AppBundle\Entity\Categorie;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
		$articles=$repA->getArticlesIndex();
		return $this->render ( 'blog/index.html.twig', [ 
				'articles' => $articles,
				'base_dir' => realpath ( $this->getParameter ( 'kernel.root_dir' ) . '/..' ) 
		] );
		
	}
	//Création de la route pour la prochaine action qui sera disponible dans le blog
	/**
	 * @Route("/blog/detail/{id}",name="blog_detail",defaults={"id":1},requirements={"id":"\d+"})
	 * )
	 */
	public function detailAction(Request $request, $id) {
		$repA=$this->getDoctrine()->getManager()->getRepository('AppBundle:Article');
		$repC=$this->getDoctrine()->getManager()->getRepository('AppBundle:Commentaire');
		$article=$repA->find($id);
		$commentaires=$repC->findBy(['article'=>$article],array('date'=>'desc'));
		return $this->render ( 'blog/detail.html.twig', [ 
				'article' => $article ,
				'commentaires'=>$commentaires
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
		//Création de l'entité a crée depuis le formulaire
		$article =new Article();
		//Création du formulaire pour créer les attributs de la nouvelle entité
		$formbuilder=$this->createFormBuilder($article);
		$formbuilder->add('titre',TextType::class)
					->add('contenu',TextareaType::class)
					->add('auteur',TextType::class)
					->add('date',DateType::class)
					->add('publication',CheckboxType::class,['required'=>false])
					->add('submit',SubmitType::class);
		//envoie du formulaire depuis le formbuilder dans un objet formulaire
		$form=$formbuilder->getForm();
// 		$article->setAuteur('moi');
// 		$article->setContenu('Whoa, ça ressemble a ça !');
// 		$article->setTitre('Hello World !');
		
// 		$image =new Image();
// 		$image-> setUrl('http://vignette4.wikia.nocookie.net/fairy-tail/images/c/c5/Fro_GMG.png/revision/latest?cb=20130105210355&path-prefix=fr');
// 		$image->setAlt('Mon image');
		
// 		$article->setImage($image);
		
// 		$commentaire1= new Commentaire();
// 		$commentaire1->setArticle($article);
// 		$commentaire1->setAuteur('Happy');
// 		$commentaire1->setContenu('Tu aimes le poisson, moi oui !');
		
// 		$commentaire2= new Commentaire();
// 		$commentaire2->setArticle($article);
// 		$commentaire2->setAuteur('Charles');
// 		$commentaire2->setContenu('Arrete avec tes poissons ! e(>_<)');
		
// 		$categorie1=new Categorie();
// 		$categorie1->setTitre('Générale');
		
// 		$categorie2=new Categorie();
// 		$categorie2->setTitre('Informatique');
		
// 		$article->addCategory($categorie1);
// 		$article->addCategory($categorie2);		
		
// 		$em=$this->getDoctrine()->getManager();
// 		$em->persist($article);
// 		$em->persist($commentaire1);
// 		$em->persist($commentaire2);
// 		$em->persist($categorie1);
// // 		$em->persist($categorie2);
// 		try {
// 			$em->flush();
// 			return $this->redirectToRoute('blog_detail',['id'=>$article->getId()]);
// 		}
// 			catch (\PDOException $e) {
			
// 		}
		
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