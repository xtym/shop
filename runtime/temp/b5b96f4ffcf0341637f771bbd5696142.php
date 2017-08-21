<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"E:\shop\public/../application/home\view\entry\category.html";i:1503242152;s:51:"E:\shop\public/../application/home\view\common.html";i:1503277159;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ZY商城</title>
    <link type="text/css" rel="stylesheet" href="__ZHOME__/css/base.css">
    <link type="text/css" rel="stylesheet" href="__ZHOME__/css/style.css">
    <link type="text/css" rel="stylesheet" href="__ZHOME__/css/idialog.css">
    <script src="__ZHOME__/js/jquery.js"></script>
    <script src="__ZY__/node_modules/vue/dist/vue.js"></script>
    <script src="__ZY__/node_modules/axios/dist/axios.js"></script>
    
</head>
<body>
<div id="app">
    <div class="header">
        <div class="center">
            <div class="logo icon-bgr icon-logo ani-bg fl m-t-17"><a href="/">首页</a></div>
            <div class="category tc fl" id="category">
                <a href="#" class="f16 lh2">礼物分类<i class="icon-bgr icon-list m-l-5"></i></a>
                <div id="category_pop" class="category-pop tc dn">
                    <?php foreach($categoryData as $v): ?>
                    <a href="/category/<?php echo $v['cid']; ?>.html"><?php echo $v['catname']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="nav fl f16 lh2 m-t-28 rel">
                <a class="fst" id="gift_guide">送礼导航</a>
                <a href="">创意礼物</a>
                <a href="#">新品上架</a>
                <a href="#">七夕情人节礼物</a>
            </div>
            <!--登陆 注册-->
            <div class="operate fr m-t-31 rel" id="user_operate">
                <a href="user.html" id="nav_user">
                    <i class="icon-bgr icon-user m-7 ani-bg"></i>
                    <span class="cart-count" id="cart_count">{{cartLen}}</span>
                </a>

                <a href="#" class="m-l-5" id="nav_cart">
                    <i class="icon-bgr icon-cart ani-bg"></i>
                </a>


                <div class="user-box user-signin dn" id="nav_user_box">
                    <i class="icon-bgr icon-operate"></i>
                    <?php if(session('?user.user_username')): ?>
                    <dl class="tc">
                        <dt class="f-b28850">
                            <?php echo  session('user.user_username') ?>
                        </dt>
                        <dd class="lh2"><a href="#">浏览历史</a></dd>
                        <dd class="lh2"><a href="#">我的订单</a></dd>
                        <dd class="lh2"><a href="#">我的收藏</a></dd>
                        <dd class="lh2"><a href="/logout.html">退出登陆</a></dd>
                    </dl>
                    <?php else: ?>
                    <dl class="tc">
                        <dt class="f-b28850">
                            <a class="f-b28850" href="/login.html">登录</a> /
                            <a class="f-b28850" href="/register.html">注册</a>
                        </dt>
                        <dd class="lh2"><a href="#">浏览历史</a></dd>
                        <dd class="lh2"><a href="#">我的订单</a></dd>
                        <dd class="lh2"><a href="#">我的收藏</a></dd>
                    </dl>
                    <?php endif; ?>
                </div>
                <div class="user-box user-cart dn" id="nav_cart_box" style="z-index: 1; display: none;">
                    <i class="icon-bgr icon-operate"></i>
                    <table class="f12">
                        <tbody>
                        <tr class="gds" v-for="(v,k) in cart">

                            <td class="overtxt" width="50%">
                                <a :href="'goods/'+v['id']+'.html'">{{v['name']}}</a><br>礼物颜色:{{v['options'][0]['sname']}}
                            </td>
                            <td class="tr" width="25%">X{{v['num']}}<br>￥{{v['price']}}<br>
                                <a class="remove_item" data-rec-id="1301026" @click="del(k)" href="javascript:void(0)">删除</a>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="3">
                                <div class="clear m-t-10">
                                    <a href="/cart.html" class="fr btn-red-sml ani-bg">去购物车结算</a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="search fr m-t-31">
                <!--搜索框-->
                <input type="text" name="search" id="head-search"><a href="javascript:void(0)" class="icon-bgr icon-search m-l-5" id="head-searchbtn"></a>
            </div>
        </div>
    </div>
    <!--送给谁-->
    <div class="query-box query-box-nav dn" id="gift_guide_box">
        <div class="center">
            <div class="clear">
                <div class="query fl f12">
                    <dl class="clear b-b-1">
                        <dt class="fl p-y-10">送给谁：</dt>
                        <dd class="fl p-y-10">
                            <a href="javascript:void(0)" class="group-who">不限</a>
                            <a href="javascript:void(0)" class="group-who">公主女票</a>
                            <a href="javascript:void(0)" class="group-who">欧巴男票</a>
                            <a href="javascript:void(0)" class="group-who">潮爸辣妈</a>
                            <a href="javascript:void(0)" class="group-who">兄弟闺蜜</a>
                            <a href="javascript:void(0)" class="group-who">熊孩子</a>
                            <a href="javascript:void(0)" class="group-who">生意伙伴</a>
                            <a href="javascript:void(0)" class="group-who">致谢恩师</a>
                            <a href="javascript:void(0)" class="group-who"></a>
                        </dd>
                    </dl>
                    <dl class="clear">
                        <dt class="fl p-y-10">为啥送：</dt>
                        <dd class="fl p-y-10">
                            <a href="javascript:void(0)" class="group-why">不限</a>
                            <a href="javascript:void(0)" class="group-why">表白撩妹</a>
                            <a href="javascript:void(0)" class="group-why">过生日</a>
                            <a href="javascript:void(0)" class="group-why">圣诞节</a>
                            <a href="javascript:void(0)" class="group-why">情人节</a>
                            <a href="javascript:void(0)" class="group-why">去求婚</a>
                            <a href="javascript:void(0)" class="group-why">纪念日</a>
                            <a href="javascript:void(0)" class="group-why">想送任性</a>
                        </dd>
                    </dl>

                </div>
            </div>
            <div class="btnbox"><a href="javascript:void(0)" class="f12 btn-red-sml ani-bg navigation-search">搜索</a></div>
        </div>
    </div>

    

<div class="currentloc bg-f5f5f5 clear">
	<div class="center f12">
		<div class="fl">
			<a href="/">首页</a>
			<span>/</span>礼物分类
			<span>/</span><?php echo $pcategoryData['catname']; ?>
		</div>
		<a href="" class="fr qqbtn tc f-666" target="_blank">QQ在线交谈</a>
		<span class="fr f-666">服务热线：400-611-2156 (8:00－24:00)</span>
		<span class="fr m-r-100 f-a5937d"><!-- 节日名称  <i class="icon-bgr icon-gift m-l-10"></i>--></span>
	</div>
</div>
<div class="query-box query-box-list">
	<div class="center">
		<div class="clear">
			<div class="query fl rel">
				<dl class="clear">
					<dt class="fl p-l-20 p-y-20">分类&nbsp;:</dt>
					<dd class="fl p-y-20">
						<a href="/category/<?php echo $pid; ?>.html" class="<?php if($pid == '0'): ?> focus <?php endif; ?>">全部</a>
						<?php foreach($subCategoryData as $v): ?>
						<a href="/category/<?php echo $v['cid']; ?>.html" class="
					   <?php if($v['cid'] == $pcategoryData['cid'] && $v['cid'] != 0 ): ?>
							focus
					   <?php endif; ?>"

						><?php echo $v['catname']; ?></a>
						<?php endforeach; ?>
					</dd>
				</dl>

			</div>

		</div>
	</div>
</div>
<div class="cat-box">
	<div class="center">

		<ul class="cat-list clear">
			<?php foreach($goodsData as $v): ?>
				<li class="fl p-30 m-t-20 ani-bd-shadow diy-icon rel ">
					<a href="/goods/<?php echo $v['gid']; ?>.html" target="_blank" class="img-link">
						<img src="<?php echo $v['cover']; ?>" data-normal-img="<?php echo $v['cover']; ?>" data-diy-img="<?php echo $v['cover']; ?>" class="normalpic focus" />
					</a>
					<p class="overtxt m-t-20 cat-name">
						<a href="/goods/<?php echo $v['gid']; ?>.html" target="_blank" title="<?php echo $v['gname']; ?>"><?php echo $v['gname']; ?></a>
					</p>
					<p>￥<?php echo $v['gprice']; ?></p>
					<p class="f12 f-666 tr m-t-20 clear com-diy">
						<a href="javascript:void(0)" class="fl can-diy">可定制</a>
						<span class="fr">浏览量:<?php echo $v['click']; ?></span>
					</p>
				</li>
			<?php endforeach; ?>


		</ul>

	</div>

</div>




    <div class="footer">
        <div class="top">
            <div class="center clear">
                <div class="top-box1 fl">
                    <i class="icon-bgr icon-logo-bt fl m-r-60 m-l-20"></i>
                </div>
                <div class="top-box2 fl">
                    <img src="__ZHOME__/picture/slogan.png">
                </div>
                <div class="top-box3 fl">
                    <p class="fb f16">关注我们</p>
                    <p class="m-t-10">
                        <a href="http://weibo.com/liwuyou" target="_blank" class="icon-bgr icon-sina"></a>
                        <a href="http://t.qq.com/liwuyou4006112156" target="_blank" class="icon-bgr icon-tencent m-l-10"></a>
                        <a href="javascript:void(0)" target="_blank" class="icon-bgr icon-wechat m-l-10 rel"><span class="dn pic-wx"></span></a>
                    </p>
                </div>
                <div class="top-box4 fl tc">
                    <p class="f24 lh1 fb">400-611-2156</p>
                    <p class="f12">周一至周日 8:00-24:00</p>
                    <a href="" class="qqbtn lh1 m-t-10 dib">QQ在线交谈</a>
                </div>
            </div>
        </div>
        <div class="bottom clear f-e7e7e7">

            <ul class="center clear icons f18 fb">
                <li class="fl fst"><i class="icon-bgr1 icon-ft1 m-r-16"></i>30天免费退换货</li>
                <li class="fl"><i class="icon-bgr1 icon-ft2 m-r-16"></i>100%正品保证</li>
                <li class="fl"><i class="icon-bgr1 icon-ft3 m-r-16"></i>全场免运费</li>
                <li class="fl"><i class="icon-bgr1 icon-ft4 m-r-16"></i>提供礼品级包装</li>
            </ul>
            <div class="center links clear">
                <div class="fl">
                    <p class="f-c3c3c3"><span class="m-r-16">© liwuyou.com</span><span><a href="http://www.miitbeian.gov.cn/" rel="nofollow" target="_blank">粤ICP备10222238号-1</a></span></p>
                </div>
                <div class="fr">
                    <p class="f-f5f5f5 f0">
                        <a href="article.php?id=5" target="_blank" class="f-f5f5f5">关于我们</a><span>|</span>
                        <a href="article.php?id=85" target="_blank" class="f-f5f5f5">帮助中心</a><span>|</span>
                        <a href="article.php?id=44" target="_blank" class="f-f5f5f5">人才招聘</a><span>|</span>
                        <a href="article.php?id=82" target="_blank" class="f-f5f5f5">售后服务</a><span>|</span>
                        <a href="article.php?id=76" target="_blank" class="f-f5f5f5">配送与验收</a><span>|</span>
                        <a href="article.php?id=4" target="_blank" class="f-f5f5f5">联系我们</a><!-- <span>|</span> -->
                        <!-- <a href="javascript:void(0)" target="_blank" class="f-f5f5f5">投诉建议</a></p> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var global_config ='';
</script>

<script src="__ZHOME__/js/common.js"></script>


<script>

    (function($){
        var $window = $(window),$totop = $("#back_to_top");
        $window.scroll(function(){
            winTop();
        });
        function winTop(){
            if($window.scrollTop()<100){
                $totop.stop().fadeOut(300);
            }else{
                $totop.stop().fadeIn(300);
            }
        }
        winTop();
    })(jQuery);
    $(".slider").slider({animate_type:"fade"});
</script>


<script>
   let carts = new Vue({
        el:'#app',
        data:{
            cart:'',
        },
        mounted(){

            axios.get('/api/APi/cart').then(function (response) {
               carts.cart = response.data;
            })
        },
       methods:{
            del(k){
                axios.get('/api/APi/delete?sid='+k).then(function (response) {
                    carts.cart = response.data;
                })
            }
       },
       computed:{
           cartLen(){
               let sum=0;
               for (v in this.cart){
                   sum = sum +1;
               }
               return sum;
           }
       }


    })
</script>
</body>
</html>