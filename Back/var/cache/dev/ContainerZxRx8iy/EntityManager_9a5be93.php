<?php

namespace ContainerZxRx8iy;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder13391 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf6a39 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties913e9 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getConnection', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getMetadataFactory', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getExpressionBuilder', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'beginTransaction', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getCache', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'transactional', array('func' => $func), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->transactional($func);
    }

    public function commit()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'commit', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->commit();
    }

    public function rollback()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'rollback', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getClassMetadata', array('className' => $className), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'createQuery', array('dql' => $dql), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'createNamedQuery', array('name' => $name), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'createQueryBuilder', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'flush', array('entity' => $entity), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'clear', array('entityName' => $entityName), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->clear($entityName);
    }

    public function close()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'close', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->close();
    }

    public function persist($entity)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'persist', array('entity' => $entity), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'remove', array('entity' => $entity), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'refresh', array('entity' => $entity), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'detach', array('entity' => $entity), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'merge', array('entity' => $entity), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'contains', array('entity' => $entity), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getEventManager', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getConfiguration', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'isOpen', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getUnitOfWork', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getProxyFactory', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'initializeObject', array('obj' => $obj), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'getFilters', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'isFiltersStateClean', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'hasFilters', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return $this->valueHolder13391->hasFilters();
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

        $instance->initializerf6a39 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder13391) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder13391 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder13391->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, '__get', ['name' => $name], $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        if (isset(self::$publicProperties913e9[$name])) {
            return $this->valueHolder13391->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13391;

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

        $targetObject = $this->valueHolder13391;
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
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13391;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder13391;
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
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, '__isset', array('name' => $name), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13391;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder13391;
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
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, '__unset', array('name' => $name), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder13391;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder13391;
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
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, '__clone', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        $this->valueHolder13391 = clone $this->valueHolder13391;
    }

    public function __sleep()
    {
        $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, '__sleep', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;

        return array('valueHolder13391');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf6a39 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf6a39;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf6a39 && ($this->initializerf6a39->__invoke($valueHolder13391, $this, 'initializeProxy', array(), $this->initializerf6a39) || 1) && $this->valueHolder13391 = $valueHolder13391;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder13391;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder13391;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
