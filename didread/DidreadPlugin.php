<?php

namespace Craft;

class DidreadPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Did read');
	}

	function getVersion()
	{
		return '0.8';
	}

	function getDeveloper()
	{
		return 'Creativeorange V.O.F.';
	}

	function getDeveloperUrl()
	{
		return 'https://www.creativeorange.nl';
	}
}