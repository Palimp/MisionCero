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
    <section>
         <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp63.svg", ['class' => 'img-fluid']); ?>
    </header>
        <h4>
            Etapa 7- <i>Pain points</i>
            <br>
            <?=__('Problemática: '.$trouble)?>
        </h4>

        <p class="fs22 green">
            <i class="fa fa-lightbulb-o"></i>
             Identificar los momentos clave de interacción con los diferentes actores de la problemática y sus <i>pain points</i>: puntos críticos o problemas que se presentan en cada momento. 
            <br>
            Convertir los pain points en retos: <i>¿Cómo podríamos…?</i>
            <br>
            <i class="fa fa-comment-o"></i>
            Para una interacción se pueden identificar varios <i>pain points</i>
            <br>
            <i class="fa fa-comment-o"></i>
            Los Exploradores pueden introducir más de un reto por <i>pain point</i>
        </p>


        <p class="fs22 green">
            <?=__('Retos basados en preguntas básicas')?>
        </p>
        <p>
            <?=__('Identificar momentos claves de interacción con clientes internos/externos, usuarios/consumidores, otros actores claves en relación en nuestra problemática. Introducirlos en la columna izquierda.')?>
        <p>
        </p>
        <?=__('Después, para cada uno de estos momentos, listar los “pain points” (puntos dolorosos): puntos críticos o problemas. Introducir estos "pain points en la segunda columna" Se puede introducir más de un "paint point" por interracción.')?>
        </p>
        <p>
            <?=__('Para acabar, lo más importante: transformar los "pain points" en retos (¿Cómo podríamos...?). Introducir los retos en la tercera columna. Pueden introducir más de un reto por pain point')?>
        </p>
        
    </section>
<?php if ($admin) { ?>
    <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
    <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Empezar Etapa 7') ?></button>
<?php } ?>
</main>

<script>
    var page = 430;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page44"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page43"
    ])
    ?>';
            });
<?php } else { ?>
            setTimeout(checkPage, 1000);

            function checkPage() {
                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "pageactive"
    ])
    ?>", function (data, status) {

                    if (data == page) {
                        setTimeout(checkPage, 500);
                    } else {
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

