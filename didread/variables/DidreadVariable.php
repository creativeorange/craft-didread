<?php

namespace Craft;

class DidreadVariable
{

	/**
	 * @var UserModel
	 */
	protected $user;

	/**
	 * @var EntryModel
	 */
	protected $entry;

	/**
	 * Set user
	 *
	 * @param UserModel $user
	 * @return $this
	 */
	public function user( UserModel $user )
	{
		$this->user = $user;

		return $this;
	}

	/**
	 * Check wether the user has read the entry or not
	 *
	 * @param EntryModel $entry
	 * @return bool
	 */
	public function hasReadEntry ( EntryModel $entry )
	{
		return count(craft()->didread->getDidreadByUserAndEntry($this->getUser()->id, $entry->id)) ? true : false;
	}

	/**
	 * Mark entry as read
	 */
	public function markAsRead ( EntryModel $entry )
	{
		if ($this->hasReadEntry($entry))
			return true;

		$model = craft()->didread->newModel();
		$attributes = ['userId' => $this->getUser()->id, 'entryId' => $entry->id];
		$model->setAttributes($attributes);

		return craft()->didread->saveModel($model);
	}

	/**
	 * Mark entry as unread
	 *
	 * @param EntryModel $entry
	 */
	public function markAsUnread( EntryModel $entry )
	{
		return craft()->didread->deleteByUserAndEntry ( $this->getUser(), $entry );
	}

	/**
	 * Retrieve the user
	 * @return UserModel|null
	 */
	private function getUser ()
	{
		return $this->user ? $this->user : craft()->userSession->getUser();
	}
}