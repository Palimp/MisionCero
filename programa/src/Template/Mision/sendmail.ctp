<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
  */
echo $nombre;
?>
<main>
  <header class="py-2 text-center fs26">
      <span>
          <?=__('Su mensaje se ha enviado')?>
      </span>
  </header>

  <div class="text-center mt-5">
    <?=$this->Html->link(__('Volver a la página principal'),'/', ['class' => 'btn btn-primary']);?>
  </div>
</main>
