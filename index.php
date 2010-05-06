<?php
 
   require('db.php'); 
   $pdo = pdo();
   $lines = array();
   $sql = 'select * from lines order by start_time;' ;
   foreach($pdo->query($sql) as $row){
     $lines[] = $row;
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>elsie</title>
  <meta charset="utf-8">
  <link type="text/css" href="css/style.css" rel="stylesheet" />
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.1%28beta3%29/IE9.js" type="text/javascript"></script><![endif]-->
  <!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="/javascripts/ie6.css"/><![endif]-->

<script src="js/jquery.js"> </script>
<script src="js/jquery.annotatevideo.js"> </script>
<script src="js/elsie.js"> </script>


</head>
<body>

<div id="header">
<audio src="audio/peq_001_1.wav" controls="controls">
</audio>  

<form action="save_line.php" method="post" id="editor">
  <input name="line" id="line" type="text" tabindex="0" />
  <button type="submit">save line</button>
</form>

</div><!-- #header -->

<div id="sidebar">
  <?php require_once('list_audio.php') ?>
</div>
<div id="content">
  <div style="display:none" id="heh">
      <span data-start="1" data-stop="5">This is February fourth, nineteen-eighty-two.</span> 
      <span data-start="5" data-stop="15">Uh, Mrs. Elsie Allen at Ukiah speaking in Southern Pomo.</span> 
      <span data-start="15" data-stop="20">Ready any time you are.</span> 
      <span data-start="20" data-stop="25">and I'm going to talk about soaking acorn.</span>
      <span data-start="25" data-stop="30">What I see in movie.</span> 
      <span data-start="30" data-stop="35">The way this lady done is she</span> 
      <span data-start="35" data-stop="40">fix a place along the river</span> 
      <span data-start="40" data-stop="45"></span> 
<span data-stop="102.86616516113281" data-start="97.86616516113281">qhabe achi</span>
<span data-stop="108.18811798095703" data-start="103.18811798095703">muuduciba</span>
<span data-stop="110.69709777832031" data-start="105.69709777832031">phala </span>
<span data-stop="114.51007080078125" data-start="109.51007080078125">hamun </span>
<span data-stop="118.82503509521484" data-start="113.82503509521484">t.adetdew</span>
<span data-stop="121.43501281738281" data-start="116.43501281738281">miicay</span>
<span data-stop="124.84598541259766" data-start="119.84598541259766">huchamba</span>
<span data-stop="127.88385772705078" data-start="122.88385772705078">acha detdew</span>
<span data-stop="131.1978302001953" data-start="126.19783020019531">acic'</span>
<span data-stop="137.8448486328125" data-start="132.8448486328125">dat'et'aqayo</span>
<span data-stop="142.2598114013672" data-start="137.2598114013672">s'ich</span>
<span data-stop="144.8697967529297" data-start="139.8697967529297">wa?an</span>
<span data-stop="148.68276977539062" data-start="143.68276977539062">bi?dubut</span>
<span data-stop="151.6927490234375" data-start="146.6927490234375">wan hutan</span>
<span data-stop="157.8166961669922" data-start="152.8166961669922">akomaqay</span>
<span data-stop="159.3226776123047" data-start="154.3226776123047">mayo</span>
<span data-stop="161.73165893554688" data-start="156.73165893554688">pi?ni</span>
<span data-stop="166.54962158203125" data-start="161.54962158203125">matstaba</span>
<span data-stop="172.4715576171875" data-start="167.4715576171875">huhuhuda</span>
<span data-stop="174.8805389404297" data-start="169.8805389404297">hucut</span>
<span data-stop="177.99252319335938" data-start="172.99252319335938">mayakewi</span>
<span data-stop="181.0034942626953" data-start="176.0034942626953">maba</span>
<span data-stop="182.60948181152344" data-start="177.60948181152344">maciw</span>
<span data-stop="186.02244567871094" data-start="181.02244567871094">amun wa?an</span>
<span data-stop="187.73043823242188" data-start="182.73043823242188">hittam</span>
<span data-stop="190.54141235351562" data-start="185.54141235351562">sit</span>
<span data-stop="194.85836791992188" data-start="189.85836791992188">caphala </span>
<span data-stop="196.56434631347656" data-start="191.56434631347656">maw</span>
<span data-stop="200.4783172607422" data-start="195.4783172607422">qo?di</span>
<span data-stop="202.6873016357422" data-start="197.6873016357422">qa?wan</span>
<span data-stop="206.30027770996094" data-start="201.30027770996094">chow ligaw</span>
<span data-stop="209.51223754882812" data-start="204.51223754882812">xmayo</span>
<span data-stop="210.61624145507812" data-start="205.61624145507812">winato</span>
<span data-stop="213.92820739746094" data-start="208.92820739746094">bi?dubot</span>
<span data-stop="214.8321990966797" data-start="209.8321990966797">wan</span>
<span data-stop="216.8391876220703" data-start="211.8391876220703">daatho</span>
<span data-stop="221.05514526367188" data-start="216.05514526367188">thaana kowi </span>
<span data-stop="222.4611358642578" data-start="217.4611358642578">aniba</span>
<span data-stop="226.277099609375" data-start="221.277099609375">micay</span>
<span data-stop="231.8990478515625" data-start="226.8990478515625">thannawi lii </span>
<span data-stop="235.114013671875" data-start="230.114013671875">ahqhahamen</span>
<span data-stop="238.6279754638672" data-start="233.6279754638672">wandassew</span>
<span data-stop="243.24693298339844" data-start="238.24693298339844">khmayo </span>
<span data-stop="248.77088928222656" data-start="243.77088928222656">bitdubu?dtwan</span>
<span data-stop="250.3768768310547" data-start="245.3768768310547">mili</span>
<span data-stop="253.5878448486328" data-start="248.5878448486328">miitdmaw</span>
<span data-stop="255.19383239746094" data-start="250.19383239746094">mamo</span>
<span data-stop="257.1028137207031" data-start="252.10281372070312">miicay</span>
<span data-stop="258.8088073730469" data-start="253.80880737304688">hamun</span>
<span data-stop="261.01678466796875" data-start="256.01678466796875">daw ciba</span>
<span data-stop="264.8317565917969" data-start="259.8317565917969">cachcin</span>
<span data-stop="267.03973388671875" data-start="262.03973388671875">khmayo</span>
<span data-stop="270.9537048339844" data-start="265.9537048339844">ce?et mawanni</span>
<span data-stop="273.3626708984375" data-start="268.3626708984375">si?tda</span>
<span data-stop="278.08062744140625" data-start="273.08062744140625">ichiwagogadudt</span>
<span data-stop="280.0876159667969" data-start="275.0876159667969">an </span>
<span data-stop="282.6955871582031" data-start="277.6955871582031">ahqha</span>
<span data-stop="285.1045837402344" data-start="280.1045837402344">aqha?be</span>
<span data-stop="287.112548828125" data-start="282.112548828125">midalaw</span>
<span data-stop="290.425537109375" data-start="285.425537109375">mudaqdti</span>
<span data-stop="294.6424865722656" data-start="289.6424865722656">homidalaw</span>
<span data-stop="303.47442626953125" data-start="298.47442626953125">i think that's all i could remember</span>
<span data-stop="306.1853942871094" data-start="301.1853942871094">that's about it</span>
<span data-stop="306.7873840332031" data-start="301.7873840332031">yeah</span>
<span data-stop="309.4983825683594" data-start="304.4983825683594">let's listten to it</span>
<span data-stop="315.3269958496094" data-start="310.3269958496094">i understood a certain amount but htere were words in there i didn't know</span>
<span data-stop="45.635623931884766" data-start="40.635623931884766">you know what lanugage you're talking?</span>
<span data-stop="52.46156311035156" data-start="47.46156311035156">that's the way I do! that's the way I do!</span> 
<span data-stop="55.899635314941406" data-start="50.899635314941406">aw shucks! darn it. let's see, how i'm gon say now.</span>
<span data-stop="62.12358093261719" data-start="57.12358093261719">can i still talk then?</span>
<span data-stop="68.75051879882812" data-start="63.750518798828125">just pretendt hat i undersatand everything you say</span>
<span data-stop="70.35650634765625" data-start="65.35650634765625">oh, yeah</span>
<span data-stop="73.75886535644531" data-start="68.75886535644531">now i forget everything what i was gonna say</span>
<span data-stop="74.77346801757812" data-start="69.77346801757812">tho?o hi mayaw</span>
<span data-stop="81.89034271240234" data-start="76.89034271240234">hodenkhe</span>
<span data-stop="86.20630645751953" data-start="81.20630645751953">?a kassam a </span>
<span data-stop="96.44422149658203" data-start="91.44422149658203">amadaq'loba qa?be</span>
<span data-stop="98.35020446777344" data-start="93.35020446777344">phala</span>
<span data-stop="99.35419464111328" data-start="94.35419464111328">uh</span>
</div>

<div id="lines">
<?php
  foreach($lines as $row){
   echo "<span data-start='{$row['start_time']}' data-stop='{$row['stop_time']}'>{$row['line']}</span>";
  }
?>
</div>

</div>
<p id="buttons">
<button id="view">view</button> | <a id="about" href="about.html">about</a>
</p>
</body>
</html>

