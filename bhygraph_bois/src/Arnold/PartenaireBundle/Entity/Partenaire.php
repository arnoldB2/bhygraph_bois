<?php

namespace Arnold\PartenaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire")
 * @ORM\Entity(repositoryClass="Arnold\PartenaireBundle\Repository\PartenaireRepository")
 */
class Partenaire
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
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $image;

    /**
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return Partenaire
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Partenaire
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

