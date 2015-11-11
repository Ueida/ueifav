<?php

namespace DropyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 * 
 * @ORM\Table(name="favoris")
 * @ORM\Entity(repositoryClass="DropyBundle\Entity\FavorisRepository")
 */
class Favoris
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fav_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $favId;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_name", type="string", length=255)
     */
    private $favName = '[Inconnu]';

    /**
     * @var string
     *
     * @ORM\Column(name="fav_artiste", type="string", length=255)
     */
    private $favArtiste = '[Inconnu]';

    /**
     * @var string
     *
     * @ORM\Column(name="fav_tags", type="string", length=512)
     */
    private $favTags;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_adresse", type="string", length=128)
     */
    private $favAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_type", type="string", length=32)
     */
    private $favType;

    /**
     * @var integer
     *
     * @ORM\Column(name="fav_nsfw", type="integer")
     */
    private $favNsfw;

    /**
     * @var string
     *
     * @ORM\Column(name="fav_collection", type="string", length=255)
     */
    private $favCollection = 'A trier';


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set favId
     *
     * @param integer $favId
     *
     * @return Favoris
     */
    public function setFavId($favId)
    {
        $this->favId = $favId;

        return $this;
    }

    /**
     * Get favId
     *
     * @return integer
     */
    public function getFavId()
    {
        return $this->favId;
    }

    /**
     * Set favName
     *
     * @param string $favName
     *
     * @return Favoris
     */
    public function setFavName($favName)
    {
        $this->favName = $favName;

        return $this;
    }

    /**
     * Get favName
     *
     * @return string
     */
    public function getFavName()
    {
        return $this->favName;
    }

    /**
     * Set favArtiste
     *
     * @param string $favArtiste
     *
     * @return Favoris
     */
    public function setFavArtiste($favArtiste)
    {
        $this->favArtiste = $favArtiste;

        return $this;
    }

    /**
     * Get favArtiste
     *
     * @return string
     */
    public function getFavArtiste()
    {
        return $this->favArtiste;
    }

    /**
     * Set favTags
     *
     * @param string $favTags
     *
     * @return Favoris
     */
    public function setFavTags($favTags)
    {
        $this->favTags = $favTags;

        return $this;
    }

    /**
     * Get favTags
     *
     * @return string
     */
    public function getFavTags()
    {
        return $this->favTags;
    }

    /**
     * Set favAdresse
     *
     * @param string $favAdresse
     *
     * @return Favoris
     */
    public function setFavAdresse($favAdresse)
    {
        $this->favAdresse = $favAdresse;

        return $this;
    }

    /**
     * Get favAdresse
     *
     * @return string
     */
    public function getFavAdresse()
    {
        return $this->favAdresse;
    }

    /**
     * Set favType
     *
     * @param string $favType
     *
     * @return Favoris
     */
    public function setFavType($favType)
    {
        $this->favType = $favType;

        return $this;
    }

    /**
     * Get favType
     *
     * @return string
     */
    public function getFavType()
    {
        return $this->favType;
    }

    /**
     * Set favNsfw
     *
     * @param integer $favNsfw
     *
     * @return Favoris
     */
    public function setFavNsfw($favNsfw)
    {
        $this->favNsfw = $favNsfw;

        return $this;
    }

    /**
     * Get favNsfw
     *
     * @return integer
     */
    public function getFavNsfw()
    {
        return $this->favNsfw;
    }

    /**
     * Set favCollection
     *
     * @param integer $favCollection
     *
     * @return Favoris
     */
    public function setFavCollection($favCollection)
    {
        $this->favCollection = $favCollection;

        return $this;
    }

    /**
     * Get favCollection
     *
     * @return integer
     */
    public function getFavCollection()
    {
        return $this->favCollection;
    }
}

