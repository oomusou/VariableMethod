<?php

class User
{
	private $showed;

	public function __constructor(bool $showed)
	{
		$this->showed = showed;
	}

	public function toggleShow()
	{
	    if ($this->showed) {
	        $$this->show();
	    } else {
	        $this->hide();
	    }
	}

	public function show() 
	{
	    echo('User show');
	}

	public function hide()
	{
	    echo('User hide');
	}
}

$user = new User(false);
$user->toggleShow();