<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp60.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?=__('Los equipos disponen de 3’ para pensar cómo vender el objeto de la foto al otro equipo')?>
                </p>
               
            </div>
            <div class="col fs32">
                <div class="d-flex align-items-end flex-column">
                    <div>
                        <h1><time id="clock"><?= $time ?></time></h1>
                        <i class="fa fa-clock-o"></i>

                    </div>

                </div>
            </div>
        </div>
        <div class="text-center">
            <img class="img-fluid" style="width: 720px; height: 400px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22771%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20771%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ddcba636d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ddcba636d%22%3E%3Crect%20width%3D%22771%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.7421875%22%20y%3D%22143%22%3E771x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    <?=__('nos han convencido + 2 Bikles')?>
                </b>
                </br><?=__(' neutro 0 Bikles')?>
                </br><?=__(' no nos convence nada - 2 Bikles')?>
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
                        $('#bloque').before('  <div id="bloque' + data + '" class="row form-group"><div class="col pl-0"><b class="fs26">¿</b><span>Cómo podríamos</span> <b>' + $('#comment').val() + ' ?</b></div><div class="col col-md-auto"><a href="#" id="delete' + data + '" onclick="delComment(' + data + ')" data-toggle="tooltip" title="Haz click para borrar un reto" class="d-inline-block pull-right"><i class="fa fa-close fa-2x"></i></a></div></div>');
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

                    } else {
                        alert("<?=__('Se acabó el tiempo')?>");
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

