<?php
//000000000600a:2:{i:0;a:14:{s:2:"id";s:2:"29";s:5:"title";s:12:"大洼大洼";s:7:"content";s:19:"<p>大娃娃的</p>";s:10:"view_count";s:1:"5";s:8:"cover_id";s:2:"21";s:8:"issue_id";s:2:"14";s:3:"uid";s:1:"1";s:11:"reply_count";s:1:"0";s:11:"create_time";s:10:"1430704938";s:11:"update_time";s:10:"1430704938";s:6:"status";s:1:"1";s:3:"url";s:7:"http://";s:4:"user";a:11:{s:8:"avatar32";s:38:"Public/images/default_avatar_32_32.jpg";s:8:"avatar64";s:38:"Public/images/default_avatar_64_64.jpg";s:9:"avatar128";s:40:"Public/images/default_avatar_128_128.jpg";s:9:"avatar256";s:40:"Public/images/default_avatar_256_256.jpg";s:9:"avatar512";s:40:"Public/images/default_avatar_512_512.jpg";s:9:"space_url";s:52:"/opensns/index.php?s=/ucenter/index/index/uid/1.html";s:10:"space_link";s:98:"<a ucard="1" target="_blank" href="/opensns/index.php?s=/ucenter/index/index/uid/1.html">admin</a>";s:13:"space_mob_url";s:47:"/opensns/index.php?s=/mob/user/index/uid/1.html";s:2:"id";s:1:"1";s:8:"nickname";s:5:"admin";s:13:"real_nickname";s:5:"admin";}s:5:"issue";a:2:{s:2:"id";s:2:"14";s:5:"title";s:12:"默认二级";}}i:1;a:14:{s:2:"id";s:2:"30";s:5:"title";s:18:"测试代码高亮";s:7:"content";s:451:"<pre class="brush:php;toolbar:false">public function reload()
{
    $modules = $this->select();
    foreach ($modules as $m) {
        if (file_exists(APP_PATH . '/' . $m['name'] . '/Info/info.php')) {
            $info = array_merge($m, $this->getInfo($m['name']));
            $this->save($info);
        }
    }
    $this->cleanModulesCache();
}</pre><p><br/></p>";s:10:"view_count";s:1:"2";s:8:"cover_id";s:2:"22";s:8:"issue_id";s:2:"14";s:3:"uid";s:1:"1";s:11:"reply_count";s:1:"0";s:11:"create_time";s:10:"1430705543";s:11:"update_time";s:10:"1430705543";s:6:"status";s:1:"1";s:3:"url";s:7:"http://";s:4:"user";a:11:{s:8:"avatar32";s:38:"Public/images/default_avatar_32_32.jpg";s:8:"avatar64";s:38:"Public/images/default_avatar_64_64.jpg";s:9:"avatar128";s:40:"Public/images/default_avatar_128_128.jpg";s:9:"avatar256";s:40:"Public/images/default_avatar_256_256.jpg";s:9:"avatar512";s:40:"Public/images/default_avatar_512_512.jpg";s:9:"space_url";s:52:"/opensns/index.php?s=/ucenter/index/index/uid/1.html";s:10:"space_link";s:98:"<a ucard="1" target="_blank" href="/opensns/index.php?s=/ucenter/index/index/uid/1.html">admin</a>";s:13:"space_mob_url";s:47:"/opensns/index.php?s=/mob/user/index/uid/1.html";s:2:"id";s:1:"1";s:8:"nickname";s:5:"admin";s:13:"real_nickname";s:5:"admin";}s:5:"issue";a:2:{s:2:"id";s:2:"14";s:5:"title";s:12:"默认二级";}}}
?>