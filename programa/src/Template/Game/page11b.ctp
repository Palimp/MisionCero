<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>


<main>
    <header>
        <?= $this->Html->image("breadp151.svg", ['class' => 'img-fluid mx-auto d-block head-img']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container">
        <div class="no-gutters mb-5">
            <p class="h_green">
                <i class="fa fa-lightbulb-o"></i>
                <?= __('Convertir estos 3 comentarios en RETOS y seleccionar a qué ÁMBITO pertenece cada uno de ellos.') ?><br>
                <b><?= __('Los equipos tienen 5 minutos') ?></b>
            </p>
            <div class="clock-c">
                <i class="fa fa-clock-o mr-2"></i><time>5'</time>
            </div>
            <div class="fs32 text-center">
                <i class="fa fa-clock-o mr-3"></i><time id="clock" class="clock-a"><?= $time ?></time>
            </div>
        </div>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?>
            <div class="striped rounded mb-2">
                <b id="c<?=$i?>">
                    <?= $comments[$i]['comment'] ?>
                </b>

                <div>
                    <div class="col-10 pl-0">
                        <span>¿ Cómo</span>
                        <input type="text" id="reto<?= $i ?>" class="form-control d-inline w-75" placeholder="<?= __('Introduce aquí el reto') ?>">

                    </div>
                </div>
                <div class="fs14 py-2">
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
        
                <!-- Button trigger modal_ex2 -->
            <div class="py-3">
                <a href="#" data-toggle="modal" data-target="#modal_ex2" class="grey_link">
                    <i class="fa fa-file-text-o fa-2x example_ic mr-2"></i>
                    <p class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </p>
                </a>
                <!-- modal_ex2 -->
                <div>
                    <div id="modal_ex2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex2LiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="example row">
                                        <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                                        <div class="example_wrapper col mr-4">
                                            <div class="example_inner text-left py-3 px-4">
                                                <?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?>
                                                </br>
                                                <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?>
                                                </br>
                                                <?=__('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso')?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body text-center">
                                    <p>
                                            <?= __('Para este paso, algunos ejemplos de “comentarios informales convertidos en retos”  de nuestra problemática ficticia “¿Cómo podríamos mejorar la comunicación interna?”, podrían ser:') ?>
                                    </p>
                                    <div>
                                        <p>
                                            <?= __('Los rumores siempre van más rápido que la información interna') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo conseguir que la información se adelante a los rumores?') ?>
                                        </p>
                                        <p>
                                            <?= __('Nadie lee los mails de comunicación interna') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo conseguir que todos abran y lean los mails de comunicación interna?') ?>
                                        </p>
                                        <p>
                                            <?= __('Mucha gente no entiende los mails de comunicación interna') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo conseguir que los mails de comunicación interna sean fáciles de entender?') ?>
                                        </p>
                                        <p>
                                            <?= __('No tocan lo que nos gustaría realmente saber') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo conseguir que la comunicación que recibimos sea la que nos interesa?') ?>
                                        </p>
                                        <p>
                                            <?= __('Para los de la fábrica, la información no es relevante') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo conseguir que la información que recibe la gente de la fábrica sea relevante para ellos?') ?>
                                        </p>
                                        <p>
                                            <?= __('Los mails de comunicación son muy aburridos') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo conseguir que los mails de comunicación sean amenos?') ?>
                                        </p>
                                        <p>
                                            <?= __('Siempre presentan un mundo perfecto') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo conseguir que la comunicación nos parezca realista ?') ?>
                                        </p>
                                        <p>
                                            <?= __('Los que mandan comunicación están muy lejos y no saben lo que hacemos') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('Cómo conseguir que todos perciban que los que mandan la comunicación están cerca y entienden nuestro trabajo') ?>
                                        </p>
                                        <p>
                                            <?= __('Tendríamos que tener a personas de comunicación en cada área  ') ?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?= __('¿Cómo tener a personas de comunicación o capaces de comunicar en cada área?') ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="text-right mt-5">
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
            <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
                <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
            </a>
            </form>
        </div>
    </section>

</main>

<script>
    var page = 11;

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
                        var datos = [], ambito;
                        for (i = 0; i < 3; i++) {
                            if (!$('#reto' + i).val()) {
                                $('#reto' + i).val($('#c'+i).text().trim());
                            }
                            ambito=$("[name='radio" + i + "']:checked").val();
                            if (!ambito) {
                                ambito=10;
                            }
                            datos.push({"reto": $('#reto' + i).val(), "ambito": ambito});

                        }
                        $('#datos').val(JSON.stringify(datos));
                        
                        $('#team').submit();return;
                        alert("<?= __('Se acabó el tiempo') ?>");
                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    } else {
                        setTimeout(checkTime, 500);
                    }
                });
            }

<?php } ?>

    });
</script>

