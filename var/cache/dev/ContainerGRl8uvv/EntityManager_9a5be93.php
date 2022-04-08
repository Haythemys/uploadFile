<?php

namespace ContainerGRl8uvv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder02542 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1f4cf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb5c2d = [
        
    ];

    public function getConnection()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getConnection', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getMetadataFactory', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getExpressionBuilder', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'beginTransaction', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getCache', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'transactional', array('func' => $func), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'commit', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->commit();
    }

    public function rollback()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'rollback', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getClassMetadata', array('className' => $className), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'createQuery', array('dql' => $dql), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'createNamedQuery', array('name' => $name), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'createQueryBuilder', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'flush', array('entity' => $entity), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'clear', array('entityName' => $entityName), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->clear($entityName);
    }

    public function close()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'close', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->close();
    }

    public function persist($entity)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'persist', array('entity' => $entity), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'remove', array('entity' => $entity), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'refresh', array('entity' => $entity), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'detach', array('entity' => $entity), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'merge', array('entity' => $entity), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'contains', array('entity' => $entity), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getEventManager', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getConfiguration', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'isOpen', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getUnitOfWork', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getProxyFactory', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'initializeObject', array('obj' => $obj), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'getFilters', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'isFiltersStateClean', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'hasFilters', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return $this->valueHolder02542->hasFilters();
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

        $instance->initializer1f4cf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder02542) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder02542 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder02542->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, '__get', ['name' => $name], $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        if (isset(self::$publicPropertiesb5c2d[$name])) {
            return $this->valueHolder02542->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02542;

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

        $targetObject = $this->valueHolder02542;
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
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02542;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder02542;
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
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, '__isset', array('name' => $name), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02542;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder02542;
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
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, '__unset', array('name' => $name), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder02542;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder02542;
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
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, '__clone', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        $this->valueHolder02542 = clone $this->valueHolder02542;
    }

    public function __sleep()
    {
        $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, '__sleep', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;

        return array('valueHolder02542');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1f4cf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1f4cf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1f4cf && ($this->initializer1f4cf->__invoke($valueHolder02542, $this, 'initializeProxy', array(), $this->initializer1f4cf) || 1) && $this->valueHolder02542 = $valueHolder02542;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder02542;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder02542;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
