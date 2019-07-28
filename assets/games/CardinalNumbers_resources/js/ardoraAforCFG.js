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
var colorBack="#FFFDFD"; colorButton="#0080C0"; colorText="#000000"; colorSele="#00FFFF";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="Verdana, Geneva, sans-serif";
var fActi="Verdana, Geneva, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=5; messageOk="FELICITACIONES"; messageTime="Se ha acabado el tiempo:("; messageError=""; messageErrorG=""; messageAttempts="Perdiste:("; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#0000FF"; borderTime="#0000FF";borderError="#FF0000"; borderAttempts="#0000FF";
var wordsGame="Q2FyZGluYWxOdW1iZXJz"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var words=["T05F","VFdP","VEhSRUU","Rk9VUg","RklWRQ","U0lY","U0VWRU4","RUlHSFQ","TklORQ","VEVO"];imaW=["0_Adobe_Post_20190716_193515.png","0_Adobe_Post_20190716_193403.png","0_Adobe_Post_20190716_193724.png","0_Adobe_Post_20190716_193950.png","0_Adobe_Post_20190716_194152.png","0_Adobe_Post_20190716_194354.png","0_Adobe_Post_20190716_194525.png","0_Adobe_Post_20190716_194958.png","0_Adobe_Post_20190716_195056.png","0_Adobe_Post_20190716_195229.png"];queW=["","","","","","","","","",""];
var auW=["","","","","","","","","",""];
var fillLetter="ABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚÜ "; wordsG=[]; indexG=0; actMaxWidth=980; indexWord=0; totalWord=0;
var imageW=[];questionW=[];audioW=[];profG=0; dirMedia="CardinalNumbers_resources/media/"; textBNext="";
