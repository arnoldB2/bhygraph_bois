<?php

namespace Arnold\CommentaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="Arnold\CommentaireBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepublication", type="date")
     */
    private $datepublication;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;

    /**
     * @ORM\ManyToOne(targetEntity="Arnold\ActualitesBundle\Entity\Actualites")
     */
    protected $actualites;

    /**
     * @ORM\ManyToOne(targetEntity="Arnold\RealisationBundle\Entity\Realisation")
     */
    protected $realisation;

    public function __construct()
    {
        $this->enabled = true;
        $this->datepublication = new \DateTime();
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
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Commentaire
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Commentaire
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
     * Set datepublication
     *
     * @param \DateTime $datepublication
     *
     * @return Commentaire
     */
    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;

        return $this;
    }

    /**
     * Get datepublication
     *
     * @return \DateTime
     */
    public function getDatepublication()
    {
        return $this->datepublication;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Commentaire
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
     * Set actualites
     *
     * @param \Arnold\ActualitesBundle\Entity\Actualites $actualites
     *
     * @return Commentaire
     */
    public function setActualites(\Arnold\ActualitesBundle\Entity\Actualites $actualites = null)
    {
        $this->actualites = $actualites;

        return $this;
    }

    /**
     * Get actualites
     *
     * @return \Arnold\ActualitesBundle\Entity\Actualites
     */
    public function getActualites()
    {
        return $this->actualites;
    }

    /**
     * Set realisation
     *
     * @param \Arnold\RealisationBundle\Entity\Realisation $realisation
     *
     * @return Commentaire
     */
    public function setRealisation(\Arnold\RealisationBundle\Entity\Realisation $realisation = null)
    {
        $this->realisation = $realisation;

        return $this;
    }

    /**
     * Get realisation
     *
     * @return \Arnold\RealisationBundle\Entity\Realisation
     */
    public function getRealisation()
    {
        return $this->realisation;
    }
}
