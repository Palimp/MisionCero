<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header>
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container">
        <p class="h_green">
            <?= __('Los retos y ámbitos seleccionados por tu equipo:') ?>
        </p>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?>
                <div class="striped rounded mb-2">
                    ¿ Cómo <?= $comments[$i]->question ?> - <b class="green"><?= $ambits[$comments[$i]->ambit - 1]->ambit ?></b>
                </div>
        <?php } ?>

    </section>

</main>

<script>
    var page = 36;
    function checkPage() {
        $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"])
    ?>", function (data, status) {
            if (data == page) {
                setTimeout(checkPage, 1000);
            } else {
                location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
            }
        });
    }
    $(function () {
    setTimeout(checkPage, 1000);
<?php if (!$admin) { ?>

            $('#sendretos').click(function () {
                var datos = []
                for (i = 0; i < 3; i++) {
                    if (!$('#reto' + i).val()) {
                        $('#reto' + i).focus();
                        return;
                    }
                    if (!$("[name='radio" + i + "']:checked").val()) {
                        $("[name='radio" + i + "']").focus();
                        return;
                    }
                    datos.push({"reto": $('#reto' + i).val(), "ambito": $("[name='radio" + i + "']:checked").val()});

                }
                $('#datos').val(JSON.stringify(datos));
                $('#team').submit();
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
                        //                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>//';
                    }
                });
            }

<?php } ?>

    });
</script>

