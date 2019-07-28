//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=360; timeIni=360; timeBon=1;
var successes=0; successesMax=8; attempts=0; attemptsMax=8;
var score=0; scoreMax=8; scoreInc=1; scoreDec=1
var typeGame=0;
var tiTime=true;
var tiTimeType=2;
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
var timeOnMessage=2; messageOk="Felicitaciones"; messageTime="Se ha acabado el tiempo"; messageError="Error"; messageErrorG="Error"; messageAttempts="Vuelvve a intentarlo"; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#0080C0"; borderTime="#0080C0";borderError="#0080C0"; borderAttempts="#0080C0";
var wordsGame="RmFtaWx5TWVtYmVycw"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var cL=["","","","","","","",""];
var iL=["<div  align='center'><img src='FamilyMembers_resources/media/Abuelos.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Brother.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Esposa.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Father.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Hijo.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Husband.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Mother.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Sister.jpg'></div>"];
var order=["","","","","","","",""]; orderR=["","","","","","","",""];indexR=0; indexL=0;
var cR=["","","","","","","",""]; ansRL=["Ng","NA","Mw","Mg","MA","NQ","Nw","MQ"];
var iR=["<div  align='center'><img src='FamilyMembers_resources/media/Hijo1.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Sister1.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Father1.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Esposa1.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Brother1.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Husband1.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Abuelos1.jpg'></div>","<div  align='center'><img src='FamilyMembers_resources/media/Mother1.jpg'></div>"];
var auR=[5,8,4,3,2,6,1,7];
