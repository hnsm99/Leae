//Creado con Ardora - www.webardora.net
//bajo licencia Attribution-NonCommercial-NoDerivatives 4.0 International (CC BY-NC-ND 4.0)
//para otros usos contacte con el autor
var timeAct=200;timeIni=200; timeBon=1;
var successes=0; successesMax=8; attempts=0; attemptsMax=8;
var score=0;scoreMax=1;scoreInc=1; scoreDec=0;
var typeGame=0;
var tiTime=true;
var tiTimeType=1;
var tiButtonTime=true;
var textButtonTime="Comenzar";
var tiSuccesses=true;
var tiAttempts=true;
var tiScore=false;
var startTime;
var colorBack="#FFFDFD"; colorButton="#00FFFF"; colorText="#000000"; colorSele="#0080FF";
var goURLNext=false; goURLRepeat=false;tiAval=false;
var scoOk=0; scoWrong=0; scoOkDo=0; scoWrongDo=1; scoMessage=""; scoPtos=10;
var fMenssage="'Arial Black', Gadget, sans-serif";
var fActi="'Arial Black', Gadget, sans-serif";
var fEnun="Verdana, Geneva, sans-serif";
var timeOnMessage=3; messageOk="!Felicitaciones!"; messageTime="Se ha acabado el tiempo:("; messageError=""; messageErrorG=""; messageAttempts="Perdiste:("; isShowMessage=false;
var urlOk=""; urlTime=""; urlError=""; urlAttempts="";
var goURLOk="_blank"; goURLTime="_blank"; goURLAttempts="_blank"; goURLError="_blank"; 
borderOk="#408080"; borderTime="#408080";borderError=""; borderAttempts="#408080";
var wordsGame="VGhlQWxwaGFiZXQ"; wordsStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
function giveZindex(typeElement){var valueZindex=0; capas=document.getElementsByTagName(typeElement);
for (i=0;i<capas.length;i++){if (parseInt($(capas[i]).css("z-index"),10)>valueZindex){valueZindex=parseInt($(capas[i]).css("z-index"),10);}}return valueZindex;}
var wo1=["A","B","C","D","E","F","G","H"];im1=["Adobe_Post_20190705_153643.png","Adobe_Post_20190705_153818.png","Adobe_Post_20190705_154019.png","Adobe_Post_20190705_154247.png","Adobe_Post_20190705_154440.png","Adobe_Post_20190705_154844.png","Adobe_Post_20190705_155140.png","Adobe_Post_20190705_180440.png"];mp31=["","","","","","","",""];
var wo2=["BI","EF","EICH","YI","SI","EI","DI","I"];im2=["Adobe_Post_20190704_193734.png","Adobe_Post_20190704_195739.png","Adobe_Post_20190704_201208.png","Adobe_Post_20190704_200616.png","Adobe_Post_20190705_175151.png","Adobe_Post_20190704_193234.png","Adobe_Post_20190704_194745.png","Adobe_Post_20190704_195259.png"];mp32=["","","","","","","",""];
var cols=4; rows=4; items=8; itp=["MTA","MTE","MTI","MTM","MTQ","MTU","MTY","MTc"]; pos=["MjU","MjA","MjQ","MjY","Mjc","MjE","MjM","MjI"];
var boardGame=[["","","",""],["","","",""],["","","",""],["","","",""]]; dirMedia="TheAlphabet_resources/media/"
var open1R=""; open1C=""; open2R=""; open2C=""; ansDo=0;
var a;
