--TEST--
Extending LuaSandbox (bug 57292)
--FILE--
<?php
// bug 57292
class ExtendedLuaSandbox extends LuaSandbox {
	public $var;
}
$sandbox = new ExtendedLuaSandbox;
$sandbox->var2 = 42;
echo "ok\n";

--EXPECT--
ok
