<?php

class ApiController extends SnaapiController {

  public function execute() {
    // Default controller action is to call the action.
    $apiId = $this->context->getActionName();
    $actionParams = $this->context->getActionParams();

    $did_render = false;

    if (isset($this->apis[$apiId])) {
      $apicontext = new Keystone_Context('/api');
      $this->view = new Keystone_View($apicontext);

      $actionName = $apicontext->getActionName();
      if( $apicontext->isCallableAction($actionName) &&
          method_exists($this, $actionName) ) {
        $this->beforeAction();
        call_user_func_array(array(&$this, $actionName), $actionParams);
        $this->afterAction();
        $this->beforeRender();

        $this->view->api = $this->apis[$apiId];
        $this->view->apiId = $apiId;

        $this->view->render();
        $this->afterRender();
        $did_render = true;
      }
    }

    if (!$did_render) {
      throw new Keystone_Exception_404();
    }
  }

  public function index() {
    $this->view->prependTitle('Home');

    $this->view->addMeta(array(
      'name'    => 'description',
      'content' => 'API lookup.'
    ));

    $this->view->addCssFile('/css/common.css');
    $this->view->addCssFile('/css/api.css');
    $this->view->apis = $this->apis;
  }
}
