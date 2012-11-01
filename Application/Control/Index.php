<?php
	class Control_Index extends WebLab_Dispatcher_Module {
		
		public function _default(){
			$this->layout->content = new WebLab_Template( 'static/home' );
		}

		public function routing() {
			$this->layout->content = new WebLab_Template( 'static/routing_success' );
		}
		
	}