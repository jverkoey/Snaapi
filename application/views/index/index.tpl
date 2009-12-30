<div class="fixedwidth">

<div id="page-header">
  <span class="snaapi">sna<span class="rightside">api</span></span>
</div>

<div class="tab rightsidetab"><input type="text" id="filter" placeholder="filter" /></div>
<div class="clearfix"></div>

<div class="blocks">

<? foreach ($this->apis as $id => $api) { ?>
<a href="/api/<?= $id ?>">
<span class="block inlineblock" id="<?= $id ?>">
  <span class="icon<?= $api['roundedicon'] ? ' rounded' : ''; ?>">
    <img src="/gfx/<?= $id ?>.png" width="57px" height="57px" />
  </span>
  <span class="details">
    <span class="title"><?= $api['name'] ?></span>
    <span class="description"><?= $api['description'] ?></span>
  </span>
</span>
</a>
<? } ?>

<span style="display:none" class="block inlineblock" id="filtered">
  <span class="details">
    <span class="title">These results are filtered</span>
    <span class="description">Click here to clear the filter</span>
  </span>
</span>

<span style="display:none" class="block inlineblock" id="noresults">
  <span class="details">
    <span class="title">No APIs</span>
    <span class="description">Click here to clear the filter</span>
  </span>
</span>

<div class="clearfix"></div>

</div> <!-- blocks -->

</div> <!-- fixedwidth -->
