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
    <div class="title_wrap text-center">
        <span class="title">
            <?= __('Problemática: ' . $trouble) ?>
        </span>
    </div>
    <section class="container text-center">
        <p class="green">
            <?= __('ELIMINAR TEXTO? Los equipos disponen de 3’ para pensar cómo vender el objeto de la foto al otro equipo') ?>
        </p>
        <p>
            <?= __('Después, cada equipo presentará en 2 minutos su propuesta a otro equipo. El equipo audiente comunica su veredicto.En seguida se inversan los roles.') ?>
        </p>
        <div class="col fs32">
            <div class="d-flex align-items-end flex-column">
                <div>
                    <h1><time id="clock"><?= $time ?></time></h1>
                    <i class="fa fa-clock-o"></i>

                </div>

            </div>
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

