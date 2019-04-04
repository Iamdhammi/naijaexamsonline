function Question (qname,
    type,
    qstring,
    response,
    comment,
    corrects,
    explan,
    score,
    ifcorrect,ifwrong,ifnull,
    img)
    {this.qname=qname;
    this.type=type;
    this.qstring=qstring;
    this.response=response;
    this.comment=comment;
    this.corrects=corrects;
    this.explan=explan;
    this.score=score;
    this.ifcorrect=ifcorrect;
    this.ifwrong=ifwrong;
    this.ifnull=ifnull;
    this.img=img;
    }
    
    var zin=1,top=0, mycount=0, waitTime=1200, qright=0, mycomment;
    var global=new Array(3);
    var recent, recent2, recdone=false, opera7, opera=CheckOpera56();
    P7_OpResizeFix();
    function P7_OpResizeFix(a) { //v1.1 by PVII
    if(!window.opera){return;}if(!document.p7oprX){
     document.p7oprY=window.innerWidth;document.p7oprX=window.innerHeight;
     document.onmousemove=P7_OpResizeFix;
     }else{if(document.p7oprX){
      var k=document.p7oprX-window.innerHeight;
      var j=document.p7oprY - window.innerWidth;
      if(k>1 || j>1 || k<-1 || j<-1){
      document.p7oprY=window.innerWidth;document.p7oprX=window.innerHeight;
      do_reposition();}}}
    }
    function cachewrite(s,idx){global[idx]+=s;}
    function CheckOpera56()
    {
    var version;
    if (navigator.userAgent.toLowerCase().indexOf('opera') == -1) return false;
    version=parseInt(navigator.appVersion.toLowerCase());
    if (version>6) {opera7=true; return false;}
    if (version<5) return false;
    return true;
    }
    resp=""
    corr="up with"
    comm=valu=""
    quest001 = new Question(
    "Question 1",
    3,
    "My salary isn't keeping ..... inflation.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="have taken"
    comm=valu=""
    quest002 = new Question(
    "Question 2",
    3,
    "The strike should never ...... place. (to take)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="of"
    comm=valu=""
    quest003 = new Question(
    "Question 3",
    3,
    "She is very fond ..... music.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="going"
    comm=valu=""
    quest004 = new Question(
    "Question 4",
    3,
    "I feel like ..... to the swimming pool. (to go)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="is fixed"
    comm=valu=""
    quest005 = new Question(
    "Question 5",
    3,
    "See to it that the car ..... for tomorrow. (to fix)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="will have cost"
    comm=valu=""
    quest006 = new Question(
    "Question 6",
    3,
    "If the war goes on, it soon ..... the taxpayer an enormous sum. (to cost)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="being"
    comm=valu=""
    quest007 = new Question(
    "Question 7",
    3,
    "He can't stand ..... interrupted. (to be)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="giving"
    comm=valu=""
    quest008 = new Question(
    "Question 8",
    3,
    "Do you mind ..... me a lift? (to give)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="had come"
    comm=valu=""
    quest009 = new Question(
    "Question 9",
    3,
    "If he ..... back earlier, the burglar wouldn't have broken in. (to come)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="about"
    comm=valu=""
    quest010 = new Question(
    "Question 10",
    3,
    "The customer enquired ..... our product range",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="was awarded"
    comm=valu=""
    quest011 = new Question(
    "Question 11",
    3,
    "He ..... the Nobel prize for his ground-breaking work. (to award)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to invest"
    comm=valu=""
    quest012 = new Question(
    "Question 12",
    3,
    "I advise you ..... in this company. (to invest)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="has put"
    comm=valu=""
    quest013 = new Question(
    "Question 13",
    3,
    "Recently he ..... on a lot of weight. (to put)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="up"
    comm=valu=""
    quest014 = new Question(
    "Question 14",
    3,
    "The train was held ..... by fog.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="for"
    comm=valu=""
    quest015 = new Question(
    "Question 15",
    3,
    "They have been married ..... five years.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="in winning"
    comm=valu=""
    quest016 = new Question(
    "Question 16",
    3,
    "We succeeded ..... the deal. (to win)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="had"
    comm=valu=""
    quest017 = new Question(
    "Question 17",
    3,
    "I wish I ..... more free time! (to have)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="doing"
    comm=valu=""
    quest018 = new Question(
    "Question 18",
    3,
    "It's pointless ..... that. (to do)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="checking"
    comm=valu=""
    quest019 = new Question(
    "Question 19",
    3,
    "I've nearly finished ..... the accounts. (to check)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="check"
    comm=valu=""
    quest020 = new Question(
    "Question 20",
    3,
    "You had better ..... these figures. (to check)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="might"
    comm=valu=""
    quest021 = new Question(
    "Question 21",
    3,
    "Try as I ..... , I couldn't open the locked door.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="left"
    comm=valu=""
    quest022 = new Question(
    "Question 22",
    3,
    "It's high time we ..... (to leave)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="help"
    comm=valu=""
    quest023 = new Question(
    "Question 23",
    3,
    "Let me ..... you. (to help)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="on"
    comm=valu=""
    quest024 = new Question(
    "Question 24",
    3,
    "He's keen ..... gardening.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="do"
    comm=valu=""
    quest025 = new Question(
    "Question 25",
    3,
    "I used to smoke but I no longer .....",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="Were"
    comm=valu=""
    quest026 = new Question(
    "Question 26",
    3,
    "..... this to happen it would be a disaster for the firm.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="has been learning"
    comm=valu=""
    quest027 = new Question(
    "Question 27",
    3,
    "She ..... Japanese for two years. (to learn)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to improve"
    comm=valu=""
    quest028 = new Question(
    "Question 28",
    3,
    "She needs ..... her Spanish. (to improve)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to win"
    comm=valu=""
    quest029 = new Question(
    "Question 29",
    3,
    "We failed ..... the contract. (to win)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="about"
    comm=valu=""
    quest030 = new Question(
    "Question 30",
    3,
    "She complained ..... the bad service in the restaurant.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="ringing"
    comm=valu=""
    quest031 = new Question(
    "Question 31",
    3,
    "The phone keeps on ..... (to ring)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="going"
    comm=valu=""
    quest032 = new Question(
    "Question 32",
    3,
    "How about ..... to the cinema this evening? (to go)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="had followed"
    comm=valu=""
    quest033 = new Question(
    "Question 33",
    3,
    "If only I ..... his advice this wouldn't have happened! (to follow)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="happens"
    comm=valu=""
    quest034 = new Question(
    "Question 34",
    3,
    "Please ensure that this never ..... again. (to happen)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to be desired"
    comm=valu=""
    quest035 = new Question(
    "Question 35",
    3,
    "Safety on the roads in this country leaves a lot ..... (to desire)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="struck"
    comm=valu=""
    quest036 = new Question(
    "Question 36",
    3,
    "The trade union members ..... for two weeks last year. (to strike)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="knew"
    comm=valu=""
    quest037 = new Question(
    "Question 37",
    3,
    "It's high time you ..... that! (to know)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="came"
    comm=valu=""
    quest038 = new Question(
    "Question 38",
    3,
    "I would rather she ..... next Tuesday. (to come)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to"
    comm=valu=""
    quest039 = new Question(
    "Question 39",
    3,
    "Let me treat you ..... a drink",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="for"
    comm=valu=""
    quest040 = new Question(
    "Question 40",
    3,
    "Who are you waiting ..... ?",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="from"
    comm=valu=""
    quest041 = new Question(
    "Question 41",
    3,
    "He borrowed a book ..... the library and read it at home.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="Being"
    comm=valu=""
    quest042 = new Question(
    "Question 42",
    3,
    "..... a doctor is a very demanding but fulfilling career. (to be)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="sought"
    comm=valu=""
    quest043 = new Question(
    "Question 43",
    3,
    "Graduates from this university are very ..... for. (to seek)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to seeing"
    comm=valu=""
    quest044 = new Question(
    "Question 44",
    3,
    "I look forward ..... you again. (to see)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="buying"
    comm=valu=""
    quest045 = new Question(
    "Question 45",
    3,
    "I advise you against ..... this share. (to buy)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="built"
    comm=valu=""
    quest046 = new Question(
    "Question 46",
    3,
    "I'm having a house ..... (to build)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="over"
    comm=valu=""
    quest047 = new Question(
    "Question 47",
    3,
    "The plane is .....due.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="do"
    comm=valu=""
    quest048 = new Question(
    "Question 48",
    3,
    "You needn't ..... it immediately. (to do)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to move"
    comm=valu=""
    quest049 = new Question(
    "Question 49",
    3,
    "He is about ..... house. (to move)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="up"
    comm=valu=""
    quest050 = new Question(
    "Question 50",
    3,
    "Work piled ..... during the strike.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="spend"
    comm=valu=""
    quest051 = new Question(
    "Question 51",
    3,
    "I'd rather ..... my holidays abroad this year. (to spend)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="cleaning"
    comm=valu=""
    quest052 = new Question(
    "Question 52",
    3,
    "This car wants ..... (to clean)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="Should"
    comm=valu=""
    quest053 = new Question(
    "Question 53",
    3,
    "..... this happen, it would be a shame.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="lose"
    comm=valu=""
    quest054 = new Question(
    "Question 54",
    3,
    "These quality defects made us ..... the contract. (to lose)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to"
    comm=valu=""
    quest055 = new Question(
    "Question 55",
    3,
    "What led ..... the accident?",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="smoking"
    comm=valu=""
    quest056 = new Question(
    "Question 56",
    3,
    "She gave up ..... last year. (to smoke)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="stolen"
    comm=valu=""
    quest057 = new Question(
    "Question 57",
    3,
    "He's just had his car ..... (to steal)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="on"
    comm=valu=""
    quest058 = new Question(
    "Question 58",
    3,
    "It wasn't an accident. He did it ..... purpose.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="Whose"
    comm=valu=""
    quest059 = new Question(
    "Question 59",
    3,
    "..... is this pen? It's mine.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="loaded"
    comm=valu=""
    quest060 = new Question(
    "Question 60",
    3,
    "Get the lorry ..... ! (to load)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="repainted"
    comm=valu=""
    quest061 = new Question(
    "Question 61",
    3,
    "I'm having my flat ..... (to repaint)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="up"
    comm=valu=""
    quest062 = new Question(
    "Question 62",
    3,
    "It's hard to bring ..... children nowadays.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="by"
    comm=valu=""
    quest063 = new Question(
    "Question 63",
    3,
    "The Russians abided ..... the treaty.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="for arriving"
    comm=valu=""
    quest064 = new Question(
    "Question 64",
    3,
    "She apologised ..... late. (to arrive)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="than"
    comm=valu=""
    quest065 = new Question(
    "Question 65",
    3,
    "No sooner had he arrived ..... the phone rang.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="for"
    comm=valu=""
    quest066 = new Question(
    "Question 66",
    3,
    "Who was responsible ..... the accident?",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="of"
    comm=valu=""
    quest067 = new Question(
    "Question 67",
    3,
    "This town reminds me ..... my home town.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="furthest"
    comm=valu=""
    quest068 = new Question(
    "Question 68",
    3,
    "The ..... I've ever travelled is China. (far)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="lost"
    comm=valu=""
    quest069 = new Question(
    "Question 69",
    3,
    "She almost ..... her temper. (to lose)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="came"
    comm=valu=""
    quest070 = new Question(
    "Question 70",
    3,
    "I would sooner he ..... on Friday rather than Wednesday. (to come)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="better"
    comm=valu=""
    quest071 = new Question(
    "Question 71",
    3,
    "The sooner you pass your driving test the .....",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="resigning"
    comm=valu=""
    quest072 = new Question(
    "Question 72",
    3,
    "After missing promotion, I feel like ..... (to resign)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to lose"
    comm=valu=""
    quest073 = new Question(
    "Question 73",
    3,
    "The high euro exchange rate caused us ..... this contract. (to lose)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="told"
    comm=valu=""
    quest074 = new Question(
    "Question 74",
    3,
    "They were ..... that the plane would be late. (to tell)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="understood"
    comm=valu=""
    quest075 = new Question(
    "Question 75",
    3,
    "She makes herself ..... in English. (to understand)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="up"
    comm=valu=""
    quest076 = new Question(
    "Question 76",
    3,
    "He hung ..... the phone.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="have brought"
    comm=valu=""
    quest077 = new Question(
    "Question 77",
    7,
    "I should ..... you this letter yesterday. (to bring)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="fought"
    comm=valu=""
    quest078 = new Question(
    "Question 78",
    7,
    "During the war he ..... with the resistance. (to fight)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="improving"
    comm=valu=""
    quest079 = new Question(
    "Question 79",
    7,
    "It's always worthwhile ..... one's English. (to improve)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="doesn't"
    comm=valu=""
    quest080 = new Question(
    "Question 80",
    7,
    "The lawn needs mowing, ..... it?",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="up with"
    comm=valu=""
    quest081 = new Question(
    "Question 81",
    7,
    "The tank is almost empty. I'll have to fill ..... petrol soon.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="doing"
    comm=valu=""
    quest082 = new Question(
    "Question 82",
    7,
    "It's useless ..... that. (to do)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to typing"
    comm=valu=""
    quest083 = new Question(
    "Question 83",
    7,
    "It's hard to get used ..... on a foreign keyboard. (to type)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="seeing"
    comm=valu=""
    quest084 = new Question(
    "Question 84",
    7,
    "I avoid ..... my boss when he's in a bad mood. (to see)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="when"
    comm=valu=""
    quest085 = new Question(
    "Question 85",
    7,
    "Hardly had he arrived ..... the phone rang.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="whom"
    comm=valu=""
    quest086 = new Question(
    "Question 86",
    7,
    "To ..... does this house belong? It belongs to Mr Jones.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to occur"
    comm=valu=""
    quest087 = new Question(
    "Question 87",
    7,
    "An accident is liable ..... (to occur)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="finish"
    comm=valu=""
    quest088 = new Question(
    "Question 88",
    7,
    "We may as well ..... the bottle of champagne. (to finish)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="come"
    comm=valu=""
    quest089 = new Question(
    "Question 89",
    3,
    "You may go out providing you ..... back early. (to come)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="manufacturing"
    comm=valu=""
    quest090 = new Question(
    "Question 90",
    3,
    "We stopped ..... that car last year. (to manufacture)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="making"
    comm=valu=""
    quest091 = new Question(
    "Question 91",
    7,
    "We discontinued ..... that five years ago. (to make)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="since"
    comm=valu=""
    quest092 = new Question(
    "Question 92",
    7,
    "It's been a long time ..... he last went to the cinema.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="about"
    comm=valu=""
    quest093 = new Question(
    "Question 93",
    7,
    "What brought ..... the accident?",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="has been"
    comm=valu=""
    quest094 = new Question(
    "Question 94",
    7,
    "She ..... depressed ever since her husband died. (to be)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to"
    comm=valu=""
    quest095 = new Question(
    "Question 95",
    7,
    "Are you being attended .....?",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="repaired"
    comm=valu=""
    quest096 = new Question(
    "Question 96",
    7,
    "Have the truck ..... (to repair)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to help"
    comm=valu=""
    quest097 = new Question(
    "Question 97",
    7,
    "Please allow me ..... you. (to help)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="to"
    comm=valu=""
    quest098 = new Question(
    "Question 98",
    7,
    "He enjoys listening ..... classical music.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="up"
    comm=valu=""
    quest099 = new Question(
    "Question 99",
    7,
    "He picked ..... the phone.",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    resp=""
    corr="go"
    comm=valu=""
    quest100 = new Question(
    "Question 100",
    7,
    "A lot of people ..... there every year on holiday. (to go)",
    resp,
    comm,
    corr,
    "",
    valu,
    1,
    0,
    0,
    "");
    
    questions = new Array (
    quest001,quest002,quest003,quest004,quest005,quest006,quest007,quest008,quest009,quest010,quest011,quest012,quest013,quest014,quest015,quest016,quest017,quest018,quest019,quest020,quest021,quest022,quest023,quest024,quest025,quest026,quest027,quest028,quest029,quest030,quest031,quest032,quest033,quest034,quest035,quest036,quest037,quest038,quest039,quest040,quest041,quest042,quest043,quest044,quest045,quest046,quest047,quest048,quest049,quest050,quest051,quest052,quest053,quest054,quest055,quest056,quest057,quest058,quest059,quest060,quest061,quest062,quest063,quest064,quest065,quest066,quest067,quest068,quest069,quest070,quest071,quest072,quest073,quest074,quest075,quest076,quest077,quest078,quest079,quest080,quest081,quest082,quest083,quest084,quest085,quest086,quest087,quest088,quest089,quest090,quest091,quest092,quest093,quest094,quest095,quest096,quest097,quest098,quest099,quest100)
    
    function doQuestion(quest)
    {
    var numdo;
    var numord=eval(quest+1);
    var i=-1, ii, type, myname, gadget;
    type=questions[quest].type;
    numdo=type>=3?1:questions[quest].response.length;
    
    if (opera && top==0) top=document.getElementById("wq_user").style.top;document.write("\n")
    document.write("       <div id=\"q")
    document.write(numord)
    document.write("\" ")
    document.write(opera?" style=\"position: absolute; visibility:hidden; top:"+top+"; z-index:"+(++zin)+";\"":" style=\"display:none\"");
    document.write(">\n")
    document.write("       ")
    if (questions[quest].img!="") {
    document.write("\n")
    document.write("          <p><img border=\"0\" src=\"")
    document.write(questions[quest].img)
    document.write("\"></p>\n")
    document.write("       ")
    }
    document.write("\n")
    document.write("       <p><small><font face=\"Verdana,Arial\">")
    document.write(numord)
    document.write(". ")
    document.writeln(questions[quest].qstring)
    document.write("</font></small></p>\n")
    document.write("       ")
    for (i=0; i<numdo; i++) {
    myname=questions[quest].qname;
    gadget="radio";
    if (type>=3) gadget="text";
    else if (type==1) {
    myname+="_"+(i<9?"0":"")+(i+1);
    gadget="checkbox";}
    document.write("\n")
    document.write("          &nbsp;")
    document.write(type==7?"<textarea name=\""+myname+"\" rows=5 cols=30 class=\"input\">":" <input type="+gadget+" name=\""+myname);
    if (type<3) document.write("\" value=\""+i+"\">\n")
    else document.write(type==7?"</textarea>":"\" class=\"input\" value=\"\">\n")
    document.write(" <small><font face=\"Verdana,Arial\">")
    if (type<3) document.write(questions[quest].response[i]);
    document.write("</font></small><br>\n")
    document.write("       ")
    }
    document.write("\n")
    document.write("       </div>\n")
    document.write("       <div id=\"q")
    document.write(numord)
    document.write("a\" ")
    document.write(opera?" style=\"position: absolute; visibility:hidden; top:"+top+"; z-index:"+(++zin)+";\"":" style=\"display:none\"");
    document.write(">\n")
    document.write("       <p>\n")
    document.write("          ")
    if (quest>0) {
    document.write("\n")
    document.write("             <input type=\"button\" value=\"Back\" name=\"ButtonPreviuos\" ")
    document.write(" onClick=\"myshow("+(quest)+",0)\"")
    document.write(">\n")
    document.write("          ")
    }
    document.write("\n")
    document.write("          ")
    if (quest<questions.length) {
    document.write("\n")
    document.write("             <input type=\"button\" value=\"Next\" name=\"ButtonNext\" ")
    document.write(" onClick=\"myshow("+quest+",2)\"")
    document.write(">\n")
    document.write("          ")
    }
    document.write("\n")
    document.write("          ")
    document.write("\n")
    document.write("       </p>\n")
    document.write("       </div>\n")
    document.write("    ")
    }
    function doTest() {
    var count, i, newq;
    questions.sort(myrandom);
    newq=questions.slice(0,10);questions=newq;
    for (i=0; i<questions.length; i++) {
    questions[i].qname="Question "+(i+1);}
    count=questions.length;
    for (i=0; i<count; i++) doQuestion(i);
    }
    function fill(s,l){
    s=s+""
    for (y=1;y<=l;y++)
    if (s.length>=l) break; else s="0"+s;
    return s
    }
    function CheckQName(wapf,ii,i,multi,selection){
    var len;
    if (!multi) return(wapf.elements[ii].name==questions[i].qname);
    len=questions[i].qname.length;
    if (wapf.elements[ii].name.substring(0,len)!=questions[i].qname) return false;
    if (wapf.elements[ii].name.substring(len,len+1)!="_") return false;
    if (eval(wapf.elements[ii].name.substring(len+1,len+3))==(selection+1)) return true;
    return false;
    }
    function errore(uno,due,tre)
    {
    if (!errori) global[1]="<H3>You have made the following errors</H3>";
    ++errori;
    cachewrite("<p><b>"+uno+"</b><br>"+due+"<br>"+mycomment+tre+"</p>",2);
    mycomment="";
    }
    function correct(wapf)
    {
    var i, ii, t, re, tmp, selection, multi, multipage=1, type, isnull, iswrong, iscorrect, evaluation=0, total=0, udat;
    errori=waitTime=0;
    udat=new Array();
    for (i=0, ii=0; i<wapf.elements.length; i++)
    {tmp=wapf.elements[i];
    if (tmp.name.substring(0,13)=="Quiz.UserData"){
    t=tmp.name.substring(14,tmp.name.length);
    re=new RegExp("_", "g");
    t=t.replace(re," ");
    udat[ii++]=t+": <i>"+tmp.value+"</i><br>";
    if (opera) tmp.value="";}}
    global[0]=global[2]="";
    global[1]="<h3>Congratulations, you haven't made any errors</h3>";
    cachewrite("<html><head><title>Results</title><BASE target='_blank'></head><body bgcolor='#FFFFFF'><font face='Verdana, Arial'><table border=0 cellpadding=0 cellspacing=0 width='100%' bgcolor='#C0C0C0'><tr><td width='100%'><font face='Verdana, Arial' size=5 color='#FFFFFF'><b>&nbsp;Results</b></font></td></tr></table>",0)
    now= new Date()
    cachewrite("<small><p>"+fill((now.getMonth()+1),2)+"/"+fill(now.getDate(),2)+"/"+now.getYear()+"&nbsp;&nbsp;"+fill(now.getHours(),2)+":"+fill(now.getMinutes(),2)+"</p>",0)
    cachewrite("<b>NaijaExamsOnline</b><br><br>\n",0);
    if (udat.length>0) {
    cachewrite("<b>Information</b><br>\n",0);
    for (i=0; i<udat.length; i++) cachewrite(udat[i],0);}
    if (opera7 && multipage) {
    for (i=0; i<questions.length; i++) {
    id=document.getElementById("q"+(i+1));
    id2=document.getElementById("q"+(i+1)+"a");
    id.style.display=id2.style.display="block";}
    document.getElementById('wq_final').style.display='block';
    }
    
    for (i=0; i<questions.length; i++) {
    if (opera && multipage) {
    id=document.getElementById("q"+(i+1));
    id2=document.getElementById("q"+(i+1)+"a");
    id.style.visibility=id2.style.visibility="visible";}
    type=questions[i].type;
    if (type==1) multi=1;
    else multi=0;
    isnull=true;
    iscorrect=false;iswrong=false;
    selection=0;
    evaluation=0;
    mycomment="";
    for (ii=0; ii<wapf.elements.length; ii++) {
    if (CheckQName(wapf,ii,i,multi,selection)) {
    if (type>=3 && wapf.elements[ii].value!="") {
    isnull=false;
    if (wapf.elements[ii].value.toLowerCase()==questions[i].corrects.toLowerCase()) iscorrect=true;
    else iswrong=true;
    ++selection;}
    else if (wapf.elements[ii].checked) {
    if (questions[i].score!="") evaluation+=questions[i].score[selection];
    if (isnull) isnull=false;
    if (questions[i].corrects[selection]=="1") iscorrect=(iswrong==false)?true:false;
    else {
    iswrong=true;
    if (multi && questions[i].corrects!='') errore(questions[i].qname,"The checkbox  <i>"+questions[i].response[selection]+"</i>  shouldn't have been selected.",questions[i].explan)
    }
    if (questions[i].comment!="" && questions[i].comment[selection]!="")
    mycomment+=((iscorrect || questions[i].corrects=='')?"<b>"+questions[i].qname+"</b><br>":"")+"<small>"+questions[i].comment[selection]+"</small><br>";
    } else {
    if (questions[i].corrects[selection]=="1") {
    iswrong=true;
    if (multi && questions[i].corrects!='') errore(questions[i].qname,"The checkbox  <i>"+questions[i].response[selection]+"</i>  should have been selected.",questions[i].explan);
    }}
    ++selection;
    }}
    if (multi==false && (isnull || iswrong)) {
    var okresp="", z;
    if (type>=3) okresp=questions[i].corrects;
    else {
    for (z=0; z<questions[i].corrects.length; z++) {
    if (questions[i].corrects[z]==1) {
    okresp=questions[i].response[z];
    break;
    }}}
    if (okresp!="") errore(questions[i].qname,"The right answer was <i>"+okresp+".</i>",questions[i].explan);
    }
    if (mycomment!="") cachewrite(mycomment,2);
    if (questions[i].corrects!="") ++qright;
    if (isnull) evaluation+=questions[i].ifnull;
    else if (iswrong) evaluation+=questions[i].ifwrong;
    else if (iscorrect) evaluation+=questions[i].ifcorrect;
    total+=evaluation;}
    if (qright==0) global[1]="<br>";
    if (errori) cachewrite("<br><b>You have made "+errori+" "+(errori==1?"error":"errors")+".</b>",2);
    
    cachewrite("</small><hr noshade><center><form>",2)
    printest="print()";
    cachewrite("<input type='button' value='Print...' onClick='"+printest+"'>&nbsp;&nbsp;&nbsp;&nbsp;",2)
    cachewrite("<input type='button' value='Back' onClick='history.back()'></form></center>",2)
    cachewrite(aknw,2)
    winr=window
    for (i=0; i<3; i++) winr.document.write(global[i]);winr.document.close()
    if ((opera || opera7) && multipage) {
    document.forms[0].elements[0].value='Print...';
    document.forms[0].elements[1].value='Back';
    for (i=0; i<questions.length; i++) {
    id=document.getElementById("q"+(i+1));
    id2=document.getElementById("q"+(i+1)+"a");
    opera?id.style.visibility=id2.style.visibility="hidden":id.style.display=id2.style.display="none";}}
    }
    aknw="<br><p align='center'><small><small>Created and managed with <a title='Click here to visit WebQuiz site' href='http://www.naijaexamsonline.com.'>NaijaExamsOnline</a></small></small></p>"
    function myrandom(a,b)
    {
    var rc;
    do {rc=Math.floor(Math.random()*3)-1;} while (rc==2);
    return(rc);
    }
    function update_time(t) {
    self.status=t;}
    function stms(s){
    if (Math.abs(tmMx)>=3600){
    h=Math.floor(s/3600);m=Math.floor((s%3600)/60);s=((s%3600)%60);return fill(h,2)+':'+fill(m,2)+':'+fill(s,2);
    }else{m=Math.floor(s/60);s=s%60;return fill(m,2)+':'+fill(s,2);}}
    function shtm(t){
    tmVl=t+1;update_time(stms(Math.abs(t)))
    if (waitTime==0) return;
    tmId = setTimeout('shtm(tmVl)',1000)
    if (t==((tmMx>0)? tmMx : 0)){
    clearTimeout(tmId)
    alert('Time is over, correcting questionnaire now.')
    if (mycount<questions.length) for (i=mycount; i<=questions.length; i++) myshow(i,0);
    correct(document.WapForm)}}
    function checkTime(){
    tmMx=-waitTime;
    if (tmMx!=0){
    alert('Time to complete your questionnaire is: '+stms(Math.abs(tmMx))+'\n\nPlease check time count.');
    shtm((tmMx>0) ? 0 : tmMx)}}
    function checkBrowser()
    {
    var browser=new Array('microsoft internet explorer','netscape','opera');
    var version=new Array(5,5,6);
    for (i=0; i<3; i++) {
    var ref, pos=navigator.appVersion.lastIndexOf('MSIE ');
    if (pos == -1) ref=parseInt(navigator.appVersion);
    else {pos+=5;ref=eval(navigator.appVersion.charAt(pos));}
    if (navigator.appName.toLowerCase()==browser[i] && ref>=version[i])
    break;}
    if (i==3) {
    alert('The browser'+navigator.appName+' '+navigator.appVersion+' is not supported');
    return false;}
    return true;}
    function myshow(count,dif)
    {
    var id, id2, wq_user, id_str, id2_str;
    if (recdone==false && checkBrowser()==false) return;
    if (recdone==false && waitTime!=0) checkTime();
    if (dif!=-1) count+=dif;
    mycount=count;
    if (count==questions.length+1) {id_str="wq_final";id2_str="wq_final2"}
    else {id_str="q"+count;id2_str="q"+count+"a";}
    if (document.getElementById){
    id=document.getElementById(id_str);
    id2=document.getElementById(id2_str);
    wq_user=document.getElementById("wq_user");
    if (count==questions.length+1 && opera) {id2.style.top=id.style.top+id.style.height;}
    } else if (document.all) {
    id=document.all[id_str];
    id2=document.all[id2_str];
    wq_user=document.all["wq_user"];
    } else {
    id=eval(id_str);
    id2=eval(id2_str);
    wq_user=eval("wq_user");}
    if (recdone==false) {
    recent=wq_user;
    recent2="";
    recdone=true;}
    opera?recent.style.visibility="hidden":recent.style.display="none";
    if (recent2!="") opera?recent2.style.visibility="hidden":recent2.style.display="none";
    opera?id.style.visibility="visible":id.style.display="block";
    opera?id2.style.visibility="visible":id2.style.display="block";
    if (count<questions.length+1 && questions[count-1].type>2) document.WapForm.elements[questions[count-1].qname].focus();
    recent=id;recent2=id2;}
    function do_reposition(){
    var id, id2, wq_user, wq_final, wq_footer, i, y, h, max=0;
    wq_user=document.getElementById("wq_user");
    if (mycount>0) wq_user.style.visibility="hidden";
    for (i=1; i<=questions.length; i++) {
    id=document.getElementById("q"+i);
    id2=document.getElementById("q"+i+"a");
    id2.style.top=id.style.top+id.style.height;
    h=id2.style.height;y=id2.style.top;
    if (mycount==i) id.style.visibility=id2.style.visibility="visible";
    if (y+h>max) max=y+h;}
    wq_final=document.getElementById("wq_final");
    wq_footer=document.getElementById("wq_footer");
    if (wq_final.style.visibility!="hidden") {
    wq_final.style.top=max;max+=wq_final.style.height;}
    if (wq_footer.style.visibility!="hidden") {
    wq_footer.style.top=max;}
    }