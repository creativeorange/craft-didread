<?php

namespace Craft;

class DidreadService extends BaseApplicationComponent
{
	protected $record;

	public function __construct(DidreadRecord $record = null)
	{
		$this->record = $record;

		if (is_null($this->record))
		{
			$this->record = DidreadRecord::model();
		}
	}

	public function getDidreadByUserAndEntry ( $userId, $entryId)
	{
		if ($record = $this->record->findAllByAttributes(['userId' => $userId, 'entryId' => $entryId])) {
			return DidreadModel::populateModels($record);
		}
	}

	public function getReadEntriesForUser ( UserModel $user )
	{

	}

	public function deleteByUserAndEntry ( UserModel $user, EntryModel $entry )
	{
		if ( ! $user || ! $entry)
			return false;

		$this->record->deleteAllByAttributes(['userId' => $user->id, 'entryId' => $entry->id]);

		return true;
	}

	public function newModel($attributes = array())
	{
		$model = new DidreadModel();
		$model->setAttributes($attributes);
		return $model;
	}

//	public function getAllRecords()
//	{
//		$records = $this->record->with('user', 'entry')->findAll(array('order'=>'t.id'));
//
//		return DidreadModel::populateModels($records);
//	}

	public function saveModel(DidreadModel &$model)
	{
		$record = $this->record->create();

		$record->setAttributes($model->getAttributes());

		if ($record->save())
		{
			// update id on model (for new records)
			$model->setAttribute('id', $record->getAttribute('id'));

			return true;
		} else
		{
			$model->addErrors($record->getErrors());

			return false;
		}
	}

}