<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>
<main>
    <header>
        <?= $this->Html->image("breadp60.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section class="container text-center">
        <p class="title_first mt-3 pb-2">
            <?= __('Parada lúdica 3') ?>
        </p>
        <p class="h_green">
            <?= __('2 equipos trabajan juntos: ') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>2'</time>
        </div>
        <p>
            <b><?= __('Fase 1-') ?></b>
            </br> 
            <?= __('Los equipos tienen 2 minutos para preparar la venta del objeto al otro equipo') ?>
            </br>
            <?= __('Finalizado el tiempo, un equipo dispondrá de 2 minutos para convencer al segundo equipo que le compre su objeto. El segundo equipo comunicará al Jefe de Expedición si le ha convencido la presentación.') ?> 
            </br>
            </br>
            <b><?= __('Fase 2-') ?></b>
            </br>
            <?= __('Los equipos intercambian los roles: el equipo 2 presenta al equipo 1') ?>
            </br>
            </br>
        </p>
        <p>
            <b><?= __('Prepara la venta: ¡El objeto no puede servir para su uso habitual!') ?></b>
        </p>

        <div class="fs32">
            <i class="fa fa-clock-o mr-3"></i><time id="clock" class="clock-a"><?= $time ?></time>
        </div>

        <div class="text-center">
            <?= $this->Html->image($image, ['class' => 'img-fluid']); ?>
        </div>

        <div class="text-center mt-5">
            <div class="alert alert_bikles d-inline-block" role="alert">
                <img src="/img/bikles.png" class="float-left mr-3 img-fluid" alt="">
                <b>
                    <?= __('Nos han convencido + 2 Bikles') ?>
                </b>
                </br><?= __('Neutro 0 Bikles') ?>
                </br><?= __('No nos convence nada - 2 Bikles') ?>
            </div>
        </div>
    </section>
</main>

<script>
    var page = 20;
    function delComment(id) {
        $.get("<?=
                    $this->Url->build([
                        "controller" => "Game",
                        "action" => "deletestake"
                    ])
                    ?>", {'id': id}, function (data, status) {
            if (status == 'success') {

                $('#bloque' + id).remove();
            }
        });
    }
    $(function () {
<?php if (!$admin) { ?>
            $("#comment").keyup(function (event) {
                if (event.keyCode == 13) {
                    $("#addcomment").click();
                }
            });
            $('#addcomment').click(function () {
                $('#addcomment').attr('style', 'display: none !important');
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "addstake"
    ])
    ?>", {'comment': $('#comment').val()}, function (data, status) {
                    if (status == 'success') {
                        $('#addcomment').removeAttr('style');
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b class="fs26">¿</b><span>Cómo</span> <b>' + $('#comment').val() + ' ?</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un reto" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
                        $('#comment').val('');

                    }
                });
            });
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

                    } else if (data != "0") {
                        alert("<?= __('Se acabó el tiempo') ?>");
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    } else {
                        setTimeout(checkTime, 500);
                    }
                });

            }

<?php } ?>

    });
</script>

