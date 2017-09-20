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
        <?= $this->Html->image("breadp45.svg", ['class' => 'w-100']); ?>
    </header>
    <section>
        <p>
            Una empresa que fabrica taladradoras quiere reinventarse. El DG insiste en no limitarse a incrementar las ventas actuales: quiere abrir caminos muy novedosos
            </br>
            Qué reto piensa trabajar el equipo:
        </p>
        <table class="reduced table table-striped">
            <tbody>
                <tr>
                    <td scope="row">
                        <span id="fila1">¿Cómo aumentar las ventas de taladradoras?</span>
                    </td>
                    <td class="text-right">
                        <label class="custom-control custom-checkbox">
                            <input id="1" type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator" data-toggle="tooltip" title="Haz click para seleccionar"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span id="fila2">¿Cómo encontrar nuevos ingresos en productos de bricolaje?</span>
                    </td>
                    <td class="text-right">
                        <label class="custom-control custom-checkbox">
                            <input  id="2" type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator" data-toggle="tooltip" title="Haz click para seleccionar"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span id="fila3">¿Cómo generar nuevos ingresos con taladradoras?</span>
                    </td>
                    <td class="text-right">
                        <label class="custom-control custom-checkbox">
                            <input  id="3" type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator" data-toggle="tooltip" title="Haz click para seleccionar"></span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td scope="row">
                        <span id="fila4">¿Cómo ofrecer nuevos servicios al consumidor que quiere hacer agujeros?</span>
                    </td>
                    <td class="text-right">
                        <label class="custom-control custom-checkbox">
                            <input id="4"  type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator" data-toggle="tooltip" title="Haz click para seleccionar"></span>
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-5">
            <div class="alert alert-danger d-inline-block" role="alert">
                <b>
                    ¡Ganarán Bikles los equipos con más comentarios!
                </b>
                </br>
                ¡Perderán Bikles los equipos con menos comentarios!
            </div>
        </div>

    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>

<script>
    var page = 29;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page30"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page28"
    ])
    ?>';
            });
<?php } else { ?>

            $(':checkbox').click(function () {
                id = $(this).attr('id')
                $('#fila' + id).toggleClass('green');
            });
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

