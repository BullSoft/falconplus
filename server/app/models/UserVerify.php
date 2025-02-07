<?php

namespace Demo\Server\Models;

/**
 * Phalcon Model: UserVerify
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace Demo\Server\Models
 * @version $Rev:2016-08-09 11:43:01$
 * @license PhalconPlus(http://plus.phalconphp.org/license-1.0.html)
 */
class UserVerify extends \PhalconPlus\Base\Model
{

    /**
     * @var integer
     * @table user_verify
     */
    public $id = null;

    /**
     * @var unknown
     * @table user_verify
     */
    public $user_id = null;

    /**
     * @var string
     * @table user_verify
     */
    public $realname = '';

    /**
     * @var integer
     * @table user_verify
     */
    public $sex = null;

    /**
     * @var integer
     * @table user_verify
     */
    public $birthday = null;

    /**
     * @var integer
     * @table user_verify
     */
    public $home_addr = null;

    /**
     * @var string
     * @table user_verify
     */
    public $id_card = '';

    /**
     * @var string
     * @table user_verify
     */
    public $id_avatar = null;

    /**
     * @var string
     * @table user_verify
     */
    public $intro = null;

    /**
     * @var unknown
     * @table user_verify
     */
    public $ctime = null;

    /**
     * @var unknown
     * @table user_verify
     */
    public $mtime = null;

    public function initialize()
    {
        parent::initialize();
        $this->setWriteConnectionService("dbDemo");
        $this->setReadConnectionService("dbDemo_r");
    }

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->userId = NULL;
        $this->realname = '';
        $this->sex = NULL;
        $this->birthday = NULL;
        $this->homeAddr = NULL;
        $this->idCard = '';
        $this->idAvatar = NULL;
        $this->intro = NULL;
        $this->ctime = NULL;
        $this->mtime = NULL;
    }

    /**
     * Column map for database fields and model properties
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'user_id' => 'userId', 
            'realname' => 'realname', 
            'sex' => 'sex', 
            'birthday' => 'birthday', 
            'home_addr' => 'homeAddr', 
            'id_card' => 'idCard', 
            'id_avatar' => 'idAvatar', 
            'intro' => 'intro', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'user_verify';
    }


}

