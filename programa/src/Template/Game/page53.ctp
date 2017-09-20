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
        <div class="row no-gutters mb-5">
             <div class="col-12 col-md-auto">
                <p class="fs22">
                    Completar la frase de Einstein
                </p>
            </div>

            <div class="col fs32">
                <div class="d-flex align-items-end flex-column">
                    <div>
                        <h1><time id="clock"><?= $time ?></time></h1>
                        <i class="fa fa-clock-o"></i>
                        <?php
                        if ($admin) {
                            if ($stop) {
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page47'), 'class' => 'd-inline-block'
                                ));
                                ?>
                                <input type="hidden" name="stop" value="1">
                                <button class="btn btn-primary">Parar tiempo</button>
                                <?php
                            } else {
                                echo $this->Form->create('Begin', array(
                                    'url' => array('controller' => 'Game', 'action' => 'page47'), 'class' => 'd-inline-block'
                                ));
                                ?>
                                <input type="hidden" name="start" value="1">
                                <button class="btn btn-primary">Reanudar tiempo</button>
                                <?php
                            }
                        }
                        ?>

                        </form>
                    </div>
                    <div>

                        <?php
                        if ($admin) {

                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page47'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="time" value="30">
                            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="Haz click para añadir tiempo" class="d-inline-block grey_link">
                                <i class="fa fa-plus"></i>
                            </a>
                            </form>
                            <?php
                            echo $this->Form->create('Begin', array(
                                'url' => array('controller' => 'Game', 'action' => 'page47'), 'class' => 'd-inline-block'
                            ));
                            ?>
                            <input type="hidden" name="time" value="-30">
                            <a href="#" onclick="$(this).closest('form').submit()" data-toggle="tooltip" title="Haz click para restar tiempo" class="d-inline-block grey_link">
                                <i class="fa fa-minus"></i>
                            </a>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <p>
            El primer equipo en comunicar la solución gana Bikles
            </br>
            </br>
            <b>Enigma</b>
            </br>
            ¿Por qué lo llamamos el pantano de lo imposible?
        </p>
       <div class="text-center">
            <blockquote class="w-50 fs26 m-auto">
                si tuviera 1 hora para encontrar soluciones para salvar el mundo, invertiría 55 minutos en …
            </blockquote>
        </div>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                ¡3 Bikles para el primer equipo que da la respuesta correcta!
            </div>
        </div>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Acabar fase retos') ?></button>
    <?php } ?>
</main>

<script>
    var page = 52;
    $(function () {


        setTimeout(checkTime, 1000);
        function checkTime() {

            $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                if (data != "0" && data != "00:00") {

                    $('#clock').html(data);
                    setTimeout(checkTime, 1000);
                } else {

                    alert("Se acabó el tiempo");
                    location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page54"
    ])
    ?>';
                }
            });
        }
<?php if ($admin) { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page54"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page52"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

