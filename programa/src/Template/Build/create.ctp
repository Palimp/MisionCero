<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>
    <header class="py-2 text-center fs26">
        <span>
            <?= __('Creación de juego') ?>
        </span>
    </header>
    <section style="background-color: #E3E3E3;" class="text-center">
        <div class="title_wrap">
            <span class="title">
                <?php
                if (empty($codes)) {
                    echo __("No se ha creado el juego");
                } else {
                    ?>
                    <?= __('Juego creado') ?>
                    <?php
                }
                ?>
            </span>
        </div>
        <div>
            <?php
            if (empty($codes)) {               
            } else {
                ?>
                <h1 class="fs26"><?= __('Código administrador: ') . $codes[0] ?></h1>
                <h1 class="fs26"><?= __('Código usuario: ') . $codes[1] ?></h1>
                <?php
            }
            ?>
        </div>
    </section>
</main>
