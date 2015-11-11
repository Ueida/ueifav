<?php

namespace DropyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Search
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DropyBundle\Entity\SearchRepository")
 */
class Search
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="search_input", type="string", length=255)
     */
    private $searchInput;

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
     * Set searchInput
     *
     * @param string $searchInput
     *
     * @return Search
     */
    public function setSearchInput($searchInput)
    {
        $this->searchInput = $searchInput;

        return $this;
    }

    /**
     * Get searchInput
     *
     * @return string
     */
    public function getSearchInput()
    {
        return $this->searchInput;
    }
}
