<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
   <?= $this->Html->css(WWW_ROOT . '/css/pdf.css') ?>
   
</head>
<body>
    <div id="container">
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
    </div>
</body>
</html>