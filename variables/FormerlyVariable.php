<?php


namespace Craft;


class FormerlyVariable
{
	public function form($handle)
	{
		return craft()->formerly_forms->getFormByHandle($handle);
	}
	
	public function submissions()
	{
		return craft()->elements->getCriteria('Formerly_Submission');
	}

	public function __get($prop)
	{
		if ($prop == 'submissions')
		{
			$criteria = craft()->elements->getCriteria('Formerly_Form');
			return $criteria;
		}
	}
}
