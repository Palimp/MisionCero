<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;

/**
 * Games Controller
 *
 * @property \App\Model\Table\GamesTable $Games
 *
 * @method \App\Model\Entity\Game[] paginate($object = null, array $settings = [])
 */
class GameController extends AppController {

    var $components = array('Cookie', 'Code');

    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $data = $this->Code->teamsOK($id);
        if (!$sesion['admin']) {
            $team = $this->Code->getTeam();
            if (empty($team) || $data == 0) {
                return $this->redirect(['action' => 'selectteam']);
            } else {
                if ($sesion['page'] == 8) {
                    $comments = $this->Code->getComment($team);
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);

                    $this->set('trouble', $sesion['trouble']);
                    $this->set('time', '');
                    $this->viewBuilder()->template('page8b');
                } else
                if ($sesion['page'] == 11) {
                    $comments = $this->Code->getCommentSel($team);
                    $ambits = $this->Code->getAmbits();
                    $this->set('id', $id);
                    $this->set('team', $team);
                    $this->set('comments', $comments);
                    $this->set('ambits', $ambits);

                    $this->set('time', '');
                    $this->viewBuilder()->template('page11b');
                } else
                if ($sesion['page'] > 1) {
                    $template = 'page' . $sesion['page'];
                    if ($sesion['page'] == 9) {
                        $comments = $this->Code->getTeamComments($id);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 10) {
                        $this->set('id', $id);
                        $this->set('team', $team);
                        $num = $this->Code->getCommentsSel($team);

                        if ($num == 3) {
                            $template = 'page10b';

                            $comments = $this->Code->getCommentSel($team);
                            $this->set('comments', $comments);
                        } else {
                            $comments = $this->Code->getComment($team);
                            $this->set('comments', $comments);
                        }
                    }
                    if ($sesion['page'] == 12) {
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('retos', $this->Code->getRetos($id));
                        $this->set('users', $this->Code->getTeamUsers($team));
                    }
                    if ($sesion['page'] == 13) {
                        $comments = $this->Code->getChallenges($id);
                        $ambits = $this->Code->getAmbits();
                        $this->set('ambits', $ambits);
                        $this->set('admin', $sesion['admin']);
                        $this->set('ranking', $comments);
                    }
                    if ($sesion['page'] == 14 || $sesion['page'] == 17) {
                        $teams = $this->Code->getTeams($id);
                        $this->set('admin', $sesion['admin']);
                        $this->set('teams', $teams);
                    }
                    $this->viewBuilder()->template($template);
                }
            }
        } else {
            $this->Code->setPage($id, 1);
        }
        $this->set('admin', $sesion['admin']);
    }

    public function page2() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 2);
        $this->set('admin', $sesion['admin']);
    }

    public function page3() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 3);
        $this->set('admin', $sesion['admin']);
    }

    public function page4() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 4);
        $this->set('admin', $sesion['admin']);
    }

    public function page5() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 5);
        $this->set('admin', $sesion['admin']);
    }

    public function page6() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 6);
        $this->set('admin', $sesion['admin']);
    }

    public function page7() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 7);
        $this->set('admin', $sesion['admin']);
    }

    public function page8b() {
        $sesion = $this->Code->loadSesion();
    }

    public function page8() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 8);
        $this->set('stop', 1);
        $this->set('time', '');
        $session = $this->request->session();
        $period = 600;
        $session->write('period', $period);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = 600 - $time2->diffInSeconds(); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond(600 - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page9() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 9);
        $comments = $this->Code->getTeamComments($id);
        $this->Code->setScore($id, 1, $this->Code->getOrder($comments));
        $this->set('admin', $sesion['admin']);
        $this->set('ranking', $comments);
    }

    public function page10() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 10);
        $this->set('admin', $sesion['admin']);
    }

    public function page11() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();
        $id = $sesion['id'];
        $this->Code->setPage($id, 11);
        $this->set('stop', 1);
        $this->set('time', '');
        $period = 300;
        $session->write('period', $period);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['time'])) {
                $this->Code->addTime($id, $datos['time']);
            }
            if (!empty($datos['stop'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(); //$time->diff($time2,1)->format('%i:%s');
                $this->Code->setTime($id, -1);
                $session->write('seconds', $sec);
                $this->set('stop', 0);
                $this->set('time', gmdate("i:s", $sec));
            }
            if (!empty($datos['start'])) {
                $time2 = Time::now();
                $sec = $session->read('seconds');
                $time2->subSecond($period - $sec);
                $this->Code->setTime($id, 1, $time2);
                $this->set('stop', 1);
            }
        } else {
            $this->Code->setTime($id);
        }

        $this->set('admin', $sesion['admin']);
        $this->set('trouble', $sesion['trouble']);
    }

    public function page11b() {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            $retos = json_decode($datos['datos']);
            $team = $this->Code->getTeam();
            $this->Code->saveChallenges($team, $retos);
            $this->set('challenges', $retos);
            $ambits = $this->Code->getAmbits();
            $this->set('ambits', $ambits);
            $this->viewBuilder()->template('page11c');
        } else {
            return $this->redirect(
                            ['action' => 'index']
            );
        }
    }

    public function page12() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 12);
        $this->set('admin', $sesion['admin']);
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('retos', $this->Code->getRetos($id));
        $this->set('users', []);
    }

    public function page13() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 13);
        $comments = $this->Code->getChallenges($id);
        $ranking = $this->Code->getChallengeTeams($id);
        $this->Code->setScore($id, 1, $this->Code->getOrder($ranking, 'team_id'));
        $ambits = $this->Code->getAmbits();
        $this->set('ambits', $ambits);
        $this->set('admin', $sesion['admin']);
        $this->set('ranking', $comments);
    }

    public function page14() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 14);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('teams', $teams);
    }
   public function page15() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 15);
        $this->set('admin', $sesion['admin']);
    }
     public function page16() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 16);
        $this->set('admin', $sesion['admin']);
    }
       public function page17() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->Code->setPage($id, 14);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (!empty($datos['sumar'])) {
                $this->Code->addBikles($datos['sumar'], 1);
            }
            if (!empty($datos['restar'])) {
                $this->Code->addBikles($datos['restar'], -1);
            }
        }
        $teams = $this->Code->getTeams($id);
        $this->set('admin', $sesion['admin']);
        $this->set('teams', $teams);
    }
    public function selectteam() {
        $sesion = $this->Code->loadSesion();
        $data = $this->Code->teamsOK($sesion['id']);
        if ($data == 0) {
            $this->loadModel('Teams');
            if ($this->request->is(['patch', 'post', 'put'])) {
                $idteam = $this->Cookie->read('team');
                $datos = $this->request->getData();
                if (!empty($idteam)) {

                    $team = $this->Teams->get($idteam);
                    $team->taken = 0;
                    $this->Teams->save($team);
                }
                $query = $this->Teams->find('all')
                        ->where(['game_id' => $sesion['id'], 'team' => $datos['team']]);
                $team = $query->first();
                $team->taken = 1;
                $this->Teams->save($team);
                $this->Cookie->write('team', $team->id);
            }
            $query = $this->Teams->find()
                            ->where(['game_id' => $sesion['id']])
                            ->order(['team' => 'ASC'])->toArray();
            $this->set('teams', $query);
        } else {
            return $this->redirect(['action' => 'index']);
        }
    }

    public function teamsok() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        if ($this->request->is('ajax')) {
            $data = $this->Code->teamsOK($sesion['id']);
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function pageactive() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        if ($this->request->is('ajax')) {
            $data = $sesion['page'];
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function addcomment() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $datos = $this->request->query;

        $data = $this->Code->addcomment($this->Code->getTeam(), $datos['comment']);
        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function deletecomment() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $datos = $this->request->query;

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            $data = $this->Code->deletecomment($this->Code->getTeam(), $datos['id']);
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function selectcomment() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->selectcomment($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function saveretovotos() {
        $sesion = $this->Code->loadSesion();
        $data = 0;
        $this->viewBuilder()->template('ajax');

        $datos = $this->request->query;
        $data = $this->Code->saveretovotos($this->Code->getTeam(), json_decode($datos['ids']));

        if ($this->request->is('ajax') && !empty($sesion['code'])) {
            
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

    public function gettime() {
        $sesion = $this->Code->loadSesion();
        $session = $this->request->session();

        $period = $session->read('period');
        if (empty($period)) {
            $period = 600;
        }

        $data = 0;
        if ($this->request->is('ajax')) {
            if (!empty($sesion['time1'])) {
                $time2 = new Time($sesion['time1']);
                $sec = $period - $time2->diffInSeconds(); //$time->diff($time2,1)->format('%i:%s');
                if ($sec > 0) {
                    $data = gmdate("i:s", $sec);
                } else {
                    $data = "00:00";
                }
            } else {
                $data = "0";
            }
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');
    }

}
