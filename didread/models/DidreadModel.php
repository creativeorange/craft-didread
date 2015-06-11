<?php

namespace Craft;

class DidreadModel extends BaseModel
{
	public function __toString()
	{
		return '';
	}

	/**
	 * Define the attributes this model will have.
	 *
	 * @return array
	 */
	public function defineAttributes()
	{
//		return [];
		return array(
			'userId'     => AttributeType::Number,
			'entryId'    => AttributeType::Number,
		);
	}
}