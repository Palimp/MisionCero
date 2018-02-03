<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<main class="text-center">
    <header>
        <?= $this->Html->image("breadp45.svg", ['class' => 'img-fluid']); ?>
    </header>
    <div class="title_wrap">
      <span class="title">
        <?=__('Problemática: '.$trouble)?>
      </span>
    </div>
    <div>
        <p class="title_first pb-4">
            <?= __('Parada lúdica 2') ?>
        </p>
    </div>
    <section class="container">
        <p class="h_green">
            Casos prácticos
        </p>
        <ul>
            <li>
                <i class="fa fa-comment-o"></i>
                A continuación se presentará el caso de una empresa a los exploradores<br>
                Deberán seleccionar el reto que mejor podrá ayudarles a cumplir el objetivo planteado
            </li>
        </ul>
        <div class="text-center mt-5">
            <div class="alert d-inline-block" role="alert">
                 La distribución de Bikles dependerá de la respuesta elegida: si seleccionan retos que pueden abrir nuevas vías de trabajo, ganarán Bikles! (según el criterio de Binnakle <i class="fa fa-smile-o"></i>). En caso contrario, perderán Bikles.
            </div>
        </div>

      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Iniciar Caso práctico') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 28;
    $(function () {
<?php if ($admin) { ?>


            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page29"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page27"
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

