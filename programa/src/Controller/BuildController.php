<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Games Controller
 *
 * @property \App\Model\Table\GamesTable $Games
 *
 * @method \App\Model\Entity\Game[] paginate($object = null, array $settings = [])
 */
class BuildController extends AppController {

    var $components = array('Cookie', 'Code');

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        
    }

    public function begin() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->loadModel('Games');
        $game = $this->Games->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            
            if ($datos['ok']) {
                $game->active = 1;
                if ($this->Games->save($game)) {
                    $this->Flash->success(__('La partida ha empezado.'));

                    return $this->redirect(['action' => 'index']);
                }
            }
        } else {
            $this->loadModel('Teams');
            $query = $this->Teams->find()
                    ->where(['game_id' => $id])
                    ->order(['team' => 'ASC']);
            $teams = [];
            foreach ($query as $row) {
                $teams[] = [$row->team, $row->name, $row->members];
            }
            $this->set('trouble', $game->trouble);
            $this->set('teams', $teams);
        }
    }

    public function trouble() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->loadModel('Games');
        $game = $this->Games->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $game = $this->Games->patchEntity($game, $this->request->getData());
            if ($this->Games->save($game)) {
                $this->Flash->success(__('La problemática se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La problemática no se ha guardado. Inténtelo de nuevo'));
        }

        $this->set('trouble', $game->trouble);
    }

    public function teams() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];

        $this->loadModel('Teams');
        $query = $this->Teams->find()
                ->where(['game_id' => $id])
                ->order(['team' => 'ASC']);
        $teams = [];
        foreach ($query as $row) {
            $teams[] = [$row->team, $row->name, $row->members];
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->Teams->deleteAll(['game_id' => $id]);
            $datos = $this->request->getData();
            $datos['names'] = unserialize($datos['names']);
            for ($i = 0; $i < count($datos['name']); $i++) {
                if (!empty($datos['name'][$i]) && !empty($datos['members'][$i])) {
                    $team = $this->Teams->newEntity();
                    $team->game_id = $id;
                    $team->team = $i + 1;

                    $team->name = $datos['names'][$datos['name'][$i]];
                    $team->members = $datos['members'][$i];
                    if (!$this->Teams->save($team)) {
                        $this->Flash->error(__('Algún equipo no se ha guardado. Inténtelo de nuevo'));
                    }
                }
            }

            $this->Flash->success(__('Los equipos se han guardado.'));

            return $this->redirect(['action' => 'index']);
        }

        $this->set('teams', $teams);
        $this->set('names', $this->Code->getNames());
    }

}
