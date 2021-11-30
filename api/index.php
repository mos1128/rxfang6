<?php
/* 特别说明：本页面防洪是没有绿标域名的权宜之计。
1、仅支持当前页面的分享显示密码。
2、如果点击跳转到了其他页面，其他页面分享出去还是第一个页面的信息，不过防洪还是有效的。
-2.1、可以设置链接在新页面打开，解决这个问题，不过新页面不防洪(伪解决办法)。
-2.2、可以设置页面内只显示本内容，不显示相关文章，用户只能看群里发的(提高看群率)。
-2.3、可以所有密码设置一样，分享效果或许会差，但是相对完美。
3、如果你想点击其他页面也动态同步网址和标题，就将下方的代码加到源站的页头处。
-3.1、因为安卓QQ不能动态渲染js，所以即使动态同步了分享出去也是第一个页面的信息。
代码：<script>if(window.parent){syncMsg={type:"sync",title:document.title,path:document.location.pathname+document.location.hash};window.parent.postMessage(syncMsg,"*");};</script>
*/
$web_name = "https://sss001.mos.mos.q0yy.com/";//设置网站域名
$web_query = $_SERVER['QUERY_STRING'];
$web_url = $web_name.$web_query;
$site_info = CurlGet($web_url);
$title = isset($site_info['site_title']) ? $site_info['site_title'] : "美图分享";
$keywords = isset($site_info['site_keywords']) ? $site_info['site_keywords'] : "进来看看呗";
$description = isset($site_info['site_description']) ? $site_info['site_description'] : "进来看看呗";

function CurlGet($url, $post_data=0, $cookie=0) {//有post_data就POST提交，没有就GET提交
	global $UserAgent;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_COOKIE, $cookie);
	curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);//重定向自动跳转
	curl_setopt($curl, CURLOPT_AUTOREFERER, 1);//重定向自动设置Referer信息
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//不验证SSL
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_HEADER, 1);//输出Header
    curl_setopt($curl, CURLOPT_NOBODY, 0);//不输出Body
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//返回数据不直接显示
	if ($post_data) {//使用POST提交数据
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
	}
	$response = curl_exec($curl);
	curl_close($curl);
	$site_info = get_page_info($response);
	return $site_info;
}

function get_page_info($response) {
    $page_info = array();
    $page_info['site_title'] = '';
    $page_info['site_description'] = '';
    $page_info['site_keywords'] = '';
    if(empty($response)) return $page_info;
    # Title
    preg_match('/<TITLE>([\w\W]*?)<\/TITLE>/si', $response, $matches);
    if (!empty($matches[1])) {
        $page_info['site_title'] = $matches[1];
    }
    //正则匹配，获取全部的meta元数据
    preg_match_all('/<META(.*?)>/si', $response, $matches);
    $meta_str_array = $matches[0];
    $meta_array = array();
    $meta_array['description'] = '';
    $meta_array['keywords'] = '';
    foreach($meta_str_array as $meta_str) {
        preg_match('/<META\s+name="([\w\W]*?)"\s+content="([\w\W]*?)"/si', $meta_str, $res);
        if(!empty($res)) $meta_array[strtolower($res[1])] = $res[2];
        preg_match('/<META\s+content="([\w\W]*?)"\s+name="([\w\W]*?)"/si', $meta_str, $res);
        if(!empty($res)) $meta_array[strtolower($res[2])] = $res[1];
        preg_match('/<META\s+http-equiv="([\w\W]*?)"\s+content="([\w\W]*?)"/si', $meta_str, $res);
        if(!empty($res)) $meta_array[strtolower($res[1])] = $res[2];
        preg_match('/<META\s+content="([\w\W]*?)"\s+http-equiv="([\w\W]*?)"/si', $meta_str, $res);
        if(!empty($res)) $meta_array[strtolower($res[2])] = $res[1];
        preg_match('/<META\s+scheme="([\w\W]*?)"\s+content="([\w\W]*?)"/si', $meta_str, $res);
        if(!empty($res)) $meta_array[strtolower($res[1])] = $res[2];
        preg_match('/<META\s+content="([\w\W]*?)"\s+scheme="([\w\W]*?)"/si', $meta_str, $res);
        if(!empty($res)) $meta_array[strtolower($res[2])] = $res[1];
    }
    $page_info['site_keywords'] = $meta_array['keywords'];
    $page_info['site_description'] = $meta_array['description'];
    $page_info['meta_array'] = $meta_array;
    return $page_info;
}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo $title;?></title>
<meta name="keywords" content="<?php echo $keywords;?>" />
<meta name="description" content="<?php echo $description;?>" />
<meta name="viewport" content="width=device-width,maximum-scale=1.0,user-scalable=yes">
<style>*{margin: 0;}iframe{display:block;width:100%;height:100%;frameborder:no;border:0;scrolling:auto;allowTransparency}</style>
</head>
<body>
<script>
;var encode_version = 'jsjiami.com.v5', suzbc = '__0xd3646',  __0xd3646=['LcKKYQXCjw==','wo44B3pV','w4l2w77DshICVsK0wprDncOAw6o=','wprDvMOSOcKB','UcK5dV8=','NCpOw4g=','esKIFgw=','wq4oV8KObi8=','wrDDnBo5fcKnw7LCjizDug/DrQ==','RU3Dq8OO','asKAFgE5','JMK3w5U=','TRrDkQ==','acKEDw==','fS3CoA==','w7zDtzA=','5YuS6Zqz54mW5p6Q5YyF7728w74w5Lyq5a+p5p6D5b+j56iD','JAVaw7Yx','Ailew4vDmw==','IihDw6vDhw==','w51SwqTDmcOy','IsKubgrCvQ==','GwsXw6/CuA==','Bz9Dw5PDsw==','RMOJFmJg','SCHDkwrCqw==','wrtQwqBWw6Y=','w7zCkArDkcO+','wpfCpWo=','EcKdXTTCuw==','TcKXw7xLwoA=','w5IrDypG','XBTCqcOAwrR0XU5oYcKKw6bDsUrDu8KxeiR/wpkoQMKpwrM2Z8K8wot7wpLDmMKGwo/DuCfDm2YKPMO6w5l8HMO1','FnQxUDvCmUYTWcOBeTwNwohVZg==','T8KWFn8EYcON','wrfDlw4wesKtw7nCuDw=','C0Uewr4=','DEUAwrg=','a8KUw6Fwwos=','w6XDrMOmwrI=','w7XDu8O5w64='];(function(_0x1e5272,_0x426013){var _0x5d6f5c=function(_0x7a1563){while(--_0x7a1563){_0x1e5272['push'](_0x1e5272['shift']());}};_0x5d6f5c(++_0x426013);}(__0xd3646,0x168));var _0x3c51=function(_0x2e7871,_0x1236cc){_0x2e7871=_0x2e7871-0x0;var _0x147c2b=__0xd3646[_0x2e7871];if(_0x3c51['initialized']===undefined){(function(){var _0x4c28da=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x486390='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x4c28da['atob']||(_0x4c28da['atob']=function(_0x228a29){var _0x4b4c7f=String(_0x228a29)['replace'](/=+$/,'');for(var _0x46c49a=0x0,_0x880dcd,_0x44ccfd,_0x201796=0x0,_0x3f7ba1='';_0x44ccfd=_0x4b4c7f['charAt'](_0x201796++);~_0x44ccfd&&(_0x880dcd=_0x46c49a%0x4?_0x880dcd*0x40+_0x44ccfd:_0x44ccfd,_0x46c49a++%0x4)?_0x3f7ba1+=String['fromCharCode'](0xff&_0x880dcd>>(-0x2*_0x46c49a&0x6)):0x0){_0x44ccfd=_0x486390['indexOf'](_0x44ccfd);}return _0x3f7ba1;});}());var _0x13367a=function(_0x2e0f63,_0x2676aa){var _0x18c4d6=[],_0x2049ff=0x0,_0x2999ed,_0x5ecf9e='',_0x526ae0='';_0x2e0f63=atob(_0x2e0f63);for(var _0x10f055=0x0,_0x549908=_0x2e0f63['length'];_0x10f055<_0x549908;_0x10f055++){_0x526ae0+='%'+('00'+_0x2e0f63['charCodeAt'](_0x10f055)['toString'](0x10))['slice'](-0x2);}_0x2e0f63=decodeURIComponent(_0x526ae0);for(var _0x27081c=0x0;_0x27081c<0x100;_0x27081c++){_0x18c4d6[_0x27081c]=_0x27081c;}for(_0x27081c=0x0;_0x27081c<0x100;_0x27081c++){_0x2049ff=(_0x2049ff+_0x18c4d6[_0x27081c]+_0x2676aa['charCodeAt'](_0x27081c%_0x2676aa['length']))%0x100;_0x2999ed=_0x18c4d6[_0x27081c];_0x18c4d6[_0x27081c]=_0x18c4d6[_0x2049ff];_0x18c4d6[_0x2049ff]=_0x2999ed;}_0x27081c=0x0;_0x2049ff=0x0;for(var _0x2972f3=0x0;_0x2972f3<_0x2e0f63['length'];_0x2972f3++){_0x27081c=(_0x27081c+0x1)%0x100;_0x2049ff=(_0x2049ff+_0x18c4d6[_0x27081c])%0x100;_0x2999ed=_0x18c4d6[_0x27081c];_0x18c4d6[_0x27081c]=_0x18c4d6[_0x2049ff];_0x18c4d6[_0x2049ff]=_0x2999ed;_0x5ecf9e+=String['fromCharCode'](_0x2e0f63['charCodeAt'](_0x2972f3)^_0x18c4d6[(_0x18c4d6[_0x27081c]+_0x18c4d6[_0x2049ff])%0x100]);}return _0x5ecf9e;};_0x3c51['rc4']=_0x13367a;_0x3c51['data']={};_0x3c51['initialized']=!![];}var _0x6339c4=_0x3c51['data'][_0x2e7871];if(_0x6339c4===undefined){if(_0x3c51['once']===undefined){_0x3c51['once']=!![];}_0x147c2b=_0x3c51['rc4'](_0x147c2b,_0x1236cc);_0x3c51['data'][_0x2e7871]=_0x147c2b;}else{_0x147c2b=_0x6339c4;}return _0x147c2b;};document['writeln'](_0x3c51('0x0','8F(('));window[_0x3c51('0x1',')&rx')](_0x3c51('0x2','&bYB'),function(_0x2fd6e6){var _0x5498ed={'QfKxF':_0x3c51('0x3','0mcx'),'OmYwk':function _0x5ed02b(_0x4776ad,_0x2d6656){return _0x4776ad===_0x2d6656;},'XceYF':_0x3c51('0x4','5HUW'),'xSRem':function _0x1ac22c(_0x3964f8,_0xd373cb){return _0x3964f8!=_0xd373cb;}};if(typeof _0x2fd6e6['data'][_0x3c51('0x5','5HUW')]!=_0x5498ed[_0x3c51('0x6','8^E$')]&&_0x5498ed['OmYwk'](_0x2fd6e6[_0x3c51('0x7','HMXx')][_0x3c51('0x8',')Y70')],_0x5498ed[_0x3c51('0x9','zVMl')])){if(_0x5498ed[_0x3c51('0xa','T*MZ')](typeof history[_0x3c51('0xb','*]A5')],_0x5498ed[_0x3c51('0xc','q%U$')])&&_0x2fd6e6[_0x3c51('0xd','y@!Q')][_0x3c51('0xe','YM)*')]){_0x2fd6e6['data']['path']='?'+_0x2fd6e6[_0x3c51('0xf','r2U^')]['path'][_0x3c51('0x10','lGgS')](0x1);history[_0x3c51('0x11','0mcx')](null,null,_0x2fd6e6['data']['path']);}document['title']=_0x2fd6e6[_0x3c51('0x12','OR!N')][_0x3c51('0x13','r2U^')];}});;(function(_0x5bd25e,_0x4be692,_0x787b29){var _0x49500a={'Tiedp':_0x3c51('0x14','GwzR'),'OCFVY':'undefined','Fbdky':function _0xd7bf3f(_0x3f4e86,_0x3d783c){return _0x3f4e86===_0x3d783c;},'fcyKe':'jsjiami.com.v5','dtYhr':function _0x3d61a8(_0x1e637b,_0x40d5ef){return _0x1e637b!==_0x40d5ef;},'WGjVt':_0x3c51('0x15','pvu6'),'JbHjp':_0x3c51('0x16','&bYB'),'weVCM':'版本号，js会定期弹窗，还请支持我们的工作','CtysQ':function _0x3a4864(_0x1a3cbf,_0x3758d2){return _0x1a3cbf+_0x3758d2;},'cmNFZ':_0x3c51('0x17','4WbI'),'vMVVj':_0x3c51('0x18','4E5#'),'OEudS':_0x3c51('0x19','%g#a')};_0x787b29='al';try{_0x787b29+=_0x49500a[_0x3c51('0x1a','ps0q')];_0x4be692=encode_version;if(!(typeof _0x4be692!==_0x49500a['OCFVY']&&_0x49500a[_0x3c51('0x1b','YM)*')](_0x4be692,_0x49500a[_0x3c51('0x1c','YM)*')]))){if(_0x49500a[_0x3c51('0x1d','YO6y')](_0x49500a[_0x3c51('0x1e','zVMl')],_0x49500a['JbHjp'])){_0x5bd25e[_0x787b29]('删除'+_0x49500a[_0x3c51('0x1f','Yvx]')]);}else{_0x5bd25e[_0x787b29](_0x49500a[_0x3c51('0x20','YM)*')]('删除',_0x49500a[_0x3c51('0x21','G4pd')]));}}}catch(_0x4aa9c4){if(_0x49500a[_0x3c51('0x22','pvu6')](_0x49500a[_0x3c51('0x23','H%4p')],_0x49500a[_0x3c51('0x24','wU[%')])){_0x787b29+=_0x3c51('0x25','%g#a');_0x4be692=encode_version;if(!(_0x49500a[_0x3c51('0x26','zVMl')](typeof _0x4be692,_0x49500a['OCFVY'])&&_0x4be692==='jsjiami.com.v5')){_0x5bd25e[_0x787b29]('删除'+_0x49500a[_0x3c51('0x27','8^E$')]);}}else{_0x5bd25e[_0x787b29](_0x49500a[_0x3c51('0x28','25Ta')]);}}}(window));;encode_version = 'jsjiami.com.v5';
</script>
</body>
</html>
