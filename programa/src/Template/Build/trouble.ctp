<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main class="text-center">
    <header>
        <?= $this->Html->image('breadp12.svg', ['class' => 'img-fluid']); ?>
    </header>
        <?php
    echo $this->Form->create('Trouble', array(
        'url' => array('controller' => 'Build', 'action' => 'trouble'),
    ));
    ?>
    <div class="title_wrap mb-5">
        <span class="title">
            <?= __('La problemática inicial de la partida') ?>
        </span>
    </div>
    <section class="text-center container">
        <p><?= __('El objetivo de la partida consistirá en transformar esta problemática en una serie de retos concretos') ?></p>
        <div class="row form-group">
            <div class="col">
               

                <input type="text" name="trouble" id="trouble" class="form-control fs22" placeholder="Introduce aquí la problemática" value="<?=$trouble?>">
                <b class="fs26 green"><?= __('La problemática inicial tiene que expresarse de la siguiente manera:') ?><br><?= __('¿Cómo…?') ?></b>
            </div>
            <div class="col col-md-auto">
                <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="Confirma la problematica" class="d-inline-block">
                    <i class="fa fa-check fa-3x"></i>
                </a>
            </div>
        </div>
        </form>

        <div class="example">
            <i class="fa fa fa-file-text-o fa-2x example_ic align-top mr-3"></i>
            <div class="example_wrapper d-inline-block">
                <div class="example_inner text-left py-3 px-4">
                    Ejemplos:<br>
                    <i>¿cómo mejorar nuestra comunicación interna?</i><br>
                    <i>¿cómo desarrollar la transformación digital?</i><br>
                    <i>¿cómo abrir nuevos mercados?</i><br>
                    <i>¿cómo podría mejorar nuestro proceso de compra?</i>
                </div>
            </div>
        </div>

    </section>
</main>
