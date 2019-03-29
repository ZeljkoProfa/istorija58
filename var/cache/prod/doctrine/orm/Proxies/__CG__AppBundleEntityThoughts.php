<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Thoughts extends \AppBundle\Entity\Thoughts implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'text', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'author', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'adminId', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'created', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'test_date', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'current_thought'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'text', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'author', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'adminId', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'created', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'test_date', '' . "\0" . 'AppBundle\\Entity\\Thoughts' . "\0" . 'current_thought'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Thoughts $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function setCurrentThought($current_thought)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentThought', [$current_thought]);

        return parent::setCurrentThought($current_thought);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentThought()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentThought', []);

        return parent::getCurrentThought();
    }

    /**
     * {@inheritDoc}
     */
    public function setText($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setText', [$text]);

        return parent::setText($text);
    }

    /**
     * {@inheritDoc}
     */
    public function getText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getText', []);

        return parent::getText();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTest_date($test_date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTest_date', [$test_date]);

        return parent::setTest_date($test_date);
    }

    /**
     * {@inheritDoc}
     */
    public function getTest_date()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTest_date', []);

        return parent::getTest_date();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdminId($adminId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdminId', [$adminId]);

        return parent::setAdminId($adminId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdminId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdminId', []);

        return parent::getAdminId();
    }

}
