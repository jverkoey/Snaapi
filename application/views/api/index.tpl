<div class="fixedwidth">

<div id="page-header">
  <a href="/"><span class="snaapi">sna<span class="rightside">api</span></span></a>
</div>

<a href="/"><div class="tab leftsidetab">&lt; Back</div></a>
<div class="tab rightsidetab">I'm dreaming of a more connected world.</div>
<div class="clearfix"></div>

<div class="content">
<div class="header">
  <div class="icon<?= $this->api['roundedicon'] ? ' rounded' : ''; ?>">
    <img src="/gfx/<?= $this->apiId ?>.png" width="57px" height="57px" />
  </div>
  <div class="details">
    <div class="title"><?= $this->api['name'] ?></div>
    <div class="description"><?= $this->api['description'] ?></div>
  </div>
  <div class="clearfix"></div>
</div>

<div class="blocks">
<? if (isset($this->api['feeds'])) { ?>
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

<? if (isset($this->api['maintainers'])) { ?>
  <div class="block" id="twitter">
    <h1>People to follow</h1>
<? foreach ($this->api['maintainers'] as $username) { ?>
  <a href="<?= $url ?>">
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
