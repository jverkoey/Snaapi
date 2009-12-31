<?php

class SnaapiView extends Keystone_View {

  protected function generate_block($url, $title, $description) {
    return
'<a href="'.$url.'">
  <span class="row">
    <span class="details">
      <span class="title">'.$title.'</span>
      <span class="description">'.$url.'</span>
    </span>
  </span>
</a>
';
  }

  protected function generate_image_block($url, $title, $description, $imageurl, $width, $height) {
    return
'<a href="'.$url.'">
  <span class="row">
    <span class="icon">
      <img src="'.$imageurl.'" width="'.$width.'px" height="'.$height.'px" />
    </span>
    <span class="details">
      <span class="title">'.$title.'</span>
      <span class="description">'.$description.'</span>
    </span>
    <span class="clearfix"></span>
  </span>
</a>
';
  }
}
