<?php

class IndexController extends SnaapiController {

  public function index() {
    $this->view->prependTitle('Home');

    $this->view->addMeta(array(
      'name'    => 'description',
      'content' => 'API lookup.'
    ));

    $this->view->addCssFile('/css/home.css');
    $this->view->addJsFootFile('/js/jquery-1-1.3.2.min.js');
    $this->view->addJsFootFile('/js/jquery.placeholder.js');
    $this->view->addJsFootFile('/js/filter.js');
    $this->view->apis = $this->apis;
  }

}
