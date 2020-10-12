<?php

namespace Brice\MesMenusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documentation 
 *
 * @ORM\Table(name="documentation")
 * @ORM\Entity(repositoryClass="Brice\MesMenusBundle\Repository\DocumentationRepository")
 */
class Documentation
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
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $document;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postedat", type="date")
     */
    private $postedat;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    public function __construct()
    {
        $this->postedat = new \DateTime();
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
     * @return Documentation
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
     * @return Documentation
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
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param \Application\Sonata\MediaBundle\Entity\Media $document
     */
    public function setDocument($document)
    {
        $this->document = $document;
    }
    
    /**
     * Set postedat
     *
     * @param \DateTime $postedat
     *
     * @return Documentation
     */
    public function setPostedat($postedat)
    {
        $this->postedat = $postedat;

        return $this;
    }

    /**
     * Get postedat
     *
     * @return \DateTime
     */
    public function getPostedat()
    {
        return $this->postedat;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Documentation
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
}

