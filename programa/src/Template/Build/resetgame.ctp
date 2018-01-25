<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');
?>

<main>

    <section style="background-color: #E3E3E3;">
        <div class="container py-5 text-center">

            <div class="form-group">
                <p class="fs26"><?= __('Creación de juego') ?></p>

            </div>

            <div>
                <?php
                if (empty($codes)) {
                    echo __("No se ha reseteado el juego");
                } else {
                    ?>
                    <h1 class="fs26"><?= __('Juego reseteado') ?></h1>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

</main>
