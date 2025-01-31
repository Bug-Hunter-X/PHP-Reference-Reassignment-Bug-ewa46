In PHP, a common yet subtle error arises when dealing with references and objects.  Consider this example:

```php
class MyClass {
    public $value = 0;
}

function modifyObject(MyClass &$obj) {
    $obj = new MyClass(); //This reassigns the reference
    $obj->value = 10;
}

$myObj = new MyClass();
modifyObject($myObj);
echo $myObj->value; // Outputs 0, unexpectedly!
```

The issue is within the `modifyObject` function.  Instead of modifying the object passed by reference, the `$obj` variable is reassigned to a *new* object. The original object remains unaffected. 