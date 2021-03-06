<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Occupation
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Occupation
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Industry")
     * @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     */
    private $industry;

    /**
     * useful for ArrayCollection
     * @return string
     */
    public function __toString(){

        return $this->getName();
    }
    /**
     * Define the FK as array collection to use them for
     * list in the form.
     */
    public function __construct()
    {

        $this->industry = new ArrayCollection();
    }
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
     * Set name
     *
     * @param string $name
     * @return Occupation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set industry
     *
     * @param \CoreBundle\Entity\Industry $industry
     * @return Occupation
     */
    public function setIndustry(\CoreBundle\Entity\Industry $industry = null)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return \CoreBundle\Entity\Industry 
     */
    public function getIndustry()
    {
        return $this->industry;
    }
}
