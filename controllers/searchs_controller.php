<?php
class SearchsController extends AppController {
    public $name = 'Searchs';
    public $uses = 'Entry';
    public $components = array('Search.Prg');
    public $presetVars = array(
        //array('field' => 'location', 'type' => 'value'), //動かなかったのでなし
        array('field' => 'label', 'type' => 'value'),
        array('field' => 'email', 'type' => 'value'),
        array('field' => 'pageview', 'type' => 'checkbox'),
        array('field' => 'groupp_id', 'type' => 'checkbox'),
        array('field' => 'tag_id', 'type' => 'checkbox'),
        array('field' => 'word', 'type' => 'value'),
    );
    
    public function index(){
        if($this->data || $this->passedArgs){
            $this->Entry->Behaviors->attach('Containable');
            $this->paginate['contain'] = array(
                'User' => array(
                    'Groupp',
                    'Profile',
                ),
                'Tag',
            );
            $this->Prg->commonProcess();
            $this->paginate['conditions'] = $this->Entry->parseCriteria($this->passedArgs);
            $this->paginate['conditions']['Entry.is_running'] = 'true';
            $this->set('entries', $d = $this->paginate());//debug($d);
        }
        $tags = $this->Entry->Tag->find('list',array('fields'=>'label'));
        $groups = $this->Entry->User->Groupp->find('list',array('fields'=>'label'));
        Configure::load('selection');
        $locations = Configure::read('selection.location');
        $locations = array_combine($locations, $locations);
        $pageviews = Configure::read('selection.pageview');
        $this->set(compact('tags','groups','locations','pageviews'));
    }
}