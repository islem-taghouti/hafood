<?php

namespace ContainerTaxlgZD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0323e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer957f7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8e67e = [
        
    ];

    public function getConnection()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getConnection', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getMetadataFactory', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getExpressionBuilder', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'beginTransaction', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getCache', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'transactional', array('func' => $func), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'commit', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->commit();
    }

    public function rollback()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'rollback', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getClassMetadata', array('className' => $className), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'createQuery', array('dql' => $dql), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'createNamedQuery', array('name' => $name), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'createQueryBuilder', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'flush', array('entity' => $entity), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'clear', array('entityName' => $entityName), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->clear($entityName);
    }

    public function close()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'close', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->close();
    }

    public function persist($entity)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'persist', array('entity' => $entity), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'remove', array('entity' => $entity), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'detach', array('entity' => $entity), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'merge', array('entity' => $entity), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'contains', array('entity' => $entity), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getEventManager', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getConfiguration', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'isOpen', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getUnitOfWork', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getProxyFactory', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'initializeObject', array('obj' => $obj), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'getFilters', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'isFiltersStateClean', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'hasFilters', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return $this->valueHolder0323e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer957f7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder0323e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0323e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0323e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, '__get', ['name' => $name], $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        if (isset(self::$publicProperties8e67e[$name])) {
            return $this->valueHolder0323e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0323e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0323e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0323e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0323e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, '__isset', array('name' => $name), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0323e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0323e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, '__unset', array('name' => $name), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0323e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0323e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, '__clone', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        $this->valueHolder0323e = clone $this->valueHolder0323e;
    }

    public function __sleep()
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, '__sleep', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        return array('valueHolder0323e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer957f7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer957f7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'initializeProxy', array(), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0323e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0323e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
