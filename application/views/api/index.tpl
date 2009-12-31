<div class="fixedwidth">

<div id="page-header">
  <a href="/"><span class="snaapi">sna<span class="rightside">api</span></span></a>
</div>

<a href="/"><div class="tab leftsidetab">&lt; Back</div></a>
<div class="clearfix"></div>

<div class="content">

<a href="<?= $this->api['homepage'] ?>">
<span class="header">
  <span class="icon<?= $this->api['roundedicon'] ? ' rounded' : ''; ?>">
    <img src="/gfx/<?= $this->apiId ?>.png" width="57px" height="57px" />
  </span>
  <span class="details">
    <span class="title"><?= $this->api['name'] ?></span>
    <span class="description">
      <?= $this->api['description'] ?><br/>
      <?= $this->api['homepage'] ?>
    </span>
  </span>
  <span class="clearfix"></span>
</span>
</a>

<div class="blocks">

<? $block_count = 0; ?>

<? if (isset($this->api['feeds'])) { ++$block_count; ?>
  <div class="block">
    <h1>Feeds</h1>
<? foreach ($this->api['feeds'] as $name => $url) { ?>
  <a href="<?= $url ?>">
    <span class="row">
      <span class="details">
        <span class="title"><?= $name ?></span>
        <span class="description"><?= $url ?></span>
      </span>
    </span>
  </a>
<? } ?>
  </div>
<? } ?>

<? if (isset($this->api['articles'])) { ++$block_count; ?>
  <div class="block">
    <h1>Articles</h1>
<? foreach ($this->api['articles'] as $name => $url) { ?>
  <a href="<?= $url ?>">
    <span class="row">
      <span class="details">
        <span class="title"><?= $name ?></span>
        <span class="description"><?= $url ?></span>
      </span>
    </span>
  </a>
<? } ?>
  </div>
<? } ?>

<? if (isset($this->api['maintainers'])) { ++$block_count; ?>
  <div class="block" id="twitter">
    <h1>People to follow</h1>
<? foreach ($this->api['maintainers'] as $username) { ?>
  <a href="http://twitter.com/<?= $username ?>">
    <span class="row">
      <span class="icon">
        <img src="<?= $this->users[$username]['profile_image_url'] ?>" width="48px" height="48px" />
      </span>
      <span class="details">
        <span class="title"><?= $username ?></span>
        <span class="description"><?= $this->users[$username]['status']['text'] ?></span>
      </span>
      <span class="clearfix"></span>
    </span>
  </a>
<? } ?>
  </div>
<? } ?>

<div class="clearfix"></div>

</div> <!-- blocks -->

</div> <!-- content -->

<div class="drawer-handle">
<div class="text">Yup, this is the handle for a drawer. Try opening it.</div>

<div class="drawer">
  <h1>Contribute</h1>
</div>

</div> <!-- drawer-handle -->

</div> <!-- fixedwidth -->
