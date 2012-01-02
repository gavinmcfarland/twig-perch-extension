<?php

class Extension_Twig_Perch extends Twig_Extension
{
	public function getFunctions()
	{
		return array(
			'perchRuntime' => new Twig_Function_Method($this, 'runtime'),
			'perchContent' => new Twig_Function_Method($this, 'content'),
		);
	}

	public function content($region)
	{
		return perch_content($region);
	}

	public function runtime()
	{
		return include('/srv/dev/amishtours.co.uk/public/perch/runtime.php');
	}

	public function getName()
	{
		return 'perch';
	}
}
