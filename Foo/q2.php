/* Create an empty class named Foo . Do no define any method or properties. Now create an instance of Foo an call method ->bar() see what error you get.
Now make this error go away by using __call ? What else can you do with __call. */

<?php

class foo
{
    public function __call($name, $arguments){
        echo "method $name doesn't exists";
    }
}
$rakibInstance = new foo();
$rakibInstance ->bar();
?>
