<?php
namespace gt\base;

use gt\BaseGt;

class Object extends BaseGt
{
	public function __construct($args)
	{
		echo "args:".$args;
	}
}