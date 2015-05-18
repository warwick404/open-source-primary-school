<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ClassInstance extends \Entities\ClassInstance implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
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

    public function setClassType(\Entities\ClassType $classType = NULL)
    {
        $this->__load();
        return parent::setClassType($classType);
    }

    public function getClassType()
    {
        $this->__load();
        return parent::getClassType();
    }

    public function setTerm(\Entities\Term $term = NULL)
    {
        $this->__load();
        return parent::setTerm($term);
    }

    public function getTerm()
    {
        $this->__load();
        return parent::getTerm();
    }

    public function setClassInstanceStatus(\Entities\ClassInstanceStatus $classInstanceStatus = NULL)
    {
        $this->__load();
        return parent::setClassInstanceStatus($classInstanceStatus);
    }

    public function getClassInstanceStatus()
    {
        $this->__load();
        return parent::getClassInstanceStatus();
    }

    public function setClassTeacher(\Entities\SchoolStaff $classTeacher = NULL)
    {
        $this->__load();
        return parent::setClassTeacher($classTeacher);
    }

    public function getClassTeacher()
    {
        $this->__load();
        return parent::getClassTeacher();
    }

    public function setPreviousClassInstance(\Entities\ClassInstance $previousClassInstance = NULL)
    {
        $this->__load();
        return parent::setPreviousClassInstance($previousClassInstance);
    }

    public function getPreviousClassInstance()
    {
        $this->__load();
        return parent::getPreviousClassInstance();
    }

    public function setNextClassInstance(\Entities\ClassInstance $nextClassInstance = NULL)
    {
        $this->__load();
        return parent::setNextClassInstance($nextClassInstance);
    }

    public function getNextClassInstance()
    {
        $this->__load();
        return parent::getNextClassInstance();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'description', 'date_created', 'date_last_modified', 'is_valid', 'class_type', 'term', 'class_instance_status', 'previous_class_instance', 'next_class_instance', 'class_teacher');
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