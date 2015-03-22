<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
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
     * @Assert\NotBlank()
     * @Assert\Length(min=3, minMessage="First Name should be at least 3 letters")
     * @var string
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    private $firstName;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=3, minMessage="Last Name should be at least 3 letters")
     * @var string
     * @ORM\Column(name="last_name", type="string", length=50)
     */
    private $lastName;

    /**
     * @Assert\Email(message="Please insert a valid email address")
     * @var string
     * @ORM\Column(name="user_email", type="string", length=255)
     */
    private $userEmail;

    /**
     * @Assert\Length(min="6", minMessage="Password should be more than 6 characters")
     * @var string
     * @ORM\Column(name="user_password", type="string", length=255)
     */
    private $userPassword;

    /**
     * @Assert\Length(min="3", minMessage="Company Name should be more than 3 characters")
     * @var string
     * @ORM\Column(name="company", type="string", length=255)
     */
    private $company;

    /**
     * @Assert\Length(min="10", minMessage="Please enter a valid phone number")
     * @var string
     * @ORM\Column(name="phone", type="string", length=15)
     */
    private $phone;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Industry")
     * @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     */
    private $industry;

    /**
     * @ORM\ManyToOne(targetEntity="Subindustry")
     * @ORM\JoinColumn(name="subindustry_id", referencedColumnName="id")
     */
    private $subindustry;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="Occupation")
     * @ORM\JoinColumn(name="occupation_id", referencedColumnName="id")
     */
    private $occupation;


    /**
     * @var string
     *
     * @ORM\Column(name="user_title", type="string", length=255)
     */
    private $userTitle;



    /**
     * Define the FK as array collection to use them for
     * list in the form.
     */
    public function __construct(){

        $this->industry = new ArrayCollection();
        $this->subindustry = new ArrayCollection();
        $this->occupation = new ArrayCollection();
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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return User
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set userTitle
     *
     * @param string $userTitle
     * @return User
     */
    public function setUserTitle($userTitle)
    {
        $this->userTitle = $userTitle;

        return $this;
    }

    /**
     * Get userTitle
     *
     * @return string 
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }

    /**
     * Set industry
     *
     * @param \CoreBundle\Entity\Industry $industry
     * @return User
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

    /**
     * Set subindustry
     *
     * @param \CoreBundle\Entity\Subindustry $subindustry
     * @return User
     */
    public function setSubindustry(\CoreBundle\Entity\Subindustry $subindustry = null)
    {
        $this->subindustry = $subindustry;

        return $this;
    }

    /**
     * Get subindustry
     *
     * @return \CoreBundle\Entity\Subindustry 
     */
    public function getSubindustry()
    {
        return $this->subindustry;
    }

    /**
     * Set occupation
     *
     * @param \CoreBundle\Entity\Occupation $occupation
     * @return User
     */
    public function setOccupation(\CoreBundle\Entity\Occupation $occupation = null)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return \CoreBundle\Entity\Occupation 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }
}
