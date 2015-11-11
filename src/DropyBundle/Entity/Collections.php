<?php

namespace DropyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collections
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DropyBundle\Entity\CollectionsRepository")
 */
class Collections
{
    /**
     * @var integer
     *
     * @ORM\Column(name="collec_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $collecId;

    /**
     * @var string
     *
     * @ORM\Column(name="collec_name", type="string", length=80)
     */
    private $collecName;

    /**
     * @var string
     *
     * @ORM\Column(name="collec_desc", type="string", length=512)
     */
    private $collecDesc;


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
     * Set collecId
     *
     * @param integer $collecId
     *
     * @return Collections
     */
    public function setCollecId($collecId)
    {
        $this->collecId = $collecId;

        return $this;
    }

    /**
     * Get collecId
     *
     * @return integer
     */
    public function getCollecId()
    {
        return $this->collecId;
    }

    /**
     * Set collecName
     *
     * @param string $collecName
     *
     * @return Collections
     */
    public function setCollecName($collecName)
    {
        $this->collecName = $collecName;

        return $this;
    }

    /**
     * Get collecName
     *
     * @return string
     */
    public function getCollecName()
    {
        return $this->collecName;
    }

    /**
     * Set collecDesc
     *
     * @param string $collecDesc
     *
     * @return Collections
     */
    public function setCollecDesc($collecDesc)
    {
        $this->collecDesc = $collecDesc;

        return $this;
    }

    /**
     * Get collecDesc
     *
     * @return string
     */
    public function getCollecDesc()
    {
        return $this->collecDesc;
    }
}

