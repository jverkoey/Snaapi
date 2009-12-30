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

        $api = $this->apis[$apiId];
        if (isset($api['twitterkeywords'])) {
          if (!isset($api['feeds'])) {
            $api['feeds'] = array();
          }
          $api['feeds']['Twitter search for "'.$api['twitterkeywords'].'"'] =
            'http://search.twitter.com/search.atom?q='.$api['twitterkeywords'];
        }
        
        if (isset($api['stackoverflowkeywords'])) {
          if (!isset($api['feeds'])) {
            $api['feeds'] = array();
          }
          $api['feeds']['StackOverflow Questions'] =
            'feed://stackoverflow.com/feeds/tag?sort=newest&tagnames='
            .str_replace(' ', '+', $api['stackoverflowkeywords']);
        }

        $this->view->api = $api;
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
    $this->view->addJsFootFile('http://www.google.com/jsapi?key='.GFEEDS_API);
    $this->view->apis = $this->apis;
  }
}
