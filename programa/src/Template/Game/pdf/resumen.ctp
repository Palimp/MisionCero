<main>
    <div class="text-center">
        <h4 class="title_alt"><?= __('Binnakle Mission 0 - ') . $sesion['trouble'] ?></h4>
    </div>
    <section class="container">
        <div class="fs22 text-center mb-4">
            <?= __('Código ') . $sesion['code'] ?>
        </div>
        <div class="row">
            <div class="col">
                <p><?= __('Fecha :') . date('d/m/Y') ?></p>
                <p><?= __('Equipos') ?></p>
                <ul>
                    <?php
                    foreach ($teams as $team) {
                        ?>
                        <li><?= $team['name'] ?><br/>
                            <?= __('Participantes: ') . $team['members'] ?>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
            <div class="row mt-2">
                <div class="col mr-4 pz-4 t5_p">
                    <h5 class><?= __('TOP 5 RETOS PRIORITARIOS') ?></h5>
                    <ul>
                        <?php
                        foreach ($comments as $comment) {
                            ?>
                            <li><?= $comment['question'] ?>

                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col ml-4 pz-4 t5_qw">
                <h5><?= __('TOP 5 RETOS OPERATIVOS (QUICK WINS)') ?></h5>
                    <ul>
                        <?php
                        foreach ($quick as $comment) {
                            ?>
                            <li><?= $comment['question'] ?>

                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><?= __('Retos con votos') ?></p>
                    <ul>
                        <?php
                        foreach ($con as $comment) {
                            ?>
                            <li><?= $comment['question'] ?>

                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p><?= __('Retos sin votos') ?></p>
                    <ul>
                        <?php
                        foreach ($sin as $comment) {
                            ?>
                            <li><?= $comment['question'] ?>

                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
    </section>
</main>
