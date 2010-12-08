<?php
class InitsController extends AppController {
    public $name = 'Inits';
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
        $this->loadModel('Groupp');
        $dbkeys = array_keys($this->Groupp->find('list'));
        $this->loadModel('User');
        $this->User->data = array(
            array('User'=>array('username'=>'User Foo','email'=>'foo@example.com','password'=>'foopassword'),'Groupp'=>array('id'=>$dbkeys[0])),
            array('User'=>array('username'=>'User Bar','email'=>'bar@example.com','password'=>'barpassword'),'Groupp'=>array('id'=>$dbkeys[1])),
            array('User'=>array('username'=>'User Baz','email'=>'baz@example.com','password'=>'bazpassword'),'Groupp'=>array('id'=>$dbkeys[1])),
        );
        $this->User->saveAll();
    }
    
    private function initProfile(){
        $locations = Configure::read('selection.location');
        $this->loadModel('User');
        $dbkeys = array_keys($this->User->find('list'));
        $this->loadModel('Profile');
        foreach($dbkeys as $key => $dbkey){
            $this->Profile->data[] = array('user_id'=>$dbkey,'location'=>$locations[$key]);
        }
        $this->Profile->saveAll();
    }
    
    private function initGroup(){
        $groups = Configure::read('selection.group');
        $this->loadModel('Groupp');
        foreach($groups as $item){
            $this->Groupp->data[] = array('label'=>$item);
        }
        $this->Groupp->saveAll();
    }
    
    private function initTag(){
        $tags = Configure::read('selection.tag');
        $this->loadModel('Tag');
        foreach($tags as $item){
            $this->Tag->data[] = array('label'=>$item);
        }
        $this->Tag->saveAll();
    }
    
    private function initEntry(){
        $this->loadModel('Tag');
        $tags = $this->Tag->find('list',array('fields'=>'label'));
        $dbkeys = array_keys($tags);
        $this->loadModel('User');
        $users = $this->User->find('list',array('fields'=>'username'));
        $this->loadModel('Entry');
        foreach($users as $key => $username){
            $this->Entry->data[] = array('Tag'=>array('id'=>$dbkeys[0]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[0]].' of '.$username,'pageview'=>5,'is_running'=>true));
            $this->Entry->data[] = array('Tag'=>array('id'=>$dbkeys[0]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[0]].'2nd of '.$username,'pageview'=>10,'is_running'=>true));
            $this->Entry->data[] = array('Tag'=>array('id'=>$dbkeys[1]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[1]].' of '.$username,'pageview'=>30,'is_running'=>true));
            $this->Entry->data[] = array('Tag'=>array('id'=>$dbkeys[1]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[1]].'2nd of '.$username,'pageview'=>50,'is_running'=>true));
            $this->Entry->data[] = array('Tag'=>array('id'=>$dbkeys[2]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[2]].' of '.$username,'pageview'=>75,'is_running'=>true));
            $this->Entry->data[] = array('Tag'=>array('id'=>$dbkeys[2]),'Entry'=>array('user_id'=>$key,'label'=>$tags[$dbkeys[2]].'2nd of '.$username,'pageview'=>120,'is_running'=>true));
            $this->Entry->data[] = array('Tag'=>array('id'=>$dbkeys[2]),'Entry'=>array('user_id'=>$key,'label'=>'Draft of '.$username,'pageview'=>0,'is_running'=>false));
        }
        $this->Entry->saveAll();
    }
}