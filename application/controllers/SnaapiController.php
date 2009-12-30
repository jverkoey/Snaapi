<?php

class SnaapiController extends Keystone_Controller {

  protected $apis = array(
    'bestbuy' => array(
      'name' => 'Best Buy Remix',
      'description' => 'Best Buy\'s product catalog API.',
      'homepage' => 'http://remix.bestbuy.com/',
      'roundedicon' => false,
      'feeds' => array(
        'Remix News' => 'feed://remixblog.info/feed/'
      ),
      'twitterkeywords' => 'best buy api',
      'maintainers' => array(
        'bestbuyremix'
      )
    ),
    'digg' => array(
      'name' => 'Digg™ API',
      'description' => 'API for the popular news aggregator.',
      'homepage' => 'http://digg.com/api/docs/overview',
      'roundedicon' => true,
      'feeds' => array(
        'Technology Blog' => 'http://about.digg.com/blog/technology'
      ),
      'twitterkeywords' => 'digg api',
      'maintainers' => array(
        'digg'
      )
    ),
    'facebook' => array(
      'name' => 'Facebook',
      'description' => 'The Facebook API.',
      'homepage' => 'http://developers.facebook.com/',
      'roundedicon' => false,
      'feeds' => array(
        'Facebook Developer News' => 'feed://developers.facebook.com/news.php?blog=1&format=xml'
      ),
      'stackoverflowkeywords' => 'facebook facebook-api facebook-connect',
      'twitterkeywords' => 'facebook api'
    ),
    'github' => array(
      'name' => 'GitHub',
      'description' => 'The GitHub API.',
      'homepage' => 'http://develop.github.com/',
      'roundedicon' => false,
      'feeds' => array(
        'GitHub Blog' => 'http://feeds.feedburner.com/github'
      ),
      'stackoverflowkeywords' => 'github',
      'twitterkeywords' => 'github api',
      'maintainers' => array(
        'github'
      )
    ),
    'gmaps' => array(
      'name' => 'Google Maps',
      'description' => 'The Google Maps API.',
      'homepage' => 'http://code.google.com/apis/maps/',
      'roundedicon' => false,
      'feeds' => array(
        'Google Geo Developers Blog' => 'http://feeds.feedburner.com/GoogleGeoDevelopersBlog'
      ),
      'twitterkeywords' => 'google maps api',
      'maintainers' => array(
        'googlemaps'
      )
    ),
    'lastfm' => array(
      'name' => 'Last.fm',
      'description' => 'The Last.fm API.',
      'homepage' => 'http://www.last.fm/api',
      'roundedicon' => true,
      'feeds' => array(
        'Last.fm HQ' => 'http://blog.last.fm/atom/'
      ),
      'twitterkeywords' => 'last.fm api',
      'maintainers' => array(
        'lastfm'
      )
    ),
    'three20' => array(
      'name' => 'Three20',
      'description' => 'Three20 is an Objective-C library for the iPhone.',
      'homepage' => 'http://three20.info/',
      'roundedicon' => true,
      'feeds' => array(
        'Three20 News' => 'http://three20.info/news/feed/atom/',
        'Three20 Google Group' => 'feed://groups.google.com/group/three20/feed/rss_v2_0_msgs.xml'
      ),
      'stackoverflowkeywords' => 'three20',
      'twitterkeywords' => 'three20',
      'maintainers' => array(
        'joehewitt',
        'featherless'
      )
    ),
    'twitter' => array(
      'name' => 'Twitter',
      'description' => 'The Twitter HTTP-based API.',
      'homepage' => 'http://apiwiki.twitter.com/',
      'roundedicon' => false,
      'feeds' => array(
        'Twitter News' => 'feed://feeds.feedburner.com/TwitterBlog',
        'Twitter Status' => 'http://status.twitter.com/'
      ),
      'stackoverflowkeywords' => 'twitter twitterapi',
      'twitterkeywords' => 'twitter api',
      'maintainers' => array(
        'twitter'
      )
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
