//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=7; attempts=0; attemptsMax=6;
var score=0; scoreMax=7; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=1;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=true;
var tiScore=true;
var startTime;
var colorBack="#FFFDFD"; colorButton="#00FFFF"; colorText="#000000"; colorSele="#0080C0";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=3; messageOk="Felicitacions"; messageTime="Se a acabado el tiempo:("; messageError="Error"; messageAttempts="Vuelve a intentarlo :("; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
var consolidateSuccess=0; var consolidateScore=0;
borderOk="#0080C0"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var indexTXT=0; var txtC=['<p>He is singing <input type="text" name="item1" id="item1" class="ardoraDropInput" readonly> song. </p><p> She went to <input type="text" name="item2" id="item2" class="ardoraDropInput" readonly> zoo yesterday. </p><p> I am reading <input type="text" name="item3" id="item3" class="ardoraDropInput" readonly> new book about Africa. </p><p> I want <input type="text" name="item4" id="item4" class="ardoraDropInput" readonly> apple. </p><p> I need <input type="text" name="item5" id="item5" class="ardoraDropInput" readonly> chair. </p><p> I want <input type="text" name="item6" id="item6" class="ardoraDropInput" readonly> red apple. </p><p> <input type="text" name="item7" id="item7" class="ardoraDropInput" readonly> actors were really good. </p><p> </p>'];
var answers=["a","a","the","the","an","a","The"];
var a=["MQ","Mw","Mg","Ng","NA","NQ","Nw"];
var itemCorr=["0","0","0","0","0","0","0"];
var itemHelp=["","","","","","",""];
var animationX=[]; animationY=[]; animationPosX=[]; animationPosY=[]; animationLetter=[];
var wordsGame="QXJ0aWNsZWxlcw"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var textBNext="";
var fHelp="Verdana, Geneva, sans-serif";
