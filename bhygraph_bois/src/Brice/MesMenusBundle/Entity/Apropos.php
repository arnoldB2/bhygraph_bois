<?php

namespace Brice\MesMenusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apropos
 *
 * @ORM\Table(name="apropos")
 * @ORM\Entity(repositoryClass="Brice\MesMenusBundle\Repository\AproposRepository")
 */
class Apropos 
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
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre1", type="text")
     */
    private $titre1;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

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
     * @var int
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled; 


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
     * @return Apropos
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
     * Set titre1
     *
     * @param string $titre1
     *
     * @return Apropos
     */
    public function setTitre1($titre1)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre1
     *
     * @return string
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Apropos
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Apropos
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Apropos
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
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     *
     * @return Apropos
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
     * @return Apropos
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
     * @return Apropos
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
}
