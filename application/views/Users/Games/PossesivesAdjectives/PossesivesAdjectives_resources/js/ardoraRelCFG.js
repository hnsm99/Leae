//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=7; attempts=0; attemptsMax=5;
var score=0; scoreMax=7; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=0;
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
var timeOnMessage=2; messageOk="Felicitaciones"; messageTime="Se ha acabado el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="Vuelve a intentarlo"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#0080C0"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="UG9zc2VzaXZlc0FkamVjdGl2ZXM"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","",""];
var iL=["<div  align='center'><img src='PossesivesAdjectives_resources/media/Adobe_Post_20190720_130131.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/Adobe_Post_20190720_130152.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/his.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/Adobe_Post_20190720_130229.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/Adobe_Post_20190720_130247.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/Adobe_Post_20190720_130152.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/Adobe_Post_20190720_130256.png'></div>"];
var order=["","","","","","",""]; orderR=["","","","","","",""];indexR=0; indexL=0;
var cR=["","","","","","",""]; ansRL=["NA","NQ","MA","MQ","Mw","Ng","Mg"];
var iR=["<div  align='center'><img src='PossesivesAdjectives_resources/media/de___l.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/de_ella.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/de_ellos.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/nuestro.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/m__o.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/tuyo.png'></div>","<div  align='center'><img src='PossesivesAdjectives_resources/media/de_ustedes.png'></div>"];
var auR=[3,4,7,5,1,2,6];
