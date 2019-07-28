var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=5; attempts=0; attemptsMax=5;
var score=0; scoreMax=5; scoreInc=1; scoreDec=1
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
var wordsGame="UGVyc29uYWxJbmZvcm1hdGlvbg"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var words=["V2hhdCBpcyB5b3VyIG5hbWU/","SG93IG9sZCBhcmUgeW91Pw","V2hlcmUgZG8geW91IGxpdmU/","V2hvIGRvIHlvdSBsaXZlIHdpdGg/","V2hlcmUgd2VyZSB5b3UgYm9ybj8"];imaW=["","","","",""];queW=["¿Cuál es tu nombre?","¿Cuántos años tienes?","¿En dónde vives?","¿Con quién vives?","¿En donde naciste?"]; c=[18,16,18,21,20];
var auW=["","","","",""];
var actMaxWidth="600"; actMaxHeight="400";indexG=0;profG=0;dirMedia="PersonalInformation_resources/media/"; textBNext="Siguiente";
var wordsG=[];imageW=[];questionW=[];audioW=[];cG=[];
