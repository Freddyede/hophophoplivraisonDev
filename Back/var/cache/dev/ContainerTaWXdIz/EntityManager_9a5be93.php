<?php

namespace ContainerTaWXdIz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7a43f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3155f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4db43 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getConnection', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getMetadataFactory', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getExpressionBuilder', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'beginTransaction', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getCache', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'transactional', array('func' => $func), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->transactional($func);
    }

    public function commit()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'commit', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->commit();
    }

    public function rollback()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'rollback', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getClassMetadata', array('className' => $className), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'createQuery', array('dql' => $dql), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'createNamedQuery', array('name' => $name), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'createQueryBuilder', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'flush', array('entity' => $entity), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'clear', array('entityName' => $entityName), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->clear($entityName);
    }

    public function close()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'close', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->close();
    }

    public function persist($entity)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'persist', array('entity' => $entity), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'remove', array('entity' => $entity), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'refresh', array('entity' => $entity), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'detach', array('entity' => $entity), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'merge', array('entity' => $entity), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'contains', array('entity' => $entity), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getEventManager', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getConfiguration', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'isOpen', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getUnitOfWork', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getProxyFactory', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'initializeObject', array('obj' => $obj), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'getFilters', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'isFiltersStateClean', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'hasFilters', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return $this->valueHolder7a43f->hasFilters();
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

        $instance->initializer3155f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7a43f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7a43f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7a43f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, '__get', ['name' => $name], $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        if (isset(self::$publicProperties4db43[$name])) {
            return $this->valueHolder7a43f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a43f;

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

        $targetObject = $this->valueHolder7a43f;
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
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a43f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7a43f;
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
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, '__isset', array('name' => $name), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a43f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7a43f;
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
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, '__unset', array('name' => $name), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a43f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7a43f;
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
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, '__clone', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        $this->valueHolder7a43f = clone $this->valueHolder7a43f;
    }

    public function __sleep()
    {
        $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, '__sleep', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;

        return array('valueHolder7a43f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3155f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3155f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3155f && ($this->initializer3155f->__invoke($valueHolder7a43f, $this, 'initializeProxy', array(), $this->initializer3155f) || 1) && $this->valueHolder7a43f = $valueHolder7a43f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7a43f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7a43f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
