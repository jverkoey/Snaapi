<?php

class SnaapiController extends Keystone_Controller {

  protected $apis = array(
    'facebook' => array(
      'name' => 'Facebook',
      'description' => 'The Facebook API.',
      'roundedicon' => false,
      'twitterkeywords' => 'facebook api'
    ),
    'three20' => array(
      'name' => 'Three20',
      'description' => 'Three20 is an Objective-C library for the iPhone.',
      'roundedicon' => true,
      'feeds' => array(
        'All' => 'feed://pipes.yahoo.com/pipes/pipe.run?_id=e14dbf6904dfaa72091fa7b1ff09f98a&_render=rss',
        'Three20.info News' => 'http://three20.info/news/feed/atom/',
        'Three20 Google Group' => 'feed://groups.google.com/group/three20/feed/rss_v2_0_msgs.xml'
      ),
      'twitterkeywords' => 'three20'
    ),
    'twitter' => array(
      'name' => 'Twitter',
      'description' => 'The Twitter HTTP-based API.',
      'roundedicon' => false,
      'twitterkeywords' => 'twitter api'
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
