<?= $this->doctype() ?>
<html<?= $this->xmlns() ?>>
<head>
  <?= $this->meta() ?>
  <?= $this->title() ?>
  <?= $this->css() ?>
  <?= $this->jsHead() ?>
</head>
<body>
<?= $this->content() ?>
<?= $this->jsFoot() ?>
</body>
</html>
