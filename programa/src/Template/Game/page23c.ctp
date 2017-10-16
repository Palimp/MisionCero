<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?= __('Cada equipo selecciona en que ámbito colocar los 3 retos que le parece más relevantes') ?>
                </p>
            </div>

        </div>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?><p>
            <b class="fs22">
                <?= $comments[$i]->question ?>
            </b>


            <b>
                <?=__('Ámbito:')?>


                <?= $ambits[$comments[$i]->ambit-1]->ambit ?>
            </b>
            </p>
        <?php } ?>
        <div class="text-right mt-5">
            <div class="col-2">
                <!-- Button trigger modal_ex2 -->
                <div class="d-inline">
                    <a href="#" data-toggle="modal" data-target="#modal_ex2" class="grey_link">
                        <i class="fa fa-wpforms fa-2x example_ic mr-3 pull-left"></i>
                        <p class="fs12"><?=__('click aquí para')?><br> <?=__('ver ejemplo')?>
                        </p>
                    </a>
                </div>
                <!-- modal_ex2 -->
                <div>
                    <div id="modal_ex2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex2LiveLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header align-items-start">
                                    <div class="example fs26">
                                        <i class="fa fa-wpforms fa-3x example_ic align-top mr-3"></i>
                                        <div class="example_wrapper d-inline-block">
                                            <div class="example_inner text-left py-3 px-4">
                                                <span>
                                                    <b><?=__('Ejemplo Problemática')?></b> 
                                                    <?=__('¿Cómo mejorar mi comunicación interna?')?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <b>
                                            <?=__('Transformar los comentarios elegidos en retos:')?>
                                        </b>
                                    </p>
                                    <div class="text-center">
                                        <p>
                                            <?=__('Los rumores siempre van más rápido que la información interna')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podríamos conseguir que la información se adelante a los rumores?')?>
                                        </p>
                                        <p>
                                            <?=__('Nadie lee los mails de comunicación interna')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podríamos conseguir que todos abren y lean los mails de comunicación interna?')?>
                                        </p>
                                        <p>
                                            <?=__('Mucha gente no entiende los mails de comunicación interna')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo conseguir que los mails de comunicación interna sean fáciles de entender?')?>
                                        </p>
                                        <p>
                                            <?=__('No tocan lo que nos gustaría realmente saber')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podríamos conseguir que la comunicación que recibimos sea la que nos interesa?')?>
                                        </p>
                                        <p>
                                            <?=__('Para los de la fábrica, la información no es relevante')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podríamos conseguir que la información que recibe la gente de la fábrica sea relevante para ellos?')?>
                                        </p>
                                        <p>
                                            <?=__('Los mails de comunicación son muy aburridos')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podríamos conseguir que los mails de comunicación sean amenos?')?>
                                        </p>
                                        <p>
                                            <?=__('Siempre presentan un mundo perfecto')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podríamos conseguir que la comunicación nos parezca realista ?')?>
                                        </p>
                                        <p>
                                            <?=__('Los que mandan comunicación están muy lejos y no saben lo que hacemos')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podróamso conseguir que todos perciban que los que mandan la comunicación están cerca y entienden nuestro trabajo?')?>
                                        </p>
                                        <p>
                                            <?=__('Tendríamos que tener a personas de comunicación en cada área')?>
                                            </br>
                                            <i class="fa fa-chevron-down"></i>
                                            </br>
                                            <?=__('¿Cómo podríamos tener a personas de comunicación o capaces de comunicar en cada área?')?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            <a href="#" id="sendretos" data-toggle="tooltip" title="<?=__('Haz click para enviar')?>" class="d-inline-block">
                <i class="fa fa-check fa-2x"></i>
            </a>
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

