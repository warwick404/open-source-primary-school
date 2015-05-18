<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class StudentFeeType extends \Entities\StudentFeeType implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setNarrative($narrative)
    {
        $this->__load();
        return parent::setNarrative($narrative);
    }

    public function getNarrative()
    {
        $this->__load();
        return parent::getNarrative();
    }

    public function setOrdering($ordering)
    {
        $this->__load();
        return parent::setOrdering($ordering);
    }

    public function getOrdering()
    {
        $this->__load();
        return parent::getOrdering();
    }

    public function setDateCreated($dateCreated)
    {
        $this->__load();
        return parent::setDateCreated($dateCreated);
    }

    public function getDateCreated()
    {
        $this->__load();
        return parent::getDateCreated();
    }

    public function setDateLastModified($dateLastModified)
    {
        $this->__load();
        return parent::setDateLastModified($dateLastModified);
    }

    public function getDateLastModified()
    {
        $this->__load();
        return parent::getDateLastModified();
    }

    public function setIsValid($isValid)
    {
        $this->__load();
        return parent::setIsValid($isValid);
    }

    public function getIsValid()
    {
        $this->__load();
        return parent::getIsValid();
    }

    public function setFeesProfile(\Entities\FeesProfile $feesProfile = NULL)
    {
        $this->__load();
        return parent::setFeesProfile($feesProfile);
    }

    public function getFeesProfile()
    {
        $this->__load();
        return parent::getFeesProfile();
    }

    public function setFeeFrequencyType(\Entities\FeeFrequencyType $feeFrequencyType = NULL)
    {
        $this->__load();
        return parent::setFeeFrequencyType($feeFrequencyType);
    }

    public function getFeeFrequencyType()
    {
        $this->__load();
        return parent::getFeeFrequencyType();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'narrative', 'ordering', 'date_created', 'date_last_modified', 'is_valid', 'fees_profile', 'fee_frequency_type');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}