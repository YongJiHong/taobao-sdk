<?php

/**
 * 淘客推广信息
 * @author auto create
 */
class PublishInfo
{
	
	/** 
	 * 链接-宝贝推广链接
	 **/
	public $click_url;
	
	/** 
	 * 链接-宝贝+券二合一页面链接
	 **/
	public $coupon_share_url;
	
	/** 
	 * 额外奖励活动金额，活动奖励金额的类型与cpa_reward_type字段对应，如果一个商品有多个奖励类型，返回结果使用空格分割
	 **/
	public $cpa_reward_amount;
	
	/** 
	 * 额外奖励活动类型，如果一个商品有多个奖励类型，返回结果使用空格分割，0=预售单单奖励，1=618超级U选单单补
	 **/
	public $cpa_reward_type;
	
	/** 
	 * 预热活动到手价对应的佣金比率
	 **/
	public $future_activity_commission_rate;
	
	/** 
	 * 预热价活动开始时间
	 **/
	public $future_activity_time;
	
	/** 
	 * 商品佣金信息
	 **/
	public $income_info;
	
	/** 
	 * 商品信息-收入比率(%)；商品佣金比率+补贴比率
	 **/
	public $income_rate;
	
	/** 
	 * 定向计划集合-仅支持联系商务或运营小二申请定向计划合集字段权限
	 **/
	public $sp_campaign_list;	
}
?>