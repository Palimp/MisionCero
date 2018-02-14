<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header>
        <?= $this->Html->image("breadp151.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <section class="container">
        <p class="h_green mt-5">
            <?=__('Selección de Retos / Ámbitos de tu equipo:')?>
        </p>
        <?php
        foreach($challenges as $challenge) {
            $reto=isset($challenge->reto)?$challenge->reto:$challenge->challenge;
            $ambito=isset($challenge->ambito)?$ambits[$challenge->ambito-1]->ambit:$ambits[$challenge->ambit-1]->ambit;
            
            ?>
            <div class="striped rounded mb-2">
               Cómo <?= $reto?> - <b class="green"><?= $ambito?></b>
            </div>

          
        <?php } ?>
  
    </section>

</main>

<script>
    var page = 11;

    $(function () {
<?php if (!$admin) { ?>

           setTimeout(checkPage, 500);

            function checkPage() {
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "pageactive"
    ])
    ?>", function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 500);
                    } else {
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    }

                });

            }


<?php } ?>

    });
</script>

