PHP Functions
===================

PHP Functions allow you to combine several statements of code into a 'function'. These functions can then be called by their given name, and all of the code contained will run and return the results. This will drastically help you clean up code and use less repetitive code.

What's covered
---------------

- Function Basic
- String Functions
- Array Functions
- Closures
- Named Functions

Introducing Functions
---------------------

In PHP functions are everywhere. Put simply a function is a way for us to organize and group statements of code. Let's learn how these functions work.

```
<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Example function.\n";
    return $retval;
}
?>

```

PHP Function Default Arguments
------------------------------

Sometimes if an argument is not passed through, and you want it to have a starting value, no matter what, this is where a default argument will come to your assistance.

```
<?php
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
?>
```
