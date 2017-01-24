--TEST--
Test overloading get-method
--SKIPIF--
<?php if (!extension_loaded("memcached")) print "skip"; ?>
--FILE--
<?php
class test_overload_get extends Memcached
{
  public function get($key, $cache_cb = null, $get_flags = 0)
  {
    return parent::get($key, $cache_cb, $get_flags);
  }
}
echo "GOT HERE";
--EXPECTF--
GOT HERE
