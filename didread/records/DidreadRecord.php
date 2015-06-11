<?php
namespace Craft;

class DidreadRecord extends BaseRecord
{
	public function getTableName()
	{
		return 'didread';
	}
	/**
	 * Define columns for our database table
	 *
	 * @return array
	 */
	public function defineAttributes()
	{
		return [
			'userId' => AttributeType::Number,
			'entryId' => AttributeType::Number,
		];
	}

	public function defineRelations()
	{
		return array(
			'user'   => array(static::BELONGS_TO, 'UserRecord', 'userId', 'required' => true, 'onDelete' => static::CASCADE),
			'entry'  => array(static::BELONGS_TO, 'EntryRecord', 'entryId', 'required' => true, 'onDelete' => static::CASCADE),
		);
	}

	public function create()
	{
		$class = get_class($this);
		$record = new $class();
		return $record;
	}
}