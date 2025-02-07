<?php

namespace Demo\Server\Models;

/**
 * Phalcon Model: DealMoney
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace Demo\Server\Models
 * @version $Rev:2016-08-09 11:43:01$
 * @license PhalconPlus(http://plus.phalconphp.org/license-1.0.html)
 */
class DealMoney extends \PhalconPlus\Base\Model
{

    /**
     * @var integer
     * @table deal_money
     */
    public $id = null;

    /**
     * @var integer
     * @table deal_money
     */
    public $user_id = null;

    /**
     * @var integer
     * @table deal_money
     */
    public $available = null;

    /**
     * @var integer
     * @table deal_money
     */
    public $freeze = null;

    /**
     * @var unknown
     * @table deal_money
     */
    public $ctime = null;

    /**
     * @var unknown
     * @table deal_money
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
        $this->available = NULL;
        $this->freeze = NULL;
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
            'available' => 'available', 
            'freeze' => 'freeze', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'deal_money';
    }


}

