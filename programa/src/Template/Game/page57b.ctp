<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
$ids = [];
?>

<main>
    <header>
        <?= $this->Html->image("breadp78.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap text-center">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <section class="container">
        <p class="h_green">
            <i class="fa fa-lightbulb-o"></i>
                <?= __('Convertir en retos basados en estados de ánimo') ?>
        </p>
        <div class="clock-c">
            <i class="fa fa-clock-o mr-2"></i><time>5'</time>
        </div>


        <div class="fs32 text-center">
            <i class="fa fa-clock-o mr-3"></i><time id="clock" class="clock-a"><?= $time ?></time>
        </div>

        <?php
        for ($i = 0; $i < count($comments); $i++) {
            $ids[] = $comments[$i]->id;
            ?>
            <div class="striped rounded mb-2">
                <b id="c<?= $i ?>">
                    <?= $comments[$i]->feeling ?>
                </b>

                <div class="col-10 pl-0 mb-2">
                    <input type="text" id="com<?= $i ?>" class="form-control d-inline w-75" placeholder="<?= __('Introduce aquí el reto') ?>" value="<?= $comments[$i]->question ?>">

                </div>
                <div class="fs14 mr-1">
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
        

        <div>
            <!-- Button trigger modal_ex6 -->
            <div class="py-3">
                <a href="#" data-toggle="modal" data-target="#modal_ex6" class="grey_link">
                    <i class="fa fa-file-text-o fa-2x example_ic mr-2"></i>
                    <div class="fs12 d-inline-block"><?= __('click aquí para') ?><br><?= __(' ver ejemplo') ?>
                    </div>
                </a>
             
            </div>
            <!-- modal_ex6 -->
            <div>
                <div id="modal_ex6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal_ex6LiveLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header align-items-start">
                                <div class="example row">
                                    <i class="fa fa-file-text-o fa-3x example_ic align-top col-1"></i>
                                    <div class="example_wrapper col mr-4">
                                        <div class="example_inner text-left py-3 px-4">
                                            <?=__('Siguiendo nuestra simulación de partida sobre la problemática ficticia ')?></br>
                                            <?=__('“¿Cómo podríamos mejorar la comunicación interna?”,')?></br>
                                            <?=__('aquí tienes ejemplos de contenidos que se podrían haber generado en este paso')?>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                        <?= __('Para la Etapa 5, algunos ejemplos de ') ?><i><?= __('retos basados en estados de ánimo') ?></i> <?= __(' podrían ser:') ?> 
                                </p>
                                <table class="reduced table table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="fs22 fw100 w30" style="position: relative;">
                                                <i class="fa fa-chevron-right " style="right: -0.8rem;position: absolute;bottom: 1.1rem;"></i>

                                                <?= __('ESTADO DE ÁNIMO') ?> 
                                            </th>
                                            <th class="fs22 fw100 w30" style="position: relative;">
                                                <?= __('PAINPOINTS') ?> 
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs16">
                                        <tr>
                                            <td scope="row"><?= __(' Motivado') ?></td>
                                            <td><?= __('¿Cómo conseguir que todo el equipo tenga nuestro nivel de motivación?') ?></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2"><?= __('Enfadado') ?></td>
                                            <td><?= __('¿Cómo conseguir que el enfado no se comunique?') ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= __('¿Cómo pasar cuanto antes del enfado a un ánimo más constructivo?') ?></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" rowspan="2"><?= __('Pesimista') ?></td>
                                            <td><?= __('¿Cómo conseguir transformar nuestro pesimismo en optimismo?') ?></td>
                                        </tr>
                                        <tr>
                                            <td><?= __(' ¿Cómo conseguir que sea un éxito a pesar de nuestro pesimismo?') ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <p id="mensaje"></p>
        </div>
        <div class="text-right mt-5">
            <a href="#" id="sendretos" data-toggle="tooltip" title="<?= __('Haz click para enviar') ?>" class="d-inline-block">
                <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
            </a>
        </div>
    </section>
    <div>

    </div>
</main>

<script>
    var page = 57;
    function checkPage() {
        $.get("<?= $this->Url->build(["controller" => "Game", "action" => "pageactive"]) ?>",
                function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 1000);
                    } else {
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';
                    }

                });

    }
    $(function () {
<?php if (!$admin) { ?>

            $('#sendretos').click(function () {
                var datos = []
                var ids = [<?= join(",", $ids) ?>];
                for (i = 0; i < 3; i++) {
                    if (!$('#com' + i).val()) {
                        $('#com' + i).focus();
                        return;
                    }
                    if (!$("[name='radio" + i + "']:checked").val()) {
                        $("[name='radio" + i + "']").focus();
                        return;
                    }
                    datos.push({"id": ids[i], "valor": $('#com' + i).val(), "ambito": $("[name='radio" + i + "']:checked").val()});

                }

                $.get("<?=
    $this->Url->build(["controller" => "Game", "action" => "savemotions"])
    ?>", {'datos': JSON.stringify(datos)}, function (data, status) {

                    $('#mensaje').html('<?= __('El Jefe de Expedición ha recibido tus comentarios') ?>');
                    setTimeout(checkPage, 1000);
                });

            });
            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "gettime"]) ?>",
                        function (data, status) {
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

