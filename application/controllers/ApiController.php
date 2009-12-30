<?php

define('TWITTER_CACHE', APPLICATION_PATH.'/data/cache/twitter');
define('ONE_HOUR', 60*60);

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
        $api = $this->apis[$apiId];

        // Add the twitter feed
        if (isset($api['twitterkeywords'])) {
          if (!isset($api['feeds'])) {
            $api['feeds'] = array();
          }
          $api['feeds']['Twitter search for "'.$api['twitterkeywords'].'"'] =
            'http://search.twitter.com/search.atom?q='.$api['twitterkeywords'];
        }

        // Add the stack overflow feeds
        if (isset($api['stackoverflowkeywords'])) {
          if (!isset($api['feeds'])) {
            $api['feeds'] = array();
          }
          $api['feeds']['StackOverflow Questions'] =
            'feed://stackoverflow.com/feeds/tag?sort=newest&tagnames='
            .str_replace(' ', '+', $api['stackoverflowkeywords']);
        }

        if (isset($api['maintainers'])) {
          if (!file_exists(TWITTER_CACHE)) {
            @mkdir(TWITTER_CACHE);
          }

          $users = array();
          $refresh_users = array();

          foreach ($api['maintainers'] as $username) {
            if (!isset($twitter_users[$username])) {
              $needs_refresh = true;
              $cache_filename = TWITTER_CACHE.'/'.$username;
              if (file_exists($cache_filename) &&
                  filemtime($cache_filename) > time() - ONE_HOUR) {
                $users[$username] =
                  json_decode(file_get_contents($cache_filename), TRUE);
                $needs_refresh = false;
              }

              if ($needs_refresh) {
                $refresh_users []= $username;
              }
            }
          }

          foreach ($refresh_users as $username) {
            $user_json_info = file_get_contents('http://twitter.com/users/show/'.$username.'.json');
            $user_info = json_decode($user_json_info, TRUE);
            
            $cache_filename = TWITTER_CACHE.'/'.$username;
            file_put_contents($cache_filename, $user_json_info);
            $users[$username] = $user_info;
          }
          $this->view->users = $users;
        }

        $this->view->api = $api;
        $this->view->apiId = $apiId;

        $this->beforeAction();
        call_user_func_array(array(&$this, $actionName), $actionParams);
        $this->afterAction();
        $this->beforeRender();
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
      'content' => $this->view->api['description']
    ));

    $this->view->addCssFile('/css/api.css');
    $this->view->addJsFootFile('http://www.google.com/jsapi?key='.GFEEDS_API);
    $this->view->apis = $this->apis;
  }
}
