BEGIN TRANSACTION;
CREATE TABLE transcripts ( 
  text_id integer primary key autoincrement,
  filename
);
DELETE FROM sqlite_sequence;
INSERT INTO "sqlite_sequence" VALUES('lines',68);
CREATE TABLE lines ( 
  line_id integer primary key autoincrement,
  start_time,
  stop_time,
  line
);
INSERT INTO "lines" VALUES(3,'86.5083999633789','91.5083999633789','qa?be');
INSERT INTO "lines" VALUES(6,NULL,'17.856666564941406','mrs elsie allen at Ukiah speaking in Southern Pomo');
INSERT INTO "lines" VALUES(7,NULL,'3.909977436065674','This is February fourth, nineteen eighty-two');
INSERT INTO "lines" VALUES(8,NULL,'13.849886894226074','Umhm.');
INSERT INTO "lines" VALUES(9,NULL,'16.559864044189453','Ready any time you are.');
INSERT INTO "lines" VALUES(10,NULL,'26.902767181396484','Oh, uh, and I’m going to talk about soaking acorn.');
INSERT INTO "lines" VALUES(11,NULL,'30.817731857299805','What I see in movie.');
INSERT INTO "lines" VALUES(12,NULL,'37.953651428222656','The way this lady done is she fix a place along the river.');
INSERT INTO "lines" VALUES(13,NULL,'41.066619873046875','You know what language you’re talking?');
INSERT INTO "lines" VALUES(14,NULL,'48.09954833984375','Ha! You know, that’s the way I do!');
INSERT INTO "lines" VALUES(15,NULL,'49.606529235839844','That’s what happen to I!');
INSERT INTO "lines" VALUES(16,NULL,'53.220497131347656','Awww, shucks.');
INSERT INTO "lines" VALUES(17,NULL,'54.827484130859375','Darn it.');
INSERT INTO "lines" VALUES(18,NULL,'59.44743728637695','Let’s see, how I’m gon’ say now.');
INSERT INTO "lines" VALUES(19,NULL,'59.949432373046875','Can I still talk yet, then? Oh...');
INSERT INTO "lines" VALUES(20,NULL,'63.862403869628906','Pretend that I understand everything you say.');
INSERT INTO "lines" VALUES(21,NULL,'70.38834381103516','Oh, yeah. ');
INSERT INTO "lines" VALUES(22,NULL,'70.19893646240234','tʰoʔo hi máyaw');
INSERT INTO "lines" VALUES(23,NULL,'77.42188262939453','now I forgot everything what I was going to say');
INSERT INTO "lines" VALUES(24,NULL,'78.1429672241211','țoʔ:o hi:mayaw waʔ:a si:ț̓o ʒ̆anhodenkhe.');
INSERT INTO "lines" VALUES(25,NULL,'84.86791229248047','ʔahkasa:ma, bidʔahkasa:ma țoʔ:o hi:mayaw.');
INSERT INTO "lines" VALUES(26,NULL,'92.10090637207031','ma: baʔ:aywam:u ʔam:a da: am:a da:k̓lo:ba a: kaʔ be');
INSERT INTO "lines" VALUES(27,NULL,'95.7949447631836','ahți:meț̓ iy:otow mihʒ̆aba win:a');
INSERT INTO "lines" VALUES(28,NULL,'101.24890899658203','pa:la a: kaʔbe ahți:meț̓ mihʒ̆aw and');
INSERT INTO "lines" VALUES(29,NULL,'104.66088104248047','dehtet:eba, mu:tu tik̓ba, ');
INSERT INTO "lines" VALUES(30,NULL,'109.3808364868164','pa:la kaʔbe piʔni mihʒ̆aw.');
INSERT INTO "lines" VALUES(31,NULL,'113.59880065917969','ha:mini:ba ham:un pa:la dahtet:ew.');
INSERT INTO "lines" VALUES(32,NULL,'116.10877227783203','and mu:tuc̓iw.');
INSERT INTO "lines" VALUES(33,NULL,'123.12950134277344','hniba mi:d̦ay, mi:d̦ay huț̓:amba');
INSERT INTO "lines" VALUES(34,NULL,'125.15592193603516','ham:unhlaw ahká dahsos:oba dahtet:ew.');
INSERT INTO "lines" VALUES(35,NULL,'137.70594787597656','ham:ini:ba ʔatisic̆̓ dat̓:it̓:eba kma:yow, pa:la mi:d̦ay huț̓:amba ham:un pa:la ahka dahsos:oba dat̓:et̓:eba');
INSERT INTO "lines" VALUES(36,NULL,'144.53587341308594','k̓oʔdi ʔahsic̆̓ dat̓:el:aba, waʔ:an biʔdubot̓');
INSERT INTO "lines" VALUES(37,NULL,'145.5398712158203','(is acorn)');
INSERT INTO "lines" VALUES(38,NULL,'148.04983520507812','biʔdubot̓wan huț̓:an');
INSERT INTO "lines" VALUES(39,NULL,'151.4628143310547','ha:mini:ba ham:un mu:tu');
INSERT INTO "lines" VALUES(40,NULL,'156.8827667236328','ahkomanhkay biʔdubot̓wan miʒ̆:iden wa, k̓oʔdi tik̓ba wak̓o dit:ik̓ba kma:yow,');
INSERT INTO "lines" VALUES(41,NULL,'160.79673767089844','ka:le ši:ma piʔni:, ');
INSERT INTO "lines" VALUES(42,NULL,'163.96392822265625','ka:letonhke mac̓:aba ham:un ');
INSERT INTO "lines" VALUES(43,NULL,'173.73585510253906','biʔdubot̓wa:ni win:a qiʒ:idu mihʒan ahka hu:ț̓at̓mayak:ewi.');
INSERT INTO "lines" VALUES(44,NULL,'180.6627960205078','ha:mini:ba waʔ:an, ahka hu:ț̓at̓maba maʒ̆:ew.');
INSERT INTO "lines" VALUES(45,NULL,'184.35394287109375','ham:un waʔ:an e: ');
INSERT INTO "lines" VALUES(46,NULL,'190.47789001464844','hit̓:amhuy sihnat̓du, ʒeț̓ siʔt̓aw');
INSERT INTO "lines" VALUES(47,NULL,'193.4299774169922','ʒ̆ah:awa ʔo:yoʔden pa:la ahka hu:ț̓at̓maw');
INSERT INTO "lines" VALUES(48,NULL,'201.51190185546875','ha:mini:ba waʔ:an k̓oʔdi siʔt̓ayi:li ma: ʔahkaʔwan maʒ̆:aw, ');
INSERT INTO "lines" VALUES(49,NULL,'203.81988525390625','ahkaʔwan quʔmu c̆o:liqaw');
INSERT INTO "lines" VALUES(50,NULL,'207.3019561767578','ham:un c̆o:liqaw kma:yow wa:ʔan');
INSERT INTO "lines" VALUES(51,NULL,'216.08279418945312','win:at:ow biʔdubot̓wan da:țow.');
INSERT INTO "lines" VALUES(52,NULL,'219.75698852539062','ta:na ʔak:owi da:țow');
INSERT INTO "lines" VALUES(53,NULL,'225.7809295654297','ha:niba biʔdubot̓wantonhkle mi:d̦aywanton i:biw:wan ham:un');
INSERT INTO "lines" VALUES(54,NULL,'227.9899139404297','tan:awi qal:i di:bit̓bi:');
INSERT INTO "lines" VALUES(55,NULL,'235.92083740234375','hniba ham:un tan:awi dahsos:on mi:d̦ aywan das:ew.');
INSERT INTO "lines" VALUES(56,NULL,'240.77593994140625','mi:d̦aywan quʔmu das:ew kma:yow');
INSERT INTO "lines" VALUES(57,NULL,'250.01185607910156','ham:un (țoʔ:oʔwan) biʔ dubot̓wan c̆eʔet̓may ʒi:yo:li ʔahka ʔohʒ̆o:li ham:ilwi, mi:t̓maw.');
INSERT INTO "lines" VALUES(58,NULL,'253.9219970703125','ham:un quʔmu šu: šu:kaba kma:yow ma:mu ');
INSERT INTO "lines" VALUES(59,NULL,'261.0279235839844','ʔat:i mi:d̦ay das:ey:owan ham:un da:wod̦i:ba da:wod̦i:ba qiʒ:idu ʒ̆ahʒinqaw, ');
INSERT INTO "lines" VALUES(60,NULL,'262.9349060058594','mi:d̦aywan ʒ̆ahʒ̆in kma:yow,');
INSERT INTO "lines" VALUES(61,NULL,'267.8548583984375','ahkaʔwan c̆eʔ:et̓maywa:ni');
INSERT INTO "lines" VALUES(62,NULL,'270.662841796875','hiw:alqaw siʔt̓a.');
INSERT INTO "lines" VALUES(63,NULL,'273.3738098144531','c̆iwad̦o:qa:t̓ot̓,');
INSERT INTO "lines" VALUES(64,NULL,'282.3097229003906','ha:mini:ba waʔ:an (ʔahka kaʔbe)');
INSERT INTO "lines" VALUES(65,NULL,'285.8207092285156','kaʔbe ʔoh:o mi:talaw,');
INSERT INTO "lines" VALUES(66,NULL,'287.42767333984375','waʔ:an muʔt̓akti.');
INSERT INTO "lines" VALUES(67,NULL,'295.3586120605469','kaʔbe ʔoho mi:talaw kma:yow c̆̓ohqoy țoʔ:oʔwan muʔt̓aw.');
INSERT INTO "lines" VALUES(68,NULL,'315.3269958496094','That’s about all I could remember. That’s about it. Let’s listen to it. I understood a certain amount, but there were words in there I didn’t know.');
CREATE TABLE line_text ( 
  text_id,
  line_id
);
COMMIT;
