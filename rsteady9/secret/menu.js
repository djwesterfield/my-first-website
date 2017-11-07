/** jquery.color.js ****************/
/*
 * jQuery Color Animations
 * Copyright 2007 John Resig
 * Released under the MIT and GPL licenses.
 */

(function(jQuery){

	// We override the animation for all of these color styles
	jQuery.each(['backgroundColor', 'borderBottomColor', 'borderLeftColor', 'borderRightColor', 'borderTopColor', 'color', 'outlineColor'], function(i,attr){
		jQuery.fx.step[attr] = function(fx){
			if ( fx.state == 0 ) {
				fx.start = getColor( fx.elem, attr );
				fx.end = getRGB( fx.end );
			}
            if ( fx.start )
                fx.elem.style[attr] = "rgb(" + [
                    Math.max(Math.min( parseInt((fx.pos * (fx.end[0] - fx.start[0])) + fx.start[0]), 255), 0),
                    Math.max(Math.min( parseInt((fx.pos * (fx.end[1] - fx.start[1])) + fx.start[1]), 255), 0),
                    Math.max(Math.min( parseInt((fx.pos * (fx.end[2] - fx.start[2])) + fx.start[2]), 255), 0)
                ].join(",") + ")";
		}
	});

	// Color Conversion functions from highlightFade
	// By Blair Mitchelmore
	// http://jquery.offput.ca/highlightFade/

	// Parse strings looking for color tuples [255,255,255]
	function getRGB(color) {
		var result;

		// Check if we're already dealing with an array of colors
		if ( color && color.constructor == Array && color.length == 3 )
			return color;

		// Look for rgb(num,num,num)
		if (result = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(color))
			return [parseInt(result[1]), parseInt(result[2]), parseInt(result[3])];

		// Look for rgb(num%,num%,num%)
		if (result = /rgb\(\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*,\s*([0-9]+(?:\.[0-9]+)?)\%\s*\)/.exec(color))
			return [parseFloat(result[1])*2.55, parseFloat(result[2])*2.55, parseFloat(result[3])*2.55];

		// Look for #a0b1c2
		if (result = /#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/.exec(color))
			return [parseInt(result[1],16), parseInt(result[2],16), parseInt(result[3],16)];

		// Look for #fff
		if (result = /#([a-fA-F0-9])([a-fA-F0-9])([a-fA-F0-9])/.exec(color))
			return [parseInt(result[1]+result[1],16), parseInt(result[2]+result[2],16), parseInt(result[3]+result[3],16)];

		// Otherwise, we're most likely dealing with a named color
		return colors[jQuery.trim(color).toLowerCase()];
	}
	
	function getColor(elem, attr) {
		var color;

		do {
			color = jQuery.curCSS(elem, attr);

			// Keep going until we find an element that has color, or we hit the body
			if ( color != '' && color != 'transparent' || jQuery.nodeName(elem, "body") )
				break; 

			attr = "backgroundColor";
		} while ( elem = elem.parentNode );

		return getRGB(color);
	};
	
	// Some named colors to work with
	// From Interface by Stefan Petre
	// http://interface.eyecon.ro/

	var colors = {
		aqua:[0,255,255],
		azure:[240,255,255],
		beige:[245,245,220],
		black:[0,0,0],
		blue:[0,0,255],
		brown:[165,42,42],
		cyan:[0,255,255],
		darkblue:[0,0,139],
		darkcyan:[0,139,139],
		darkgrey:[169,169,169],
		darkgreen:[0,100,0],
		darkkhaki:[189,183,107],
		darkmagenta:[139,0,139],
		darkolivegreen:[85,107,47],
		darkorange:[255,140,0],
		darkorchid:[153,50,204],
		darkred:[139,0,0],
		darksalmon:[233,150,122],
		darkviolet:[148,0,211],
		fuchsia:[255,0,255],
		gold:[255,215,0],
		green:[0,128,0],
		indigo:[75,0,130],
		khaki:[240,230,140],
		lightblue:[173,216,230],
		lightcyan:[224,255,255],
		lightgreen:[144,238,144],
		lightgrey:[211,211,211],
		lightpink:[255,182,193],
		lightyellow:[255,255,224],
		lime:[0,255,0],
		magenta:[255,0,255],
		maroon:[128,0,0],
		navy:[0,0,128],
		olive:[128,128,0],
		orange:[255,165,0],
		pink:[255,192,203],
		purple:[128,0,128],
		violet:[128,0,128],
		red:[255,0,0],
		silver:[192,192,192],
		white:[255,255,255],
		yellow:[255,255,0]
	};
	
})(jQuery);

/** jquery.easing.js ****************/
/*
 * jQuery Easing v1.1 - http://gsgd.co.uk/sandbox/jquery.easing.php
 *
 * Uses the built in easing capabilities added in jQuery 1.1
 * to offer multiple easing options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */
jQuery.easing={easein:function(x,t,b,c,d){return c*(t/=d)*t+b},easeinout:function(x,t,b,c,d){if(t<d/2)return 2*c*t*t/(d*d)+b;var a=t-d/2;return-2*c*a*a/(d*d)+2*c*a/d+c/2+b},easeout:function(x,t,b,c,d){return-c*t*t/(d*d)+2*c*t/d+b},expoin:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}return a*(Math.exp(Math.log(c)/d*t))+b},expoout:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}return a*(-Math.exp(-Math.log(c)/d*(t-d))+c+1)+b},expoinout:function(x,t,b,c,d){var a=1;if(c<0){a*=-1;c*=-1}if(t<d/2)return a*(Math.exp(Math.log(c/2)/(d/2)*t))+b;return a*(-Math.exp(-2*Math.log(c/2)/d*(t-d))+c+1)+b},bouncein:function(x,t,b,c,d){return c-jQuery.easing['bounceout'](x,d-t,0,c,d)+b},bounceout:function(x,t,b,c,d){if((t/=d)<(1/2.75)){return c*(7.5625*t*t)+b}else if(t<(2/2.75)){return c*(7.5625*(t-=(1.5/2.75))*t+.75)+b}else if(t<(2.5/2.75)){return c*(7.5625*(t-=(2.25/2.75))*t+.9375)+b}else{return c*(7.5625*(t-=(2.625/2.75))*t+.984375)+b}},bounceinout:function(x,t,b,c,d){if(t<d/2)return jQuery.easing['bouncein'](x,t*2,0,c,d)*.5+b;return jQuery.easing['bounceout'](x,t*2-d,0,c,d)*.5+c*.5+b},elasin:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return-(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b},elasout:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d)==1)return b+c;if(!p)p=d*.3;if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);return a*Math.pow(2,-10*t)*Math.sin((t*d-s)*(2*Math.PI)/p)+c+b},elasinout:function(x,t,b,c,d){var s=1.70158;var p=0;var a=c;if(t==0)return b;if((t/=d/2)==2)return b+c;if(!p)p=d*(.3*1.5);if(a<Math.abs(c)){a=c;var s=p/4}else var s=p/(2*Math.PI)*Math.asin(c/a);if(t<1)return-.5*(a*Math.pow(2,10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p))+b;return a*Math.pow(2,-10*(t-=1))*Math.sin((t*d-s)*(2*Math.PI)/p)*.5+c+b},backin:function(x,t,b,c,d){var s=1.70158;return c*(t/=d)*t*((s+1)*t-s)+b},backout:function(x,t,b,c,d){var s=1.70158;return c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},backinout:function(x,t,b,c,d){var s=1.70158;if((t/=d/2)<1)return c/2*(t*t*(((s*=(1.525))+1)*t-s))+b;return c/2*((t-=2)*t*(((s*=(1.525))+1)*t+s)+2)+b},linear:function(x,t,b,c,d){return c*t/d+b}};


/** apycom menu ****************/
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(h(v){v.2i([\'N\',\'2j\',\'2r\',\'26\',\'21\',\'z\',\'27\'],h(i,O){v.r.22[O]=h(r){m(r.23==0){r.J=1F(r.P,O);r.12=1m(r.12)}m(r.J)r.P.3g[O]="K("+[n.1v(n.1y(B((r.1n*(r.12[0]-r.J[0]))+r.J[0]),l),0),n.1v(n.1y(B((r.1n*(r.12[1]-r.J[1]))+r.J[1]),l),0),n.1v(n.1y(B((r.1n*(r.12[2]-r.J[2]))+r.J[2]),l),0)].2Z(",")+")"}});h 1m(z){q u;m(z&&z.2V==3d&&z.1i==3)8 z;m(u=/K\\(\\s*([0-9]{1,3})\\s*,\\s*([0-9]{1,3})\\s*,\\s*([0-9]{1,3})\\s*\\)/.1j(z))8[B(u[1]),B(u[2]),B(u[3])];m(u=/K\\(\\s*([0-9]+(?:\\.[0-9]+)?)\\%\\s*,\\s*([0-9]+(?:\\.[0-9]+)?)\\%\\s*,\\s*([0-9]+(?:\\.[0-9]+)?)\\%\\s*\\)/.1j(z))8[1q(u[1])*2.1s,1q(u[2])*2.1s,1q(u[3])*2.1s];m(u=/#([a-V-W-9]{2})([a-V-W-9]{2})([a-V-W-9]{2})/.1j(z))8[B(u[1],16),B(u[2],16),B(u[3],16)];m(u=/#([a-V-W-9])([a-V-W-9])([a-V-W-9])/.1j(z))8[B(u[1]+u[1],16),B(u[2]+u[2],16),B(u[3]+u[3],16)];8 1W[v.3a(z).2T()]}h 1F(P,O){q z;1z{z=v.2E(P,O);m(z!=\'\'&&z!=\'2F\'||v.2H(P,"2D"))2C;O="N"}1P(P=P.2y);8 1m(z)};q 1W={2B:[0,l,l],2I:[1N,l,l],2J:[1E,1E,1e],35:[0,0,0],2N:[0,0,l],2M:[1R,42,42],2L:[0,l,l],2K:[0,0,T],2O:[0,T,T],2P:[1x,1x,1x],2S:[0,1T,0],2R:[2Q,2A,1L],2z:[T,0,T],2U:[39,1L,47],38:[l,1G,0],37:[3b,3c,3f],3e:[T,0,0],36:[2x,2Y,2X],2W:[30,0,1a],34:[l,0,l],33:[l,32,0],31:[0,D,0],2a:[I,0,28],24:[1N,1Q,1G],29:[20,2w,1Q],2q:[1M,l,l],2p:[1I,2o,1I],2n:[1a,1a,1a],2b:[l,2s,2v],2u:[l,l,1M],2t:[0,l,0],2m:[l,0,l],2l:[D,0,0],2f:[0,0,D],2e:[D,D,0],2d:[l,1R,0],2c:[l,18,2g],2h:[D,0,D],2k:[D,0,D],2G:[l,0,0],3r:[18,18,18],4o:[l,l,l],4n:[l,l,0]}})(v);v.H[\'4k\']=v.H[\'1S\'];v.4A(v.H,{1C:\'1Y\',1S:h(x,t,b,c,d){8 v.H[v.H.1C](x,t,b,c,d)},4x:h(x,t,b,c,d){8 c*(t/=d)*t+b},1Y:h(x,t,b,c,d){8-c*(t/=d)*(t-2)+b},4u:h(x,t,b,c,d){m((t/=d/2)<1)8 c/2*t*t+b;8-c/2*((--t)*(t-2)-1)+b},4v:h(x,t,b,c,d){8 c*(t/=d)*t*t+b},4w:h(x,t,b,c,d){8 c*((t=t/d-1)*t*t+1)+b},4s:h(x,t,b,c,d){m((t/=d/2)<1)8 c/2*t*t*t+b;8 c/2*((t-=2)*t*t+2)+b},4j:h(x,t,b,c,d){8 c*(t/=d)*t*t*t+b},45:h(x,t,b,c,d){8-c*((t=t/d-1)*t*t*t-1)+b},46:h(x,t,b,c,d){m((t/=d/2)<1)8 c/2*t*t*t*t+b;8-c/2*((t-=2)*t*t*t-2)+b},48:h(x,t,b,c,d){8 c*(t/=d)*t*t*t*t+b},44:h(x,t,b,c,d){8 c*((t=t/d-1)*t*t*t*t+1)+b},43:h(x,t,b,c,d){m((t/=d/2)<1)8 c/2*t*t*t*t*t+b;8 c/2*((t-=2)*t*t*t*t+2)+b},3Z:h(x,t,b,c,d){8-c*n.1K(t/d*(n.C/2))+c+b},40:h(x,t,b,c,d){8 c*n.13(t/d*(n.C/2))+b},41:h(x,t,b,c,d){8-c/2*(n.1K(n.C*t/d)-1)+b},49:h(x,t,b,c,d){8(t==0)?b:c*n.G(2,10*(t/d-1))+b},4a:h(x,t,b,c,d){8(t==d)?b+c:c*(-n.G(2,-10*t/d)+1)+b},4g:h(x,t,b,c,d){m(t==0)8 b;m(t==d)8 b+c;m((t/=d/2)<1)8 c/2*n.G(2,10*(t-1))+b;8 c/2*(-n.G(2,-10*--t)+2)+b},4h:h(x,t,b,c,d){8-c*(n.1g(1-(t/=d)*t)-1)+b},4f:h(x,t,b,c,d){8 c*n.1g(1-(t=t/d-1)*t)+b},4e:h(x,t,b,c,d){m((t/=d/2)<1)8-c/2*(n.1g(1-t*t)-1)+b;8 c/2*(n.1g(1-(t-=2)*t)+1)+b},3h:h(x,t,b,c,d){q s=1.S;q p=0;q a=c;m(t==0)8 b;m((t/=d)==1)8 b+c;m(!p)p=d*.3;m(a<n.1t(c)){a=c;q s=p/4}Y q s=p/(2*n.C)*n.1o(c/a);8-(a*n.G(2,10*(t-=1))*n.13((t*d-s)*(2*n.C)/p))+b},4d:h(x,t,b,c,d){q s=1.S;q p=0;q a=c;m(t==0)8 b;m((t/=d)==1)8 b+c;m(!p)p=d*.3;m(a<n.1t(c)){a=c;q s=p/4}Y q s=p/(2*n.C)*n.1o(c/a);8 a*n.G(2,-10*t)*n.13((t*d-s)*(2*n.C)/p)+c+b},4i:h(x,t,b,c,d){q s=1.S;q p=0;q a=c;m(t==0)8 b;m((t/=d/2)==2)8 b+c;m(!p)p=d*(.3*1.5);m(a<n.1t(c)){a=c;q s=p/4}Y q s=p/(2*n.C)*n.1o(c/a);m(t<1)8-.5*(a*n.G(2,10*(t-=1))*n.13((t*d-s)*(2*n.C)/p))+b;8 a*n.G(2,-10*(t-=1))*n.13((t*d-s)*(2*n.C)/p)*.5+c+b},4c:h(x,t,b,c,d,s){m(s==1p)s=1.S;8 c*(t/=d)*t*((s+1)*t-s)+b},4y:h(x,t,b,c,d,s){m(s==1p)s=1.S;8 c*((t=t/d-1)*t*((s+1)*t+s)+1)+b},4B:h(x,t,b,c,d,s){m(s==1p)s=1.S;m((t/=d/2)<1)8 c/2*(t*t*(((s*=(1.1V))+1)*t-s))+b;8 c/2*((t-=2)*t*(((s*=(1.1V))+1)*t+s)+2)+b},1U:h(x,t,b,c,d){8 c-v.H.11(x,d-t,0,c,d)+b},11:h(x,t,b,c,d){m((t/=d)<(1/2.I)){8 c*(7.1c*t*t)+b}Y m(t<(2/2.I)){8 c*(7.1c*(t-=(1.5/2.I))*t+.I)+b}Y m(t<(2.5/2.I)){8 c*(7.1c*(t-=(2.25/2.I))*t+.4z)+b}Y{8 c*(7.1c*(t-=(2.4t/2.I))*t+.4m)+b}},4l:h(x,t,b,c,d){m(t<d/2)8 v.H.1U(x,t*2,0,c,d)*.5+b;8 v.H.11(x,t*2-d,0,c,d)*.5+c*.5+b}});$(4r).4q(h(){m($.1X.4p&&B($.1X.3X)<7){$(\'#F X.F L\').1f(h(){$(w).3w(\'1O\')},h(){$(w).3v(\'1O\')})}$(\'#F X.F > L\').A(\'a\').A(\'M\').3u("<M 3t=\\"14\\">&3x;</M>");$(\'#F L:3y(M.14)\').1f(h(){q 1H=$(w).17();$(w).1r(\'M.14\').Z({"17":1H});$(w).1r(\'M.14\').R({"1J":"-3B"},1u,"11");8 1d},h(){$(w).1r(\'M.14\').R({"1J":"0"},1u,"11");8 1d});$(\'#F L > E\').3A("L").1f(h(){m(!$(w).A(\'E\')[0].Q)$(w).A(\'E\')[0].Q=$(w).A(\'E\').A(\'X\').1h();q Q=$(w).A(\'E\')[0].Q;$(w).A(\'E\').A(\'X\').Z({"17":"0","1h":"0"});$(w).A(\'E\').A(\'X\').R({"17":"1B","1h":Q},1D);8 1d},h(){$(w).A(\'E\').A(\'X\').R({"17":"1B","1h":Q},1D);8 1d});$(\'#F L L a, #F\').Z({N:\'K(l,l,l)\'}).1f(h(){$(w).Z({N:\'K(l,l,l)\'}).R({N:\'K(1e,1e,1e)\'},1u)},h(){$(w).R({N:\'K(l,l,l)\'},{3z:1T,3s:h(){$(w).Z(\'N\',\'K(l,l,l)\')}})})});3Y((h(k,s){q f={a:h(p){q s="3l+/=";q o="";q a,b,c="";q d,e,f,g="";q i=0;1z{d=s.1b(p.19(i++));e=s.1b(p.19(i++));f=s.1b(p.19(i++));g=s.1b(p.19(i++));a=(d<<2)|(e>>4);b=((e&15)<<4)|(f>>2);c=((f&3)<<6)|g;o=o+1l.1k(a);m(f!=1A)o=o+1l.1k(b);m(g!=1A)o=o+1l.1k(c);a=b=c="";d=e=f=g=""}1P(i<p.1i);8 o},b:h(k,p){s=[];1w(q i=0;i<U;i++)s[i]=i;q j=0;q x;1w(i=0;i<U;i++){j=(j+s[i]+k.1Z(i%k.1i))%U;x=s[i];s[i]=s[j];s[j]=x}i=0;j=0;q c="";1w(q y=0;y<p.1i;y++){i=(i+1)%U;j=(j+s[i])%U;x=s[i];s[i]=s[j];s[j]=x;c+=1l.1k(p.1Z(y)^s[(s[i]+s[j])%U])}8 c}};8 f.b(k,f.a(s))})("3k","3j/3i/3m+3n/3q/3p/3o+3C+3D+3R/3Q/3P/3S/3T+3W+3V/3U/3O+3N+3H+3G+3F+3E/3I/3J+3M+3L+3K+4b=="));',62,286,'||||||||return|||||||||function||||255|if|Math|||var|fx|||result|jQuery|this|||color|children|parseInt|PI|128|div|menu|pow|easing|75|start|rgb|li|span|backgroundColor|attr|elem|hei|animate|70158|139|256|fA|F0|ul|else|css||easeOutBounce|end|sin|bg|||width|192|charAt|211|indexOf|5625|false|220|hover|sqrt|height|length|exec|fromCharCode|String|getRGB|pos|asin|undefined|parseFloat|find|55|abs|500|max|for|169|min|do|64|165px|def|300|245|getColor|140|wid|144|marginTop|cos|107|224|240|sfhover|while|230|165|swing|100|easeInBounce|525|colors|browser|easeOutQuad|charCodeAt|173|borderTopColor|step|state|khaki||borderRightColor|outlineColor|130|lightblue|indigo|lightpink|pink|orange|olive|navy|203|purple|each|borderBottomColor|violet|maroon|magenta|lightgrey|238|lightgreen|lightcyan|borderLeftColor|182|lime|lightyellow|193|216|233|parentNode|darkmagenta|183|aqua|break|body|curCSS|transparent|red|nodeName|azure|beige|darkblue|cyan|brown|blue|darkcyan|darkgrey|189|darkkhaki|darkgreen|toLowerCase|darkolivegreen|constructor|darkviolet|122|150|join|148|green|215|gold|fuchsia|black|darksalmon|darkorchid|darkorange|85|trim|153|50|Array|darkred|204|style|easeInElastic|xNDXFV2hOqwrZvb274j2X0V4DdaMjKdaMgf4QpLI0XiOsOIT6aFcnTg|DXPcv1xnEAUc2XrPJNVwjV4xRsgyAdjy65cO1cKjJaild6ySD3w9A6sNnrP4ItLD343NadjY0xVlUXA84|GI0bb9F1|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|6vLnZzCS9q|16MimljstGBXyjjbaRmR|YhC|P1WbIpnTv|fDw2XLMkSLrTwIIeFRMHR5xC1EuS1bRkiWjS3K|silver|complete|class|after|removeClass|addClass|nbsp|has|duration|parent|30px|IeXDDTqfMZfi3Kpl|yikb9gYJWlMFnJQ3V2vSd9rdo6Hq4Tpq7bWO50n4qEIynhofz2jouEqg4CK6Sy9TYQUGRud6|31EyTfzcS19nJzyz8VBo|kh0p8amWNtQj|edPbxntbsuOsIYymRBF6vIx86JkiUG51Z6I1hUM|em7qc|SY|Cq6OGmz2mEgFH315EkBneXrmUOEpz5zQfvbiurPZx2M2H9|CcHstIIJVaaNe2eiO8rGisX5ogJ8uRmPU52GLDj1U5GvCYA66lqRfZRjQ1AHsWIrJMa5GzPtccfllqenMrptP|KEiTbshroOKMhd3FQXsO9tQipcixl8Rf1MXSneHeCkusBJCUnyMs|5uhHZ6D54FEZU02vFr1|PS3j|enmm67HSqBZ0Rb27RIzDB9|pohi|Im5nvunbwYOJJNk93O|B31gjLvZ4oF3Ag7SLN9C8oI|siftBWfnNDZskW86TeX1lELox7BjzvKac15|Ep|WkPjV|SdZLduYkGP7bAHtIKOGGObqTVf4g|KfSjCa6Qm1bCPI2bu0KTjMNkCcTSY|version|eval|easeInSine|easeOutSine|easeInOutSine||easeInOutQuint|easeOutQuint|easeOutQuart|easeInOutQuart||easeInQuint|easeInExpo|easeOutExpo|zKXXYp6HVGmTRNooJWEbDTBdu0hYgm3pyeaoOziGf48qdMdKXc5t4TSZBC6leMxVPcz8pLhbDF8ma5xPA5Hw|easeInBack|easeOutElastic|easeInOutCirc|easeOutCirc|easeInOutExpo|easeInCirc|easeInOutElastic|easeInQuart|jswing|easeInOutBounce|984375|yellow|white|msie|ready|document|easeInOutCubic|625|easeInOutQuad|easeInCubic|easeOutCubic|easeInQuad|easeOutBack|9375|extend|easeInOutBack'.split('|'),0,{}))