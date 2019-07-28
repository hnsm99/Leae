//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=7; attempts=0; attemptsMax=1;
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
var colorBack="#FFFDFD"; colorButton="#0080C0"; colorText="#000000"; colorSele="#00FFFF";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="'Arial Black', Gadget, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="FELICITACIONES"; messageTime=":("; messageError=""; messageErrorG=""; messageAttempts=":("; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="V0hxdWVzdGlvbnM"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","",""];
var iL=["<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_094044.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_094054.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_094104.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_094114.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_094123.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_094133.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_094123.png'></div>"];
var order=["","","","","","",""]; orderR=["","","","","","",""];indexR=0; indexL=0;
var cR=["","","","","","",""]; ansRL=["Mw","Mg","NQ","NA","Ng","MA","MQ"];
var iR=["<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_093856.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_093906.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_093758.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_093742.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_093826.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_093711.png'></div>","<div  align='center'><img src='WHquestions_resources/media/Adobe_Post_20190720_093836.png'></div>"];
var auR=[6,7,2,1,4,3,5];
