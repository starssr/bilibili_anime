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
<meta name="referrer" content="never">
<meta name="referrer" content="same-origin">
<base href='https://www.bilibili.com'>
<style type="text/css">
.theme-dark .yue a:not([data-fancybox=gallery]):not(.post-like):not(.edit-button){border-color:#aaa}
.yue a:not([data-fancybox=gallery]):not(.post-like):not(.edit-button){border-bottom:1px solid rgba(0,0,0,.2)}
.yue a{word-wrap:break-word;word-break:break-all}
.theme-dark a,.theme-dark a:hover{color:#b0b0b0}
.bgm-item{background-color: rgba(253,253,253,0.30);border-radius:12px;height: 336px;float: left;display:block;margin:10px;width:157px;position:relative;box-shadow:0 0 6px rgba(0,0,0,.2);transition:.3s ease box-shadow;border:none!important;text-decoration:none!important;float:unset!important;}
.bgm-item-thumb{opacity: 0.7;border-top-left-radius: 7px;border-top-right-radius: 7px;transition: all 0.5s;width:100%;padding-top:120%;background-position:center;background-repeat:no-repeat;background-size:cover}
.bgm-item-info{height: 28%;display:flex;flex-direction:column;align-items:center;padding:.5rem;overflow:hidden}
.bgm-item-title{text-overflow:ellipsis;font-size:.86rem;color:#248ea9;font-weight:700;font-style:italic;}
.bgm-item-info>*{display:block;margin:0 auto;max-width:100%}
.bgm-item-statusBar-container{border-radius: 12px;bottom:-22px;width: 97%;margin:.2rem auto;padding:.2em;background:rgba(0,0,0,.2);position:relative;z-index:0;color:#333;font-size:12px;font-weight: 400;font-style: italic;text-align: center;overflow: hidden;}
.bgm-item-statusBar{position:absolute;height:100%;background:#FFB75D;left:0;top:0;z-index:-1}
.bgm-item:hover{background-color: rgba(253,253,253,0.90);box-shadow: 0 0 6px rgba(0,0,0,.8);}
.bgm-item:hover .bgm-item-thumb{transform:scale(1.02);opacity: 1;}
.bgm-item-titlemain {text-overflow: ellipsis;color: #f36886;font-weight: 400;font-size: 16px;text-shadow: 0 0 3px #fa8282;margin-bottom:8px;}
.bilibili {display: flex;flex-wrap: wrap;justify-content: center}
.page-header{text-align: center;}
.page-header h1 small {font-size: 18px;color: #98FB98;}
.page-header h1 {color: #ee9ca7;font-weight: 800;}
/* Add new */
.cliffs-hentry.cliffs-post-inner i:not(:first-child){margin-left:12px}
.cliffs-hentry{margin-bottom:15px;background-color:#fff;box-shadow:0 2px 4px rgba(0,0,0,.1);border-radius:0;-webkit-transition:all .6s ease;transition:all .6s ease}
.cliffs-hentry.cliffs-post-inner{margin-bottom:0}
.container article.cliffs-hentry:hover{box-shadow:0 8px 15px rgba(146,146,146,.39)}
.cliffs-post-inner.cliffs-hentry{padding:25px 10px 18px 10px}
</style>
<?php
// Add New
$arr = array(
	'(￣▽￣)"',
	'o(*￣▽￣*)o',
	'O(∩_∩)O',
	'U•ェ•*U',
	'(oﾟvﾟ)ノ',
	'(*^_^*)',
	'（。＾▽＾）',
	'(/▽＼)',
    '（￣︶￣）↗　',
    'ヾ(•ω•`)o',
    'ヾ(≧▽≦*)o',
    '◑﹏◐'
);
$OvO = $arr[array_rand($arr)];
?>
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
                    $bili=new bilibiliApiRequest("28645589","_uuid=DE9F5DCB-B4E2-DB29-4669-96F73C0DF8A312797infoc; buvid3=399D2A9F-CA53-4D94-999D-30C1CFB21535155809infoc; sid=i63egglh; DedeUserID=28645589; DedeUserID__ckMd5=ce1225f5173934cb; SESSDATA=6984fe1b%2C1599698139%2Ced9cb*31; bili_jct=cd48526857122a57119db70393eafdc6; LIVE_BUVID=AUTO8215841466182023; CURRENT_FNVAL=16; rpdid=|(umYR~~mR|)0J'ul)RuRYYRu; dy_spec_agreed=1; CURRENT_QUALITY=64; Hm_lvt_8a6e55dbd2870f0f5bc9194cddf32a02=1584756944,1584758570,1584762526,1584762545; INTVER=1; bp_t_offset_28645589=369077637942538252; PVID=4");
                    echo "<small>呐呐呐(/▽＼)！当前已追 ".$bili->sum." 部，继续 Keep 哦~</small></h1></div><div class=\"bilibili\">";
                    function precentage($str1,$str2)
                    {
                        if(is_numeric($str1) && is_numeric($str2)) return $str1/$str2*100;
                        else if ($str1=="0") return 0;
                        else return 100;
                    }
                    for($i=0;$i<$bili->sum;$i++)
                    {
                        echo "<a class=\"bgm-item\" href=\"https://www.bilibili.com/bangumi/play/ss".$bili->season_id[$i]."/ \" target=\"_blank\" title=\"要看看".$bili->title[$i]."吗".$OvO."\"><div class=\"bgm-item-thumb\" style=\"background-image:url(".$bili->image_url[$i].")\"></div><div class=\"bgm-item-info\"><span class=\"bgm-item-titlemain\">".$bili->title[$i]."</span><span class=\"bgm-item-title\">".$bili->evaluate[$i]."</span></div><div class=\"bgm-item-statusBar-container\"><div class=\"bgm-item-statusBar\" style=\"width:".precentage($bili->progress[$i],$bili->total[$i])."%\"></div>".$bili->progress[$i]."/". $bili->total[$i]."</div></a>";
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