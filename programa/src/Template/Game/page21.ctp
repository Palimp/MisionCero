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
    <header>
        <?= $this->Html->image("breadp33.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container text-center">
        <p class="title_first pb-4">
            <?=__('Etapa 2- Preguntas básicas')?>
        </p>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th></th>
                    <th><?= __('Equipo') ?></th>
                    <th><?= __('Comentarios') ?></th>
                    <th><img src="/img/bikles.png" class="img-fluid bikles_table" alt=""></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ranking as $team) {
                    ?>
                    <tr>
                        <td>   <?= $this->Html->image("exp" . str_pad($team['img'], 2, "0", STR_PAD_LEFT) . ".png", ['class' => 'img-fluid']); ?></td>

                        <td><?= $team['name'] ?></td>
                        <td><?= $team['num'] ?></td>
                        <td><?= $team['bikles'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar Etapa 2') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 21;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page22"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page20"
    ])
    ?>';
            });
<?php } else { ?>
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

