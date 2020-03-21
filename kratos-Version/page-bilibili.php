<?php
/**
template name: bilibili追番页面(Kratos)
template author: 🎉梨花镇的阿肾🎉 小游 以及众多可爱的网友
template source: https://github.com/TaylorLottner/bilibili
------
Kratos-Pjax-Version
template @modify by: 😑IceCliffs😑
template @modify version: https://github.com/icecliffs/bilibili_anime
*/
get_header(); ?>
<link rel="stylesheet" type="text/css" href="https://www.icecliffs.cn/wp-content/themes/IksMsnwh129Kks/static/css/bilibili.css">
<!-- <meta name="referrer" content="same-origin"> -->
<!-- <base href='https://www.bilibili.com'> -->
<div id="container" class="container">
	<div class="row">
        <section id="main" class='<?php echo (kratos_option('page_side_bar')=='center')?'col-md-12':'col-md-8'; ?>'>
        <div class="page-header">
            <article>
                <div class="cliffs-hentry cliffs-post-inner">
                <div class="cliffs-post-content-l">
                <h1 style="text-align:center;">订阅番剧</h1>
                 <?php
                     require_once ("bili_app.php");
                     $bili=new bilibiliApiRequest('72465206','');
                    echo "<small>呐呐呐(/▽＼)！当前已追".$bili->sum."部，继续 Keep 哦~</small></h1></div><div class=\"bilibili\">";
                    function precentage($str1,$str2)
                    {
                        if(is_numeric($str1) && is_numeric($str2)) return $str1/$str2*100;
                        else if ($str1=="0") return 0;
                        else return 100;
                    }
                    for($i=0;$i<$bili->sum;$i++)
                    {
                        echo "<a class=
                        \"bgm-item\" href=\"http://www.bilibili.com/bangumi/play/ss".$bili->season_id[$i]."/ \" target=\"_blank\"><div class=\"bgm-item-thumb\" style=\"background-image:url(".$bili->image_url[$i].")\"></div><div class=\"bgm-item-info\"><span class=\"bgm-item-titlemain\">".$bili->title[$i]."</span><span class=\"bgm-item-title\">".$bili->evaluate[$i]."</span></div><div class=\"bgm-item-statusBar-container\"><div class=\"bgm-item-statusBar\" style=\"width:".precentage($bili->progress[$i],$bili->total[$i])."%\"></div>".$bili->progress[$i]."/". $bili->total[$i]."</div></a>";
                    }
                ?>
                </div>
                </div>
            </article>
        </div>
        </section>
        <?php if(kratos_option('page_side_bar')=='right_side'){ ?>
        <aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
            <div id="sidebar" class="affix-top">
                <?php dynamic_sidebar('sidebar_tool'); ?>
            </div>
        </aside>
        <?php } ?>
        </div>
        <?php
        if(current_user_can('manage_options')&&is_single()||is_page()){ ?><div class="cd-tool text-center"><div class="<?php if(kratos_option('cd_weixin')&&(kratos_option('site_girl')&&!wp_is_mobile())) echo 'edit-box3 '; elseif(kratos_option('cd_weixin')||(kratos_option('site_girl')&&!wp_is_mobile())) echo 'edit-box2 '; ?>edit-box"><?php echo edit_post_link('<span class="fa fa-pencil"></span>'); ?></div></div><?php } ?>
	</div>
</div>
<?php get_footer(); ?>
