//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=0;
var successes=0; successesMax=8; attempts=0; attemptsMax=8;
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
var colorBack="#FFFDFD"; colorButton="#00FFFF"; colorText="#000000"; colorSele="#0080C0";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=0; scoMessage=""; scoPtos=10;
var fMenssage="'Arial Black', Gadget, sans-serif";
var fActi="'Arial Black', Gadget, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=2; messageOk="Felicitaciones"; messageTime="Se ha acabado el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="Vuelve a intentarlo"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#0080C0"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="QWRqZWN0aXZlcw"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","","",""];
var iL=["<div  align='center'><img src='Adjectives_resources/media/Angry.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Bad.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Beautiful.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Delicious.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Good.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Happy.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Hungry.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Sad.png'></div>"];
var order=["","","","","","","",""]; orderR=["","","","","","","",""];indexR=0; indexL=0;
var cR=["","","","","","","",""]; ansRL=["NA","Ng","MA","NQ","Mg","MQ","Mw","Nw"];
var iR=["<div  align='center'><img src='Adjectives_resources/media/Beautiful1.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Happy1.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Good1.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Hungry1.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Angry1.png'></div>","<div  align='center'><img src='Adjectives_resources/media/delicious1.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Bad1.png'></div>","<div  align='center'><img src='Adjectives_resources/media/Sad1.png'></div>"];
var auR=[3,6,5,7,1,4,2,8];
