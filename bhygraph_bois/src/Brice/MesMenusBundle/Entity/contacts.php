<?php

namespace Brice\MesMenusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contacts
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity(repositoryClass="Brice\MesMenusBundle\Repository\contactsRepository")
 */
class contacts
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
     * @ORM\Column(name="objet", type="string")
     */
    private $objet; 

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sendat", type="date")
     */
    private $sendat;

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
     * @return contacts
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
     * Set objet
     *
     * @param string $objet
     *
     * @return contacts
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
     * Set nom
     *
     * @param string $nom
     *
     * @return contacts
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
     * Set message
     *
     * @param string $message
     *
     * @return contacts
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set sendat
     *
     * @param \DateTime $sendat
     *
     * @return contacts
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

