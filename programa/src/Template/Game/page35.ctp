<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
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
    <section class="container text-center">
        <p class="h_green">
            <?=__('Actores')?>
        </p>
        <p>
            <i class="fa fa-lightbulb-o"></i>
            <?=__('Entre todos los retos generados, ahora cada equipo selecciona')?> 
            <b><?=__('los 3 más relevantes y novedosos')?></b>
            <?=__('para explorar nuevas líneas de trabajo de la problemática')?>
        </p>
        
        <?php if ($admin) { ?>
            <p>
                <?=__('Cuando todos los equipos hayan finalizado su votación, pulsa ”Continuar Etapa”')?>
            </p>  
            <div id="hasvoted"></div>
        <?php } else { ?>
            <table class="reduced table table-striped">
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td scope="row" >
                                <span id="com<?= $comment['id'] ?>"> <?= $comment['question'] ?></span>
                            </td>
                            <td class="text-right">
                                <label class="custom-control custom-checkbox">
                                    <input id='<?= $comment['id'] ?>' type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator" data-toggle="tooltip" title="<?=__('Haz click para seleccionar')?>"></span>
                                </label>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="text-right mt-2">
                <a href="#" id="submitcomment" data-toggle="tooltip" title="<?=__('Haz click para enviar')?>" class="d-inline-block">
                    <button type="buttonx" class="btn btn-primary"><?= __('Valida') ?></button>
                </a>
            </div>
        <?php } ?>
    
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Continuar a Etapa 3') ?></button>
          </div>
      <?php } ?>
    </section>
</main>


<script>
    var page = 35;
    var chequeados = [];
    $(function () {
<?php if ($admin) { ?>

setTimeout(checkVote, 1000);
            function checkVote() {
                $.get("<?= $this->Url->build(["controller" => "Game", "action" => "checkvote"]) ?>",
                        {'table': 'stakes'}, function (data, status) {
                           
                    if (data == 0) {
                        $('#hasvoted').html('<p style="color:red"><b><?= __('Los equipos aún están votando') ?></b></p>')
                        setTimeout(checkVote, 1000);
                    } else {
                        $('#hasvoted').html('<p style="color:green"><b><?= __('Todos los equipos han votado. Ya puedes pulsar en “Continuar Etapa”') ?></b></p>')

                    }

                });
            }
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page36"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page34"
    ])
    ?>';
            });
<?php } else { ?>
            $('#submitcomment').click(function () {
                if (chequeados.length == 3) {
                    
                    $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "selectstake"
    ])
    ?>", {'ids': JSON.stringify(chequeados)}, function (data, status) {
console.log(data);
                        location.href = '<?= $this->Url->build(["controller" => "Game", "action" => "index"]) ?>';

                    });
                } else {
                    alert("<?=__('Debe elegir tres comentarios')?>");
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

