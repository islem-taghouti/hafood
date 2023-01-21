<?php

namespace ContainerTaxlgZD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        if ($this->valueHolder0323e === $returnValue = $this->valueHolder0323e->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer957f7 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder0323e) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder0323e = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer957f7 && ($this->initializer957f7->__invoke($valueHolder0323e, $this, '__get', ['name' => $name], $this->initializer957f7) || 1) && $this->valueHolder0323e = $valueHolder0323e;

        if (isset(self::$publicProperties8e67e[$name])) {
            return $this->valueHolder0323e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
