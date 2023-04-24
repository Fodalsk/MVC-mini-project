<?php

	namespace Controller;
	class ContactController extends Controller
	{

		private $view;

		public function __construct(){
			$this->view = new \Views\MainView('contact');
		}

		public function execute(){
			$this->view->render(array('title'=>'Contact Page'));
		}
	}

?>