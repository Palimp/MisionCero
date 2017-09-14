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
      <section>
        <p class="fs22">
          Acabarán la partida con una <b>lista de retos concretos, priorizados y clasificados por ambito,</b> que les permitirán trabajar su problemática de manera concreta y enfocada, <b>optimizando la búsqueda de soluciones novedosas</b>
        </p>
        <div class="text-right">
          <a href="#" class="mr-2" data-toggle="tooltip" title="Haz click para descargar"><i class="fa fa-download"></i></a>
          <a href="#" data-toggle="tooltip" title="Haz click para imprimir">
            <i class="fa fa-print"></i>
          </a>          
        </div>
        <p class="fs22">
          Problemática inicial:
        </p>
        <h2 class="text-center green">
          ¿Cómo………………………………?
        </h2>
        <p class="fs22 mt-5">
          Tabla resumen de los retos
        </p>
        <article class="row mt-2">
          <div class="col mr-4 pz-4 t5_p">
            <h4 class>TOP 5 RETOS PRIORITARIOS</h4>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
          </div>
          <div class="col ml-4 pz-4 t5_qw">
            <h4>TOP 5 RETOS OPERATIVOS (QUICK WINS)</h4>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
            <p>¿Cómo………………………………?</p>
          </div>
        </article>
        <article class="mt-5">
          <p class="fs22">
            Ámbitos
          </p>
          <div id="accordion_a_ex" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="progressa" role="tab" id="h_a1_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a1_ex" aria-expanded="true" aria-controls="c_a1_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #D9E095;">
                    <p class="mb-0">
                      Proceso interno
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a1_ex" class="collapse" role="tabpanel" aria-labelledby="h_a1_ex">
                <div class="card-block">
                  
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a2_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a2_ex" aria-expanded="false" aria-controls="c_a2_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FEFBC5;">
                    <p class="mb-0">
                      Recursos
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a2_ex" class="collapse" role="tabpanel" aria-labelledby="h_a2_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a3_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a3_ex" aria-expanded="false" aria-controls="c_a3_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #E1F5EC;">
                    <p class="mb-0">
                      Comercial
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a3_ex" class="collapse" role="tabpanel" aria-labelledby="h_a3_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a4_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a4_ex" aria-expanded="false" aria-controls="c_a4_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FEE4BD;">
                    <p class="mb-0">
                      Comunicación
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a4_ex" class="collapse" role="tabpanel" aria-labelledby="h_a4_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a5_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a5_ex" aria-expanded="false" aria-controls="c_a5_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FFE1FF;">
                    <p class="mb-0">
                      Organización
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a5_ex" class="collapse" role="tabpanel" aria-labelledby="h_a5_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a6_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a6_ex" aria-expanded="false" aria-controls="c_a6_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #E1F5FF;">
                    <p class="mb-0">
                      Supply
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a6_ex" class="collapse" role="tabpanel" aria-labelledby="h_a6_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p class="mb-0">
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_a7_ex">
                <a data-toggle="collapse" data-parent="#accordion_a_ex" href="#c_a7_ex" aria-expanded="false" aria-controls="c_a7_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FFD8D9;">
                    <p class="mb-0">
                      Otros
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_a7_ex" class="collapse" role="tabpanel" aria-labelledby="h_a7_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>
        <article class="mt-5">
          <p class="fs22">
            Tipologia
          </p>
          <div id="accordion_t_ex" role="tablist" aria-multiselectable="true">
            <div class="card">
              <div class="progressa" role="tab" id="h_t1_ex">
                <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t1_ex" aria-expanded="true" aria-controls="c_t1_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #D9E095;">
                    <p class="mb-0">
                      Ambicioso
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_t1_ex" class="collapse" role="tabpanel" aria-labelledby="h_t1_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_t2_ex">
                <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t2_ex" aria-expanded="false" aria-controls="c_t2_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #FEFBC5;">
                    <p class="mb-0">
                      Normal
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_t2_ex" class="collapse" role="tabpanel" aria-labelledby="h_t2_ex">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="progressa" role="tab" id="h_t3_ex">
                <a data-toggle="collapse" data-parent="#accordion_t_ex" href="#c_t3_ex" aria-expanded="false" aria-controls="c_t3_ex" class="w-100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; background-color: #E1F5EC;">
                    <p class="mb-0">
                      Quick Win
                    </p>
                  </div>
                </a>
              </div>
              <div id="c_t3_ex" class="collapse" role="tabpanel" aria-labelledby="h_t3">
                <div class="card-block">
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                  <p>
                    ¿Cómo………………………………?
                  </p>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>
        <?php if ($admin) { ?>
        <button  id="anterior" type="button" class="btn btn-primary mb-10"><?= __('Anterior') ?></button>
        <button  id="siguiente" type="button" class="btn btn-primary mb-10"><?= __('Siguiente') ?></button>
    <?php } ?>
    </main>
<script>
    var page = 5;
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
        "action" => "page6"
    ])
    ?>';
            });
            $('#anterior').click(function () {
                location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "page4"
    ])
    ?>';
            });
<?php } ?>

    });
</script>

