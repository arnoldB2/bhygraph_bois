<?php

namespace Arnold\RealisationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Realisation
 *
 * @ORM\Table(name="realisation")
 * @ORM\Entity(repositoryClass="Arnold\RealisationBundle\Repository\RealisationRepository")
 */
class Realisation
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string 
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=125)
     */
    private $presentation;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $image;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $image1;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $image2;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterealisation", type="date")
     */
    private $daterealisation;

    /**
     * @ORM\ManyToOne(targetEntity="Brice\MesMenusBundle\Entity\Categorie")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $categorie;

    public function __construct()
    {
        $this->daterealisation = new \DateTime();
    }


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Realisation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Realisation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set presentation
     *
     * @param string $presentation 
     *
     * @return Realisation
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    } 

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Realisation
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set daterealisation
     *
     * @param \DateTime $daterealisation
     *
     * @return Realisation
     */
    public function setDaterealisation($daterealisation)
    {
        $this->daterealisation = $daterealisation;

        return $this;
    }

    /**
     * Get daterealisation
     *
     * @return \DateTime
     */
    public function getDaterealisation()
    {
        return $this->daterealisation;
    }

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return Realisation
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set image1
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image1
     *
     * @return Realisation
     */
    public function setImage1(\Application\Sonata\MediaBundle\Entity\Media $image1 = null)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image2
     *
     * @return Realisation
     */
    public function setImage2(\Application\Sonata\MediaBundle\Entity\Media $image2 = null)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set categorie
     *
     * @param \Brice\MesMenusBundle\Entity\Categorie $categorie
     *
     * @return Realisation
     */
    public function setCategorie(\Brice\MesMenusBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Brice\MesMenusBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function __toString()
    {
        return (string) $this->nom;
    }
}
