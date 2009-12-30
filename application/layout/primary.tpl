<?= $this->doctype() ?>
<html<?= $this->xmlns() ?>>
<head>
  <?= $this->meta() ?>
  <?= $this->title() ?>
  <?= $this->css() ?>
  <?= $this->jsHead() ?>
</head>
<body>
<div id="page-wrapper">
<div id="page">
<?= $this->content() ?>

<div class="clearfix"></div>
<div id="page-footer"></div>
</div> <!-- page -->

</div> <!-- pagewrapper -->

<div id="footer">
  <div class="copyright">Copyright 2009 All content licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License</a> unless otherwise noted.</div>
  <div class="attribution">
  </div>
</div>

<?= $this->jsFoot() ?>
</body>
</html>
