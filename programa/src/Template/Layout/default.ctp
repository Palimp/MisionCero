<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
  <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
     <?= $this->Html->css('font-awesome.min.css') ?>
   <?= $this->Html->css('style.css') ?>
   <?= $this->Html->script('jquery-3.1.1.min.js') ?>
   <?= $this->Html->script('popper.min.js') ?>
   <?= $this->Html->script('bootstrap.min.js') ?>
   <?= $this->Html->script('scripts.js') ?>
   <?= $this->Html->script('ie10-viewport-bug-workaround.js') ?>
<body>
  <button id="refrescar" onclick="location.href=location.href" class="btn btn-primary"><?= __('Refrescar') ?></button>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
