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
                <ul class="nav navbar-nav navbar-right unstyled">
                    <li>
                        <a href="http://misioncero.binnakle.com/">Inicio</a>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Introducir problemática') . '<i class="fa fa-home fa-lg float-right"></i>', ['controller' => 'Build', 'action' => 'trouble'], ['escape' => false,]
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Crear equipos') . '<i class="fa fa-users fa-lg float-right"></i>', ['controller' => 'Build', 'action' => 'teams'], ['escape' => false,]
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Estado partida') . '<i class="fa fa-play-circle-o fa-lg float-right"></i>', ['controller' => 'Build', 'action' => 'estado'], ['escape' => false,]
                        )
                        ?>
                    </li>
                    <li>
                        <?=
                        $this->Html->link(
                                __('Otro código') . '<i class="fa fa-sign-out fa-lg float-right"></i>', ['controller' => 'Build', 'action' => 'reset'], ['escape' => false,]
                        )
                        ?>
                    </li>
                    <li>
                        <a href="page70">Ranking bikles<i class="fa fa-list-ol fa-lg float-right"></i></a>
                    </li>
                    <li>
                        <a href="page67">Resumen final<i class="fa fa-sitemap fa-lg float-right"></i></a>
                    </li>
                    <li>
                        <a href="resumen.pdf">Exportar resumen final<i class="fa fa-download fa-lg float-right"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
