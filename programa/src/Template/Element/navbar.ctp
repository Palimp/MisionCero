<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>
<nav id="mainNav" class="navbar" style="position: absolute; top: 4px; right: 1rem;  z-index: 50;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div>
        <div class="float-right">
            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-1"style="margin-bottom: 18px;">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars mr-2"></i>
                Menú Jefe de Expedición
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="bg-colors collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://misioncero.binnakle.com/">Inicio</a>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Introducir problemática'), ['controller' => 'Build', 'action' => 'trouble']
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Crear equipos').'<i class="fa fa-trash fa-lg float-right"></i>',
                                ['controller' => 'Build', 'action' => 'teams'],
                                ['escape' => false,]
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Estado partida'), ['controller' => 'Build', 'action' => 'estado']
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Otro código'), ['controller' => 'Build', 'action' => 'reset']
                        )
                        ?>
                    </li>
                    <li>
                        <a class="" href="#">Ranking bikles</a>
                    </li>
                    <li>
                        <a class="" href="#">Resumen final</a>
                    </li>
                    <li>
                        <a class="" href="#">Exportar resumen final</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
