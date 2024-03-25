<?php

/**
 * 价格促销信息
 * @author auto create
 */
class PromotionInfoMapData
{
	
	/** 
	 * 到手价优惠路径列表
	 **/
	public $final_promotion_path_list;
	
	/** 
	 * 促销信息-预估到手价(元)。若属于预售商品，付定金时间内，预估到手价价=定金+尾款的预估到手价
	 **/
	public $final_promotion_price;
	
	/** 
	 * 预热到手价优惠路径列表
	 **/
	public $future_activity_promotion_path_list;
	
	/** 
	 * 预热预估到手价（元）
	 **/
	public $future_activity_promotion_price;
	
	/** 
	 * 更多活动优惠
	 **/
	public $more_promotion_list;
	
	/** 
	 * 预估凑单优惠路径
	 **/
	public $predict_rounding_up_path_list;
	
	/** 
	 * 促销信息-预估凑单价（元）。预估凑单叠加优惠后的商品单价
	 **/
	public $predict_rounding_up_price;
	
	/** 
	 * 促销信息-凑单价说明，描述凑单价的实现说明。如 “可凑单”或“需买X件”
	 **/
	public $predict_rounding_up_price_desc;
	
	/** 
	 * 标签信息列表
	 **/
	public $promotion_tag_list;
	
	/** 
	 * 商品信息-一口价通常显示为划线价
	 **/
	public $reserve_price;
	
	/** 
	 * 促销信息-销售价格，无促销时等于一口价，有促销时为促销价。若属于预售商品，付定金时间内，在线售卖价=预售价
	 **/
	public $zk_final_price;	
}
?>