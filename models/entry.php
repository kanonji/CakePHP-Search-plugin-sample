<?php
class Entry extends AppModel {
    var $name = 'Entry';
    public $actsAs = array('Search.Searchable');
    public $filterArgs = array(
        array('name' => 'label', 'type' => 'value'),
        array('name' => 'email', 'type' => 'value', 'field' => 'User.email'),
//        array('name' => 'location', 'type' => 'value', 'field' => 'Profile.location'), //動かなかったのでなし
        array('name' => 'pageview', 'type' => 'query', 'method' => 'pageviewBetween'),
        array('name' => 'groupp_id', 'type' => 'subquery', 'field' => 'User.id', 'method' => 'searchByGroupps'),
        array('name' => 'tag_id', 'type' => 'subquery', 'field' => 'Entry.id', 'method' => 'searchByTags'),
        array('name' => 'word', 'type' => 'query', 'method' => 'findWithLike'),
    );
    var $validate = array(
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    var $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    var $hasAndBelongsToMany = array(
        'Tag' => array(
            'className' => 'Tag',
            'joinTable' => 'entries_tags',
            'foreignKey' => 'entry_id',
            'associationForeignKey' => 'tag_id',
            'unique' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => '',
            'with' => 'EntriesTag',
        )
    );
    
    public function pageviewBetween($data){
        $input = $data['pageview'];
        $inputs = explode('|', $input);
        foreach($inputs as $input){
            switch ($input) {
                case '1':
                    $input = array(0, 9);
                    break;
                case '2':
                    $input = array(10, 49);
                    break;
                case '3':
                    $input = array(50, 99);
                    break;
                case '4':
                    $input = array(100, PHP_INT_MAX);
                    break;
                default:
                    $input = null;
            }
            if($input)
                $coditions['or'][] = array("{$this->alias}.pageview BETWEEN ? AND ?" => $input);
        }
        return $coditions;
    }
    
    public function searchByGroupps($data = array()){
        $this->User->GrouppsUser->Behaviors->attach('Containable', array('autoFields' => false));
        $this->User->GrouppsUser->Behaviors->attach('Search.Searchable');
        $query = $this->User->GrouppsUser->getQuery('all', array(
            'conditions' => array('groupp_id'  => explode('|', $data['groupp_id'])),
            'fields' => array('user_id'),
            'contain' => $this->User->Groupp->alias,
        ));
        return $query;
    }
    
    public function searchByTags($data = array()){
        $this->EntriesTag->Behaviors->attach('Containable', array('autoFields' => false));
        $this->EntriesTag->Behaviors->attach('Search.Searchable');
        $query = $this->EntriesTag->getQuery('all', array(
            'conditions' => array('tag_id'  => explode('|', $data['tag_id'])),
            'fields' => array('entry_id'),
            'contain' => $this->Tag->alias,
        ));
        return $query;
    }
    
    public function findWithLike($data = array()){
        $conditions['or'][] = array("{$this->alias}.label LIKE" => "%{$data['word']}%");
        $conditions['or'][] = array("{$this->alias}.body LIKE" => "%{$data['word']}%");
        $conditions['or'][] = array("{$this->User->alias}.username LIKE" => "%{$data['word']}%");
        $conditions['or'][] = array("{$this->User->alias}.email LIKE" => "%{$data['word']}%");
        $conditions['or'][] = array("{$this->User->alias}.label LIKE" => "%{$data['word']}%");
//        $conditions['or'][] = array("{$this->User->Profile->alias}.location LIKE" => "%{$data['word']}%"); //動かなかったのでなし
//        $conditions['or'][] = array("{$this->User->Profile->alias}.biography LIKE" => "%{$data['word']}%"); //動かなかったのでなし
//        $conditions['or'][] = array("{$this->User->Profile->alias}.url LIKE" => "%{$data['word']}%"); //動かなかったのでなし
        return $conditions;
    }
}
?>