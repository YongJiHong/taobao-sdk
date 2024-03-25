<?php

/**
 * 商品基础信息
 * @author auto create
 */
class BasicMapData
{
	
	/** 
	 * 商品信息-品牌名称
	 **/
	public $brand_name;
	
	/** 
	 * 商品信息-叶子类目id
	 **/
	public $category_id;
	
	/** 
	 * 商品信息-叶子类目名称
	 **/
	public $category_name;
	
	/** 
	 * 商品信息-一级类目ID
	 **/
	public $level_one_category_id;
	
	/** 
	 * 商品信息-一级类目名称
	 **/
	public $level_one_category_name;
	
	/** 
	 * 商品信息-商品主图
	 **/
	public $pict_url;
	
	/** 
	 * 店铺信息-卖家id
	 **/
	public $seller_id;
	
	/** 
	 * 店铺信息-店铺名称
	 **/
	public $shop_title;
	
	/** 
	 * 商品信息-商品短标题
	 **/
	public $short_title;
	
	/** 
	 * 商品信息-商品子标题
	 **/
	public $sub_title;
	
	/** 
	 * 商品信息-商品标题
	 **/
	public $title;
	
	/** 
	 * 店铺信息-卖家类型，0表示淘宝，1表示天猫，3表示特价版
	 **/
	public $user_type;
	
	/** 
	 * 商品信息-30天销量；数据统计截止昨日非实时更新
	 **/
	public $volume;
	
	/** 
	 * 商品信息-商品白底图
	 **/
	public $white_image;	
}
?>