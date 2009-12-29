<div id="page-header">
  sna<span class="snaapi">api</span>
</div>

<div class="fixedwidth">

<div class="blocks">

<? foreach ($this->apis as $id => $api) { ?>
<a href="/api/<?= $id ?>">
<div class="block" id="<?= $id ?>">
  <div class="icon<?= $api['roundedicon'] ? ' rounded' : ''; ?>">
    <img src="/gfx/<?= $id ?>.png" width="57px" height="57px" />
  </div>
  <div class="details">
    <div class="title"><?= $api['name'] ?></div>
    <div class="description"><?= $api['description'] ?></div>
  </div>
</div>
</a>
<? } ?>

<div class="clearfix"></div>

</div> <!-- blocks -->

</div> <!-- fixedwidth -->
