<?php

Class homeController Extends baseController {

public function index() {
	/*** set a template variable ***/
        $this->registry->template->title = 'VyV Control';
        $this->registry->template->jsfile = 'VyV Control';
	$contr=$this->registry->router->getControllers();
      
        foreach($contr as $k)
         {
            $icons[]="img/icons/".$k."_bb.png";
         }

        $this->registry->template->controllers=$contr;
        $this->registry->template->icons=$icons;
        $this->registry->template->show('home');
}

}

?>
