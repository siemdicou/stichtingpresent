<html>
<head>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="script2.js"></script>
<script type="text/javascript" src="script3.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<div id="backgroudStartscherm">
  <div id="startscherm">
    <h1 id="fb-welcome"></h1>
      <h2>Probeer zo snel mogelijk de tuin op te ruimen!</h2>
      <p>
      Al het afval moet rechtstreeks de prullenbak in, succes!
      </p>
      <button id="startButton" onclick="start()">BEGIN</button>
  </div>
  <img src="img/arrow.png" id="arrow">
</div>

<div id="eindscherm">
    <h1>Dat deed je goed! Wil je meer vrijwilligerswerk doen?</h1>
    <a href="http://stichtingpresent.nl/meedoen-als/" target="_blank"><button class="stichtingbutton">Klik dan hier!</button></a>
    <a href="http://thomasstevens.nl/stichtingpresent#two" target="_blank"><button class="stichtingbutton">Highscores</button></a><br><br>
    <p id="time">
    <div id="score"></div><Br>
    </p>  
</div>


<!-- <div id="yes-drop" class="draggable drag-drop"> #yes-drop </div>
<div id="outer-dropzo   ne" class="dropzone">
 </div>
 -->

<div  id="dragframe"  ondragover="allowDrop(event)">
<!--<div class="fb-like" data-href="https://apps.facebook.com/1689105558004265/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>-->

    <img id="drag1" class="yes-drop draggable drag-drop" src="http://vignette1.wikia.nocookie.net/joke-battles/images/c/ce/Doritos-nacho-cheese.png/revision/latest?cb=20160304034035" draggable="true" ondragstart="drag(event)" width="40">
    <img id="drag3" class="yes-drop draggable drag-drop " src="http://www.fancyicons.com/free-icons/174/the-city/png/256/cigarretes_blue_256.png" draggable="true" ondragstart="drag(event)" width="60" height="50">
    <img id="drag4" class="yes-drop draggable drag-drop " src="http://www.bedrijfsafvalspecialist.nl/uploads/nieuwwww/bedrijfsafval%20container%20vuilniszak.png" draggable="true" ondragstart="drag(event)" width="60" height="69">
     <img id="drag5" class="yes-drop draggable drag-drop " src="http://www.bedrijfsafvalspecialist.nl/uploads/nieuwwww/bedrijfsafval%20container%20vuilniszak.png" draggable="true" ondragstart="drag(event)" width="60" height="69">
     <img id="drag6" class="yes-drop draggable drag-drop " src="http://www.surfingkids.be/images/Products/detail/617_1A.png" draggable="true" ondragstart="drag(event)" width="65" height="49">
<!--
    <img id="drag7" class="yes-drop draggable drag-drop " src="http://www.joomlaworks.net/images/demos/galleries/abstract/7.jpg" draggable="true" ondragstart="drag(event)" width="20" height="69">
    <img id="drag8" class="yes-drop draggable drag-drop " src="http://www.joomlaworks.net/images/demos/galleries/abstract/7.jpg" draggable="true" ondragstart="drag(event)" width="20" height="69">
    <img id="drag9" class="yes-drop draggable drag-drop " src="http://www.joomlaworks.net/images/demos/galleries/abstract/7.jpg" draggable="true" ondragstart="drag(event)" width="20" height="69">
    <img id="drag10" class="yes-drop draggable drag-drop " src="http://www.joomlaworks.net/images/demos/galleries/abstract/7.jpg" draggable="true" ondragstart="drag(event)" width="20" height="69">   
-->
<!-- test -->
 <div class="dropzone" >
    <img src="img/trashcan.png" width="50px" id="trashcan">
     <br>
    </div>
</div>
<div class="se-pre-con"></div>
<div id="fb-root"></div>
<script src="jqeury.js"></script>
<script src="modenizer.js"></script>
<script type="text/javascript">
//paste this code under the head tag or in a separate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });
</script>

</body>
</html>