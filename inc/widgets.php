<?php

function kratos_widgets_init() {
    register_sidebar( array(
        'name' => '侧边栏工具',
        'id' => 'sidebar_tool',
        'before_widget' => '<aside id="%1$s" class="widget %2$s clearfix">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ) );   
}
add_action( 'widgets_init', 'kratos_widgets_init' );

function remove_default_widget() {
       unregister_widget('WP_Widget_Recent_Posts');//移除近期文章
       unregister_widget('WP_Widget_Recent_Comments');//移除近期评论
       unregister_widget('WP_Widget_Meta');//移除站点功能
       unregister_widget('WP_Widget_Tag_Cloud');//移除标签云
 //    unregister_widget('WP_Widget_Text');//移除文本框
 //    unregister_widget('WP_Widget_Archives');//移除文章归档
 //    unregister_widget('WP_Widget_RSS');//移除RSS
       unregister_widget('WP_Nav_Menu_Widget');//移除菜单
 //    unregister_widget('WP_Widget_Pages');//移除页面
       unregister_widget('WP_Widget_Calendar');//移除日历
 //    unregister_widget('WP_Widget_Categories');//移除分类目录
       unregister_widget('WP_Widget_Search');//移除搜索
}
add_action( 'widgets_init', 'remove_default_widget' );

class kratos_widget_baidu_ad extends WP_Widget {

	function __construct() {
		$widget_ops = array(
			'classname' => 'kratos_widget_baidu_ad',
			'name'        => 'Kratos - 谷歌广告位',
			'description' => 'Kratos主题特色组件 - 谷歌广告位。会跟着顶部移动，但需要自己修改源码，源码位置在Kratos/inc/widgets.php'
		);
		parent::__construct( false, false, $widget_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );
		$script = $instance['script'] ? $instance['script'] : '';
		?>
		<?php if(!empty($script)) {?>
            <?php 
								   echo '<aside class="widget clearfix" style="padding: 0">';
								   echo $script; ?>
		<?php } else { ?>
        <aside class="widget baidu_ad clearfix" style="padding: 0">
            <h4 class="widget-title" style="margin: 30px;">VPS推荐</h4>
            <div class="vps">
                <table border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
						    <tr>
                        <td><a href="https://www.flyzy2005.com/goto/tengxunyun" target="_blank"><img src="https://www.flyzy2005.com/wp-content/uploads/2018/01/tencent-cloud-300x100.jpg" alt="腾讯云优惠券"></a>
                            <br>
                            <a href="https://www.flyzy2005.com/goto/tengxunyun" target="_blank"
							   style="border-bottom: 1px solid #e7e7e7">简单备案，免费SSL证书&CDN加速</a>
                        </td>
                    </tr>
                    <tr>
						<td>
							<a href="https://www.flyzy2005.com/goto/aliyun" target="_blank"><img src="https://www.flyzy2005.com/wp-content/uploads/2018/05/aliyun-hk.png" alt="阿里云优惠券"></a>
                            <br><a href="https://www.flyzy2005.com/goto/aliyun" target="_blank"
							   style="border-bottom: 1px solid #e7e7e7">阿里云香港服务器 首选游戏加速器</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="https://www.flyzy2005.com/goto/bwg" target="_blank"><img
                                        src="https://www.flyzy2005.com/wp-content/uploads/2018/04/bandwagon.png"
                                        alt="搬瓦工优惠券优惠码"></a>
                            <br>
                            <a href="https://www.flyzy2005.com/goto/bwg" target="_blank"
                               style="border-bottom: 1px solid #e7e7e7">使用优惠券BWH1ZBPVK仅需18.79刀/年</a>
                        </td>
                    </tr>
						    <tr>
                        <td>
                            <a href="https://www.flyzy2005.com/goto/vultr" target="_blank"><img
                                        src="https://www.flyzy2005.com/wp-content/uploads/2018/04/vultr-go-300.png"
                                        alt="vultr优惠码"></a>
                            <br>
                            <a href="https://www.flyzy2005.com/goto/vultr" target="_blank"
                               style="border-bottom: 1px solid #e7e7e7">15个数据中心，KVM架构，最低2.5刀/月</a>
                        </td>
                    </tr>
							<tr>
                        <td>
							<a href="https://www.flyzy2005.com/goto/do" target="_blank"><img src="https://www.flyzy2005.com/wp-content/uploads/2018/05/digitalocean-new-promo.png" alt="DigitalOcean新用户优惠"></a><br><a href="https://www.flyzy2005.com/goto/do" target="_blank" style="border-bottom: 1px solid #e7e7e7">DigitalOcean新用户注册送10美元</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
		<aside id="custom_html-2" class="widget_text widget widget_custom_html clearfix">
        <h4 class="widget-title">更多</h4>
        <div class="textwidget custom-html-widget">
            <ul>
                <li><a class="sidebar-more-a" href="https://www.flyzy2005.com/contact-me/" target="_blank" title="关于我 &amp; 关于flyzy小站">关于本站</a></li>
                <li><a class="sidebar-more-a" href="https://www.flyzy2005.com/guestbook/" target="_blank" title="说你想说的">留个脚印</a></li>
	            <li><a class="sidebar-more-a" href="https://www.flyzy2005.com/go/go.php?url=https://t.me/flyzythink" target="_blank" title="随手分享正能量，分享VPS优惠信息">Telegram频道</a></li>
                <li><a class="sidebar-more-a" href="https://www.flyzy2005.com/go/go.php?url=https://t.me/flyzyxiaozhan" target="_blank" title="加入群组，随意聊天">Telegram群组</a></li>
                <li>文章：<?php $count_posts = wp_count_posts();
					echo $published_posts = $count_posts->publish; ?>篇
                </li>
                <li>评论：<?php $count_comments = get_comment_count();
					echo $count_comments['approved']; ?>条
                </li>
                <li>浏览：<?php global $wpdb;
					echo $count = $wpdb->get_var( "SELECT SUM(meta_value+0) FROM $wpdb->postmeta WHERE meta_key = 'views'" ); ?>次
                </li>
                <li>更新：<?php $last = $wpdb->get_results( "SELECT MAX(post_modified) AS MAX_m FROM $wpdb->posts WHERE (post_type = 'post' OR post_type = 'page') AND (post_status = 'publish' OR post_status = 'private')" );
					$last          = date( 'Y.n.j', strtotime( $last[0]->MAX_m ) );
					echo $last; ?></li>
		    </ul>
		</div>
		</aside>
		<?php }
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		return $new_instance;
	}

	function form( $instance ) {
		@$script = esc_attr( $instance['script'] );
		?>
        <p>
            <label for="<?php echo $this->get_field_id( 'script' ); ?>">
                谷歌广告代码：
                <input class="widefat" id="<?php echo $this->get_field_id( 'script' ); ?>" name="<?php echo $this->get_field_name( 'script' ); ?>" type="text" value="<?php echo $script; ?>" />
            </label>
        </p>
		<?php
	}
}

class kratos_widget_ad extends WP_Widget {

    function __construct() {
        $widget_ops = array(
            'classname' => 'widget_kratos_ad',
            'name'        => 'Kratos - 通用广告位',
            'description' => 'Kratos主题特色组件 - 通用广告位，自定义标题&链接&图片'
        );
        parent::__construct( false, false, $widget_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $aurl = $instance['aurl'] ? $instance['aurl'] : '';
        $title = $instance['title'] ? $instance['title'] : '';
        $imgurl = $instance['imgurl'] ? $instance['imgurl'] : '';
        echo $before_widget;
        ?>
            <?php if(!empty($title)) {?>
            <h4 class="widget-title"><?php echo $title; ?></h4>
            <?php }?>
            <?php if(!empty($imgurl)) {?>
            <a href="<?php echo $aurl; ?>" <?php if (!stristr($aurl, home_url())) echo 'rel="nofollow"'?> target="_blank">
				<img class="carousel-inner img-responsive img-rounded" src="<?php echo $imgurl; ?>" alt="推荐"/>
            </a>
            <?php }?>
        <?php
         echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        return $new_instance;
    }

    function form( $instance ) {
        @$title = esc_attr( $instance['title'] );
        @$aurl = esc_attr( $instance['aurl'] );
        @$imgurl = esc_attr( $instance['imgurl'] );
        ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                    标题：
                    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
                </label>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'aurl' ); ?>">
                    链接：
                    <input class="widefat" id="<?php echo $this->get_field_id( 'aurl' ); ?>" name="<?php echo $this->get_field_name( 'aurl' ); ?>" type="text" value="<?php echo $aurl; ?>" />
                </label>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'imgurl' ); ?>">
                    图片：
                    <input class="widefat" id="<?php echo $this->get_field_id( 'imgurl' ); ?>" name="<?php echo $this->get_field_name( 'imgurl' ); ?>" type="text" value="<?php echo $imgurl; ?>" />
                </label>
            </p>
        <?php
    }
}

class kratos_widget_about extends WP_Widget {

    function __construct() {
        $widget_ops = array(
            'classname' => 'amadeus_about',
            'name'        => 'Kratos - 个人简介',
            'description' => 'Kratos主题特色组件 - 个人简介'
        );
        parent::__construct( false, false, $widget_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $profile = $instance['profile'] ? $instance['profile'] : '';
        $imgurl = $instance['imgurl'] ? $instance['imgurl'] : '';
        $bkimgurl = $instance['bkimgurl'] ? $instance['bkimgurl'] : '';
        echo $before_widget;
        ?>
                <?php if(!empty($bkimgurl)) {?>
                <div class="photo-background">
                    <div class="photo-background" style="background:url(<?php echo $bkimgurl;?>) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
                </div>
                <?php }else{?>
                <div class="photo-background" style="background:url(<?php echo bloginfo('template_url'); ?>/images/about.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
                <?php }?>
                <?php if(!empty($imgurl)) {?>
                <div class="photo-wrapper clearfix">
                    <div class="photo-wrapper-tip text-center">
                        <img class="about-photo" src="<?php echo $imgurl; ?>" />
                    </div>
                </div>
                <?php }else{?>
                <div class="photo-wrapper clearfix">
                    <div class="photo-wrapper-tip text-center">
                        <img class="about-photo" src="<?php echo bloginfo('template_url'); ?>/images/avatar.png" />
                    </div>
                </div>
                <?php }?>
                <?php if(!empty($profile)) {?>
                <div class="textwidget">
                    <p><?php echo $profile; ?></p>
                </div>
                <?php }?>
        <?php
        echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        return $new_instance;
    }

    function form( $instance ) {
        @$imgurl = esc_attr( $instance['imgurl'] );
        @$bkimgurl = esc_attr( $instance['bkimgurl'] );
        @$profile = esc_attr( $instance['profile'] );
        ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'imgurl' ); ?>">
                    头像地址：
                    <input class="widefat" id="<?php echo $this->get_field_id( 'imgurl' ); ?>" name="<?php echo $this->get_field_name( 'imgurl' ); ?>" type="text" value="<?php echo $imgurl; ?>" />
                </label>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id( 'profile' ); ?>">
                    简介内容：
                    <textarea class="widefat" rows="4" id="<?php echo $this->get_field_id( 'profile' ); ?>" name="<?php echo $this->get_field_name( 'profile' ); ?>" ><?php echo $profile; ?></textarea>
                </label>
            </p> 
            <p>
                <label for="<?php echo $this->get_field_id( 'bkimgurl' ); ?>">
                    卡片背景：
                    <input class="widefat" id="<?php echo $this->get_field_id( 'bkimgurl' ); ?>" name="<?php echo $this->get_field_name( 'bkimgurl' ); ?>" type="text" value="<?php echo $bkimgurl; ?>" />
                </label>
            </p>
        <?php
    }
}

class kratos_widget_tags extends WP_Widget {
    function __construct(){
        $widget_ops = array(
            'name'        => 'Kratos - 标签聚合',
            'description' => 'Kratos主题特色组件 - 标签聚合'
        );
        parent::__construct(false, false, $widget_ops);
    }

    function widget($args, $instance){
        extract($args);
        $result = '';
        $title = $instance['title'] ? esc_attr($instance['title']) : '';
        $title = apply_filters('widget_title',$title);
        $number = (!empty($instance['number'])) ? intval($instance['number']) : 50;
        $orderby = (!empty($instance['orderby'])) ? esc_attr($instance['orderby']) : 'count';
        $order = (!empty($instance['order'])) ? esc_attr($instance['order']) : 'DESC';
        $tags = wp_tag_cloud( array(
                    'unit' => 'px',
                    'smallest' => 14,
                    'largest' => 14,
                    'number' => $number,
                    'format' => 'flat',
                    'orderby' => $orderby,
                    'order' => $order,
                    'echo' => false
                )
            );
        $result .= $before_widget;
        if($title) {$result .= '<h4 class="widget-title">'.$title .'</h4>';}
        $result .= '<div class="tag_clouds">';
        $result .= $tags;
        $result .= '</div>';
        $result .= $after_widget;
        echo $result;
    }

    function update($new_instance, $old_instance){
        if (!isset($new_instance['submit'])) {
            return false;
        }
        $instance = $old_instance;
        $instance['title'] = esc_attr($new_instance['title']);
        $instance['number'] = intval($new_instance['number']);
        $instance['orderby'] = esc_attr($new_instance['orderby']);
        $instance['order'] = esc_attr($new_instance['order']);
        return $instance;
    }

    function form($instance){
        global $wpdb;
        $instance = wp_parse_args((array) $instance, array('title'=>'标签聚合','number'=>'20','orderby'=>'count','order'=>'RAND'));
        $title =  esc_attr($instance['title']);
        $number = intval($instance['number']);
        $orderby =  esc_attr($instance['orderby']);
        $order =  esc_attr($instance['order']);
        ?>
        <p>
            <label for='<?php echo $this->get_field_id("title");?>'>标题：<input type='text' class='widefat' name='<?php echo $this->get_field_name("title");?>' id='<?php echo $this->get_field_id("title");?>' value="<?php echo $title;?>"/></label>
        </p>
        <p>
            <label for='<?php echo $this->get_field_id("number");?>'>数量：<input type='text' name='<?php echo $this->get_field_name("number");?>' id='<?php echo $this->get_field_id("number");?>' value="<?php echo $number;?>"/></label>
        </p>
        <p>
            <label for='<?php echo $this->get_field_id("orderby");?>'>类型：
                <select name="<?php echo $this->get_field_name("orderby");?>" id='<?php echo $this->get_field_id("orderby");?>'>
                    <option value="count" <?php echo ($orderby == 'count') ? 'selected' : ''; ?>>数量</option>
                    <option value="name" <?php echo ($orderby == 'name') ? 'selected' : ''; ?>>名字</option>
                </select>
            </label>
        </p>
        <p>
            <label for='<?php echo $this->get_field_id("order");?>'>排序：
                <select name="<?php echo $this->get_field_name("order");?>" id='<?php echo $this->get_field_id("order");?>'>
                    <option value="DESC" <?php echo ($order == 'DESC') ? 'selected' : ''; ?>>降序</option>
                    <option value="ASC" <?php echo ($order == 'ASC') ? 'selected' : ''; ?>>升序</option>
                    <option value="RAND" <?php echo ($order == 'RAND') ? 'selected' : ''; ?>>随机</option>
                </select>
            </label>
        </p>
        <input type="hidden" id="<?php echo $this->get_field_id('submit'); ?>" name="<?php echo $this->get_field_name('submit'); ?>" value="1" />
        <?php
    }
}

class kratos_widget_search extends WP_Widget {

    function __construct(){
        $widget_ops = array(
            'classname' => 'widget_kratos_search',
            'name'        => 'Kratos - 站点搜索',
            'description' => 'Kratos主题特色组件 - 站点搜索'
        );
        parent::__construct( false, false, $widget_ops );
    }

    function widget( $args, $instance ) {
        extract( $args );
        $title = $instance['title'] ? $instance['title'] : '';
        echo $before_widget;
        ?>
        <?php if(!empty($title)) {?>
        <h4 class="widget-title"><?php echo $title; ?></h4>
        <?php }?>
         <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
            <div class="form-group">
                 <input type="text" name='s' id='s' placeholder="Search…" class="form-control" placeholder="" x-webkit-speech>
            </div>
        </form>

        <?php
        echo $after_widget;
    }

    function update( $new_instance, $old_instance ) {
        return $new_instance;
    }

    function form( $instance ) {
        @$title = esc_attr( $instance['title'] );
        ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>">
                    标题：
                    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
                </label>
            </p>
        <?php
    }
}

class kratos_widget_posts extends WP_Widget{

    function __construct(){
        $widget_ops = array(
        	
        	'classname' => 'kratos_widget_posts',
            'name'        => 'Kratos - 文章聚合',
            'description'=>'Kratos主题特色组件 - 文章聚合，需要自己修改文件，源码位置在Kratos/inc/widgets.php'
        );
        parent::__construct( false, false, $widget_ops );
    }

    function widget($args, $instance){
        extract($args);
        $result = '';
        $number = (!empty($instance['number'])) ? intval($instance['number']) : 5;
        ?>
        <aside class="widget widget_kratos_poststab">
            <ul id="tabul" class="nav nav-tabs nav-justified visible-lg">
                <li class="active"><a href="#recommend" data-toggle="tab"> 推荐文章</a></li>
                <li><a href="#newest" data-toggle="tab"> 最新文章</a></li>
                <li><a href="#hot" data-toggle="tab">热点文章</a></li>
            </ul>
            <ul id="tabul" class="nav nav-tabs nav-justified visible-md">
                <li class="active"><a href="#recommend" data-toggle="tab"> 推荐</a></li>
                <li><a href="#newest" data-toggle="tab"> 最新</a></li>
                <li><a href="#hot" data-toggle="tab">热点</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="recommend"><ul class="list-group"><a class="list-group-item visible-lg" title="科学上网：一键搭建自己的shadowsocks/shadowsocksR服务" href="<?php echo get_option( 'home' ); ?>/fan-qiang/shadowsocks/install-shadowsocks-in-one-command/" rel="bookmark"><i class="fa  fa-book"></i><span>一键脚本搭建ss/ssr&开启bbr</span> </a>
						<a class="list-group-item visible-md" title="科学上网：一键搭建自己的shadowsocks/shadowsocksR服务" href="<?php echo get_option( 'home' ); ?>/fan-qiang/shadowsocks/install-shadowsocks-in-one-command/" rel="bookmark"><i class="fa  fa-book"></i><span>一键脚本搭建ss/ssr</span></a>
					<a class="list-group-item visible-lg" title="搬瓦工一键搭建ss服务器" href="<?php echo get_option( 'home' ); ?>/go/?https://vultr.vultrss.win/%E6%90%AC%E7%93%A6%E5%B7%A5%E4%B8%80%E9%94%AE%E6%90%AD%E5%BB%BAss/" rel="bookmark" target="_blank"><i class="fa  fa-book"></i> <span>搬瓦工一键搭建ss服务器</span></a>
					<a class="list-group-item visible-md" title="搬瓦工一键搭建ss服务器" href="<?php echo get_option( 'home' ); ?>/go/?https://vultr.vultrss.win/%E6%90%AC%E7%93%A6%E5%B7%A5%E4%B8%80%E9%94%AE%E6%90%AD%E5%BB%BAss/" rel="bookmark" target="_blank"><i class="fa  fa-book"></i><span>搬瓦工一键搭建ss</span></a>
						<a class="list-group-item visible-lg" title="手把手建站教程：教你搭建自己个人网站" href="<?php echo get_option( 'home' ); ?>/build-page/build-home-page/" rel="bookmark"><i class="fa  fa-book"></i> <span>建站教程，搭建个人博客</span></a>
						<a class="list-group-item visible-md" title="手把手建站教程：教你搭建自己个人网站" href="<?php echo get_option( 'home' ); ?>/build-page/build-home-page/" rel="bookmark"><i class="fa  fa-book"></i><span>建站教程，搭建个人博客</span></a>
						<a class="list-group-item visible-lg" title="shadowsocks多用户配置与流量限制" href="<?php echo get_option( 'home' ); ?>/fan-qiang/shadowsocks/shadowsocks-config-multiple-users/" rel="bookmark"><i class="fa  fa-book"></i> <span>ss多用户配置与流量统计限制</span></a>
						<a class="list-group-item visible-md" title="shadowsocks多用户配置与流量限制" href="<?php echo get_option( 'home' ); ?>/fan-qiang/shadowsocks/shadowsocks-config-multiple-users/" rel="bookmark"><i class="fa  fa-book"></i><span>ss多用户与流量限制</span></a>
						<a class="list-group-item visible-lg" title="Namesilo域名优惠券" href="<?php echo get_option( 'home' ); ?>/build-page/namesilo-domain-dnspod-dns/" rel="bookmark"><i class="fa  fa-book"></i> <span>Namesilo域名优惠券，首年$5.99</span></a>
						<a class="list-group-item visible-md" title="Namesilo域名优惠券" href="<?php echo get_option( 'home' ); ?>/build-page/namesilo-domain-dnspod-dns/" rel="bookmark"><i class="fa  fa-book"></i><span>Namesilo域名优惠券</span></a>
						<a class="list-group-item visible-lg" title="shadowsocks/各版本客户端下载地址" href="<?php echo get_option( 'home' ); ?>/fan-qiang/shadowsocks/ss-clients-download/" rel="bookmark"><i class="fa  fa-book"></i> <span>ss各版本客户端下载地址与配置</span></a>
						<a class="list-group-item visible-md" title="shadowsocks各版本客户端下载地址" href="<?php echo get_option( 'home' ); ?>/fan-qiang/shadowsocks/ss-clients-download/" rel="bookmark"><i class="fa  fa-book"></i><span>ss客户端下载地址与配置</span></a>
                    </ul>
                </div>
                <div class="tab-pane fade" id="newest">
                    <ul class="list-group">
                        <?php $myposts = get_posts('numberposts='.$number.' & offset=0'); foreach($myposts as $post) : ?>
						<a class="list-group-item visible-lg" title="<?php echo $post->post_title;?>" href="<?php echo get_permalink($post->ID); ?>" rel="bookmark"><i class="fa  fa-book"></i> <span><?php echo strip_tags($post->post_title) ?></span></a>
						<a class="list-group-item visible-md" title="<?php echo $post->post_title;?>" href="<?php echo get_permalink($post->ID); ?>" rel="bookmark"><i class="fa  fa-book"></i> <span><?php echo strip_tags($post->post_title) ?></span></a>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-pane fade" id="hot">
                    <ul class="list-group">
                        <?php if(function_exists('most_comm_posts')) {most_comm_posts(60, $number);} ?>
                    </ul>
                </div>
            </div>
        </aside>
        <?php
    }
    function update($new_instance, $old_instance){
        if (!isset($new_instance['submit'])) {
            return false;
        }
        $instance = $old_instance;
        $instance['number'] = intval($new_instance['number']);
        return $instance;
    }

    function form($instance){
        global $wpdb;
        $instance = wp_parse_args((array) $instance, array('number'=>'5'));
        $number = intval($instance['number']);
        ?>

        <p>
            <label for='<?php echo $this->get_field_id("number");?>'>每项展示数量：<input type='text' name='<?php echo $this->get_field_name("number");?>' id='<?php echo $this->get_field_id("number");?>' value="<?php echo $number;?>"/></label>
        </p>
        <input type="hidden" id="<?php echo $this->get_field_id('submit'); ?>" name="<?php echo $this->get_field_name('submit'); ?>" value="1" />
        <?php
    }
}

class kratos_widget_comments extends WP_Widget{

	function __construct(){
		$widget_ops = array(

			'classname' => 'kratos_widget_comments',
			'name'        => 'Kratos - 近期评论',
			'description'=>'Kratos主题特色组件 - 近期评论'
		);
		parent::__construct( false, false, $widget_ops );
	}

	function widget($args, $instance){
		extract($args);
		$result = '';
		$number = (!empty($instance['number'])) ? intval($instance['number']) : 6;

		$comments = get_comments( apply_filters( 'widget_comments_args', array(
			'number'      => $number,
			'status'      => 'approve',
			'post_status' => 'publish'
		), $instance ) );
		?>
        <aside class="widget_kratos_commentstab widget">
            <h4 style="margin-left: 20px;" class="widget-title">近期评论</h4>
            <div class="recent_comments">
                <?php
                    if ( is_array($comments) && $comments) {
                        foreach ( (array) $comments as $comment ) {
	                        ?>
                            <a href="<?php echo get_comment_link( $comment ) ?>" title="发表在：<?php echo get_the_title( $comment->comment_post_ID )?>">
                                <div class="meta clearfix">
                                    <div class="avatar float-left">
                                        <img alt style="border-radius: 50%;" src="<?php if ( $comment -> user_id == "1" ) {
                                            echo get_template_directory_uri() . '/images/admin-avatar.jpg';
                                        } else {
	                                        echo get_template_directory_uri() . '/images/default-avatar.jpg';
                                        } ?>">
                                    </div>
                                    <div class="profile d-block">
                                        <span class="date">发布于<?php echo smk_get_comment_time($comment->comment_ID)?><?php echo "（".get_comment_date('n月j日', $comment->comment_ID)."）"?></span>
                                        <span class="message d-block"><?php echo convert_smilies(get_comment_excerpt( $comment )) ?></span>
                                    </div>
                                </div>
                            </a>
	                        <?php
                        }}?>
            </div>
        </aside>
		<?php
	}
	function update($new_instance, $old_instance){
		if (!isset($new_instance['submit'])) {
			return false;
		}
		$instance = $old_instance;
		$instance['number'] = intval($new_instance['number']);
		return $instance;
	}

	function form($instance){
		global $wpdb;
		$instance = wp_parse_args((array) $instance, array('number'=>'5'));
		$number = intval($instance['number']);
		?>

        <p>
            <label for='<?php echo $this->get_field_id("number");?>'>每项展示数量：<input type='text' name='<?php echo $this->get_field_name("number");?>' id='<?php echo $this->get_field_id("number");?>' value="<?php echo $number;?>"/></label>
        </p>
        <input type="hidden" id="<?php echo $this->get_field_id('submit'); ?>" name="<?php echo $this->get_field_name('submit'); ?>" value="1" />
		<?php
	}
}

function kratos_register_widgets(){
    register_widget('kratos_widget_ad'); 
    register_widget('kratos_widget_about'); 
    register_widget('kratos_widget_tags'); 
    register_widget('kratos_widget_search'); 
    register_widget('kratos_widget_posts'); 
	 register_widget('kratos_widget_comments');
	register_widget('kratos_widget_baidu_ad');
}
add_action('widgets_init','kratos_register_widgets');
?>