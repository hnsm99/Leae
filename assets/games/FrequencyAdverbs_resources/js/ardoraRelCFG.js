//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=7; attempts=0; attemptsMax=8;
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
var timeOnMessage=5; messageOk=""; messageTime=""; messageError=""; messageErrorG=""; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#0080C0"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="RnJlcXVlbmN5QWR2ZXJicw"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","",""];
var iL=["<div  align='center'><img src='FrequencyAdverbs_resources/media/Always.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Frecuently.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Ocasionally.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Often.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Rarely.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Sometimes.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Usually.png'></div>"];
var order=["","","","","","",""]; orderR=["","","","","","",""];indexR=0; indexL=0;
var cR=["","","","","","",""]; ansRL=["Mg","NA","NQ","MA","Mw","Ng","MQ"];
var iR=["<div  align='center'><img src='FrequencyAdverbs_resources/media/Often1.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Usually1.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Always1.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Rarely1.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Frecuently1.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Ocasionally1.png'></div>","<div  align='center'><img src='FrequencyAdverbs_resources/media/Sometimes1.png'></div>"];
var auR=[4,7,1,5,2,3,6];
