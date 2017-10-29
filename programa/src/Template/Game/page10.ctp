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
        <?= $this->Html->image("breadp15.svg", ['class' => 'img-fluid']); ?>
    </header> 
    <section>
        <p class="fs22">
            ¿Cómo hablamos de la problemática de manera espontánea e informal?
        </p>
        <p>
            Pensar en los comentarios negativos o positivos internos más habituales sobre la problemática (en reuniones, delante de la máquina de café, quejas de clientes o usuarios, etc.)
        </p>
        <p>
            Seleccionad los tres mejores retos para enfocarse en ellos.
        </p>
        <?php if ($admin) { ?>
            <div id="hasvoted"></div>
        <?php } else { ?>
            <table class="reduced table table-striped">
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td scope="row" >
                                <span id="com<?= $comment['id'] ?>"> <?= $comment['comment'] ?></span>
                            </td>
                            <td class="text-right">
                                <label class="custom-control custom-checkbox">
                                    <input id='<?= $comment['id'] ?>' type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="Haz click para seleccionar"></span>
                                </label>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="text-right mt-5">
                <a href="#" id="submitcomment" data-toggle="tooltip" title="Haz click para enviar" class="d-inline-block">
                    <i class="fa fa-check fa-2x"></i>
                </a>
            </div>
        <?php } ?>
    </section>
    <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
</main>

<script>
    var page = 10;
    var chequeados = [];
    $(function () {
<?php if ($admin) { ?>

            setTimeout(checkVote, 1000);
            function checkVote() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "checkvote"]) ?>",
                        {'table': 'comments'}, function (data, status) {
                           
                    if (data == 0) {
                        $('#hasvoted').html('<p style="color:red"><b><?= __('Faltan equipos por votar') ?></b></p>')
                        setTimeout(checkVote, 1000);
                    } else {
                        $('#hasvoted').html('<p style="color:green"><b><?= __('Todos los equipos han votado') ?></b></p>')

                    }

                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page11"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page9"
    ])
    ?>';
            });
<?php } else { ?>
            $('#submitcomment').click(function () {
                if (chequeados.length == 3) {
                    $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "selectcomment"
    ])
    ?>", {'ids': JSON.stringify(chequeados)}, function (data, status) {

                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>';
                    });
                } else {
                    alert("Debe elegir tres comentarios");
                }
            });
            $(':checkbox').click(function () {
                id = $(this).attr('id')
                $('#com' + id).toggleClass('green');
                var index = chequeados.indexOf(id);
                if (index == -1) {
                    chequeados.push(id);
                } else {

                    chequeados.splice(index, 1);
                }

            });
<?php } ?>
    });
</script>

