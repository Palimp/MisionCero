<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<main>
    <header>
        <?= $this->Html->image("breadp331.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container">

        <p class="h_green">
            <?=__('Selección de Retos / Ámbitos de tu equipo:')?>
        </p>

        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?>
            <div class="striped rounded mb-2">
                <?= $comments[$i]->question ?>
                 - <b class="green">
                    <?= $ambits[$comments[$i]->ambit-1]->ambit ?>
                </b>
            </div>
        <?php } ?>
        <div class="text-right mt-3">
            <?php
            echo $this->Form->create('Teams', array(
                'url' => array('controller' => 'Game', 'action' => 'page11b'),
                "id" => 'team'
            ));
            echo $this->Form->input(
                    'datos', [
                'type' => 'hidden',
                'id' => 'datos'
            ]);
            ?>
            <!--
            <a href="#" id="sendretos" data-toggle="tooltip" title="<?=__('Haz click para enviar')?>" class="d-inline-block">
                <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
            </a>
            -->

            </form>
        </div>
    </section>

</main>

<script>
    var page = 23;

    $(function () {
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
                    console.log($('#reto' + i).val() + "-" + $("[name='radio" + i + "']:checked").val())
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
                    } else {

                      //  alert("<?=__('Se acabó el tiempo')?>");
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

