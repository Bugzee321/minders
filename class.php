<?php
/**
 * 
 */
class student
{
	function __construct()
	{
		echo "Hello";
	}
	public $name;
	private $email;
	public $id;
	//public $course = new Course();
	
}
$std = new student();
class Course
{
	public $id;
	public $name;
	public $teacher_id;
	
}

