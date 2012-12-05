<?php
class InitsController extends AppController {
    public $uses = null;
    
    public function index(){
        Configure::load('selection');
        $this->initGroup();
        $this->initUser();
        $this->initProfile();
        $this->initTag();
        $this->initEntry();
    }
    
    private function initUser(){
        $this->loadModel('Group');
        $dbkeys = array_keys($this->Group->find('list'));
        $this->loadModel('User');
        $data = array(
            array('User'=>array('username'=>'User Foo','email'=>'foo@example.com','password'=>'foopassword'),'Group'=>array('id'=>$dbkeys[0])),
            array('User'=>array('username'=>'User Bar','email'=>'bar@example.com','password'=>'barpassword'),'Group'=>array('id'=>$dbkeys[1])),
            array('User'=>array('username'=>'User Baz','email'=>'baz@example.com','password'=>'bazpassword'),'Group'=>array('id'=>$dbkeys[1])),
        );
        $this->User->saveAll($data);
    }
    
    private function initProfile(){
        $locations = Configure::read('selection.location');
        $this->loadModel('User');
        $dbkeys = array_keys($this->User->find('list'));
        $this->loadModel('Profile');
        $data = array();
        foreach($dbkeys as $key => $dbkey){
            $data[] = array('user_id'=>$dbkey,'location'=>$locations[$key]);
        }
        $this->Profile->saveAll($data);
    }
    
    private function initGroup(){
        $groups = Configure::read('selection.group');
        $this->loadModel('Group');
        $data = array();
        foreach($groups as $item){
            $data[] = array('label'=>$item);
        }
        $this->Group->saveAll($data);
    }
    
    private function initTag(){
        $tags = Configure::read('selection.tag');
        $this->loadModel('Tag');
        $data = array();
        foreach($tags as $item){
            $data[] = array('label'=>$item);
        }
        $this->Tag->saveAll($data);
    }
    
    private function initEntry(){
        $this->loadModel('Tag');
        $tags = $this->Tag->find('list',array('fields'=>'label'));
        $dbkeys = array_keys($tags);
        $this->loadModel('User');
        $users = $this->User->find('list',array('fields'=>'username'));
        $this->loadModel('Entry');
        $data = array();
        foreach($users as $key => $username){
            $data[] = array('Tag'=>array('id'=>$dbkeys[0]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[0]].' of '.$username,'pageview'=>5,'is_running'=>true));
            $data[] = array('Tag'=>array('id'=>$dbkeys[0]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[0]].' 2nd of '.$username,'pageview'=>10,'is_running'=>true));
            $data[] = array('Tag'=>array('id'=>$dbkeys[1]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[1]].' of '.$username,'pageview'=>30,'is_running'=>true));
            $data[] = array('Tag'=>array('id'=>$dbkeys[1]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[1]].' 2nd of '.$username,'pageview'=>50,'is_running'=>true));
            $data[] = array('Tag'=>array('id'=>$dbkeys[2]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[2]].' of '.$username,'pageview'=>75,'is_running'=>true));
            $data[] = array('Tag'=>array('id'=>$dbkeys[2]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[2]].' 2nd of '.$username,'pageview'=>120,'is_running'=>true));
            $data[] = array('Tag'=>array('id'=>$dbkeys[2]),'Entry'=>array('user_id'=>$key,'label'=>'Draft of '.$username,'pageview'=>0,'is_running'=>false));
            $data[] = array('Tag'=>array($dbkeys[0],$dbkeys[1]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[0]].' and '.$tags[$dbkeys[1]].' of '.$username,'pageview'=>5,'is_running'=>true));
            $data[] = array('Tag'=>array($dbkeys[1],$dbkeys[2]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[1]].' and '.$tags[$dbkeys[2]].' of '.$username,'pageview'=>30,'is_running'=>true));
        }
        $this->Entry->saveAll($data);
    }
}
