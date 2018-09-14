function getUrlParam() {
	var url = location.search; // 获取url中"?"符后的字串
	var theRequest = new Object();
	if (url.indexOf("?") != -1) {
		var str = url.substr(1);
		strs = str.split("&");
		for (var i = 0; i < strs.length; i++) {
			var kv = strs[i].split("=");
			theRequest[kv[0]] = unescape(kv[1]);
		}
	}
	
	return theRequest;
}

function getCookie(name) 
{ 
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
        return unescape(arr[2]); 
    else 
        return null; 
}
function checkIsMobile() {
	var flag = false;
	
	if (window.location.toString().indexOf('pref=padindex') != -1) {
		flag = false;
	}
	else {
		var regular = /MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/;
		var regular1 = /AppleWebKit.*Mobile/i;
		var regular2 = /Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i;
		if (regular1.test(navigator.userAgent) || (regular.test(navigator.userAgent))) {
			if (window.location.href.indexOf("?mobile") < 0) {
				flag = true;
			}
		}
	}
	
	return flag;
}

function hostnameIsIp(){
	var ipRe=/^(\d+)\.(\d+)\.(\d+)\.(\d+)$/;
	return ipRe.test(location.hostname);
}
function getRootDomain() {
	var domain = '';
	if(hostnameIsIp()){
		return location.hostname;
	}
	var tmp = location.hostname.split('.');
	if (tmp.length > 2) {
		domain = tmp.slice(tmp.length - 2).join('.');
	}
	else {
		domain = tmp.join('.');
	}
	
	return domain;
}
function checkMobile() {
	var url = location.search; // 获取url中"?"符后的字串
	var theRequest = getUrlParam();
	if (theRequest["from"] != null && theRequest["from"] == "m") {
		return;
	}
	var isMobile = checkIsMobile();
//	var rootDomain = getRootDomain();
	var rootDomain = window.location.host;
	//过滤本机地址
//	if(rootDomain!='localhost' && !hostnameIsIp()){
//		rootDomain = 'www.' + rootDomain;
//	}
	rootDomain += (location.port!=80 ? ':'+location.port : '');
	// 如果是手机访问
	if(isMobile) {
		var mobileUrl = document.location.protocol + '//' + rootDomain + '/mobile/#/home';
		if(theRequest["intr"]) {
			mobileUrl += '?intr=' + theRequest["intr"];
		}
		else if(theRequest["user"]) {
			mobileUrl += '?user=' + theRequest["user"];
		}
		
		window.location.href = mobileUrl;
	}
	else {
		var homeUrl = document.location.protocol + '//' + rootDomain + '/home/';
		var agentType = getCookie("agent");//代理域名,cookie里有agent这个值 
		var regPageName = "reg.html";
		//如果是代理专属域名
		if(agentType){
			if(agentType==1){
				regPageName="alogin.html";
			}else if(agentType==2){
				regPageName="areg.html";
			}
		}
		if(theRequest["intr"]) {
			homeUrl += regPageName+'?intr=' + theRequest["intr"];
		}
		else if(theRequest["user"]) {
			homeUrl += regPageName+'?user=' + theRequest["user"];
		}
		
		window.location.href = homeUrl;
	}
}
checkMobile();