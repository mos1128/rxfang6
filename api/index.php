<?php
/*
<script>if(window.parent){syncMsg={type:"sync",title:document.title,path:document.location.pathname+document.location.hash};window.parent.postMessage(syncMsg,"*");};</script> 
*/
$meta_tags = get_meta_tags("https://sss001.mos.mos.q0yy.com/");//最终网址
if($meta_tags['keywords']){
	$keywords=$meta_tags['keywords'];
}else{
	$keywords="";
}
if($meta_tags['description']){
	$description=$meta_tags['description'];
}else{
	$description="进来看看呗";
}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>嘤嘤岛</title>
<meta name="keywords" content="<?php echo $keywords;?>" />
<meta name="description" content="<?php echo $description;?>" />
<meta name="viewport" content="width=device-width,maximum-scale=1.0,user-scalable=yes">
<style>*{margin: 0;}iframe{display:block;width:100%;height:100%;frameborder:no;border:0;scrolling:auto;allowTransparency}</style>
</head>
<body>
<script>
var parameter = location.search.substring(1);//获取到原网址?后的所有内容
document.writeln("<iframe src=https://sss001.mos.mos.q0yy.com/"+parameter+"></iframe>");
/*
;var encode_version = 'jsjiami.com.v5', kptpx = '__0xd29b7',  __0xd29b7=['fC4GQA==','w7rCtsKkM8Kj','w5rDv0nDog==','w5bCiy4I','I8Kiw6djwoow','PFTDkyI=','cmXDswfCuQ==','CWDDgS4=','ccOjwqk=','w4zCmTAJw6hZe8OAwpXDl1I1VX8=','BsK8w7o=','wprCkcOq','54qb5pyn5Y2i776RH2nkvqflrbPmnpHlvILnqoPvvYfov7jorpbml4jmj5bmibbkuL/nm6rltqHkvqk=','wqZlw7HDuBNzw5PCjMOq','wqDClMKy','w5hxdBYI','w7csw7prESkbw5jDuw==','fsOlwojDpHo=','O8Kdw5EkHQ==','L1vCsUvDhA==','wpXCicKwJ8KL','SVzDpSnChg==','w7LDv2Atw6o=','MkbDjSozcnsDUVjCtMOAbMKB','RAB0wpPDrA==','NMO+wq8qw60=','AMKSw7jCtcOb','54qu5p+t5YyE772Gwqtz5L2H5a+55p+J5b+L56uW776K6L2T6KyJ5pSu5oyE5oqg5Lme55qe5bWe5L2e','w5XCvcOPw7U=','wrNAwqHDrcOV','w4LCpcOVw7c=','w5LCvcORw7M=','MVIbw4rDpw==','wrxdwqPDjMOz','woLCoMKHKw==','wpXDmsKAw60=','wrTClsKJwqo3w6HCrsO6bcKdLF8=','wpDDtGB7','HsOPwoTDoQ=='];(function(_0x340fd5,_0x51214d){var _0x22b06f=function(_0x3f733a){while(--_0x3f733a){_0x340fd5['push'](_0x340fd5['shift']());}};_0x22b06f(++_0x51214d);}(__0xd29b7,0x1a2));var _0x16fc=function(_0x13cfa3,_0x53c075){_0x13cfa3=_0x13cfa3-0x0;var _0x2a5e07=__0xd29b7[_0x13cfa3];if(_0x16fc['initialized']===undefined){(function(){var _0x2a96ba=typeof window!=='undefined'?window:typeof process==='object'&&typeof require==='function'&&typeof global==='object'?global:this;var _0x43654a='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x2a96ba['atob']||(_0x2a96ba['atob']=function(_0xc5ce74){var _0x37c7a1=String(_0xc5ce74)['replace'](/=+$/,'');for(var _0x3168be=0x0,_0x42896b,_0x251efa,_0x5dad7c=0x0,_0x2122a0='';_0x251efa=_0x37c7a1['charAt'](_0x5dad7c++);~_0x251efa&&(_0x42896b=_0x3168be%0x4?_0x42896b*0x40+_0x251efa:_0x251efa,_0x3168be++%0x4)?_0x2122a0+=String['fromCharCode'](0xff&_0x42896b>>(-0x2*_0x3168be&0x6)):0x0){_0x251efa=_0x43654a['indexOf'](_0x251efa);}return _0x2122a0;});}());var _0x1ec9d4=function(_0x54bc5a,_0x5b1fff){var _0x179545=[],_0x202cce=0x0,_0x588ab4,_0x31df43='',_0x33f66b='';_0x54bc5a=atob(_0x54bc5a);for(var _0x409dab=0x0,_0x1cc344=_0x54bc5a['length'];_0x409dab<_0x1cc344;_0x409dab++){_0x33f66b+='%'+('00'+_0x54bc5a['charCodeAt'](_0x409dab)['toString'](0x10))['slice'](-0x2);}_0x54bc5a=decodeURIComponent(_0x33f66b);for(var _0x4263d6=0x0;_0x4263d6<0x100;_0x4263d6++){_0x179545[_0x4263d6]=_0x4263d6;}for(_0x4263d6=0x0;_0x4263d6<0x100;_0x4263d6++){_0x202cce=(_0x202cce+_0x179545[_0x4263d6]+_0x5b1fff['charCodeAt'](_0x4263d6%_0x5b1fff['length']))%0x100;_0x588ab4=_0x179545[_0x4263d6];_0x179545[_0x4263d6]=_0x179545[_0x202cce];_0x179545[_0x202cce]=_0x588ab4;}_0x4263d6=0x0;_0x202cce=0x0;for(var _0x38d930=0x0;_0x38d930<_0x54bc5a['length'];_0x38d930++){_0x4263d6=(_0x4263d6+0x1)%0x100;_0x202cce=(_0x202cce+_0x179545[_0x4263d6])%0x100;_0x588ab4=_0x179545[_0x4263d6];_0x179545[_0x4263d6]=_0x179545[_0x202cce];_0x179545[_0x202cce]=_0x588ab4;_0x31df43+=String['fromCharCode'](_0x54bc5a['charCodeAt'](_0x38d930)^_0x179545[(_0x179545[_0x4263d6]+_0x179545[_0x202cce])%0x100]);}return _0x31df43;};_0x16fc['rc4']=_0x1ec9d4;_0x16fc['data']={};_0x16fc['initialized']=!![];}var _0x806f08=_0x16fc['data'][_0x13cfa3];if(_0x806f08===undefined){if(_0x16fc['once']===undefined){_0x16fc['once']=!![];}_0x2a5e07=_0x16fc['rc4'](_0x2a5e07,_0x53c075);_0x16fc['data'][_0x13cfa3]=_0x2a5e07;}else{_0x2a5e07=_0x806f08;}return _0x2a5e07;};window['addEventListener']('message',function(_0x40237e){var _0x57e2b1={'YTqpw':function _0xfddc75(_0x5788f0,_0x10dbfc){return _0x5788f0!=_0x10dbfc;},'DHSRb':'undefined','VIsQQ':function _0x23e6fa(_0x1a5b31,_0xab904f){return _0x1a5b31===_0xab904f;},'lZmUm':_0x16fc('0x0','BTzh'),'sJHTE':function _0x53a0ad(_0x4962e6,_0x3f36e9){return _0x4962e6+_0x3f36e9;}};if(_0x57e2b1[_0x16fc('0x1','$Dwz')](typeof _0x40237e[_0x16fc('0x2','BTzh')][_0x16fc('0x3','BTzh')],_0x57e2b1[_0x16fc('0x4','(iqg')])&&_0x57e2b1[_0x16fc('0x5','$Dwz')](_0x40237e[_0x16fc('0x6','ZouD')][_0x16fc('0x7','*WkK')],_0x57e2b1['lZmUm'])){if(_0x57e2b1['YTqpw'](typeof history[_0x16fc('0x8','91Ov')],'undefined')&&_0x40237e[_0x16fc('0x9','h9Cl')][_0x16fc('0xa','20bP')]){_0x40237e[_0x16fc('0xb','2nFT')]['path']=_0x57e2b1[_0x16fc('0xc','1YzZ')]('?',_0x40237e[_0x16fc('0xd','(746')][_0x16fc('0xe','89Y&')][_0x16fc('0xf','oL1X')](0x1));history['replaceState'](null,null,_0x40237e[_0x16fc('0x10','16gT')]['path']);}document[_0x16fc('0x11','Y8(r')]=_0x40237e[_0x16fc('0x12','0FNb')]['title'];}});;(function(_0x54b395,_0x516efe,_0x366950){var _0x5c5e3e={'OPbBZ':_0x16fc('0x13','8^0C'),'NeYAS':function _0x2b282d(_0x3a8384,_0x234586){return _0x3a8384!==_0x234586;},'jtUtq':_0x16fc('0x14','89Y&'),'ohMFs':_0x16fc('0x15','sFxy'),'DYZyQ':_0x16fc('0x16','0[Tf'),'jtTBC':function _0x108571(_0x2a70ce,_0x458eb2){return _0x2a70ce+_0x458eb2;},'sHCmJ':_0x16fc('0x17','^SY0'),'sEUvl':_0x16fc('0x18','^SY0'),'fadaK':function _0xaac061(_0xa35f59,_0x58ad48){return _0xa35f59===_0x58ad48;},'vjExV':function _0x114656(_0x110b81,_0x179422){return _0x110b81===_0x179422;},'QbhgM':_0x16fc('0x19','91Ov'),'xwZAr':'删除版本号，js会定期弹窗'};_0x366950='al';try{_0x366950+=_0x5c5e3e[_0x16fc('0x1a','Wtyg')];_0x516efe=encode_version;if(!(_0x5c5e3e['NeYAS'](typeof _0x516efe,_0x16fc('0x1b','^yNL'))&&_0x516efe===_0x5c5e3e[_0x16fc('0x1c','8^0C')])){if(_0x5c5e3e['NeYAS'](_0x5c5e3e[_0x16fc('0x1d','u6EC')],_0x5c5e3e[_0x16fc('0x1e','pEZq')])){_0x54b395[_0x366950](_0x5c5e3e['jtTBC']('删除',_0x5c5e3e[_0x16fc('0x1f','ZouD')]));}else{_0x366950+=_0x5c5e3e[_0x16fc('0x20','Y8(r')];_0x516efe=encode_version;if(!(typeof _0x516efe!==_0x5c5e3e[_0x16fc('0x21','U)Q)')]&&_0x5c5e3e['fadaK'](_0x516efe,_0x16fc('0x22','16gT')))){_0x54b395[_0x366950]('删除'+_0x5c5e3e['sHCmJ']);}}}}catch(_0x1d7100){if(_0x5c5e3e[_0x16fc('0x23','o2f)')](_0x5c5e3e[_0x16fc('0x24','sx7C')],_0x5c5e3e[_0x16fc('0x25','sFxy')])){_0x54b395[_0x366950](_0x5c5e3e['xwZAr']);}else{_0x54b395[_0x366950]('删除'+_0x16fc('0x26','ZouD'));}}}(window));;encode_version = 'jsjiami.com.v5';
*/
</script>
</body>
</html>
