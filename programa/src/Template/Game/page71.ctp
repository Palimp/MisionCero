<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>
<main>
    <div class="title_alt text-center">
        <?=__('Problemática: '.$trouble)?>
    </div>
    <section class="container text-center">
        <div>
            <p class="title_first py-4">
                <?=__('¡Felicidades!')?>
                </br>
                <?=__('El equipo ganador es ')?>
                <span><?=$teams[0]['name']?></span>
            </p>
        </div>
        <div class="text-center mb-10" style="position:relative; width: 637px; margin: auto;">
            <span class="first"><?= $this->Html->image("exp" . str_pad($teams[1]['img'],2, "0", STR_PAD_LEFT).".png", ['class' => 'img-fluid mx-auto d-block']); ?><?=$teams[1]['name']?></span>
            <b class="second"><?= $this->Html->image("exp" . str_pad($teams[0]['img'],2, "0", STR_PAD_LEFT).".png", ['class' => 'img-fluid mx-auto d-block']); ?><?=$teams[0]['name']?></b>
            <span class="third"><?= $this->Html->image("exp" . str_pad($teams[2]['img'],2, "0", STR_PAD_LEFT).".png", ['class' => 'img-fluid mx-auto d-block']); ?><?=isset($teams[2]['name'])?$teams[2]['name']:''?></span>
              <?= $this->Html->image("imgp92.svg"); ?>
        </div>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 71;
    $(function () {
<?php if ($admin) { ?>


          
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page70"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 1000);

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

