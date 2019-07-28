//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=10; attempts=0; attemptsMax=8;
var score=0; scoreMax=10; scoreInc=1; scoreDec=0
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
var timeOnMessage=5; messageOk="FELICITACIONES"; messageTime="Se ha acabado el tiempo:("; messageError=""; messageErrorG=""; messageAttempts=""; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#008000"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="T3JkaW5hbE51bWJlcnM"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var words=["RklSU1Q","U0VDT05E","VEhJUkQ","Rk9VUlRI","RklGVEg","U0lYVEg","U0VWRU5USA","RUlHSFRI","TklOVEg","VEVOVEg"];imaW=["0_Adobe_Post_20190716_204526.png","0_Adobe_Post_20190716_204558.png","0_Adobe_Post_20190716_204616.png","0_Adobe_Post_20190716_204632.png","0_Adobe_Post_20190716_204652.png","0_Adobe_Post_20190716_204702.png","0_Adobe_Post_20190716_204712.png","0_Adobe_Post_20190716_204730.png","0_Adobe_Post_20190716_204737.png","0_Adobe_Post_20190716_204749.png"];queW=["","","","","","","","","",""];
var auW=["","","","","","","","","",""];
var fillLetter="ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚÜ "; wordsG=[]; indexG=0; actMaxWidth=900; indexWord=0; totalWord=0;
var imageW=[];questionW=[];audioW=[];profG=0; dirMedia="OrdinalNumbers_resources/media/"; textBNext="";
