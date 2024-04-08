<?php
	class Student
	{

		private $first_name, $last_name, $id, $courses;

		public function __construct($first_name, $last_name, $id, $courses) {
			$this->setFirstName($first_name);
			$this->setLastName($last_name);
			$this->setId($id);
			$this->setCourses($courses);
		}

		public function getFirstName()
		{
			return $this->first_name;
		}

		public function setFirstName($first_name)
		{
			$this->first_name = $first_name;
		}

		public function getLastName()
		{
			return $this->last_name;
		}

		public function setLastName($last_name)
		{
			$this->last_name = $last_name;
		}
	
		public function getId()
		{
			return $this->id;
		}

		public function setId($id) 
		{
			$this->id = $id; 
		}

		public function getName()
		{
			return $this->last_name. ", ".$this->first_name;
		}

		public function setCourses($courses) {
			$this->courses = $courses;
		}

		public function getCourses()
	 	{
			return $this->courses;
		}
	}
?>
