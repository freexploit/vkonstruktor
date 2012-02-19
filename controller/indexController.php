<?php

Class indexController Extends baseController {

public function index() {
	/*** set a template variable ***/
        $this->registry->template->title = 'VyV Control';
        $this->registry->template->jsfile = 'VyV Control';
	/*** load the index template ***/
        $this->registry->template->show('index');
}

}

?>
