<?php

namespace Kevin\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="CatBundle_categorie")
 * @ORM\Entity(repositoryClass="Kevin\CatalogueBundle\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, unique=true)
     */
    private $titre;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Article",mappedBy="categories")
     */
    private $articles;
    
    /**
     * @var Image
     *
     * @ORM\OneToOne(targetEntity="Image",cascade={"persist","remove"})
     */
    private $image;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Categorie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add article
     *
     * @param \Kevin\CatalogueBundle\Entity\Article $article
     *
     * @return Categorie
     */
    public function addArticle(\Kevin\CatalogueBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \Kevin\CatalogueBundle\Entity\Article $article
     */
    public function removeArticle(\Kevin\CatalogueBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set image
     *
     * @param \Kevin\CatalogueBundle\Entity\Image $image
     *
     * @return Categorie
     */
    public function setImage(\Kevin\CatalogueBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Kevin\CatalogueBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
