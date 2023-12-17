/* implement 1 example of each Magic method in php */
<?php

class Foo
{
    public $data = [];

    public function __construct()
    {
        echo "Object created\n";
    }

    public function __destruct()
    {
        echo "Object destroyed\n";
    }

    public function __call($name, $arguments)
    {
        echo "Method $name doesn't exist\n";
    }

    public function __get($name)
    {
        echo "Trying to access undefined property: $name\n";
    }

    public function __set($name, $value)
    {
        echo "Setting property $name to $value\n";
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        echo "Checking if property $name is set\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Unsetting property: $name\n";
        unset($this->data[$name]);
    }

    public function __toString()
    {
        return "Object represented as a string\n";
    }

    public function __invoke(...$args)
    {
        echo "Object invoked with arguments: " . implode(', ', $args) . "\n";
    }

    public function __sleep()
    {
        echo "Preparing to serialize object\n";
        return ['data'];
    }

    public function __wakeup()
    {
        echo "Unserialized object\n";
    }

    public function __clone()
    {
        echo "Object cloned\n";
    }

    public static function __set_state($properties)
    {
        $obj = new self();
        $obj->data = $properties['data'] ?? [];
        return $obj;
    }
}

$rakibInstance = new Foo();

$rakibInstance->bar();
echo $rakibInstance->undefinedProperty;

$rakibInstance->someProperty = "Some Value";
echo "Value of someProperty: " . $rakibInstance->someProperty . "\n";

isset($rakibInstance->someProperty);

unset($rakibInstance->someProperty);

echo $rakibInstance;

$rakibInstance('arg1', 'arg2');

$serialized = serialize($rakibInstance);
$unserialized = unserialize($serialized);

$clonedInstance = clone $rakibInstance;
?>
