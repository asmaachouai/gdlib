<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1671.5">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px 'Courier New'; color: #6d6f03; -webkit-text-stroke: #6d6f03; background-color: #f3f5f6}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px 'Courier New'; color: #fb0007; -webkit-text-stroke: #fb0007; background-color: #f3f5f6}
    p.p3 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px 'Courier New'; color: #851b87; -webkit-text-stroke: #851b87; background-color: #f3f5f6}
    p.p4 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px 'Courier New'; -webkit-text-stroke: #000000; background-color: #f3f5f6}
    p.p5 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px 'Courier New'; -webkit-text-stroke: #000000; background-color: #f3f5f6; min-height: 15.0px}
    p.p6 {margin: 0.0px 0.0px 0.0px 0.0px; font: 13.3px 'Courier New'; color: #00006d; -webkit-text-stroke: #00006d; background-color: #f3f5f6}
    span.s1 {font-kerning: none}
    span.s2 {font-kerning: none; color: #851b87; -webkit-text-stroke: 0px #851b87}
    span.s3 {font-kerning: none; color: #000000; -webkit-text-stroke: 0px #000000}
    span.s4 {font-kerning: none; color: #fb0007; -webkit-text-stroke: 0px #fb0007}
    span.s5 {font-kerning: none; color: #00006d; -webkit-text-stroke: 0px #00006d}
    span.s6 {font-kerning: none; -webkit-text-stroke: 0px #00006d}
    span.Apple-tab-span {white-space:pre}
  </style>
</head>
<body>
<p class="p1"><span class="s1">&lt;?php</span></p>
<p class="p2"><span class="s2">$host</span><span class="s3">=</span><span class="s1">"localhost"</span><span class="s3">;</span></p>
<p class="p3"><span class="s1">$utilisateur</span><span class="s3">=</span><span class="s4">"tuto"</span><span class="s3">;</span></p>
<p class="p3"><span class="s1">$motdepasse</span><span class="s3">=</span><span class="s4">"tuto"</span><span class="s3">;</span></p>
<p class="p2"><span class="s2">$base</span><span class="s3">=</span><span class="s1">"tutoriel"</span><span class="s3">;</span></p>
<p class="p3"><span class="s1">$conexion</span><span class="s3"> = <b>new</b> <a href="http://www.php.net/manual/fr/function.pdo.php"><span class="s5">PDO</span></a>(</span><span class="s4">'mysql:host='</span><span class="s3">.</span><span class="s1">$host</span><span class="s3">.</span><span class="s4">';dbname='</span><span class="s3">.</span><span class="s1">$base</span><span class="s3">, </span><span class="s1">$utilisateur</span><span class="s3">, </span><span class="s1">$motdepasse</span><span class="s3">);</span></p>
<p class="p4"><span class="s2">$conexion</span><span class="s1">-&gt;<a href="http://www.php.net/manual/fr/function.setattribute.php"><span class="s5">setAttribute</span></a>(<a href="http://www.php.net/manual/fr/function.pdo.php"><span class="s5">PDO</span></a>::ATTR_ERRMODE, <a href="http://www.php.net/manual/fr/function.pdo.php"><span class="s5">PDO</span></a>::ERRMODE_EXCEPTION);</span></p>
<p class="p2"><span class="s2">$sqlQuery</span><span class="s3"> = </span><span class="s1">"select sum(quantite) as qtvendu, libelle_produit FROM vente v join produit using(id_produit)</span></p>
<p class="p2"><span class="s1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>where YEAR(dates)=:year AND id_type=:idType GROUP BY libelle_produit ORDER BY libelle_produit"</span><span class="s3">;</span></p>
<p class="p4"><span class="s2">$sth</span><span class="s1"> = </span><span class="s2">$conexion</span><span class="s1">-&gt;<a href="http://www.php.net/manual/fr/function.prepare.php"><span class="s5">prepare</span></a>(</span><span class="s2">$sqlQuery</span><span class="s1">, <b>array</b>(<a href="http://www.php.net/manual/fr/function.pdo.php"><span class="s5">PDO</span></a>::ATTR_CURSOR =&gt; <a href="http://www.php.net/manual/fr/function.pdo.php"><span class="s5">PDO</span></a>::CURSOR_FWDONLY));</span></p>
<p class="p4"><span class="s2">$sth</span><span class="s1">-&gt;<a href="http://www.php.net/manual/fr/function.execute.php"><span class="s5">execute</span></a>(<b>array</b>(</span><span class="s4">':year'</span><span class="s1"> =&gt; </span><span class="s4">2008</span><span class="s1">, </span><span class="s4">':idType'</span><span class="s1"> =&gt; </span><span class="s4">1</span><span class="s1">));</span></p>
<p class="p5"><span class="s1"></span><br></p>
<p class="p4"><span class="s2">$element</span><span class="s1">=<b>array</b>();</span></p>
<p class="p3"><span class="s1">$total</span><span class="s3">=</span><span class="s4">0</span><span class="s3">;</span></p>
<p class="p4"><span class="s1"><b>foreach</b>(</span><span class="s2">$sth</span><span class="s1">-&gt;<a href="http://www.php.net/manual/fr/function.fetchall.php"><span class="s5">fetchAll</span></a>(<a href="http://www.php.net/manual/fr/function.pdo.php"><span class="s5">PDO</span></a>::FETCH_OBJ) <b>as</b> </span><span class="s2">$row</span><span class="s1">)</span></p>
<p class="p4"><span class="s1">{</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span></span><span class="s2">$element</span><span class="s1">[</span><span class="s2">$row</span><span class="s1">-&gt;libelle_produit]=</span><span class="s2">$row</span><span class="s1">-&gt;qtvendu;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span></span><span class="s2">$total</span><span class="s1">+=</span><span class="s2">$row</span><span class="s1">-&gt;qtvendu;</span></p>
<p class="p4"><span class="s1">}</span></p>
<p class="p2"><span class="s5"><a href="http://www.php.net/manual/fr/function.header.php">header</a></span><span class="s3">(</span><span class="s1">'Content-type: image/png'</span><span class="s3">);</span></p>
<p class="p3"><span class="s1">$largeur</span><span class="s3">=</span><span class="s4">400</span><span class="s3">;</span></p>
<p class="p3"><span class="s1">$hauteur</span><span class="s3">=</span><span class="s4">350</span><span class="s3">;</span></p>
<p class="p3"><span class="s1">$courbe</span><span class="s3">=<a href="http://www.php.net/manual/fr/function.imagecreatetruecolor.php"><span class="s5">imagecreatetruecolor</span></a>(</span><span class="s1">$largeur</span><span class="s3">, </span><span class="s1">$hauteur</span><span class="s3">);</span></p>
<p class="p4"><span class="s2">$couleur</span><span class="s1">=<b>array</b>();</span></p>
<p class="p3"><span class="s1">$red</span><span class="s3">=</span><span class="s4">0</span><span class="s3">;</span><span class="s1">$blue</span><span class="s3">=</span><span class="s4">0</span><span class="s3">;</span><span class="s1">$green</span><span class="s3">=</span><span class="s4">0</span><span class="s3">;</span></p>
<p class="p3"><span class="s1">$nbe</span><span class="s3">=<a href="http://www.php.net/manual/fr/function.count.php"><span class="s5">count</span></a>(</span><span class="s1">$element</span><span class="s3">);</span></p>
<p class="p3"><span class="s1">$pas</span><span class="s3">=<a href="http://www.php.net/manual/fr/function.round.php"><span class="s5">round</span></a>(</span><span class="s4">255</span><span class="s3">*</span><span class="s4">3</span><span class="s3">/</span><span class="s1">$nbe</span><span class="s3">);</span></p>
<p class="p4"><span class="s1"><b>for</b>(</span><span class="s2">$n</span><span class="s1">=</span><span class="s4">0</span><span class="s1">;</span><span class="s2">$n</span><span class="s1">&lt;</span><span class="s2">$nbe</span><span class="s1">;</span><span class="s2">$n</span><span class="s1">++)</span></p>
<p class="p4"><span class="s1">{</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span></span><span class="s2">$x</span><span class="s1"> = </span><span class="s2">$n</span><span class="s1">%</span><span class="s4">3</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span><b>switch</b> (</span><span class="s2">$x</span><span class="s1">){</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span><b>case</b>(</span><span class="s4">0</span><span class="s1">):</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">            </span></span><span class="s2">$red</span><span class="s1">+=</span><span class="s2">$pas</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">            </span><b>break</b>;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span><b>case</b>(</span><span class="s4">1</span><span class="s1">):</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">            </span></span><span class="s2">$blue</span><span class="s1">+=</span><span class="s2">$pas</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">            </span><b>break</b>;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span><b>case</b>(</span><span class="s4">2</span><span class="s1">):</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">            </span></span><span class="s2">$green</span><span class="s1">+=</span><span class="s2">$pas</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">            </span><b>break</b>;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span>}</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">    </span></span><span class="s1">$couleur</span><span class="s3">[</span><span class="s1">$n</span><span class="s3">][</span><span class="s4">0</span><span class="s3">]=<a href="http://www.php.net/manual/fr/function.imagecolorallocate.php"><span class="s5">imagecolorallocate</span></a>(</span><span class="s1">$courbe</span><span class="s3">, </span><span class="s1">$red</span><span class="s3">-</span><span class="s4">15</span><span class="s3">,(</span><span class="s1">$green</span><span class="s3">==</span><span class="s4">0</span><span class="s3">?</span><span class="s1">$green</span><span class="s3">:(</span><span class="s1">$green</span><span class="s3">-</span><span class="s4">15</span><span class="s3">)) , (</span><span class="s1">$blue</span><span class="s3">==</span><span class="s4">0</span><span class="s3">?</span><span class="s1">$blue</span><span class="s3">:(</span><span class="s1">$blue</span><span class="s3">-</span><span class="s4">15</span><span class="s3">)));</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">    </span></span><span class="s1">$couleur</span><span class="s3">[</span><span class="s1">$n</span><span class="s3">][</span><span class="s4">1</span><span class="s3">]=<a href="http://www.php.net/manual/fr/function.imagecolorallocate.php"><span class="s5">imagecolorallocate</span></a>(</span><span class="s1">$courbe</span><span class="s3">, </span><span class="s1">$red</span><span class="s3">,</span><span class="s1">$green</span><span class="s3"> , </span><span class="s1">$blue</span><span class="s3">);</span></p>
<p class="p4"><span class="s1">}</span></p>
<p class="p6"><span class="s2">$ligne</span><span class="s3">=<a href="http://www.php.net/manual/fr/function.imagecolorallocate.php"><span class="s6">imagecolorallocate</span></a>(</span><span class="s2">$courbe</span><span class="s3">, </span><span class="s4">220</span><span class="s3">, </span><span class="s4">220</span><span class="s3">, </span><span class="s4">220</span><span class="s3">);</span></p>
<p class="p6"><span class="s2">$fond</span><span class="s3">=<a href="http://www.php.net/manual/fr/function.imagecolorallocate.php"><span class="s6">imagecolorallocate</span></a>(</span><span class="s2">$courbe</span><span class="s3">, </span><span class="s4">250</span><span class="s3">, </span><span class="s4">250</span><span class="s3">, </span><span class="s4">250</span><span class="s3">);</span></p>
<p class="p6"><span class="s2">$noir</span><span class="s3">=<a href="http://www.php.net/manual/fr/function.imagecolorallocate.php"><span class="s6">imagecolorallocate</span></a>(</span><span class="s2">$courbe</span><span class="s3">, </span><span class="s4">0</span><span class="s3">, </span><span class="s4">0</span><span class="s3">, </span><span class="s4">0</span><span class="s3">);</span></p>
<p class="p3"><span class="s5"><a href="http://www.php.net/manual/fr/function.imagefilledrectangle.php">imagefilledrectangle</a></span><span class="s3">(</span><span class="s1">$courbe</span><span class="s3">,</span><span class="s4">0</span><span class="s3"> , </span><span class="s4">0</span><span class="s3">, </span><span class="s1">$largeur</span><span class="s3">, </span><span class="s1">$hauteur</span><span class="s3">, </span><span class="s1">$fond</span><span class="s3">);</span></p>
<p class="p4"><span class="s1"><b>for</b> (</span><span class="s2">$i</span><span class="s1"> = </span><span class="s4">150</span><span class="s1">; </span><span class="s2">$i</span><span class="s1"> &gt; </span><span class="s4">130</span><span class="s1">; </span><span class="s2">$i</span><span class="s1">--)</span></p>
<p class="p4"><span class="s1">{</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span></span><span class="s2">$debut</span><span class="s1">=</span><span class="s4">80</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span></span><span class="s2">$j</span><span class="s1">=</span><span class="s4">0</span><span class="s1">;</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">        </span><b>foreach</b> (</span><span class="s1">$element</span><span class="s3"> <b>as</b> </span><span class="s1">$libelle</span><span class="s3">=&gt;</span><span class="s1">$quantite</span><span class="s3">)</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span>{</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">           </span></span><span class="s1">$valeur</span><span class="s3">=</span><span class="s1">$quantite</span><span class="s3">/</span><span class="s1">$total</span><span class="s3">*</span><span class="s4">360</span><span class="s3">;</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">           </span></span><span class="s1">$fin</span><span class="s3">=</span><span class="s1">$debut</span><span class="s3">+</span><span class="s1">$valeur</span><span class="s3">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">           </span><a href="http://www.php.net/manual/fr/function.imagefilledarc.php"><span class="s5">imagefilledarc</span></a>(</span><span class="s2">$courbe</span><span class="s1">, </span><span class="s4">200</span><span class="s1">, </span><span class="s2">$i</span><span class="s1">, </span><span class="s4">350</span><span class="s1">, </span><span class="s4">220</span><span class="s1">, </span><span class="s2">$debut</span><span class="s1">,</span><span class="s2">$fin</span><span class="s1">, </span><span class="s2">$couleur</span><span class="s1">[</span><span class="s2">$j</span><span class="s1">][</span><span class="s4">0</span><span class="s1">], IMG_ARC_PIE);</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">           </span></span><span class="s2">$j</span><span class="s1">++;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">           </span></span><span class="s2">$debut</span><span class="s1">=</span><span class="s2">$fin</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span>}</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space"> </span>}</span></p>
<p class="p4"><span class="s2">$j</span><span class="s1">=</span><span class="s4">0</span><span class="s1">;</span></p>
<p class="p3"><span class="s1">$pasX</span><span class="s3">=</span><span class="s4">20</span><span class="s3">;</span></p>
<p class="p3"><span class="s1">$pasY</span><span class="s3">=</span><span class="s4">270</span><span class="s3">;</span></p>
<p class="p3"><span class="s3"><b>foreach</b> (</span><span class="s1">$element</span><span class="s3"> <b>as</b> </span><span class="s1">$libelle</span><span class="s3">=&gt;</span><span class="s1">$quantite</span><span class="s3">)</span></p>
<p class="p4"><span class="s1">{</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">  </span></span><span class="s1">$valeur</span><span class="s3">=</span><span class="s1">$quantite</span><span class="s3">/</span><span class="s1">$total</span><span class="s3">*</span><span class="s4">360</span><span class="s3">;</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">   </span></span><span class="s1">$fin</span><span class="s3">=</span><span class="s1">$debut</span><span class="s3">+</span><span class="s1">$valeur</span><span class="s3">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">   </span><a href="http://www.php.net/manual/fr/function.imagefilledarc.php"><span class="s5">imagefilledarc</span></a>(</span><span class="s2">$courbe</span><span class="s1">, </span><span class="s4">200</span><span class="s1">, </span><span class="s2">$i</span><span class="s1">, </span><span class="s4">350</span><span class="s1">, </span><span class="s4">220</span><span class="s1">, </span><span class="s2">$debut</span><span class="s1">, </span><span class="s2">$fin</span><span class="s1">, </span><span class="s2">$couleur</span><span class="s1">[</span><span class="s2">$j</span><span class="s1">][</span><span class="s4">1</span><span class="s1">], IMG_ARC_PIE);</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">   </span></span><span class="s1">$debut</span><span class="s3">=</span><span class="s1">$fin</span><span class="s3">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">   </span><b>if</b>((</span><span class="s2">$j</span><span class="s1"> % </span><span class="s4">5</span><span class="s1">)==</span><span class="s4">4</span><span class="s1">)</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span>{</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span></span><span class="s2">$pasX</span><span class="s1">+=</span><span class="s4">150</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">        </span></span><span class="s2">$pasY</span><span class="s1">=</span><span class="s4">270</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span>}</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">    </span><a href="http://www.php.net/manual/fr/function.imagefilledrectangle.php"><span class="s5">imagefilledrectangle</span></a>(</span><span class="s1">$courbe</span><span class="s3">,</span><span class="s1">$pasX</span><span class="s3">+</span><span class="s4">120</span><span class="s3"> , </span><span class="s1">$pasY</span><span class="s3">, </span><span class="s1">$pasX</span><span class="s3">+</span><span class="s4">140</span><span class="s3">, </span><span class="s1">$pasY</span><span class="s3">+</span><span class="s4">12</span><span class="s3">, </span><span class="s1">$couleur</span><span class="s3">[</span><span class="s1">$j</span><span class="s3">][</span><span class="s4">1</span><span class="s3">]);</span></p>
<p class="p3"><span class="s3"><span class="Apple-converted-space">    </span><a href="http://www.php.net/manual/fr/function.imagestring.php"><span class="s5">imagestring</span></a>(</span><span class="s1">$courbe</span><span class="s3">, </span><span class="s4">2</span><span class="s3">, </span><span class="s1">$pasX</span><span class="s3">,</span><span class="s1">$pasY</span><span class="s3"> , </span><span class="s1">$libelle</span><span class="s3">.</span><span class="s4">': '</span><span class="s3">.</span><span class="s1">$quantite</span><span class="s3">, </span><span class="s1">$couleur</span><span class="s3">[</span><span class="s1">$j</span><span class="s3">][</span><span class="s4">1</span><span class="s3">]);</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span></span><span class="s2">$pasY</span><span class="s1">+=</span><span class="s4">20</span><span class="s1">;</span></p>
<p class="p4"><span class="s1"><span class="Apple-converted-space">    </span></span><span class="s2">$j</span><span class="s1">++;</span></p>
<p class="p4"><span class="s1">}</span></p>
<p class="p6"><span class="s3"><span class="Apple-converted-space"> </span><a href="http://www.php.net/manual/fr/function.imagepng.php"><span class="s6">imagepng</span></a>(</span><span class="s2">$courbe</span><span class="s3">);</span></p>
<p class="p6"><span class="s3"><span class="Apple-converted-space"> </span><a href="http://www.php.net/manual/fr/function.imagedestroy.php"><span class="s6">imagedestroy</span></a>(</span><span class="s2">$courbe</span><span class="s3">);</span></p>
<p class="p1"><span class="s1">?&gt;</span></p>
</body>
</html>
