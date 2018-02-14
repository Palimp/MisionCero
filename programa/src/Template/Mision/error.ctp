<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
  */
if (empty($error)){$error=__('Ha ocurrido un error');}
?>
<main>
  <header class="py-2 text-center fs26">
      <span>
          <?=$error?>
      </span>
  </header>

  <div class="text-center mt-5">
    <?=$this->Html->link(__('Volver a la página principal'),'/', ['class' => 'btn btn-primary']);?>
  </div>
</main>

