//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=8; attempts=0; attemptsMax=6;
var score=0; scoreMax=8; scoreInc=1; scoreDec=1
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
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="Felicitaciones"; messageTime="Se ha acabado el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="Perdiste"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#0080C0"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="VGhpc2FuZFRoZXNl"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","","",""];
var iL=["<div  align='center'><img src='ThisandThese_resources/media/These.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/This.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/This.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/These.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/These.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/This.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/These.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/This.png'></div>"];
var order=["","","","","","","",""]; orderR=["","","","","","","",""];indexR=0; indexL=0;
var cR=["<p>car</p>","<p>doors</p>","<p>table</p>","<p>cars</p>","<p>books</p>","<p>doll</p>","<p>book</p>","<p>chairs</p>"]; ansRL=["NA","Ng","MA","Mw","Nw","NQ","MQ","Mg"];
var iR=["<div  align='center'><img src='ThisandThese_resources/media/car.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/doors.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/table.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/cars.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/boks.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/doll.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/book__2_.png'></div>","<div  align='center'><img src='ThisandThese_resources/media/chairs.png'></div>"];
var auR=[3,7,8,4,1,6,2,5];
