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
            <div class="row">
                <div class="col">
                    <p><?= __('Top 5 retos prioritarios') ?></p>
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
            <div class="row">
                <div class="col">
                    <p><?= __('Top 5 retos operativos (quick win)') ?></p>
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
