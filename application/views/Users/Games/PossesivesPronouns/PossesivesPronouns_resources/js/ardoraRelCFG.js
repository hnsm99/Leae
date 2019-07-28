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
var fMenssage="'Arial Black', Gadget, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=2; messageOk="Felicitaciones"; messageTime="Se ha acabado el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="Vuelve a intentarlo"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#0080C0"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="UG9zc2VzaXZlc1Byb25vdW5z"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","",""];
var iL=["<div  align='center'><img src='PossesivesPronouns_resources/media/miine.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/yours.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/hers.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/his.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/ours.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/yours.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/theirs.png'></div>"];
var order=["","","","","","",""]; orderR=["","","","","","",""];indexR=0; indexL=0;
var cR=["","","","","","",""]; ansRL=["Mw","NQ","MQ","Mg","Ng","MA","NA"];
var iR=["<div  align='center'><img src='PossesivesPronouns_resources/media/de_ustedes.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/de_ella.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/de___l.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/m__o.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/de_ellos.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/yours.png'></div>","<div  align='center'><img src='PossesivesPronouns_resources/media/nuestro.png'></div>"];
var auR=[6,3,4,1,7,2,5];
