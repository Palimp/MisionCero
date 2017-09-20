<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<!-- ** pag p15 ** -->
<main>
    <header class="text-center m-5 mb-10">
        <?= $this->Html->image("breadp49.svg", ['class' => 'img-fluid']); ?>
    </header>
    <section>
        <div class="row no-gutters mb-5">
            <div class="col-12 col-md-auto">
                <p class="fs22">
                    <?= __('Cada equipo selecciona en que ámbito colocar los 3 retos que le parece más relevantes') ?>
                </p>
            </div>

        </div>
        <?php
        for ($i = 0; $i < count($comments); $i++) {
            ?><p>
            <b class="fs22">
                <?= $comments[$i]->question ?>
            </b>


            <b>
                Ámbito: 


                <?= $ambits[$comments[$i]->ambit-1]->ambit ?>
            </b>
            </p>
        <?php } ?>
        
    </section>

</main>

<script>
    var page = 36;

    $(function () {
<?php if (!$admin) { ?>

            $('#sendretos').click(function () {
                var datos = []
                for (i = 0; i < 3; i++) {
                    if (!$('#reto' + i).val()) {
                        $('#reto' + i).focus();
                        return;
                    }
                    if (!$("[name='radio" + i + "']:checked").val()) {
                        $("[name='radio" + i + "']").focus();
                        return;
                    }
                    datos.push({"reto": $('#reto' + i).val(), "ambito": $("[name='radio" + i + "']:checked").val()});
                    
                }
                $('#datos').val(JSON.stringify(datos));
                $('#team').submit();
            });
            setTimeout(checkTime, 500);
            function checkTime() {

                $.get("<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "gettime"
    ])
    ?>", function (data, status) {
                    if (data != "0" && data != "00:00") {

                        $('#clock').html(data);
                        setTimeout(checkTime, 500);
                    } else {

                        alert("Se acabó el tiempo");
//                        location.href = '<?=
    $this->Url->build([
        "controller" => "Game",
        "action" => "index"
    ])
    ?>//';
                    }
                });
            }

<?php } ?>

    });
</script>

