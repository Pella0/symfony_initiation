<?php

namespace ContainerATvuMkx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder52b30 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereda8b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0df67 = [
        
    ];

    public function getConnection()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getConnection', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getMetadataFactory', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getExpressionBuilder', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'beginTransaction', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getCache', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getCache();
    }

    public function transactional($func)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'transactional', array('func' => $func), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'wrapInTransaction', array('func' => $func), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'commit', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->commit();
    }

    public function rollback()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'rollback', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getClassMetadata', array('className' => $className), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'createQuery', array('dql' => $dql), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'createNamedQuery', array('name' => $name), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'createQueryBuilder', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'flush', array('entity' => $entity), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'clear', array('entityName' => $entityName), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->clear($entityName);
    }

    public function close()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'close', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->close();
    }

    public function persist($entity)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'persist', array('entity' => $entity), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'remove', array('entity' => $entity), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'refresh', array('entity' => $entity), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'detach', array('entity' => $entity), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'merge', array('entity' => $entity), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getRepository', array('entityName' => $entityName), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'contains', array('entity' => $entity), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getEventManager', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getConfiguration', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'isOpen', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getUnitOfWork', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getProxyFactory', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'initializeObject', array('obj' => $obj), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'getFilters', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'isFiltersStateClean', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'hasFilters', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return $this->valueHolder52b30->hasFilters();
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

        $instance->initializereda8b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder52b30) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder52b30 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder52b30->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, '__get', ['name' => $name], $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        if (isset(self::$publicProperties0df67[$name])) {
            return $this->valueHolder52b30->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52b30;

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

        $targetObject = $this->valueHolder52b30;
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
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52b30;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder52b30;
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
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, '__isset', array('name' => $name), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52b30;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder52b30;
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
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, '__unset', array('name' => $name), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52b30;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder52b30;
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
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, '__clone', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        $this->valueHolder52b30 = clone $this->valueHolder52b30;
    }

    public function __sleep()
    {
        $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, '__sleep', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;

        return array('valueHolder52b30');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereda8b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereda8b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereda8b && ($this->initializereda8b->__invoke($valueHolder52b30, $this, 'initializeProxy', array(), $this->initializereda8b) || 1) && $this->valueHolder52b30 = $valueHolder52b30;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder52b30;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder52b30;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
