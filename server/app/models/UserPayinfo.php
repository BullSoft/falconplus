<?php

namespace Demo\Server\Models;

/**
 * Phalcon Model: UserPayinfo
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace Demo\Server\Models
 * @version $Rev:2016-08-09 11:43:01$
 * @license PhalconPlus(http://plus.phalconphp.org/license-1.0.html)
 */
class UserPayinfo extends \PhalconPlus\Base\Model
{

    /**
     * @var integer
     * @table user_payinfo
     */
    public $id = null;

    /**
     * @var integer
     * @table user_payinfo
     */
    public $user_id = null;

    /**
     * @var integer
     * @table user_payinfo
     */
    public $pay_sp_id = null;

    /**
     * @var string
     * @table user_payinfo
     */
    public $account = '';

    /**
     * @var integer
     * @table user_payinfo
     */
    public $is_delete = '0';

    /**
     * @var integer
     * @table user_payinfo
     */
    public $status = '0';

    /**
     * @var unknown
     * @table user_payinfo
     */
    public $ctime = null;

    /**
     * @var unknown
     * @table user_payinfo
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
        $this->paySpId = NULL;
        $this->account = '';
        $this->isDelete = '0';
        $this->status = '0';
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
            'pay_sp_id' => 'paySpId', 
            'account' => 'account', 
            'is_delete' => 'isDelete', 
            'status' => 'status', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'user_payinfo';
    }


}

