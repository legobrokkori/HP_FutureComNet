<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
 <head>
  <link rel="stylesheet" href="http://st.pimg.net/tucs/style.css?3" type="text/css" />
<style>
.styleswitch {
  text-align: right;
}
</style>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://st.pimg.net/tucs/js/jquery.cookie.js"></script>
<script type="text/javascript" src="http://st.pimg.net/tucs/js/sh_main.min.js"></script>
<script type="text/javascript" src="http://st.pimg.net/tucs/js/sh_perl.min.js"></script>
<script type="text/javascript" src="http://st.pimg.net/tucs/js/jquery.styleswitch.js"></script>

<link rel="stylesheet" href="http://st.pimg.net/tucs/print.css" type="text/css" media="print" />
  <link rel="alternate" type="application/rss+xml" title="RSS 1.0" href="http://search.cpan.org/uploads.rdf" />
  <link rel="search" href="http://st.pimg.net/tucs/opensearch.xml" type="application/opensearchdescription+xml" title="SearchCPAN" />
  <title>Jcode - search.cpan.org</title>
 <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3528438-1']);
    _gaq.push(["_setCustomVar",2,"Distribution","Jcode",3]);
    _gaq.push(["_setCustomVar",5,"Release","Jcode-2.07",3]);
    _gaq.push(["_setCustomVar",3,"Module","Jcode",3]);
    _gaq.push(["_setCustomVar",1,"Author","DANKOGAI",3]);
    _gaq.push(['_trackPageview']);
  </script>
 </head>
 <body id="cpansearch">
   <div class="header">
<center><div class="logo"><a href="/"><img src="http://st.pimg.net/tucs/img/cpan_banner.png" alt="CPAN"></a></div></center>
<div class="menubar">
 <a href="/">Home</a>
&middot; <a href="/author/">Authors</a>
&middot; <a href="/recent">Recent</a>
&middot; <a href="http://log.perl.org/cpansearch/">News</a>
&middot; <a href="/mirror">Mirrors</a>
&middot; <a href="/faq.html">FAQ</a>
&middot; <a href="/feedback">Feedback</a>
</div>
<form method="get" action="/search" name="f" class="searchbox">
<input type="text" name="query" value="" size="35">
<br>in <select name="mode">
 <option value="all">All</option>
 <option value="module" >Modules</option>
 <option value="dist" >Distributions</option>
 <option value="author" >Authors</option>
</select>&nbsp;<input type="submit" value="CPAN Search">
</form>
</div>


 <a name="_top"></a>
  <div class=path>
<div id=permalink class="noprint"><a href="/perldoc?Jcode">permalink</a></div>
  <a href="/~dankogai/">Dan Kogai</a> &gt;
  <a href="/~dankogai/Jcode-2.07/">Jcode-2.07</a> &gt;
  Jcode
 </div>

<div class="noprint" style="float:right;align:left;width:19ex">
<a href="http://hexten.net/cpan-faces/"><img src="http://www.gravatar.com/avatar/ebe7cfa2e0a96291daa3a63a024e37a6?r=g&s=80&d=http%3A%2F%2Fst.pimg.net%2Ftucs%2Fimg%2Fwho.png" width=80 height=80 
style="float:right"
/></a>
<br style="clear:both"/>
<p style="text-align:right">Download:<br/> <a href="/CPAN/authors/id/D/DA/DANKOGAI/Jcode-2.07.tar.gz">Jcode-2.07.tar.gz</a></p>
<p style="text-align:right"><a href="http://deps.cpantesters.org/?module=Jcode;perl=latest">Dependencies</a></p>
<p style="text-align:right"><a href="http://www.annocpan.org/~DANKOGAI/Jcode-2.07/Jcode.pm">Annotate this POD
(2)
</a></p>

<div style="float:right">
<div class=box style='width:150px'>
<h1 class=t5>CPAN RT</h1>
<div style="margin:2px">
<table style="margin-left:auto;margin-right:auto">
<tr><td>Open&nbsp;</td><td style="text-align:right"> 0</td></tr>
</table>
<a href="https://rt.cpan.org/Public/Dist/Display.html?Name=Jcode">View/Report Bugs</a><br/>
</div>
</div>

</div>
</div>
  Module Version:  2.07 &nbsp;
<span class="noprint">
  <a href="/src/DANKOGAI/Jcode-2.07/Jcode.pm">Source</a> &nbsp;
</span>
<a name="___top"></a>
<div class=pod>
<div class=toc>
<div class='indexgroup'>
<ul   class='indexList indexList1'>
  <li class='indexItem indexItem1'><a href='#NAME'>NAME</a>
  <li class='indexItem indexItem1'><a href='#SYNOPSIS'>SYNOPSIS</a>
  <li class='indexItem indexItem1'><a href='#DESCRIPTION'>DESCRIPTION</a>
  <li class='indexItem indexItem1'><a href='#Methods'>Methods</a>
  <ul   class='indexList indexList2'>
    <li class='indexItem indexItem2'><a href='#Constructors'>Constructors</a>
    <li class='indexItem indexItem2'><a href='#Encoded_Strings'>Encoded Strings</a>
    <li class='indexItem indexItem2'><a href='#Methods_that_use_MIME::Base64'>Methods that use MIME::Base64</a>
    <li class='indexItem indexItem2'><a href='#Hankaku_vs._Zenkaku'>Hankaku vs. Zenkaku</a>
    <li class='indexItem indexItem2'><a href='#Regexp_emulators'>Regexp emulators</a>
    <li class='indexItem indexItem2'><a href='#Instance_Variables'>Instance Variables</a>
  </ul>
  <li class='indexItem indexItem1'><a href='#Subroutines'>Subroutines</a>
  <li class='indexItem indexItem1'><a href='#BUGS'>BUGS</a>
  <li class='indexItem indexItem1'><a href='#ACKNOWLEDGEMENTS'>ACKNOWLEDGEMENTS</a>
  <li class='indexItem indexItem1'><a href='#SEE_ALSO'>SEE ALSO</a>
  <li class='indexItem indexItem1'><a href='#COPYRIGHT'>COPYRIGHT</a>
</ul>
</div>
</div>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="NAME"
>NAME <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<p>Jcode - Japanese Charset Handler</p>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="SYNOPSIS"
>SYNOPSIS <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<pre class="sh_perl"> use Jcode;
 # 
 # traditional
 Jcode::convert(\$str, $ocode, $icode, &#34;z&#34;);
 # or OOP!
 print Jcode-&#62;new($str)-&#62;h2z-&#62;tr($from, $to)-&#62;utf8;</pre>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="DESCRIPTION"
>DESCRIPTION <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<p><b>&#60;Japanese document is now available as <a href="/perldoc?Jcode%3A%3ANihongo" class="podlinkpod"
>Jcode::Nihongo</a>. </b>&#62;</p>

<p>Jcode.pm supports both object and traditional approach. With object approach, you can go like;</p>

<pre class="sh_perl">  $iso_2022_jp = Jcode-&#62;new($str)-&#62;h2z-&#62;jis;</pre>

<p>Which is more elegant than:</p>

<pre class="sh_perl">  $iso_2022_jp = $str;
  &#38;jcode::convert(\$iso_2022_jp, &#39;jis&#39;, &#38;jcode::getcode(\$str), &#34;z&#34;);</pre>

<p>For those unfamiliar with objects, Jcode.pm still supports <code>getcode()</code> and <code>convert().</code></p>

<p>If the perl version is 5.8.1, Jcode acts as a wrapper to <a href="/perldoc?Encode" class="podlinkpod"
>Encode</a>, the standard charset handler module for Perl 5.8 or later.</p>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="Methods"
>Methods <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<p>Methods mentioned here all return Jcode object unless otherwise mentioned.</p>

<h2><a class='u' href='#___top' title='click to go to top of document'
name="Constructors"
>Constructors</a></h2>

<dl>
<dt><a name='j'></a><a name="$j_=_Jcode-&#62;new($str_[,_$icode])"
>$j = Jcode-&#62;new($str [, $icode])</a></dt>

<dd>
<p>Creates Jcode object $j from $str. Input code is automatically checked unless you explicitly set $icode. For available charset, see <a href="/perldoc?getcode" class="podlinkpod"
>getcode</a> below.</p>

<p>For perl 5.8.1 or better, <code>$icode</code> can be <i>any encoding name</i> that <a href="/perldoc?Encode" class="podlinkpod"
>Encode</a> understands.</p>

<pre class="sh_perl">  $j = Jcode-&#62;new($european, &#39;iso-latin1&#39;);</pre>

<p>When the object is stringified, it returns the EUC-converted string so you can &#60;print $j&#62; instead of &#60;print $j-&#62;euc&#62;.</p>

<dl>
<dt><a name='Passing'></a><a name="Passing_Reference"
>Passing Reference</a></dt>

<dd>
<p>Instead of scalar value, You can use reference as</p>

<p>Jcode-&#62;new(\$str);</p>

<p>This saves time a little bit. In exchange of the value of $str being converted. (In a way, $str is now &#34;tied&#34; to jcode object).</p>
</dd>
</dl>

<dt><a name='j'></a><a name="$j-&#62;set($str_[,_$icode])"
>$j-&#62;set($str [, $icode])</a></dt>

<dd>
<p>Sets $j&#39;s internal string to $str. Handy when you use Jcode object repeatedly (saves time and memory to create object).</p>

<pre class="sh_perl"> # converts mailbox to SJIS format
 my $jconv = new Jcode;
 $/ = 00;
 while(&#38;lt;&#38;gt;){
     print $jconv-&#62;set(\$_)-&#62;mime_decode-&#62;sjis;
 }</pre>

<dt><a name='j'></a><a name="$j-&#62;append($str_[,_$icode]);"
>$j-&#62;append($str [, $icode]);</a></dt>

<dd>
<p>Appends $str to $j&#39;s internal string.</p>

<dt><a name='j'></a><a name="$j_=_jcode($str_[,_$icode]);"
>$j = jcode($str [, $icode]);</a></dt>

<dd>
<p>shortcut for Jcode-&#62;new() so you can go like;</p>
</dd>
</dl>

<h2><a class='u' href='#___top' title='click to go to top of document'
name="Encoded_Strings"
>Encoded Strings</a></h2>

<p>In general, you can retrieve <i>encoded</i> string as $j-&#62;<i>encoded</i>.</p>

<dl>
<dt><a name='sjis'></a><a name="$sjis_=_jcode($str)-&#62;sjis"
>$sjis = jcode($str)-&#62;sjis</a></dt>

<dd>
<dt><a name='euc'></a><a name="$euc_=_$j-&#62;euc"
>$euc = $j-&#62;euc</a></dt>

<dd>
<dt><a name='jis'></a><a name="$jis_=_$j-&#62;jis"
>$jis = $j-&#62;jis</a></dt>

<dd>
<dt><a name='sjis'></a><a name="$sjis_=_$j-&#62;sjis"
>$sjis = $j-&#62;sjis</a></dt>

<dd>
<dt><a name='ucs2'></a><a name="$ucs2_=_$j-&#62;ucs2"
>$ucs2 = $j-&#62;ucs2</a></dt>

<dd>
<dt><a name='utf8'></a><a name="$utf8_=_$j-&#62;utf8"
>$utf8 = $j-&#62;utf8</a></dt>

<dd>
<p>What you code is what you get :)</p>

<dt><a name='iso_2022_jp'></a><a name="$iso_2022_jp_=_$j-&#62;iso_2022_jp"
>$iso_2022_jp = $j-&#62;iso_2022_jp</a></dt>

<dd>
<p>Same as <code>$j-&#62;h2z-&#62;jis</code>. Hankaku Kanas are forcibly converted to Zenkaku.</p>

<p>For perl 5.8.1 and better, you can also use any encoding names and aliases that Encode supports. For example:</p>

<pre class="sh_perl">  $european = $j-&#62;iso_latin1; # replace &#39;-&#39; with &#39;_&#39; for names.</pre>

<p><b>FYI</b>: <a href="/perldoc?Encode%3A%3AEncoder" class="podlinkpod"
>Encode::Encoder</a> uses similar trick.</p>

<dl>
<dt><a name='j'></a><a name="$j-&#62;fallback($fallback)"
>$j-&#62;fallback($fallback)</a></dt>

<dd>
<p>For perl is 5.8.1 or better, Jcode stores the internal string in UTF-8. Any character that does not map to <i>-&#62;encoding</i> are replaced with a &#39;?&#39;, which is <a href="/perldoc?Encode" class="podlinkpod"
>Encode</a> standard.</p>

<pre class="sh_perl">  my $unistr = &#34;\x{262f}&#34;; # YIN YANG
  my $j = jcode($unistr);  # $j-&#62;euc is &#39;?&#39;</pre>

<p>You can change this behavior by specifying fallback like <a href="/perldoc?Encode" class="podlinkpod"
>Encode</a>. Values are the same as <a href="/perldoc?Encode" class="podlinkpod"
>Encode</a>. <code>Jcode::FB_PERLQQ</code>, <code>Jcode::FB_XMLCREF</code>, <code>Jcode::FB_HTMLCREF</code> are aliased to those of <a href="/perldoc?Encode" class="podlinkpod"
>Encode</a> for convenice.</p>

<pre class="sh_perl">  print $j-&#62;fallback(Jcode::FB_PERLQQ)-&#62;euc;   # &#39;\x{262f}&#39;
  print $j-&#62;fallback(Jcode::FB_XMLCREF)-&#62;euc;  # &#39;&#38;#x262f;&#39;
  print $j-&#62;fallback(Jcode::FB_HTMLCREF)-&#62;euc; # &#39;&#38;#9775;&#39;</pre>

<p>The global variable <code>$Jcode::FALLBACK</code> stores the default fallback so you can override that by assigning the value.</p>

<pre class="sh_perl">  $Jcode::FALLBACK = Jcode::FB_PERLQQ; # set default fallback scheme</pre>
</dd>
</dl>

<dt><a name='lines'></a><a name="[@lines_=]_$jcode-&#62;jfold([$width,_$newline_str,_$kref])"
>[@lines =] $jcode-&#62;jfold([$width, $newline_str, $kref])</a></dt>

<dd>
<p>folds lines in jcode string every $width (default: 72) where $width is the number of &#34;halfwidth&#34; character. Fullwidth Characters are counted as two.</p>

<p>with a newline string spefied by $newline_str (default: &#34;\n&#34;).</p>

<p>Rudimentary kinsoku suppport is now available for Perl 5.8.1 and better.</p>

<dt><a name='length'></a><a name="$length_=_$jcode-&#62;jlength();"
>$length = $jcode-&#62;jlength();</a></dt>

<dd>
<p>returns character length properly, rather than byte length.</p>
</dd>
</dl>

<h2><a class='u' href='#___top' title='click to go to top of document'
name="Methods_that_use_MIME::Base64"
>Methods that use MIME::Base64</a></h2>

<p>To use methods below, you need <a href="/perldoc?MIME%3A%3ABase64" class="podlinkpod"
>MIME::Base64</a>. To install, simply</p>

<pre class="sh_perl">   perl -MCPAN -e &#39;CPAN::Shell-&#62;install(&#34;MIME::Base64&#34;)&#39;</pre>

<p>If your perl is 5.6 or better, there is no need since <a href="/perldoc?MIME%3A%3ABase64" class="podlinkpod"
>MIME::Base64</a> is bundled.</p>

<dl>
<dt><a name='mime_header'></a><a name="$mime_header_=_$j-&#62;mime_encode([$lf,_$bpl])"
>$mime_header = $j-&#62;mime_encode([$lf, $bpl])</a></dt>

<dd>
<p>Converts $str to MIME-Header documented in RFC1522. When $lf is specified, it uses $lf to fold line (default: \n). When $bpl is specified, it uses $bpl for the number of bytes (default: 76; this number must be smaller than 76).</p>

<p>For Perl 5.8.1 or better, you can also encode MIME Header as:</p>

<pre class="sh_perl">  $mime_header = $j-&#62;MIME_Header;</pre>

<p>In which case the resulting <code>$mime_header</code> is MIME-B-encoded UTF-8 whereas <code>$j-&#62;mime_encode()</code> returnes MIME-B-encoded ISO-2022-JP. Most modern MUAs support both.</p>

<dt><a name='j'></a><a name="$j-&#62;mime_decode;"
>$j-&#62;mime_decode;</a></dt>

<dd>
<p>Decodes MIME-Header in Jcode object. For perl 5.8.1 or better, you can also do the same as:</p>

<pre class="sh_perl">  Jcode-&#62;new($str, &#39;MIME-Header&#39;)</pre>
</dd>
</dl>

<h2><a class='u' href='#___top' title='click to go to top of document'
name="Hankaku_vs._Zenkaku"
>Hankaku vs. Zenkaku</a></h2>

<dl>
<dt><a name='j'></a><a name="$j-&#62;h2z([$keep_dakuten])"
>$j-&#62;h2z([$keep_dakuten])</a></dt>

<dd>
<p>Converts X201 kana (Hankaku) to X208 kana (Zenkaku). When $keep_dakuten is set, it leaves dakuten as is (That is, &#34;ka + dakuten&#34; is left as is instead of being converted to &#34;ga&#34;)</p>

<p>You can retrieve the number of matches via $j-&#62;nmatch;</p>

<dt><a name='j'></a><a name="$j-&#62;z2h"
>$j-&#62;z2h</a></dt>

<dd>
<p>Converts X208 kana (Zenkaku) to X201 kana (Hankaku).</p>

<p>You can retrieve the number of matches via $j-&#62;nmatch;</p>
</dd>
</dl>

<h2><a class='u' href='#___top' title='click to go to top of document'
name="Regexp_emulators"
>Regexp emulators</a></h2>

<p>To use <code>-&#62;m()</code> and <code>-&#62;s()</code>, you need perl 5.8.1 or better.</p>

<dl>
<dt><a name='j'></a><a name="$j-&#62;tr($from,_$to,_$opt);"
>$j-&#62;tr($from, $to, $opt);</a></dt>

<dd>
<p>Applies <code>tr/$from/$to/</code> on Jcode object where $from and $to are EUC-JP strings. On perl 5.8.1 or better, $from and $to can also be flagged UTF-8 strings.</p>

<p>If <code>$opt</code> is set, <code>tr/$from/$to/$opt</code> is applied. <code>$opt</code> must be &#39;c&#39;, &#39;d&#39; or the combination thereof.</p>

<p>You can retrieve the number of matches via $j-&#62;nmatch;</p>

<p>The following methods are available only for perl 5.8.1 or better.</p>

<dt><a name='j'></a><a name="$j-&#62;s($patter,_$replace,_$opt);"
>$j-&#62;s($patter, $replace, $opt);</a></dt>

<dd>
<p>Applies <code>s/$pattern/$replace/$opt</code>. <code>$pattern</code> and <code>replace</code> must be in EUC-JP or flagged UTF-8. <code>$opt</code> are the same as regexp options. See <a href="/perldoc?perlre" class="podlinkpod"
>perlre</a> for regexp options.</p>

<p>Like <code>$j-&#62;tr()</code>, <code>$j-&#62;s()</code> returns the object itself so you can nest the operation as follows;</p>

<pre class="sh_perl">  $j-&#62;tr(&#34;a-z&#34;, &#34;A-Z&#34;)-&#62;s(&#34;foo&#34;, &#34;bar&#34;);</pre>

<dt><a name='match'></a><a name="[@match_=_]_$j-&#62;m($pattern,_$opt);"
>[@match = ] $j-&#62;m($pattern, $opt);</a></dt>

<dd>
<p>Applies <code>m/$patter/$opt</code>. Note that this method DOES NOT RETURN AN OBJECT so you can&#39;t chain the method like <code>$j-&#62;s()</code>.</p>
</dd>
</dl>

<h2><a class='u' href='#___top' title='click to go to top of document'
name="Instance_Variables"
>Instance Variables</a></h2>

<p>If you need to access instance variables of Jcode object, use access methods below instead of directly accessing them (That&#39;s what OOP is all about)</p>

<p>FYI, Jcode uses a ref to array instead of ref to hash (common way) to optimize speed (Actually you don&#39;t have to know as long as you use access methods instead; Once again, that&#39;s OOP)</p>

<dl>
<dt><a name='j'></a><a name="$j-&#62;r_str"
>$j-&#62;r_str</a></dt>

<dd>
<p>Reference to the EUC-coded String.</p>

<dt><a name='j'></a><a name="$j-&#62;icode"
>$j-&#62;icode</a></dt>

<dd>
<p>Input charcode in recent operation.</p>

<dt><a name='j'></a><a name="$j-&#62;nmatch"
>$j-&#62;nmatch</a></dt>

<dd>
<p>Number of matches (Used in $j-&#62;tr, etc.)</p>
</dd>
</dl>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="Subroutines"
>Subroutines <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<dl>
<dt><a name='code'></a><a name="($code,_[$nmatch])_=_getcode($str)"
>($code, [$nmatch]) = getcode($str)</a></dt>

<dd>
<p>Returns char code of $str. Return codes are as follows</p>

<pre class="sh_perl"> ascii   Ascii (Contains no Japanese Code)
 binary  Binary (Not Text File)
 euc     EUC-JP
 sjis    SHIFT_JIS
 jis     JIS (ISO-2022-JP)
 ucs2    UCS2 (Raw Unicode)
 utf8    UTF8</pre>

<p>When array context is used instead of scaler, it also returns how many character codes are found. As mentioned above, $str can be \$str instead.</p>

<p><b>jcode.pl Users:</b> This function is 100% upper-conpatible with jcode::getcode() -- well, almost;</p>

<pre class="sh_perl"> * When its return value is an array, the order is the opposite;
   jcode::getcode() returns $nmatch first.

 * jcode::getcode() returns &#39;undef&#39; when the number of EUC characters
   is equal to that of SJIS.  Jcode::getcode() returns EUC.  for
   Jcode.pm there is no in-betweens. </pre>

<dt><a name='Jcode'></a><a name="Jcode::convert($str,_[$ocode,_$icode,_$opt])"
>Jcode::convert($str, [$ocode, $icode, $opt])</a></dt>

<dd>
<p>Converts $str to char code specified by $ocode. When $icode is specified also, it assumes $icode for input string instead of the one checked by getcode(). As mentioned above, $str can be \$str instead.</p>

<p><b>jcode.pl Users:</b> This function is 100% upper-conpatible with jcode::convert() !</p>
</dd>
</dl>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="BUGS"
>BUGS <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<p>For perl is 5.8.1 or later, Jcode acts as a wrapper to <a href="/perldoc?Encode" class="podlinkpod"
>Encode</a>. Meaning Jcode is subject to bugs therein.</p>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="ACKNOWLEDGEMENTS"
>ACKNOWLEDGEMENTS <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<p>This package owes a lot in motivation, design, and code, to the jcode.pl for Perl4 by Kazumasa Utashiro &#60;utashiro@iij.ad.jp&#62;.</p>

<p>Hiroki Ohzaki &#60;ohzaki@iod.ricoh.co.jp&#62; has helped me polish regexp from the very first stage of development.</p>

<p>JEncode by makamaka@donzoko.net has inspired me to integrate Encode to Jcode. He has also contributed Japanese POD.</p>

<p>And folks at Jcode Mailing list &#60;jcode5@ring.gr.jp&#62;. Without them, I couldn&#39;t have coded this far.</p>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="SEE_ALSO"
>SEE ALSO <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<p><a href="/perldoc?Encode" class="podlinkpod"
>Encode</a></p>

<p><a href="/perldoc?Jcode%3A%3ANihongo" class="podlinkpod"
>Jcode::Nihongo</a></p>

<p><a href="http://www.iana.org/assignments/character-sets" class="podlinkurl"
>http://www.iana.org/assignments/character-sets</a></p>

<h1><a class='u' href='#___top' title='click to go to top of document'
name="COPYRIGHT"
>COPYRIGHT <img alt='^' src='http://st.pimg.net/tucs/img/up.gif'></a></h1>

<p>Copyright 1999-2005 Dan Kogai &#60;dankogai@dan.co.jp&#62;</p>

<p>This library is free software; you can redistribute it and/or modify it under the same terms as Perl itself.</p>

</div>
<!-- This should probably be put in the <div class="footer"></div> -->
<script type="text/javascript">
    $(document).ready(function(){
        var startingStyle = $.cookie('css') ? $.cookie('css') : 'http://st.pimg.net/tucs/css/sh_none.min.css';
        $.fn.styleSwitch(startingStyle);
        $("#styleswitch").val(startingStyle);
        sh_highlightDocument();
        $("#styleswitch").bind(($.browser.msie ? "click" : "change"), function() {
            $.fn.styleSwitch($(this).val());
        });
    });
</script>
<div class="styleswitch">
    syntax highlighting:
    <select id="styleswitch">
        <option value="http://st.pimg.net/tucs/css/sh_none.min.css">no syntax highlighting</option>
        <option value="http://st.pimg.net/tucs/css/sh_acid.min.css">acid</option>
        <option value="http://st.pimg.net/tucs/css/sh_berries-dark.min.css">berries-dark</option>
        <option value="http://st.pimg.net/tucs/css/sh_berries-light.min.css">berries-light</option>
        <option value="http://st.pimg.net/tucs/css/sh_bipolar.min.css">bipolar</option>
        <option value="http://st.pimg.net/tucs/css/sh_blacknblue.min.css">blacknblue</option>
        <option value="http://st.pimg.net/tucs/css/sh_bright.min.css">bright</option>
        <option value="http://st.pimg.net/tucs/css/sh_contrast.min.css">contrast</option>
        <option value="http://st.pimg.net/tucs/css/sh_cpan.min.css">cpan</option>
        <option value="http://st.pimg.net/tucs/css/sh_darkblue.min.css">darkblue</option>
        <option value="http://st.pimg.net/tucs/css/sh_darkness.min.css">darkness</option>
        <option value="http://st.pimg.net/tucs/css/sh_desert.min.css">desert</option>
        <option value="http://st.pimg.net/tucs/css/sh_dull.min.css">dull</option>
        <option value="http://st.pimg.net/tucs/css/sh_easter.min.css">easter</option>
        <option value="http://st.pimg.net/tucs/css/sh_emacs.min.css">emacs</option>
        <option value="http://st.pimg.net/tucs/css/sh_golden.min.css">golden</option>
        <option value="http://st.pimg.net/tucs/css/sh_greenlcd.min.css">greenlcd</option>
        <option value="http://st.pimg.net/tucs/css/sh_ide-anjuta.min.css">ide-anjuta</option>
        <option value="http://st.pimg.net/tucs/css/sh_ide-codewarrior.min.css">ide-codewarrior</option>
        <option value="http://st.pimg.net/tucs/css/sh_ide-devcpp.min.css">ide-devcpp</option>
        <option value="http://st.pimg.net/tucs/css/sh_ide-eclipse.min.css">ide-eclipse</option>
        <option value="http://st.pimg.net/tucs/css/sh_ide-kdev.min.css">ide-kdev</option>
        <option value="http://st.pimg.net/tucs/css/sh_ide-msvcpp.min.css">ide-msvcpp</option>
        <option value="http://st.pimg.net/tucs/css/sh_kwrite.min.css">kwrite</option>
        <option value="http://st.pimg.net/tucs/css/sh_matlab.min.css">matlab</option>
        <option value="http://st.pimg.net/tucs/css/sh_navy.min.css">navy</option>
        <option value="http://st.pimg.net/tucs/css/sh_nedit.min.css">nedit</option>
        <option value="http://st.pimg.net/tucs/css/sh_neon.min.css">neon</option>
        <option value="http://st.pimg.net/tucs/css/sh_night.min.css">night</option>
        <option value="http://st.pimg.net/tucs/css/sh_pablo.min.css">pablo</option>
        <option value="http://st.pimg.net/tucs/css/sh_peachpuff.min.css">peachpuff</option>
        <option value="http://st.pimg.net/tucs/css/sh_print.min.css">print</option>
        <option value="http://st.pimg.net/tucs/css/sh_rand01.min.css">rand01</option>
	<option value="http://st.pimg.net/tucs/css/sh_solarized-dark.min.css">solarized-dark</option>
	<option value="http://st.pimg.net/tucs/css/sh_solarized-light.min.css">solarized-light</option>
        <option value="http://st.pimg.net/tucs/css/sh_style.min.css">style</option>
        <option value="http://st.pimg.net/tucs/css/sh_the.min.css">the</option>
        <option value="http://st.pimg.net/tucs/css/sh_typical.min.css">typical</option>
        <option value="http://st.pimg.net/tucs/css/sh_vampire.min.css">vampire</option>
        <option value="http://st.pimg.net/tucs/css/sh_vim-dark.min.css">vim-dark</option>
        <option value="http://st.pimg.net/tucs/css/sh_vim.min.css">vim</option>
        <option value="http://st.pimg.net/tucs/css/sh_whatis.min.css">whatis</option>
        <option value="http://st.pimg.net/tucs/css/sh_whitengrey.min.css">whitengrey</option>
        <option value="http://st.pimg.net/tucs/css/sh_zellner.min.css">zellner</option>
    </select>
</div>



<div class="footer"><div class="cpanstats">101732 Uploads, 30291 Distributions
138022 Modules, 11698 Uploaders
</div>
<div class="sponsor">
hosted by <a href="http://www.yellowbot.com">YellowBot</a><br/>
<a href="http://www.yellowbot.com"><img alt="do. tag. write. share." src="http://st.pimg.net/tucs/img/yellowbot_logo.gif"></a>
</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript" src="http://ipv4.v6test.develooper.com/js/v1/v6test.js"></script>

<script type="text/javascript">
   // v6.target = '';
   if (!v6.target) { v6.only_once = true }
   v6.site = '7A0D89A6-2B82-11DF-B9DA-F61CBD13F020';
   v6.api_server = 'http://ipv4.v6test.develooper.com';
   try {
     v6.test();
   } catch(err) {}
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("a[href^=http:]").click(function(){
      var href = $(this).attr('href');
      var m = href.match('\/\/([^\/:]+)');
      _gaq.push(['_trackEvent','External',m[1],'Module']);
    });
    $("a[href^=/CPAN/]").click(function(){
      var href = $(this).attr('href');
      _gaq.push(['_trackEvent','Download',href,'Module']);
    });
  });
</script>
<!-- Thu Sep  4 13:52:23 2014 GMT (0.0679919719696045) @cpansearch2 -->
 </body>
</html>
