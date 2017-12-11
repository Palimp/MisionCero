<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
echo $this->element('navbar');

$fila = '<div class="row bloque">
            <div class="col">
                <div class="d-inline">
                    ' . $this->Form->input(
                'name[]', [
            'type' => 'select',
            'multiple' => false,
            'options' => $names,
            'empty' => __('Selecciona el nombre del equipo'),
            'label' => '',
            'class' => 'custom-select ml-2'
        ]) . '
                </div>
            </div>
            <div class="col-8">

                <div class="row form-group">
                    <div class="col pl-0">
                        <input name="members[]"  type="text" class="form-control" placeholder="' . __('Nombre de los jugadores separados por comas') . '">
                    </div>
                    <div class="col-12 col-md-auto">
                        <a href="#" data-toggle="tooltip" title="' . __('Haz click para eliminar el equipo') . '" class="d-inline-block">
                            <i class="fa fa-trash fa-2x"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        ';
?>

<main>
    <section>
        <p class="fs22">
            ¡Competiremos por equipos!
        </p>
        <p>
            Cada equipo podrá ganar o perder Bikles, la moneda de la expedición, en cada etapa, en función de 4 criterios: la cantidad de contenido generado, la calidad de estos contenidos, el ingenio en las paradas lúdicas y ... ¡la suerte que siempre tiene un papel en las aventuras!
            </br>
            </br>
            Como Jefe de Expedición, puedes formar los equipos antes de la partida y así tener todo preparado.
            </br>
            </br>
            Si no dispones todavía de toda la información para formar los equipos, no te preocupes porque lo podrás hacer al inicio de la partida con los Exploradores (jugadores).
            </br>
            En este caso, pulsa abajo en “lo haré más adelante”
            </br>
            </br>
            Si quieres formar los equipos ahora:
            </br>

            1. Elije un nombre de equipo
            </br>
            2. Introduce los nombres de sus miembros, separados por comas (¡importante!)
            </br>
            3. Repite el proceso hasta formar todos los equipos que participarán a la partida
        </p>
        <?php
        echo $this->Form->create('Teams', array(
            'url' => array('controller' => 'Build', 'action' => 'teams'),
            "id"=>'team'
        ));
        echo $this->Form->input(
                                'names', [
                            'type' => 'hidden',
                             'value'=> serialize($names)
                        ]);
        ?>
        <div class="row">
            <div class="col">
                <p class="fs22">
                    Equipo
                </p>

            </div>
            <div class="col-8">
                <p class="fs22">
                    Jugadores
                </p>


            </div>
        </div>
        <?php
        foreach ($teams as $team) {
            ?>
            <div class="row bloque">
                <div class="col">

                    <div class="d-inline">
              <!--          <img class="img-fluid" style="height: 50px; width: 50px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22771%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20771%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15ddcba636d%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15ddcba636d%22%3E%3Crect%20width%3D%22771%22%20height%3D%22250%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22285.7421875%22%20y%3D%22143%22%3E771x250%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">-->
                        <?php
                        echo $this->Form->input(
                                'name[]', [
                            'type' => 'select',
                            'multiple' => false,
                            'options' => $names,
                            'empty' => __('Selecciona el nombre del equipo'),
                            'label' => '',
                            'class' => 'custom-select ml-2',
                            'default' => array_search($team[1],$names)
                        ]);
                        ?>


                    </div>
                </div>
                <div class="col-8">

                    <div class="row form-group">
                        <div class="col pl-0">
                            <input name="members[]"  type="text" class="form-control" placeholder="Nombre de los jugadores separados por comas" value="<?= $team[2] ?>">
                            <input name="ids[]"  type="hidden" class="form-control"  value="<?= $team[3] ?>">
                        </div>
                        <div class="col-12 col-md-auto">
                            <a href="#" data-toggle="tooltip" title="Haz click para eliminar el equipo" class="d-inline-block">
                                <i class="fa fa-trash fa-2x"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <?php
        }
        ?>
        <!--   <div class="row bloque">
               <div class="col">
   
                   <div class="d-inline">
        <?php
        echo $this->Form->input(
                'name[]', [
            'type' => 'select',
            'multiple' => false,
            'options' => $names,
            'empty' => __('Selecciona el nombre del equipo'),
            'label' => '',
            'class' => 'custom-select ml-2'
        ]);
        ?>
   
   
                   </div>
               </div>
               <div class="col-8">
   
                   <div class="row form-group">
                       <div class="col pl-0">
                           <input name="members[]"  type="text" class="form-control" placeholder="<?= __('Nombre de los jugadores separados por comas') ?>">
                       </div>
                       <div class="col-12 col-md-auto">
                           <a href="#" data-toggle="tooltip" title="<?= __('Haz click para eliminar el equipo') ?>" class="d-inline-block">
                               <i class="fa fa-trash fa-2x"></i>
                           </a>
                       </div>
                   </div>
   
               </div>
           </div>
           
        -->
        <?= $fila ?>
        <div id="formsubmit" class="col-1 col-md-auto">
            <a href="#" id="addteam" data-toggle="tooltip" title="<?= __('Haz click para añadir un equipo') ?>" class="d-inline-block">
                <i class="fa fa-plus fa-2x"></i>
            </a>
        </div>
        <button type="button" id="saveteam" class="btn btn-primary mb-10"><?= __('Guardar equipos') ?></button>
        </div>
        </form>
    </section>
</main>

<script>
    $(function () {

        $('.fa-trash').click(function () {
            if (confirm('<?= __('¿Está seguro?') ?>')) {
                $(this).closest(".bloque").remove();
            }
        });

        $('#addteam').click(function () {

            $('#formsubmit').before('<?= str_replace("\n", " ", $fila) ?>');

        });
        $('#saveteam').click(function () {
            $('#team').submit();
        });
        $('select').change(function(){
            var a=$(this);
             $('select').not(this).each(function(  ) {
                 if(a.val()==$(this).val()){
                     a.val('');
                 }
             });
             
            
        });

    });

</script>
