# Host: localhost  (Version: 5.7.26)
# Date: 2021-04-13 12:12:58
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "admin"
#

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

#
# Structure for table "adv"
#

DROP TABLE IF EXISTS `adv`;
CREATE TABLE `adv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "adv"
#

/*!40000 ALTER TABLE `adv` DISABLE KEYS */;
INSERT INTO `adv` VALUES (2,'广告2','广告2','images/adv/海报1.jpg','http://localhost//shop/goods.php?id=3&uid=30'),(7,'广告3','广告3','images/adv/白衫群女.gif','http://localhost/shop/goods.php?id=3&uid=30'),(8,'广告1','广告1','images/adv/海报2.jpg','http://localhost/shop/goods.php?id=16&uid=30'),(9,'广告4','广告4','images/adv/海报3.jpg','#');
/*!40000 ALTER TABLE `adv` ENABLE KEYS */;

#
# Structure for table "cart"
#

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

#
# Data for table "cart"
#

/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (51,25,14,1),(52,25,17,1),(54,22,16,1),(61,21,2,1),(64,27,16,1),(66,30,16,1),(67,30,16,2);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

#
# Structure for table "goods"
#

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` text,
  `old_price` float(11,2) DEFAULT '0.00',
  `picture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "goods"
#

/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (2,' 蓝色优雅女款长连衣裙 ','裙子',99,'      超漂亮的半身裙          ',339.00,'images/蓝长裙.gif'),(3,'复古红女款短连衣裙','裙子',159,'      帅气的工装裤          ',329.00,'images/暗红长裙.gif'),(4,'高贵蓝女款短连衣裙','裙子',169,'帅气的格子衫',349.00,'images/蓝短裙.gif'),(14,'浅黄短款男士运动裤','裤子',69,'            早春季2021年新款短裙高腰显瘦格子a字裙子时尚包臀百褶半身裙女                    ',99.00,'images/黄短裤.gif'),(15,'  灰色法式桔梗连衣裙子   ','裙子',139,'茶歇法式桔梗连衣裙子早春秋衣服春季',199.00,'images/灰长裙.gif'),(16,'红黄运动板鞋','上衣',59,'新款吊带背心女外穿短款修身显瘦ins潮内搭打底衫',69.00,'images/红男鞋.gif'),(17,'红色高垂感长裤 ','鞋子',299,'2021年春秋款小皮鞋女学生学院风jk制服鞋一字扣日系复古玛丽珍鞋',399.00,'images/红长裤.gif'),(18,' 红色优雅百搭直筒靴','裤子',139,'灰色运动裤女宽松束脚春秋2021新款高腰垂感显瘦百搭直筒阔腿卫裤',199.00,'images/红长筒鞋.gif'),(19,'紫色优雅女裙 ','鞋子',450,'特步山海系列一念运动鞋男夏季2021新款休闲鞋透气老爹鞋男鞋子潮',499.00,'images/紫女裙.gif'),(20,'黄色短款女裙','牛仔裤',190,'      排扣牛仔裤男士春季新款港风宽松拼色直筒裤韩版潮流时尚百搭长裤          ',256.00,'images/黄短裙.gif');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;

#
# Structure for table "lyb"
#

DROP TABLE IF EXISTS `lyb`;
CREATE TABLE `lyb` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `connect` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

#
# Data for table "lyb"
#

/*!40000 ALTER TABLE `lyb` DISABLE KEYS */;
INSERT INTO `lyb` VALUES (1,'孩子老是宅在家里不愿意出去买衣服，给他推荐了这个平台。孩子很喜欢，已经买了一仓库了','neko',1615992502),(3,'好开心','liyao',1615992711),(4,'滴购真不错','neko',1615994045),(5,'裤子收到了，物流挺快的，服务态度很好，大小刚合适，无色差，薄款，九分显瘦，上身效果还不错！轻微掉色，好评！','fan',1616034033),(6,'质量挺好的 穿上也很舒服 准备在来一件牛仔的','sunny',1616034086),(7,'哇塞 太棒了 第一天买 第二天就到了 快递超级厉害 裤子也特别棒 是喜欢的颜色 喜欢的感觉 很nice','离愁当酒',1616034383),(8,'好真实的换装小游戏(✪▽✪)还能买衣服','lisa',1616034482),(9,'质量做工都不错，裤型好，穿上显高挑，有气质，颜色也正。值得信赖。','lm',1616073617),(10,'这个网站真是好好玩啊！！！简直就像是我自己去店面换衣服了一样哎！','24Ｋ小公举',1616391428),(12,'来踩踩','\r\n婪欲',1616549229),(14,'滴购真不错','\r\n‵少女骑着麋鹿′',1616551462),(15,'火钳刘明，准备种草','Black Canary',1616551694),(16,'连衣裙和高筒靴绝配，姐妹们！信我！','萝莉轰炸机',1616553918),(19,'某乎来的，有一样的吗？','谷猫落山',1616570452),(20,'孩子老是宅在家里不愿意出去买衣服，给他推荐了这个平台。孩子很喜欢，已经买了一仓库了','\r\n‵少女骑着麋鹿′',1616570548),(21,'这里的衣服可以展示瓷器般的光泽，好奇下单了一件，实物真的有这样的光泽，这也太还原了吧！！！','苏颜ぅ',1616570839),(22,'火钳刘明，准备种草','\r\nKRIS',1616570861),(25,'好真实的换装小游戏(✪▽✪)还能买衣服','酷到无法无天的小仙女',1616570994),(26,'终于成功啦','neko',1616571234),(27,'质量做工都不错，裤型好，穿上显高挑，有气质，颜色也正。值得信赖。','离愁当酒',1616571379),(28,'火钳刘明，准备种草','\r\nKRIS',1616576802),(29,'啥时候出新款呀，催更催更 ฅ( ̳• ◡ • ̳)ฅ','MM 〥 低调 ひ',1616729520),(31,'大家好啊~','叶随阳光',1616733357),(32,'这也太便宜了，买买买！！','枕边猫',1616733409),(33,'这是我的宝藏网站，爱了爱了','玩网女帝*ψ▔',1616733484),(34,'裙子很百搭，是今年流行的款式，穿着有气质，搭配帆布鞋高跟鞋都好好看，喜欢','向日葵里盛开的夏天',1616733491),(35,'根据我的亲身体验，这个网站的信誉是真的不错！！裙子很好看很合适，在这里买的东西我很满意～','南方的南',1616733499),(36,'这个网站真是好好玩啊！！！简直就像是我自己去店面换衣服了一样哎！','共产主义的接班人',1616733522),(37,'网站真有趣','共产主义的接班人',1617180699),(38,'这个网站真是好好玩啊！！！简直就像是我自己去店面换衣服了一样哎！','南方的南',1618245571);
/*!40000 ALTER TABLE `lyb` ENABLE KEYS */;

#
# Structure for table "orders"
#

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

#
# Data for table "orders"
#

/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (25,10,1,1),(26,10,1,1),(29,21,4,1),(30,22,4,2),(31,21,4,1),(32,22,17,1),(33,22,15,2),(34,22,3,2),(35,22,2,1),(36,22,14,1),(40,21,3,1),(41,21,3,1),(42,21,2,1),(43,21,3,1),(44,21,3,1),(45,21,2,1),(51,25,14,1),(52,21,3,1),(53,21,20,1),(54,21,18,1),(55,21,18,1),(56,21,16,1),(57,21,16,1),(58,21,16,1),(59,21,2,1),(60,21,3,1),(61,27,2,1),(62,27,16,1),(63,30,16,2);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

#
# Structure for table "pay"
#

DROP TABLE IF EXISTS `pay`;
CREATE TABLE `pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_method` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "pay"
#

/*!40000 ALTER TABLE `pay` DISABLE KEYS */;
INSERT INTO `pay` VALUES (1,'支付宝'),(2,'微信支付'),(3,'财付通'),(4,'银联支付'),(5,'百度钱包');
/*!40000 ALTER TABLE `pay` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (21,'luomi','20010208','15072113021','女','254287020@qq.com','湖北经济学院','touxiang/头像.jpg'),(22,'neko','20000615','13177273520','女','1578521610@qq.com','安陆市','touxiang/3.jpg'),(23,'Sunny','20000717','15055185146','女','1062649665@qq.com','合肥','touxiang/2.jpg'),(25,'liufan','20000101','13225020368','女','2522146224@qq.com','湖北经济学院','touxiang/1.jpg'),(26,'小静','121212','12345678901','女','2496747461@qq.com','湖北经济学院',NULL),(27,'sun','121212','15623231952','女','254287029@qq.com','湖北经济学院','touxiang/头像.jpg'),(28,'sky','123123','15072113042','女','123456666@11','湖北经济学院',NULL),(29,'sss','123123','13971962789','男','176546542@qq.com','湖北经济学院','touxiang/touxiang.jpg'),(30,'ddd','123412','13971972222','女','176546542@qq.com','湖北经济学院','touxiang/touxiang.jpg');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

#
# Structure for table "wenzhang"
#

DROP TABLE IF EXISTS `wenzhang`;
CREATE TABLE `wenzhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `time` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "wenzhang"
#

/*!40000 ALTER TABLE `wenzhang` DISABLE KEYS */;
INSERT INTO `wenzhang` VALUES (3,'欢迎来到滴购商城~','欢迎您来到滴购商城，用户进入页面，首先注册设置相关信息，之后登录进入个人页面，可先在主页浏览相关推送服装信息，点击相关服饰或搜索所需衣物，进入试衣间进行虚拟试衣。选择合适衣物加入购物车并结算购买。                 <br>用户也可在论坛留言发表自己的评论。    \r\n<br>\r\n本平台主要为需要服装卖家、服装买家提供服务。为服装买家提供虚拟试穿服务，让他们买到更适合的衣服，同时可以在交流论坛进行服装搭配交流。为销售者研发新的销售模式、推广渠道提供可能，提高竞争优势。平台实现了用户在线自主搭配服装。用户把不同的衣服、裤子、鞋子等任意搭配，实时预览搭配后效果，用户不再单单依赖图片网上购物，可以在虚拟服装上自由搭配，增强了用户购买的互动性，同时提高了购买效率，缩短了买家的决策时间。同时，平台也将给用户更多互动的空间，让购买服装的用户们得以交流搭配服装的乐趣和心得。                                ','滴购商城','04:04:49'),(5,'《关于规范网络购物促销行为的通知》','\r\n\r\n(电子商务研究中心讯)　　\r\n<br>\r\n各省、自治区、直辖市、计划单列市及新疆生产建设兵团商务主管部门：　　\r\n<br>\r\n&nbsp; &nbsp;&nbsp; &nbsp; &nbsp当前，随着网络购物快速发展，网络购物企业间竞争日益激烈，打折、秒杀、抢拍、返券、赠积分、免运费等促销手段渐趋常态化，活跃了市场，刺激了消费。但是，也出现了销售侵权盗版商品、以次充好、虚假打折、线下服务和线上促销承诺不一致、网络团购缺乏规范等问题。为规范网络购物促销行为，营造良好消费环境，促进网络购物持续健康发展，现就有关事项通知如下：　　一、引导企业依法促销。要引导网络购物企业按照《反垄断法》、《消费者权益保护法》、《广告法》、《商标法》、《价格违法行为行政处罚规定》、《零售商促销行为管理办法》(商务部令2006年第18号)等有关法律法规，依法开展促销活动。遵循合法、公平、诚实信用的原则，遵守商业道德，不得开展违反社会公德的促销活动，不得扰乱市场竞争秩序和社会公共秩序，不得侵害消费者和其他经营者的合法权益。　　二、保证促销商品质量。推动网络购物企业在促销活动中，事先向消费者说明促销商品或者服务的名称、种类、数量、质量、价格、运费、配送方式、支付形式、退换货方式等主要信息，采取安全保障措施，确保促销行为安全可靠，并按照承诺提供商品或者服务。　　三、保护消费者合法权益。杜绝各种价格欺诈和虚假促销行为，严禁虚构原价打折、使用误导性标价形式或价格手段，欺骗、诱导消费者，不得降低促销商品(包括有奖销售的奖品、赠品)的售后服务水平，不得以促销为由拒绝退换货或者为消费者退换货设置障碍，不得以保留最终解释权为由，损害消费者的合法权益。　　四、严厉查处不实宣传。加强与工商等部门配合协作，开展联合检查，要求促销广告内容真实、合法、清晰、易懂，不得使用含糊、易引起误解的语言、文字、图片或影像；明示促销活动的各种限制性条件，禁止各种迷惑欺骗消费者的不实宣传行为。　　五、加强知识产权保护。结合打击侵犯知识产权和制售假冒伪劣商品专项行动，与工商、质检等部门开展联合督查，加强对网络购物平台及经营者监督力度，打击促销活动中侵犯知识产权和制售假冒伪劣商品行为。加强宣传教育，引导网络购物平台和企业履行社会责任，开展诚信促销、规范经营，自觉抵制侵犯知识产权和制售假冒伪劣商品违法犯罪行为。　　六、引导科学合理消费。加强与新闻媒体沟通合作，引导网络购物企业在促销活动中倡导文明、绿色、低碳、安全、健康消费理念，推动建立可持续的消费模式。　　七、建立长效机制。认真研究网络购物促销中存在的主要问题，提出解决方案，完善相关政策标准，建立网络购物促进消费的长效机制。支持相关行业协会和企业开展行业自律，健全商品(服务)先行赔付制度，研究制定符合网络购物特点的促销规范。网络购物平台要从自身特点和需求出发，健全相应的促销规则和售后服务保障措施。　　促销活动已成为网络购物企业常规经营手段，关系到网络购物持续健康发展，关系到消费者切身利益，各地商务主管部门要高度重视，在鼓励网络购物企业开展促销扩大消费的同时，积极会同当地发展改革(价格)、公安、工商、质检等部门，加强宣传引导，开展监督检查，规范网络购物促销行为。对相关违法行为，要会同有关部门严肃处理；发生重大问题的，及时向商务部报告。','滴购商城','13:51:19'),(6,'3D试衣间改造完成啦！','\r\n&nbsp; &nbsp;&nbsp; &nbsp; &nbsp 3D虚拟试衣系统的使用场景主要是在线电商或数字营销，为品牌服装、服饰、饰品添加高端3D虚拟购物动效，提升用户感官体验和交互体验。\r\n                 <br>\r\n要研发这样的在线系统，有2个方向，一个是使用Flash或Unity3D这些第三方网页插件，第二个就是纯Web方案（也就是HTML5/WebGL）。\r\n                 <br>\r\nFlash在移动端有死穴，Unity3D所依赖的API在新版本Chrome中得不到支持（V42以后），而H5是行业开放标准是现在也是未来。因此我们选择基于H5来实现这个目标。\r\n\r\n                 <br>\r\n滴购商城基于网页/HTML5在行业内独家研发了一套在线3D虚拟试衣系统，目前是功能演示/测试版本，包含如下基本功能：                 <br>\r\n1. 纯Web/HTML5版本，无需用户安装任何插件，跨平台跨设备终端，只要是支持WebGL规范的现代浏览器就可以运行；\r\n                 <br>\r\n2. 360°浏览模特和衣服，支持交互式缩放、旋转、平移；\r\n                 <br>\r\n3. 可修改模特参数，以匹配自己的身材体型；\r\n                 <br>\r\n4. 可选择不同的衣服进行试穿；\r\n                 <br>\r\n5. 可选择模特的肤色；\r\n                 <br>\r\n6. 可选择环境参数，如光照颜色、是否有风、是否需要聚光效果、舞台是否需要自动旋转等；\r\n                 <br>\r\n如果选择有风的环境，则呈现自然风吹拂摆动/波动特效。\r\n                 <br>\r\n一大波更为有趣的功能即将来袭：\r\n                 <br>\r\n添加3D场景（室内外）构建、虚拟T台秀（虚拟走秀）和更多模特、衣服模型和动作的制作，以及和VR/AR技术的结合。                  ','滴购商城','20:05:43');
/*!40000 ALTER TABLE `wenzhang` ENABLE KEYS */;
