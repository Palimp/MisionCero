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
        <?= $this->Html->image("breadp332.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <section class="container">
        <div>
            <p class="title_first py-4 text-center">
                <?= __('Ranking de Bikles al acabar la Parada lúdica 2') ?>
            </p>
        </div>
        <?php if ($admin) { ?>
            <p class="green">
                <?=__('El Jefe de Expedición, ')?><b><?=__('tiene el privilegio de sumar o restar Bikles ')?></b><?=__('si considera que alguno de los equipos lo merece al final de esta etapa: ')?><br><?=__(' 
                    Al más rápido o al más lento… ')?><br><?=__(' Al que haya aportado algo de valor o al que haya criticado cuando no toca… ')?><br><?=__(' ¿Qué tal se han portado? ')?>
                                    <i class="fa fa-smile-o"></i>
            </p>
        <?php } ?>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th><?= __('RANKING GENERAL') ?></th>
                    <th></th>
                    <th><?= __('EQUIPOS: CLASIFICACIÓN ETAPA') ?></th>
                    <th><img src="/img/bikles.png" class="img-fluid bikles_table" alt="TOTAL BIKLES"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($teams); $i++) {
                    ?>
                    <tr>
                        <td scope="row" class="fs32"><?= $i+1 ?></td>
                        <td>   <?= $this->Html->image("exp" . str_pad($teams[$i]['img'], 2, "0", STR_PAD_LEFT) . ".png", ['class' => 'img-fluid']); ?>
                        </td>

                        <td><?= $teams[$i]['name'] ?></td>
                        <td>
                            <?= $teams[$i]['bikles'] ?>
                            <?php
                            if ($admin) {
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page30'), 'class' => 'd-inline-block'
                                ));
                                ?>
                                <input type="hidden" name="sumar" value="<?= $teams[$i]['id'] ?>">
                                <a href="#" onclick="$(this).closest('form').submit()"  data-toggle="tooltip" title="<?=__('Haz click para añadir Bikles')?>" class="d-inline-block grey_link">
                                    <i class="fa fa-plus"></i>
                                </a>
                                </form>
                                <?php
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page30'), 'class' => 'd-inline-block'
                                ));
                                ?>
                                <input type="hidden" name="restar" value="<?= $teams[$i]['id'] ?>">

                                <a href="#"  onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="<?=__('Haz click para restar Bikles')?>" class="d-inline-block grey_link">
                                    <i class="fa fa-minus"></i>
                                </a>
                                </form>
    <?php } ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Ir a Etapa 3') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 30;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page31"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page29"
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
                        setTimeout(checkPage, 1000);
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

