<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>
<main style="background-color: #e3e3e3;">
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
            <span class="first"><?=$teams[1]['name']?></span>
            <b class="second"><?=$teams[0]['name']?></b>
            <span class="third"><?=isset($teams[2]['name'])?$teams[2]['name']:''?></span>
              <?= $this->Html->image("imgp92.svg"); ?>
        </div>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Siguiente') ?></button>
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

