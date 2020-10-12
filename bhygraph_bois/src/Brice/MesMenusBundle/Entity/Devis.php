<?php

namespace Brice\MesMenusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="Brice\MesMenusBundle\Repository\DevisRepository")
 */
class Devis
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
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string")
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="sendat", type="date")
     */
    private $sendat;

// relation
    /**
     * @ORM\ManyToOne(targetEntity="Arnold\ServiceBundle\Entity\Service")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $Service;

    public function __construct()
    {
        $this->sendat = new \DateTime();
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
     * Set email
     *
     * @param string $email
     *
     * @return Devis
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Devis
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
     * Set objet
     *
     * @param string $objet
     *
     * @return Devis
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Devis
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
     * Set service
     *
     * @param \Arnold\ServiceBundle\Entity\Service $service
     *
     * @return Devis
     */
    public function setService(\Arnold\ServiceBundle\Entity\Service $service = null)
    {
        $this->Service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Arnold\ServiceBundle\Entity\Service
     */
    public function getService()
    {
        return $this->Service;
    }

    public function __toString()
    {
        return (string) $this->nom;
    }

    /**
     * Set sendat
     *
     * @param \DateTime $sendat
     *
     * @return Devis
     */
    public function setSendat($sendat)
    {
        $this->sendat = $sendat;

        return $this;
    }

    /**
     * Get sendat
     *
     * @return \DateTime
     */
    public function getSendat()
    {
        return $this->sendat;
    }
}
