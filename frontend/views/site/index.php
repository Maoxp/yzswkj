<?php

/* @var $this yii\web\View */

$this->title = '扬州丰产生物科技有限公司';
?>
<script src="<?= \yii\helpers\Url::base()?>/resource/js/jquery.SuperSlide.2.1.1.js"></script>
<script src="<?= \yii\helpers\Url::base()?>/resource/js/jquery.SuperSlide.2.1.1.js"></script>
<div class="container">
    <div class="row">
        <img src="/resource/img/logo.png" alt="First slide">
    </div>
</div>

<nav class="navbar navbar-inverse " style="background-color:#0075c2; border-color:#0075c2">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active" ><a  style="background-color:red"href="#">网站首页</a></li>
                <li><a href="#">关于扬州生物科技</a></li>
                <li><a href="#">新闻公告</a></li>
                <li><a href="#">产品中心</a></li>
                <li><a href="#">科研技术</a></li>
                <li><a href="#">人才招聘</a></li>
                <li><a href="#">联系方式</a></li>
<!--                <li class="dropdown">-->
<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="#">Action</a></li>-->
<!--                        <li><a href="#">Another action</a></li>-->
<!--                        <li><a href="#">Something else here</a></li>-->
<!--                        <li role="separator" class="divider"></li>-->
<!--                        <li class="dropdown-header">Nav header</li>-->
<!--                        <li><a href="#">Separated link</a></li>-->
<!--                        <li><a href="#">One more separated link</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div id="myCarousel" class="carousel slide">
    <!-- 轮播（Carousel）指标 -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/resource/img/first.jpg" alt="1">
        </div>
        <div class="item ">
            <img src="/resource/img/two.jpg" alt="2">
        </div>

    </div>
    <!-- 轮播（Carousel）导航 -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container " style="margin-top: 15px">
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>关于科技
                        <small>/ ABOUT US</small>
                    </h5>
                </div>
                <img  src="/resource/img/index-cf.jpg" alt="Generic placeholder image" style="width: 356px;" >
                <div class="panel-body">

                    <p class="text-muted">
                        扬州优邦生物药品有限公司是内蒙古金宇集团股份有限公司（股票代码：600201）全资控股的子公司，是一家集研发、生产、销售为一体的国家级高新技术企业。为首批通过农业部GMP认证并定点生产猪高致病性蓝耳病疫苗的企业，连续多年蓝耳病灭活疫苗产量居全国首位。
                        公司成立于2004年，厂址位于……【查看更多>>】
                    </p>
                </div>
            </div>


        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5> 新闻公告
                        <small> / 行业资讯</small>
                    </h5>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">公司主要服务养殖农户</li>
                        <li class="list-group-item">扬州优邦组织员工开展2017年消防安全演练</li>
                        <li class="list-group-item">
                            <span class="badge">新</span>
                            2018年4月客户来公司参观考察
                        </li>
                        <li class="list-group-item">每年更新成本</li>
                        <li class="list-group-item">
                            <span class="badge">新</span>
                            庆祝公司成立
                        </li>
                        <br>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img  src="/resource/img/index-tel.jpg" alt="Generic placeholder image" >
                </div>
                <div class="panel-body">
                    <dl >
                        <dt>办公室电话 :</dt>
                        <dd>0514-87637673</dd>
                        <dt>传真：</dt>
                        <dd>0514-87634098</dd>
                        <dt>订货电话：</dt>
                        <dd>0514-87634098</dd>
                        <dt>技术服务热线：</dt>
                        <dd>0514-87634038/87634311</dd>
                        <dt>地址：</dt>
                        <dd>扬州市维扬经济开发区金槐路7号</dd>
                        <dt>邮箱：</dt>
                        <dd><a href="mailto:#">yzyb@jinyu.com.cn</a></dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>

    <hr class="featurette-divider">

    <div class="page-header">
        <h2> 产品中心
            <small> / Product Center</small>
        </h2>
    </div>

    <div class="row" >
        <style type="text/css">
            /* css 重置 */
            *{margin:0; padding:0; list-style:none; }
            body{ background:#fff; font:normal 12px/22px 宋体;  }
            img{ border:0;  }
            a{ text-decoration:none; color:#333;  }

            /* 本例子css */
            .picMarquee-left{ overflow:hidden; position:relative;  border:1px solid #ccc;   }
            .picMarquee-left .hd{ overflow:hidden;  height:30px; background:#f4f4f4; padding:0 10px;  }
            .picMarquee-left .hd .prev,.picMarquee-left .hd .next{ display:block;  width:5px; height:9px; float:right; margin-right:5px; margin-top:10px;  overflow:hidden;
                cursor:pointer; background:url("images/arrow.png") no-repeat;}
            .picMarquee-left .hd .next{ background-position:0 -50px;  }
            .picMarquee-left .hd .prevStop{ background-position:-60px 0; }
            .picMarquee-left .hd .nextStop{ background-position:-60px -50px; }

            .picMarquee-left .bd{ padding:10px;   }
            .picMarquee-left .bd ul{ overflow:hidden; zoom:1; }
            .picMarquee-left .bd ul li{ margin:0 8px; float:left; _display:inline; overflow:hidden; text-align:center;  }
            .picMarquee-left .bd ul li .pic{ text-align:center; }
            .picMarquee-left .bd ul li .pic img{ width:120px; height:90px; display:block; padding:2px; border:1px solid #ccc; }
            .picMarquee-left .bd ul li .pic a:hover img{ border-color:#999;  }
            .picMarquee-left .bd ul li .title{ line-height:24px;   }
            .picMarquee-left .bd .tempWrap{width: 1360px;}
        </style>

        <div class="picMarquee-left">
            <div class="hd">
                <a class="next"></a>
                <a class="prev"></a>
            </div>
            <div class="bd">
                <ul class="picList">
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/pic1.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">鸡新城疫活疫苗(La Sota...</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/pic2.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">效果图2</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/pic3.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">效果图3</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/pic4.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">效果图4</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/pic5.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">效果图5</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/pic6.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">效果图6</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/3.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">效果图5</a></div>
                    </li>
                    <li>
                        <div class="pic"><a href="#" target="_blank"><img src="/resource/img/2.jpg" /></a></div>
                        <div class="title"><a href="#" target="_blank">效果图6</a></div>
                    </li>
                </ul>

            </div>
        </div>

        <script id="jsID" type="text/javascript">
            $(".picMarquee-left").slide( { mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:50,opp:false,pnLoop:true,trigger:"click" });
        </script>
    </div>

</div>


