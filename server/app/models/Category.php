<?php

namespace Demo\Server\Models;

/**
 * Phalcon Model: Category
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace Demo\Server\Models
 * @version $Rev:2016-08-09 11:43:01$
 * @license PhalconPlus(http://plus.phalconphp.org/license-1.0.html)
 */
class Category extends \PhalconPlus\Base\Model
{

    /**
     * @var integer
     * @table category
     */
    public $id = null;

    /**
     * @var string
     * @table category
     */
    public $name = null;

    /**
     * @var integer
     * @table category
     */
    public $pid = null;

    /**
     * @var integer
     * @table category
     */
    public $lft = null;

    /**
     * @var integer
     * @table category
     */
    public $rgt = null;

    /**
     * @var string
     * @table category
     */
    public $slug = null;

    /**
     * @var integer
     * @table category
     */
    public $depth = null;

    /**
     * @var unknown
     * @table category
     */
    public $ctime = null;

    /**
     * @var unknown
     * @table category
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
        $this->name = NULL;
        $this->pid = NULL;
        $this->lft = NULL;
        $this->rgt = NULL;
        $this->slug = NULL;
        $this->depth = NULL;
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
            'name' => 'name', 
            'pid' => 'pid', 
            'lft' => 'lft', 
            'rgt' => 'rgt', 
            'slug' => 'slug', 
            'depth' => 'depth', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'category';
    }


}

