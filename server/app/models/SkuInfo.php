<?php

namespace Demo\Server\Models;

/**
 * Phalcon Model: SkuInfo
 *
 * 此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator
 *
 * @namespace Demo\Server\Models
 * @version $Rev:2016-08-09 11:43:01$
 * @license PhalconPlus(http://plus.phalconphp.org/license-1.0.html)
 */
class SkuInfo extends \PhalconPlus\Base\Model
{

    /**
     * @var unknown
     * @table sku_info
     */
    public $id = null;

    /**
     * @var string
     * @table sku_info
     */
    public $name = null;

    /**
     * @var string
     * @table sku_info
     */
    public $slogan = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $product_id = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $seller_id = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $cate_id = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $price = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $amount = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $left_amount = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $least = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $most = null;

    /**
     * @var integer
     * @table sku_info
     */
    public $discount_id = '0';

    /**
     * @var integer
     * @table sku_info
     */
    public $sell_type = '1';

    /**
     * @var integer
     * @table sku_info
     */
    public $is_delete = '1';

    /**
     * @var integer
     * @table sku_info
     */
    public $status = '0';

    /**
     * @var unknown
     * @table sku_info
     */
    public $btime = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $etime = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $ctime = null;

    /**
     * @var unknown
     * @table sku_info
     */
    public $mtime = null;

    public function initialize()
    {
        parent::initialize();
        $this->setWriteConnectionService("dbDemo");
        $this->setReadConnectionService("dbDemo_r");
        $this->belongsTo("productId", __NAMESPACE__."\\ProductInfo", "id", [
            'alias' => "relatedProductInfo"
        ]);
        $this->belongsTo("sellerId", __NAMESPACE__."\\UserInfo", "id", [
            'alias' => "relatedSeller"
        ]);
    }

    /**
     * When an instance created, it would be executed
     */
    public function onConstruct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->slogan = NULL;
        $this->productId = NULL;
        $this->sellerId = NULL;
        $this->cateId = NULL;
        $this->price = NULL;
        $this->amount = NULL;
        $this->leftAmount = NULL;
        $this->least = NULL;
        $this->most = NULL;
        $this->discountId = '0';
        $this->sellType = '1';
        $this->isDelete = '1';
        $this->status = '0';
        $this->btime = NULL;
        $this->etime = NULL;
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
            'slogan' => 'slogan', 
            'product_id' => 'productId', 
            'seller_id' => 'sellerId', 
            'cate_id' => 'cateId', 
            'price' => 'price', 
            'amount' => 'amount', 
            'left_amount' => 'leftAmount', 
            'least' => 'least', 
            'most' => 'most', 
            'discount_id' => 'discountId', 
            'sell_type' => 'sellType', 
            'is_delete' => 'isDelete', 
            'status' => 'status', 
            'btime' => 'btime', 
            'etime' => 'etime', 
            'ctime' => 'ctime', 
            'mtime' => 'mtime', 
        );
    }

    /**
     * return related table name
     */
    public function getSource()
    {
        return 'sku_info';
    }


}

