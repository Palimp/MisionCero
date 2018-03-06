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
        <p class="h_green text-center">
            <?= __('Selección de Retos / Ámbitos de tu equipo:') ?>
        </p>

        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?>
            <div class="striped rounded mb-2">
                <b>
                    <?= __('¿Cómo ') ?><?= $comments[$i]['question'] ?>
                </b>

                <input type="hidden" id="reto<?= $i ?>" value="<?= $comments[$i]['id'] ?>">
                <div class="fs14">
                    <?php foreach ($ambits as $ambit) { ?>
                        <label class="custom-control custom-radio">
                            <input name="radio<?= $i ?>" type="radio" class="custom-control-input" value="<?= $ambit->id ?>">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description"><?= $ambit->ambit ?></span>
                        </label>
                    <?php } ?>

                </div>
            </div>
        <?php } ?>
        <div class="text-right mt-5">

            <?php
            echo $this->Form->create('Teams', array(
                'url' => array('controller' => 'Game', 'action' => 'page36b'),
                "id" => 'team'
            ));
            echo $this->Form->input(
                    'datos', [
                'type' => 'hidden',
                'id' => 'datos'
            ]);
            ?>
            <a href="#" id="sendretos" data-toggle="tooltip" title="Haz click para enviar" class="d-inline-block">
                <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
            </a>
            </form>
        </div>
    </section>

</main>

<script>
    var page = 36;

    $(function () {
<?php if (!$admin) { ?>

            $('#sendretos').click(function () {

                var datos = []
                for (i = 0; i < 3; i++) {

                    if (!$("[name='radio" + i + "']:checked").val()) {
                        $("[name='radio" + i + "']").focus();
                        return;
                    }
                    datos.push({"id": $('#reto' + i).val(), "ambito": $("[name='radio" + i + "']:checked").val()});
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
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"])
    ?>';
                    }
                      else {
                        setTimeout(checkTime, 500);
                    }
                });
            }

<?php } ?>

    });
</script>

