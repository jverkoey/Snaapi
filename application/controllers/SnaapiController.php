<?php

class SnaapiController extends Keystone_Controller {

  protected $apis = array(
    'facebook' => array(
      'name' => 'Facebook',
      'description' => 'The Facebook API.',
      'roundedicon' => false
    ),
    'three20' => array(
      'name' => 'Three20',
      'description' => 'Three20 is an Objective-C library for the iPhone.',
      'roundedicon' => true,
      'newsfeeds' => array(
        'feed://pipes.yahoo.com/pipes/pipe.run?_id=e14dbf6904dfaa72091fa7b1ff09f98a&_render=rss'
      )
    ),
    'twitter' => array(
      'name' => 'Twitter',
      'description' => 'The Twitter HTTP-based API.',
      'roundedicon' => false
    )
  );

  public function beforeAction() {
    $this->view->addMeta(array(
      'http-equiv'  => 'Content-Type',
      'content'     => 'text/html; charset=utf-8'
    ));
    $this->view->addMeta(array(
      'name'        => 'keywords',
      'content'     => 'api open source'
    ));

    $this->view->appendTitle('snaapi');
    $this->view->addCssFile('/css/global.css');

    date_default_timezone_set('America/Los_Angeles');
  }

}
