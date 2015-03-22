<?php

namespace Proxies\__CG__\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \CoreBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'userEmail', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'userPassword', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'company', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'industry', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'subindustry', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'occupation', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'userTitle');
        }

        return array('__isInitialized__', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'userEmail', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'userPassword', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'company', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'phone', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'industry', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'subindustry', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'occupation', '' . "\0" . 'CoreBundle\\Entity\\User' . "\0" . 'userTitle');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', array($firstName));

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', array());

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', array($lastName));

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', array());

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserEmail($userEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserEmail', array($userEmail));

        return parent::setUserEmail($userEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserEmail', array());

        return parent::getUserEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserPassword($userPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserPassword', array($userPassword));

        return parent::setUserPassword($userPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserPassword', array());

        return parent::getUserPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setCompany($company)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCompany', array($company));

        return parent::setCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompany()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompany', array());

        return parent::getCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone($phone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', array($phone));

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', array());

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserTitle($userTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserTitle', array($userTitle));

        return parent::setUserTitle($userTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserTitle', array());

        return parent::getUserTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setIndustry(\CoreBundle\Entity\Industry $industry = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIndustry', array($industry));

        return parent::setIndustry($industry);
    }

    /**
     * {@inheritDoc}
     */
    public function getIndustry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIndustry', array());

        return parent::getIndustry();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubindustry(\CoreBundle\Entity\Subindustry $subindustry = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubindustry', array($subindustry));

        return parent::setSubindustry($subindustry);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubindustry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubindustry', array());

        return parent::getSubindustry();
    }

    /**
     * {@inheritDoc}
     */
    public function setOccupation(\CoreBundle\Entity\Occupation $occupation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOccupation', array($occupation));

        return parent::setOccupation($occupation);
    }

    /**
     * {@inheritDoc}
     */
    public function getOccupation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOccupation', array());

        return parent::getOccupation();
    }

}