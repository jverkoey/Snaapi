<?php

class SnaapiController extends Keystone_Controller {

  protected $apis = array(
    'bestbuy' => array(
      'name' => 'Best Buy Remix',
      'description' => 'Best Buy\'s product catalog API.',
      'roundedicon' => false,
      'feeds' => array(
        'Remix News' => 'feed://remixblog.info/feed/'
      ),
      'twitterkeywords' => 'best buy api'
    ),
    'facebook' => array(
      'name' => 'Facebook',
      'description' => 'The Facebook API.',
      'roundedicon' => false,
      'feeds' => array(
        'Facebook Developer News' => 'feed://developers.facebook.com/news.php?blog=1&format=xml'
      ),
      'stackoverflowkeywords' => 'facebook facebook-api facebook-connect',
      'twitterkeywords' => 'facebook api'
    ),
    'three20' => array(
      'name' => 'Three20',
      'description' => 'Three20 is an Objective-C library for the iPhone.',
      'roundedicon' => true,
      'feeds' => array(
        'Three20 News' => 'http://three20.info/news/feed/atom/',
        'Three20 Google Group' => 'feed://groups.google.com/group/three20/feed/rss_v2_0_msgs.xml'
      ),
      'stackoverflowkeywords' => 'three20',
      'twitterkeywords' => 'three20'
    ),
    'twitter' => array(
      'name' => 'Twitter',
      'description' => 'The Twitter HTTP-based API.',
      'roundedicon' => false,
      'feeds' => array(
        'Twitter News' => 'feed://feeds.feedburner.com/TwitterBlog'
      ),
      'stackoverflowkeywords' => 'twitter twitterapi',
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
