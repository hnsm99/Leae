//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=8; attempts=0; attemptsMax=5;
var score=0; scoreMax=8; scoreInc=1; scoreDec=1
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
var timeOnMessage=3; messageOk="FELICITACIONES"; messageTime="Se ha acabado el tiempo:("; messageError=""; messageErrorG=""; messageAttempts="Perdiste:("; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="VmVyYnRvYmU"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","","",""];
var iL=["<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_212342.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_212801.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_212547.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_211834.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_212725.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_212859.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_213031.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_213004.png'></div>"];
var order=["","","","","","","",""]; orderR=["","","","","","","",""];indexR=0; indexL=0;
var cR=["","","","","","","",""]; ansRL=["NQ","Ng","NA","Nw","MA","Mg","Mw","MQ"];
var iR=["<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214631.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214717.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214649.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214702.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214558.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214533.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214702.png'></div>","<div  align='center'><img src='Verbtobe_resources/media/Adobe_Post_20190716_214617.png'></div>"];
var auR=[5,8,6,7,3,1,2,4];
