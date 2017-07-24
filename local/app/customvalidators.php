<?php 

Validator::extend('money', function($attribute, $value)
{
	return preg_match('/^[0-9]+(?:\.[0-9]+)?$/', $value);
});