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
		$method = ($this->showed) ? 'show' : 'hide';
		$this->$method();
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