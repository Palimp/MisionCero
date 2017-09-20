<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?= __('Cada equipo selecciona en que ámbito colocar los 3 retos que le parece más relevantes') ?>
                </p>
            </div>

        </div>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?><p>
            <b class="fs22">
                <?= $comments[$i]->question ?>
            </b>


            <b>
                Ámbito: 


                <?= $ambits[$comments[$i]->ambit-1]->ambit ?>
            </b>
            </p>
        <?php } ?>
        
    </section>

</main>

<script>
    var page = 47;

    $(function () {
<?php if (!$admin) { ?>

          
            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {

                        $('#clock').html(data);
                        setTimeout(checkTime, 500);
                    } else {

                        alert("Se acabó el tiempo");
//                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>//';
                    }
                });
            }

<?php } ?>

    });
</script>

