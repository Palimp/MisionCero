<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp74.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <p class="fs22">
            <?=__('Ranking de Bikles al acabar la etapa 8')?>
        </p>
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th><?=__('Equipo')?></th>
                    <th><?=__('Bikles')?></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($teams); $i++) {
                    ?>
                    <tr>
                        <td scope="row" class="fs32"><?= $i+1 ?></td>
                        <td><img class="img-fluid" style="height: 50px; width: 50px; margin: -7px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22771%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20771%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ddcba636d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ddcba636d%22%3E%3Crect%20width%3D%22771%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.7421875%22%20y%3D%22143%22%3E771x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"></td>
                        <td><?= $teams[$i]['name'] ?></td>
                        <td>
                            <?= $teams[$i]['bikles'] ?>
                            <?php
                            if ($admin) {
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page54'), 'class' => 'd-inline-block'
                                ));
                                ?>
                                <input type="hidden" name="sumar" value="<?= $teams[$i]['id'] ?>">
                                <a href="#" onclick="$(this).closest('form').submit()"  data-toggle="tooltip" title="<?=__('Haz click para añadir Bikles')?>" class="d-inline-block grey_link">
                                    <i class="fa fa-plus"></i>
                                </a>
                                </form>
                                <?php
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page54'), 'class' => 'd-inline-block'
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


    </section>
</section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
<?php } ?>
</main>

<script>
    var page = 54;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page55"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page53"
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

