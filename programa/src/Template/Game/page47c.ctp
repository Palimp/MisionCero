<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header>
        <?= $this->Html->image("breadp631.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container">
        <p class="h_green">
            <?= __('Selección de Retos / Ámbitos de tu equipo:') ?>
        </p>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?>
                <div class="striped rounded mb-2">
                    <?= $comments[$i]->question ?> - <b class="green"><?= $ambits[$comments[$i]->ambit - 1]->ambit ?></b>
                </div>
        <?php } ?>

    </section>

</main>

<script>
    var page = 47;

    $(function () {
<?php if (!$admin) { ?>


            function checkPage() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"])
    ?>", function (data, status) {
                    if (data == page) {
                        setTimeout(checkPage, 1000);
                    } else {
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    }
                });
            }

            setTimeout(checkPage, 1000);

<?php } ?>

    });
</script>

