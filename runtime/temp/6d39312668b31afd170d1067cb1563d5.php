<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"E:\shop\public/../application/home\view\cart\index.html";i:1503276066;}*/ ?>
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

<div class="header">
    <div class="center">
        <div class="logo icon-bgr icon-logo ani-bg fl m-t-17"><a href="/">礼无忧首页</a></div>
        <span class="dib f22 m-l-30 m-t-28">我的购物车</span>
        <?php if(session('?user.user_username')): ?>

        <div class="cart-hd fr m-t-31 rel">
            <span class="f-b28850">
                 <?php echo  session('user.user_username') ?>
            </span>
            <a href="" class="m-l-30">个人中心</a>
            <a href="/user.php?act=order_list" class="m-l-30">我的订单</a>
            <a href="/logout.html" class="m-l-30">退出登录</a>
        </div>
        <?php else: ?>
        <div class="cart-hd fr m-t-31 rel">
            <a href="/login.html">登陆</a>
            <span class="m-x-5">/</span>
            <a href="/register.html">注册</a>

        </div>
        <?php endif; ?>

    </div>
</div>

<div class="bg-f5f5f5 p-b-40">
    <div class="currentloc bg-f5f5f5 clear">
        <div class="center f12">
            <div class="fl"><a href="/">首页</a><span>/</span>购物车</div>
            <a href="" class="fr qqbtn tc f-666" target="_blank">QQ在线交谈</a>
            <span class="fr f-666">服务热线：400-111-111 (8:00－24:00)</span>
            <span class="fr m-r-100 f-a5937d"></span>
        </div>
    </div>


    <div class="shopping-cart center bg-fff tc" id="app">
        <table>
            <thead>
            <tr>
                <td width="50%" class="info tl">商品信息</td>
                <td width="10%">单价</td>
                <td width="10%">数量</td>
                <td width="10%">库存</td>
                <td width="10%">小计</td>
                <!--<td width="10%">操作</td>-->
            </tr>
            </thead>
            <tbody id="cart_list">
            <tr data-rec-id="1300777" >
                <td class="info tl">
                    <a href="/goods/<?php echo $goods['gid']; ?>.html">
                        <img src="<?php echo $goods['cover']; ?>" class="dib m-r-5">
                    </a>
                    <div class="dib">
                        <p><a href="/goods/<?php echo $goods['gid']; ?>.html"><?php echo $goods['gname']; ?></a></p>
                        <p class="f12"><span class="f-666">款式:<?php echo $data['options'][0]['sname']; ?></span></p>
                    </div>
                </td>
                <td>￥<?php echo $goods['gprice']; ?></td>
                <td>
                    <div class="dib count-box">
                        <a href="javascript:void(0)" @click="reduce" class="icon-bgr icon-sub dib"></a><input type="text" :value="cart['num']" class="dib tc icon-number" ><a href="javascript:void(0)" @click="add" class="icon-bgr icon-add dib"></a>
                    </div>
                </td>
                <td>￥<?php echo $goods['gprice']; ?></td>
                <td id="sub_total_1300777">￥{{totalPrice}}</td>
                <!--<td><a href="javascript:void(0)" class="icon-bgr icon-delete" data-rec_id="1300777"></a></td>-->
            </tr>
            </tbody>
        </table>
        <div class="cart-btm clear f16">
            <div class="fl tl"><a href="/" class="dib m-t-5"><i class="icon-bgr icon-page-l m-r-10"></i>继续购物</a></div>
            <div class="fr tr"><span>共1件商品</span><span class="m-l-20">合计：<b class="f18 f-d93732" id="goods-total">￥{{totalPrice}}</b></span><a href="flow.php?step=checkout" class="btn-red-sml f14 m-l-80 ani-bg">去结账</a></div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="top">
        <div class="center clear">
            <div class="top-box1 fl">
                <i class="icon-bgr icon-logo-bt fl m-r-60 m-l-20"></i>
            </div>
            <div class="top-box2 fl">
                <img src="__ZHOME__/images/slogan.png">
            </div>
            <div class="top-box3 fl">
                <p class="fb f16">关注我们</p>
                <p class="m-t-10">
                    <a href="#" target="_blank" class="icon-bgr icon-sina"></a>
                    <a href="#" target="_blank" class="icon-bgr icon-tencent m-l-10"></a>
                    <a href="javascript:void(0)" target="_blank" class="icon-bgr icon-wechat m-l-10 rel"><span class="dn pic-wx"></span></a>
                </p>
            </div>
            <div class="top-box4 fl tc">
                <p class="f24 lh1 fb">111-111-111</p>
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
                <p class="f-c3c3c3"><span class="m-r-16">© ZY</span><span><a href="#" rel="nofollow" target="_blank">11111111</a></span></p>
            </div>
            <div class="fr">
                <p class="f-f5f5f5 f0">
                    <a href="#" target="_blank" class="f-f5f5f5">关于我们</a><span>|</span>
                    <a href="#" target="_blank" class="f-f5f5f5">帮助中心</a><span>|</span>
                    <a href="#" target="_blank" class="f-f5f5f5">人才招聘</a><span>|</span>
                    <a href="#" target="_blank" class="f-f5f5f5">售后服务</a><span>|</span>
                    <a href="#" target="_blank" class="f-f5f5f5">配送与验收</a><span>|</span>
                    <a href="#" target="_blank" class="f-f5f5f5">联系我们</a><!-- <span>|</span> -->
                    <!-- <a href="javascript:void(0)" target="_blank" class="f-f5f5f5">投诉建议</a></p> -->
            </div>
        </div>
    </div>
</div>

<script>
   new Vue({
        el:'#app',
        data:{
            cart:<?php echo $cart; ?>,
            goods:<?php echo $goods1; ?>
        },
        computed:{
            totalPrice(){
                let sum=0;
                sum = this.cart.num*this.cart.price;
                return sum;
            }
        },
        methods:{
            add(){
                if (this.cart.num >=this.goods.sub['snum']){
                    this.cart.num =this.goods.sub['snum'];
                }else {
                    this.cart.num = this.cart.num+1;
                }

            },
            reduce(){
                if (this.cart.num <=1){
                    this.cart.num = 1;
                }else {
                    this.cart.num = this.cart.num-1;
                }

            }

        }
    })

</script>


</body>
</html>