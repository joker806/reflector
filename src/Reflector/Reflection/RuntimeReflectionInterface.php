<?php
namespace Reflector\Reflection;

use Reflector\ReflectionInterface;

/**
 * Runtime reflection interface
 * 
 * Runtime reflection represents reflection of object, that has
 * been evaluated by PHP parser (so is known in PHP environment)
 * 
 * Every runtime reflection should implement this
 * 
 * @author Josef Martinec
 */
interface RuntimeReflectionInterface extends ReflectionInterface
{
	
}