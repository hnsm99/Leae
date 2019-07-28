//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=0; attempts=0; attemptsMax=8;
var score=0; scoreMax=2; scoreInc=2; scoreDec=1
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
var fMenssage="'Arial Black', Gadget, sans-serif";
var fActi="'Times New Roman', Times, serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=3; messageOk="FELICITACIONES"; messageTime="Se ha acabao el tiempo :("; messageError=""; messageErrorG=""; messageAttempts="Perdiste:("; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="VGltZQ"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var joinPar=[];
var c=[];
var con1=["It´'s five o' clock","It's noon","It´s half past eleven","It's twelve o' clock","It´s midnight","It´s a quarter to twelve","It´s five past ten"];
var con2=["Son las cinco en punto","Es mediodia","Son las once y media","Son las doce en punto","Es medianoche","Falta un cuarto para las doce","Son las diez y cinco"];
var sel1=""; join1=[]; join2=[];
