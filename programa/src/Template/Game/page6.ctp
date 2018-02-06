<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
if ($admin) {
    echo $this->element('navbar');
}
?>

<main style="background-color: #e3e3e3;">
    <div class="text-center">
        <h4 class="title_alt"><?=__('Binnakle Mission 0 -Resultado de la partida') ?></h4>
    </div>
  </div>

  <section class="container">
      <p class="fs22 text-center">
        <?=__('Problemática inicial: ¿Cómo………………………………?')?>
      </p>
      <p class="fs22 text-center">
        <?=__('Tabla resumen de los retos')?>
      </p>
      <article class="row">
        <div class="col mr-4 pz-4 t5_p">
          <h5 class><?=__('TOP 5 RETOS PRIORITARIOS')?></h5>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
        </div>
        <div class="col ml-4 pz-4 t5_qw">
          <h5><?=__('TOP 5 RETOS OPERATIVOS (QUICK WINS)')?></h5>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
          <p><?=__('¿Cómo………………………………?')?></p>
        </div>
      </article>
      <article class="row mt-3">
        <div class="col">
          <p class="fs22">
            <?=__('ÁMBITOS')?>
          </p>
          <div id="accordion_a_ex" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="progressa" role="tab" id="h_a1_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a1_ex" aria-expanded="true" aria-controls="c_a1_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%; background-color: #ebfa94;">
                    <p class="mb-0">
                      <?=__('Proceso interno')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a1_ex" class="collapse" role="tabpanel" aria-labelledby="h_a1_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a2_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a2_ex" aria-expanded="false" aria-controls="c_a2_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%; background-color: #f3ed48;">
                    <p class="mb-0">
                      <?=__('Recursos')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a2_ex" class="collapse" role="tabpanel" aria-labelledby="h_a2_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a3_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a3_ex" aria-expanded="false" aria-controls="c_a3_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%; background-color: #f2e500;">
                    <p class="mb-0">
                      <?=__('Comercial')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a3_ex" class="collapse" role="tabpanel" aria-labelledby="h_a3_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a4_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a4_ex" aria-expanded="false" aria-controls="c_a4_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%; background-color: #e5da00;">
                    <p class="mb-0">
                      <?=__('Comunicación')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a4_ex" class="collapse" role="tabpanel" aria-labelledby="h_a4_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a5_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a5_ex" aria-expanded="false" aria-controls="c_a5_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%; background-color: #d1d600;">
                    <p class="mb-0">
                      <?=__('Organización')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a5_ex" class="collapse" role="tabpanel" aria-labelledby="h_a5_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a6_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a6_ex" aria-expanded="false" aria-controls="c_a6_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; background-color: #bcca00;">
                    <p class="mb-0">
                      <?=__('Supply')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a6_ex" class="collapse" role="tabpanel" aria-labelledby="h_a6_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p class="mb-0">
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a7_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a7_ex" aria-expanded="false" aria-controls="c_a7_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%; background-color: #a1c41f;">
                    <p class="mb-0">
                      <?=__('Otros')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a7_ex" class="collapse" role="tabpanel" aria-labelledby="h_a7_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <p class="fs22">
            <?=__('TIPOLOGÍA')?>
          </p>
          <div id="accordion_t_ex" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="progressa" role="tab" id="h_t1_ex">
                <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t1_ex" aria-expanded="true" aria-controls="c_t1_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; background-color: #ebfa94;">
                    <p class="mb-0">
                      <?=__('Ambicioso')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_t1_ex" class="collapse" role="tabpanel" aria-labelledby="h_t1_ex">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_t3_ex">
                <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t3_ex" aria-expanded="false" aria-controls="c_t3_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #f2e500;">
                    <p class="mb-0">
                      <?=__('Quick Win')?>
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_t3_ex" class="collapse" role="tabpanel" aria-labelledby="h_t3">
                <div class="card-block">
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                  <p>
                    <?=__('¿Cómo………………………………?')?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
      <?php if ($admin) { ?>
          <div class="my-4 text-right">
              <button  id="anterior" type="button" class="btn btn-primary"><?= __('Anterior') ?></button>
              <button  id="siguiente" type="button" class="btn btn-primary"><?= __('Siguiente') ?></button>
          </div>
      <?php } ?>
    </section>
</main>

<script>
    var page = 6;
    $(function () {
<?php if (!$admin) { ?>
            setTimeout(checkPage, 500);

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
<?php } else { ?>
            $('#siguiente').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page7"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page5"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

