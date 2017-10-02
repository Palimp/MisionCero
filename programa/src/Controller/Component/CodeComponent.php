<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;

class CodeComponent extends Component {

    var $components = array('Cookie');

    public function getCode() {
        $letras = "ABCEFGHJKLMNPRTUWXYZ2346789";
        $res = $letras[rand(0, strlen($letras) - 1)];
        for ($i = 0; $i < 5; $i++) {
            do {
                $letra = $letras[rand(0, strlen($letras) - 1)];
            } while (strpos($res, $letra) !== false);
            $res .= $letra;
        }
        return $res;
    }

    public function checkCode($code) {
        $games = TableRegistry::get('Games');
        $query = $games->find('all')
                ->where(['code1' => $code]);

        $row = $query->first();
        if (!empty($row)) {
            if ($row->expiration > Time::now()) {
                return 1;
            } else {
                return 2;
            }
        }
        $query = $games->find('all')
                ->where(['code2' => $code]);

        $row = $query->first();
        if (!empty($row)) {
            if ($row->expiration > Time::now()) {
                return 3;
            } else {
                return 4;
            }
        }
        return 0;
    }

    public function getRow($code, $type = 1) {
        $games = TableRegistry::get('Games');
        $query = $games->find('all')
                ->where(['code' . $type => $code]);

        $row = $query->first();
        return $row;
    }

    public function getNames() {
        $games = TableRegistry::get('Names');
        $query = $games->find('all');
        $names = [];
        foreach ($query as $row) {
            $names[] = $row->name;
        }

        return $names;
    }

    public function getAmbits() {
        $games = TableRegistry::get('Ambits');
        $query = $games->find('all')->toArray();

        return $query;
    }

    public function getCodeId($code) {

        $row = $this->getRow($code);
        if (empty($row)) {
            $row = $this->getRow($code, 2);
        }
        if (empty($row)) {
            return 0;
        } else {
            return $row->id;
        }
    }

    public function loadSesion() {
        $code = $this->Cookie->read('code');

        if (!empty($code)) {
            $admin = $this->Cookie->read('admin');
            if (empty($admin)) {
                $row = $this->getRow($code, 2);
            } else {
                $row = $this->getRow($code);
            }

            if (!empty($row)) {
                $this->setSesion($row->id, $code, $admin, $row->active, $row->page, $row->trouble, $row->time1);
                return ['id' => $row->id, 'code' => $code, 'admin' => $admin, 'active' => $row->active, 'page' => $row->page, 'trouble' => $row->trouble, 'time1' => $row->time1];
            }
        }
    }

    public function getTeam() {
        return $this->Cookie->read('team');
    }

    public function setPage($id, $page) {
        $games = TableRegistry::get('Games');
        $game = $games->get($id);
        $game->page = $page;
        $games->save($game);
    }

    public function getTeamComments($id) {
        $conn = ConnectionManager::get('default');

        $query = $conn->execute('select teams.*, count(comments.id) as num from teams left join comments on teams.id=comments.team_id where game_id=' . $id . " group by teams.id order by num desc");
        return $query->fetchAll('assoc');
    }

    public function getTeamQuestions($id, $table = 'questions') {
        $conn = ConnectionManager::get('default');

        $query = $conn->execute('select teams.*, count(' . $table . '.id) as num from teams left join ' . $table . ' on teams.id=' . $table . '.team_id where game_id=' . $id . " group by teams.id order by num desc,team asc");
        return $query->fetchAll('assoc');
    }

    public function getComment($id) {
        $comments = TableRegistry::get('Comments');

        $comment = $comments->find('all')
                        ->where(['team_id' => $id])->toArray();
        return $comment;
    }

    public function getQuestion($id, $table = 'Questions') {
        $comments = TableRegistry::get($table);

        $comment = $comments->find('all')
                        ->where(['team_id' => $id])->toArray();
        return $comment;
    }

    public function getTeamUsers($id) {
        $table = TableRegistry::get('Teams');

        $team = $table->get($id);
        $users = explode(',', $team->members);
        return array_map('trim', $users);
    }

    public function getCommentSel($id) {
        $comments = TableRegistry::get('Comments');

        $comment = $comments->find('all')
                        ->where(['team_id' => $id, 'sel' => 1])->toArray();
        return $comment;
    }

    public function getQuestionSel($id, $table = 'Questions') {
        $comments = TableRegistry::get($table);

        $comment = $comments->find('all')
                        ->where(['team_id' => $id, 'sel' => 1])->toArray();
        return $comment;
    }

    public function getQuestionAmbit($id, $table = 'Questions') {
        $comments = TableRegistry::get($table);

        $comment = $comments->find('all')
                        ->where(['team_id' => $id, 'sel' => 1, 'ambit >' => '0'])->toArray();

        return $comment;
    }

    public function saveChallenges($team_id, $challenges) {
        $table = TableRegistry::get('Challenges');
        $table->deleteAll(['team_id' => $team_id]);
        foreach ($challenges as $challenge) {
            $c = $table->newEntity();
            $c->team_id = $team_id;
            $c->challenge = $challenge->reto;
            $c->ambit = empty($challenge->ambito) ? 10 : $challenge->ambito;
            $table->save($c);
        }
    }

    public function saveQuestions($team_id, $challenges, $table = 'Questions') {

        $table = TableRegistry::get($table);
        foreach ($challenges as $challenge) {
            $c = $table->get($challenge->id);
            $c->ambit = $challenge->ambito;
            $table->save($c);
        }
    }

    public function saveFeelings($team_id, $challenges) {

        $table = TableRegistry::get('FeelingsTeams');
        $table->deleteAll(['team_id' => $team_id]);
        foreach ($challenges as $challenge) {
            $f = $table->newEntity();
            $f->team_id = $team_id;
            $f->feeling_id = $challenge;
            $table->save($f);
        }
    }

    public function addcomment($id, $commen) {
        $comments = TableRegistry::get('Comments');
        $comment = $comments->newEntity();
        $comment->team_id = $id;
        $comment->comment = $commen;

        $comments->save($comment);
        return $comment->id;
    }

    public function deletecomment($id, $idc) {
        $comments = TableRegistry::get('Comments');
        $comment = $comments->find('all')
                ->where(['id' => $idc, 'team_id' => $id,]);
        $c = $comment->first();


        return $comments->delete($c);
    }

    public function selectcomment($team_id, $ids) {
        $comments = TableRegistry::get('Comments');
        foreach ($ids as $id) {
            $comment = $comments->find('all')
                            ->where(['id' => $id, 'team_id' => $team_id,])->first();
            $comment->sel = 1;
            if (!$comments->save($comment)) {
                return 0;
            }
        }
        return 1;
    }

    public function addquestion($id, $commen, $table = 'Questions') {
        $comments = TableRegistry::get($table);
        $comment = $comments->newEntity();
        $comment->team_id = $id;
        $comment->question = $commen;

        $comments->save($comment);
        return $comment->id;
    }

    public function addpain($id, $commen, $inter_id) {
        $comments = TableRegistry::get('Painpoints');
        $comment = $comments->newEntity();
        $comment->team_id = $id;
        $comment->interaction_id = $inter_id;
        $comment->question = $commen;

        $comments->save($comment);
        return $comment->id;
    }

    public function getPainPoints($team_id) {
        $inters = $this->getAll($team_id, 'Interactions', 'team_id', $team_id);

        for ($i = 0; $i < count($inters); $i++) {

            $inters[$i]->pain = $this->getAll($team_id, 'Painpoints', 'interaction_id', $inters[$i]->id);
            //TODO: TRatar interacciones huérfanas
            for ($j = 0; $j < count($inters[$i]->pain); $j++) {
                $inters[$i]->pain[$j]->ppchan = $this->getAll($team_id, 'Ppchallenges', 'painpoint_id', $inters[$i]->pain[$j]->id);
            }
        }
        return $inters;
    }

    public function addppcha($id, $commen, $inter_id) {
        $comments = TableRegistry::get('Ppchallenges');
        $comment = $comments->newEntity();
        $comment->team_id = $id;
        $comment->painpoint_id = $inter_id;
        $comment->question = $commen;

        $comments->save($comment);
        return $comment->id;
    }

    public function deletequestion($id, $idc, $table = 'Questions') {
        $comments = TableRegistry::get($table);
        $comment = $comments->find('all')
                ->where(['id' => $idc, 'team_id' => $id,]);
        $c = $comment->first();


        return $comments->delete($c);
    }

    public function deleteinter($id, $idc) {
        $this->deletequestion($id, $idc, 'Interactions');
        $comments = TableRegistry::get('Painpoints');

        $query = $comments->find('all')
                ->where(['interaction_id' => $id, 'team_id' => $team_id,]);
        foreach ($query as $row) {
            $this->deleteAll($team_id, 'Ppchallenges', 'painpoint_id', $row->$id);
        }
        $this->deleteAll($team_id, 'Painpoints', 'interaction_id', $id);
    }

    public function deleteAll($team_id, $table, $field, $value) {
        $table = TableRegistry::get($table);
        $table->deleteAll(['team_id' => $team_id, $field => $value]);
    }

    public function getAll($team_id, $table, $field, $value) {
        $table = TableRegistry::get($table);
        $res = $table->find('all')->where(['team_id' => $team_id, $field => $value])->toArray();
        return $res;
    }

    public function selectquestion($team_id, $ids, $table = 'Questions') {

        $comments = TableRegistry::get($table);
        foreach ($ids as $id) {
            $comment = $comments->find('all')
                            ->where(['id' => $id, 'team_id' => $team_id,])->first();
            $comment->sel = 1;
            if (!$comments->save($comment)) {
                return 0;
            }
        }
        return 1;
    }

    public function saveretovotos($team_id, $ids) {
        $table = TableRegistry::get('Challenges');

        foreach ($ids as $id) {
            $cha = $table->get($id);
            //if ($cha->team_id == $team_id) {
            if ($cha->votes == null) {
                $cha->votes = 0;
            }
            $cha->votes++;
            $table->save($cha);
            //}
        }
        $table = TableRegistry::get('Teams');
        $team = $table->get($team_id);
        $team->vc = 1;
        $table->save($team);
        return 1;
    }

    public function saveQuestionVotes($team_id, $ids, $table = 'Questions', $vote = 'vq') {

        $table = TableRegistry::get($table);
        $teams = TableRegistry::get('Teams');
        $team = $teams->get($team_id);
        if ($team->$vote) {
            return 1;
        }
        foreach ($ids as $id) {
            $cha = $table->get($id);
            if ($cha->votes == null) {
                $cha->votes = 0;
            }
            $cha->votes++;
            $table->save($cha);
        }

        $team->$vote = 1;
        $teams->save($team);
        return 1;
    }
 public function saveTopUSerVotes($team_id, $ids) {

        $table = TableRegistry::get('Tops');
        $teams = TableRegistry::get('Teams');
        $team = $teams->get($team_id);
        if ($team->vo) {
            return 1;
        }
        foreach ($ids as $id) {
            $cha = $table->get($id);
            if ($cha->votes == null) {
                $cha->votes = 0;
            }
            $cha->votes++;
            $table->save($cha);
        }

        $team->vo = 1;
        $teams->save($team);
        return 1;
    }
    public function saveTopVotes($team_id, $ids) {
        $code = ['amb', 'nor', 'qui'];
        $table = TableRegistry::get('Tops');
        $teams = TableRegistry::get('Teams');
        $team = $teams->get($team_id);
        if ($team->vt) {
            return 1;
        }

        foreach ($ids as $id) {

            $cha = $table->get($id->id);
            $t = $code[$id->val - 1];

            $cha->$t++;


            $table->save($cha);
        }

        $team->vt = 1;
        $teams->save($team);

        return 1;
    }

    public function hasVoted($team_id, $section = 'vc') {
        $table = TableRegistry::get('Teams');
        $team = $table->get($team_id);
        return $team->$section;
    }

    public function getChallengesTeam($team_id) {
        $table = TableRegistry::get('Challenges');
        $num = $table->find('all')
                        ->where(['team_id' => $team_id,])->toArray();
        return $num;
    }

    public function getGenericTeam($team_id, $table = 'Challenges') {
        $table = TableRegistry::get($table);
        $g = [];
        $num = $table->find('all')
                        ->where(['team_id' => $team_id,])->toArray();
        foreach ($num as $n) {
            $g[] = $n['id'];
        }
        return $g;
    }

    public function getFeelings($type = 1) {
        $table = TableRegistry::get('Feelings');
        $num = $table->find('all')
                        ->where(['type' => $type,])->toArray();
        return $num;
    }

    public function getCommentsSel($id) {
        $conn = ConnectionManager::get('default');

        $query = $conn->execute('select sum(sel) as num from comments where team_id=' . $id);
        $res = $query->fetchAll('assoc');
        return $res[0]['num'];
    }

    public function getQuestionsSel($id, $table = 'questions') {
        $conn = ConnectionManager::get('default');

        $query = $conn->execute('select sum(sel) as num from ' . $table . ' where team_id=' . $id);
        $res = $query->fetchAll('assoc');
        return $res[0]['num'];
    }

    public function getRetos($id, $table = 'challenges') {
        $conn = ConnectionManager::get('default');
        $sel = '';
        if ($table != 'challenges') {
            $sel = " sel=1 and ";
        }
        $query = $conn->execute('SELECT * FROM teams join ' . $table . ' on teams.id=' . $table . '.team_id where ' . $sel . 'game_id=' . $id);
        $res = $query->fetchAll('assoc');
        return $res;
    }

    public function createTops($id) {
        if ($this->countTops($id) == 25) {
            return;
        }
        $table = TableRegistry::get('Tops');
        $table->deleteAll(['game_id' => $id]);
        $cha = $this->getTops($id);
        $this->saveTops($id, array_column($cha, 'challenge'), array_column($cha, 'ambit'),1);
        $cha = $this->getTops($id, 'questions');
        $this->saveTops($id, array_column($cha, 'question'), array_column($cha, 'ambit'), 2);
        $cha = $this->getTops($id, 'stakes');
        $this->saveTops($id, array_column($cha, 'question'), array_column($cha, 'ambit'), 3);
        $cha = $this->getTops($id, 'ppchallenges');
        $this->saveTops($id, array_column($cha, 'question'), array_column($cha, 'ambit'), 4);
        $cha = $this->getTops($id, 'motions');
        $this->saveTops($id, array_column($cha, 'question'), array_column($cha, 'ambit'), 5);
    }

    public function countTops($id) {
        $conn = ConnectionManager::get('default');
        $query = $conn->execute('SELECT count(*) as t FROM tops where game_id=' . $id);
        $res = $query->fetchAll('assoc');

        return $res[0]['t'];
    }

    public function saveTops($id, $terms, $ambits, $type) {
        $table = TableRegistry::get('Tops');
        for ($i=0;$i<count($terms);$i++){

            $top = $table->newEntity();
            $top->game_id = $id;
            $top->question = $terms[$i];
            $top->ambit = $ambits[$i];
            $top->sel = $type;

            $table->save($top);
        }
    }

    public function getTops($id, $table = 'challenges') {
        $conn = ConnectionManager::get('default');
        $sel = '';

        $query = $conn->execute('SELECT ' . $table . '.* FROM teams join ' . $table . ' on teams.id=' . $table . '.team_id where game_id=' . $id . ' order by votes desc, ' . $table . '.id limit 5');
        $res = $query->fetchAll('assoc');
        return $res;
    }

    public function getTopsAll($id) {
        $table = TableRegistry::get('Tops');
        $num = $table->find('all')
                        ->where(['game_id' => $id,])->toArray();
        return $num;
    }

    public function getChallenges($id, $table = 'challenges') {
        $conn = ConnectionManager::get('default');

        $query = $conn->execute('SELECT * FROM teams join ' . $table . ' on teams.id=' . $table . '.team_id where game_id=' . $id . ' order by votes desc');
        $res = $query->fetchAll('assoc');
        return $res;
    }
    public function getTopsOrder($id) {
        $conn = ConnectionManager::get('default');

        $query = $conn->execute('SELECT * FROM tops where game_id=' . $id . ' order by votes desc');
        $res = $query->fetchAll('assoc');
        return $res;
    }
    
    public function getChallengeTeams($id, $table = 'challenges') {
        $conn = ConnectionManager::get('default');

        $query = $conn->execute('SELECT team_id,sum(votes) votos FROM teams join ' . $table . ' on teams.id=' . $table . '.team_id where game_id=' . $id . ' group by team_id order by votos desc;');
        $res = $query->fetchAll('assoc');
        return $res;
    }

    public function setSesion($id, $code, $admin, $active, $page, $trouble, $time1) {
        $session = $this->request->session();
        $session->write('code', $code);
        $session->write('admin', $admin);
        $session->write('id', $id);
        $session->write('active', $active);
        $session->write('page', $page);
        $session->write('trouble', $time1);
        $session->write('time1', $time1);
        $this->Cookie->write('code', $code);
        $this->Cookie->write('admin', $admin);
        $this->Cookie->write('id', $id);
        $this->Cookie->write('active', $active);
    }

    public function teamsOK($id) {
        $games = TableRegistry::get('Teams');
        $query = $games->find('all')
                ->where(['game_id' => $id]);

        foreach ($query as $row) {
            if ($row->taken == 0) {
                return 0;
            }
        }
        return 1;
    }

    public function getTeams($id) {
        $games = TableRegistry::get('Teams');
        $query = $games->find('all')
                        ->where(['game_id' => $id])
                        ->orderDesc('bikles')->toArray();

        return $query;
    }

    public function addBikles($id, $cant = 1) {
        $games = TableRegistry::get('Teams');
        $query = $games->get($id);
        $query->bikles += $cant;
        $games->save($query);

        return 1;
    }

    public function setTime($id, $tipo = 0, $time = 0) {

        $games = TableRegistry::get('Games');
        $game = $games->get($id);
        if ($tipo == 0) {
            $game->time1 = date('Y-m-d H:i:s');
        } else if ($tipo == -1) {
            $game->time1 = null;
        } else {
            $game->time1 = $time;
        }
        $games->save($game);
    }

    public function addTime($id, $time) {
        $games = TableRegistry::get('Games');
        $game = $games->get($id);
        $date = new Time($game->time1);
        $date->addSeconds($time);
        $game->time1 = $date;

        $games->save($game);
    }

    public function setScore($id, $fase, $order) {

        $games = TableRegistry::get('Games');
        $game = $games->get($id);
        if ($game->score < $fase) {
            $this->addBikle($order[0], 15);
            $this->addBikle($order[1], 10);
            if (count($order) > 2)
                $this->addBikle($order[2], 5);
            $this->addBikle($order[count($order) - 1], -5);
        }
        $game->score = $fase;
        $games->save($game);
    }

    public function addBikle($id, $num) {
        $teams = TableRegistry::get('Teams');
        $team = $teams->get($id);
        $team->bikles += $num;
        $teams->save($team);
    }

    public function getOrder($teams, $idfield = "id") {
        $order = [];
        foreach ($teams as $team) {

            $order[] = $team[$idfield];
        }
        return $order;
    }

}
