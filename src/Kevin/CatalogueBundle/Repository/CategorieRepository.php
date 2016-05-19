<?php

namespace Kevin\CatalogueBundle\Repository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends \Doctrine\ORM\EntityRepository
{
	public function getCategoriesIndex(){
	
		/*C'est la même chose qu'en dessous mais en plus développé.
		 * $qb=$this->_em->createQueryBuilder()->select('a')->from($this->_entityName,'a');
		 */
		/*Création d'un paramètre pour le protéger de toutes inclusions SQL en utilisant une définition du paramètre
		 * dans la requête
			*/
	
		$qb=$this->createQueryBuilder("c")->leftJoin('c.image', 'i')->addSelect('i')
		->orderBy('c.titre','DESC')
		;
	
		//$qb=$this->createQueryBuilder("a")->leftJoin('a.image', 'i')->addSelect('i')->leftJoin('a.categories','c')
		//->addSelect('c')->where('a.publication =:pub')->setParameter('pub', $pub)->orderBy('a.date','DESC');
	
		$query=$qb->getQuery();
		return $query->getResult();//retourne un tableau d'objet
		// on peut inclure directement un paginator dans le renvoi de la fonction
		//return new \Doctrine\ORM\Tools\Pagination\Paginator($query);
	}
}
