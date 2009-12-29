<?php

class IndexController extends SnaapiController {

  public function index() {
    $this->view->prependTitle('Home');

    $this->view->addMeta(array(
      'name'    => 'description',
      'content' => 'API lookup.'
    ));

    $this->view->addCssFile('/css/common.css');
    $this->view->apis = $this->apis;
  }

}
