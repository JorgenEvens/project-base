<?php
	class Loader extends WebLab_Loader_Application
	{
		
		protected function environment() {
			session_start();
			
			WebLab_Template::setRootTemplate( new WebLab_Template( 'main/index' ) );
		}
		
		protected function controlDispatcher() {
			$dispatcher = new WebLab_Dispatcher_Visit();
			$dispatcher->execute();
		}
		
		protected function shutdown() {
			echo WebLab_Template::getRootTemplate();
		}
		
	}