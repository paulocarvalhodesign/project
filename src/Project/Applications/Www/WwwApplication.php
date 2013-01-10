<?php
/**
 * @author  brooke.bryan
 */
namespace Project\Applications\Www;

use Cubex\Application\Application;

class WwwApplication extends Application
{
  public function defaultDispatcher()
  {
    return 'DefaultController';
  }

  public function getNamespace()
  {
    return __NAMESPACE__;
  }
}