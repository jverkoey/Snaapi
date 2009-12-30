<div class="fixedwidth">

<div id="page-header">
  <a href="/"><span class="snaapi">sna<span class="rightside">api</span></span></a>
</div>

<a href="/"><div class="tab leftsidetab">&lt; Back</div></a>
<div class="tab rightsidetab">Working towards a more connected world.</div>
<div class="clearfix"></div>

<div class="content">

<a href="<?= $this->api['homepage'] ?>">
<div class="header">
  <div class="icon<?= $this->api['roundedicon'] ? ' rounded' : ''; ?>">
    <img src="/gfx/<?= $this->apiId ?>.png" width="57px" height="57px" />
  </div>
  <div class="details">
    <div class="title"><?= $this->api['name'] ?></div>
    <div class="description">
      <?= $this->api['description'] ?><br/>
      <?= $this->api['homepage'] ?>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</a>

<div class="blocks">

<? $block_count = 0; ?>

<? if (isset($this->api['feeds'])) { ++$block_count; ?>
  <div class="block">
    <h1>Feeds</h1>
<? foreach ($this->api['feeds'] as $name => $url) { ?>
  <a href="<?= $url ?>">
    <div class="row">
      <div class="details">
        <div class="title"><?= $name ?></div>
        <div class="description"><?= $url ?></div>
      </div>
    </div>
  </a>
<? } ?>
  </div>
<? } ?>

<? if (isset($this->api['articles'])) { ++$block_count; ?>
  <div class="block">
    <h1>Articles</h1>
<? foreach ($this->api['articles'] as $name => $url) { ?>
  <a href="<?= $url ?>">
    <div class="row">
      <div class="details">
        <div class="title"><?= $name ?></div>
        <div class="description"><?= $url ?></div>
      </div>
    </div>
  </a>
<? } ?>
  </div>
<? } ?>

<? if (isset($this->api['maintainers'])) { ++$block_count; ?>
  <div class="block" id="twitter">
    <h1>People to follow</h1>
<? foreach ($this->api['maintainers'] as $username) { ?>
  <a href="http://twitter.com/<?= $username ?>">
    <div class="row">
      <div class="icon">
        <img src="<?= $this->users[$username]['profile_image_url'] ?>" width="48px" height="48px" />
      </div>
      <div class="details">
        <div class="title"><?= $username ?></div>
        <div class="description"><?= $this->users[$username]['status']['text'] ?></div>
      </div>
      <div class="clearfix"></div>
    </div>
  </a>
<? } ?>
  </div>
<? } ?>

<div class="clearfix"></div>

</div>

</div> <!-- content -->

</div> <!-- fixedwidth -->
