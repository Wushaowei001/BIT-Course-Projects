-- ================================================
-- Author:      满江杰
-- Version:     v1.3
-- Create date: 2015-03-31
-- Description: 网站测试数据库 test_db
-- Modify:      2015-04-06
--              增加用户表等，修改主、外键关系，增加视频面试、收藏以及关注、私信列表，增加一些字段，修改部分字段类型
-- 	            2015-04-07
--              简历中增加专长功能
--              2015-04-08
--              增加部分字段，插入数据
--              2015-04-15
--              就读时间字段分为两部分，增加职位有效时间，增加毕业时间，收藏网站状态，简历可见度
--              2015-04-20
--              增加备用字段，增加插入数据时对外键的支持，修复部分数据
--              2015-04-21
--              增加HR操作记录表，多个表中增加收费状态字段，更新数据
--              2015-04-28
--              md5加密，修改部分数据
-- ================================================

-- 请按以下步骤执行

-- 1.每次脚本更新后先删除数据库
drop database test_db;

-- 2.创建数据库
create database test_db default character set utf8 collate utf8_general_ci;

-- 3.设置编码格式
set character_set_database=utf8;
set character_set_server=utf8;

-- 4.定位到此数据库
use test_db;

-- 5.建表，执行所有create table语句

-- 用户基本信息表（id，用户种类，密码，邮箱，邮箱验证码，手机号，手机验证码，随机数，收藏状态（是否收藏该网站），用户状态（是否激活），注册时间）
create table user_info(
userId int not null auto_increment primary key,
userType tinyint not null,
userPassword varchar(32) not null,
userEmail varchar(20) not null,
userEmailCode int(6),
userTelNum varchar(15),
userTelCode int(6),
userRandomNum int(6),
userCollectWeb tinyint,
userStatus tinyint not null,
userRegisterTime datetime not null,
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 用户登录日志表（id，登录时间，登录ip，登录状态（检验登录是否成功），登录的浏览器，用户id）
create table user_login_log(
loginId int not null auto_increment primary key,
loginTime datetime not null,
loginIp varchar(32) not null,
loginStatus tinyint not null,
loginBrowser tinyint not null,
userId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 用户操作日志表（id，操作类型，操作模块，操作内容，操作时间，操作人ip，操作备注，用户id）
create table user_operate_log(
operateId int not null auto_increment primary key,
operateType tinyint not null,
operateModule tinyint not null,
operateContent varchar(255),
operateTime datetime not null,
operateIp varchar(32) not null,
operateRemarks varchar(255),
userId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 求职者信息（id，姓名，头像，生日，性别，微信号，脸书，推特，阴死他棺木，面试邀请的企业数量，每日投递简历数量，信息创建时间，信息最后修改时间）
create table applicant_info(
applicantId int not null primary key,
applicantName varchar(20) not null,
applicantPic text,
applicantBirthday date not null, 
applicantSex tinyint not null,
applicantWechat varchar(255),
applicantFacebook varchar(255),
applicantTwitter varchar(255),
applicantInstagram varchar(255),
applicantInterviewNum int not null,
applicantDelieverNum int not null,
createTime datetime,
lastEditTime datetime,
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 关注表（id，关注者id，被关注者id，关注时间，关注状态（是否相互关注），关注类型（好友还是公司））
create table follow(
followId int not null auto_increment primary key,
followFromId int not null,
followToId int not null,
createTime datetime not null,
followStatus tinyint not null,
followType tinyint not null,
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 私信表（id，发送者id，接受者id，私信类型（好友还是公司），私信状态（是否已读），私信内容，发送时间，阅读时间）
create table message(
messageId int not null auto_increment primary key,
messageFromId int not null,
messageToId int not null,
messageType tinyint not null,
messageStatus tinyint not null,
messageContent text,
messageSendTime datetime not null,
messageReadTime datetime,
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- HR（id，姓名，性别，手机号，邮箱，头像，职位，私信状态（是否接收私信），免费发布职位次数，信息创建时间，信息最后修改时间）
create table hr_info(
hrId int not null primary key,
hrName varchar(20) not null,
hrSex tinyint,
hrTelNum varchar(15),
hrEmail varchar(20),
hrPic text,
hrJob varchar(20),
hrMessageStatus tinyint not null,
hrFreeReleaseFrequency int,
createTime datetime,
lastEditTime datetime,
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- HR操作记录表（id，查看次数，下载次数，状态（是否需要付费），总费用，HRid）
create table hr_record(
recordId int not null auto_increment primary key,
recordReview int,
recordDownload int,
recordStatus tinyint,
recordFee int,
hrId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 公司信息（id，名称，营业执照，公司Logo，公司规模，公司性质，融资情况，公司简介，联系人姓名，联系人性别，联系人手机号，公司网址，公司地址，是否首页显示，信息创建时间，信息最后修改时间，HRid，行业id）
create table company_info(
companyId int not null auto_increment primary key,
companyName varchar(40) not null,
companyLicense text not null,
companyLogo text,
companySize tinyint,
companyNature tinyint,
companyFinancing tinyint,
companyProfile text,
companyContactName varchar(20) not null,
companyContactSex tinyint,
companyContactTelNum varchar(15),
companyWebsite varchar(30),
companyAddress varchar(50),
companyShown tinyint,
createTime datetime,
lastEditTime datetime,
hrId int not null, -- 外键
industryId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 公司资讯（id，标题，选填标题，封面，正文，公司id）
create table company_news(
newsId int not null auto_increment primary key,
newsTitle1 varchar(40) not null,
newsTitle2 varchar(40),
newsCover text,
newsContent longtext not null,
companyId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 面试（id，面试状态（等待面试，被拒，面试邀约，完成面试），面试预约时间，最后修改预约时间，投递简历时间，职位id，简历id，HRid）
create table interview(
interviewId int not null auto_increment primary key,
interviewStatus tinyint,
createTime datetime,
lastEditTime datetime,
interviewDeliverTime datetime,
jobId int not null, -- 外键
resumeId int not null, -- 外键
hrId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 收藏（id，收藏类型（求职者还是HR收藏），收藏时间，最后修改时间，职位id，简历id，HRid）
create table collect(
collectId int not null auto_increment primary key,
collectType tinyint not null,
createTime datetime,
lastEditTime datetime,
jobId int not null, -- 外键
resumeId int not null, -- 外键
hrId int, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 订阅（id，订阅类型（求职者还是HR），订阅时间，最后修改时间，职位id，简历id，HRid）
create table subscribe(
subscribeId int not null auto_increment primary key,
subscribeType tinyint not null,
createTime datetime,
lastEditTime datetime,
jobId int not null, -- 外键
resumeId int not null, -- 外键
hrId int, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 职位（id，名称，描述，工作经验，学历要求，工作性质，招聘人数，工资下限，工资上限，职位状态（是否失效，是否付费），点击量，地址，有效时间，创建时间，最后修改时间，公司id，HRid，行业id）
create table job_info(
jobId int not null auto_increment primary key,
jobName varchar(60) not null,
jobDescription text not null,
jobExperience tinyint,
jobEducation tinyint,
jobNature tinyint,
jobRecruitNum int,
jobSalary1 int,
jobSalary2 int,
jobStatus tinyint not null,
jobClick bigint,
jobAddress varchar(50),
validTime int,
createTime datetime,
lastEditTime datetime,
companyId int not null, -- 外键
hrId int not null, -- 外键
industryId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 职位标签（id，标签id，标签内容，职位id）
create table job_tag(
tagId int not null auto_increment primary key,
tagTypeId int not null,
tagContent varchar(20),
jobId int, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 简历（id，民族，简介，头像，手机号，开始工作时间，国籍，政治状态，籍贯，常住地，希望从事行业，简历可见度，简历完成进度，简历是否推荐，简历创建时间，简历最后修改时间，求职者id）
create table resume_info(
resumeId int not null auto_increment primary key,
resumeEthnic tinyint not null,
resumeProfile text not null,
resumePic text not null,
resumeTelNum varchar(15),
resumeStartWorkTime date,
resumeNationality tinyint not null,
resumePoliticalStatus tinyint not null,
resumeAddress varchar(50) not null,
resumeHome varchar(20) not null,
resumeIndustry tinyint,
resumeVisibility tinyint,
resumeProgress int not null,
resumeRecommend tinyint,
createTime datetime,
lastEditTime datetime,
applicantId int not null, -- 外键 
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 简历的企业黑名单（id，黑名单状态（是否为黑名单），简历id，HRid）
create table resume_blacklist(
blacklistId int not null auto_increment primary key,
blacklistStatus tinyint,
resumeId int not null, -- 外键
hrId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 简历中的语言能力（id，语言类型，简历id）
create table resume_language(
languageId int not null auto_increment primary key,
languageCategory varchar(50),
resumeId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 简历中的工作经历（id，工作时间，公司，职位，简历id）
create table resume_work(
workId int not null auto_increment primary key,
workStartTime date not null,
workEndTime date not null,
workCompany varchar(40) not null,
workJob varchar(60) not null,
resumeId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 简历中的专长（id，内容，简历id）
create table resume_speciality(
specialityId int not null auto_increment primary key,
specialityContent varchar(20) not null,
resumeId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 求职者或简历中的教育经历（id，学校名称，学校地址，就读开始时间，就读结束时间，毕业时间，学历，专业，简历id，求职者id）
create table education(
educationId int not null auto_increment primary key,
educationSchoolName varchar(40) not null,
educationSchoolAddress varchar(50) not null,
educationStartTime date not null,
educationEndTime date not null,
educationGraduateTime date not null,
educationDegree tinyint not null,
educationMajor varchar(30) not null,
resumeId int not null, -- 外键
applicantId int not null, -- 外键
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 论坛（id，提问者id，创建时间，主题，标题，提问内容，回复内容，回复者id）
create table forum(
forumId int not null auto_increment primary key,
askId int,
createTime datetime,
forumTopic varchar(20),
forumTitle varchar(50),
forumAskContent text,
forumAnswerContent text,
answerId int,
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 以下为字典表

-- 行业（id，行业分级1，行业分级2）
create table industry(
industryId int not null auto_increment primary key,
industry1 tinyint not null,
industry2 tinyint not null,
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);

-- 地址
create table address(
addressId int not null auto_increment primary key,
addressCountry varchar(20),
addressArea varchar(20),
alternative1 varchar(100),
alternative2 varchar(100),
alternative3 varchar(100)
);


-- 6.添加外键，执行所有alter语句（如不需要外键关联，可先不加外键）
alter table user_login_log add foreign key (userId) references user_info(userId) on delete cascade on update cascade;

alter table user_operate_log add foreign key (userId) references user_info(userId) on delete cascade on update cascade;

alter table hr_record add foreign key (hrId) references hr_info(hrId) on delete cascade on update cascade;

alter table company_info add foreign key (hrId) references hr_info(hrId) on delete cascade on update cascade;
alter table company_info add foreign key (industryId) references industry(industryId) on delete cascade on update cascade;

alter table company_news add foreign key (companyId) references company_info(companyId) on delete cascade on update cascade;

alter table interview add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;
alter table interview add foreign key (hrId) references hr_info(hrId) on delete cascade on update cascade;
alter table interview add foreign key (jobId) references job_info(jobId) on delete cascade on update cascade;

alter table collect add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;
alter table collect add foreign key (hrId) references hr_info(hrId) on delete cascade on update cascade;
alter table collect add foreign key (jobId) references job_info(jobId) on delete cascade on update cascade;

alter table subscribe add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;
alter table subscribe add foreign key (hrId) references hr_info(hrId) on delete cascade on update cascade;
alter table subscribe add foreign key (jobId) references job_info(jobId) on delete cascade on update cascade;

alter table job_info add foreign key (hrId) references hr_info(hrId) on delete cascade on update cascade;
alter table job_info add foreign key (companyId) references company_info(companyId) on delete cascade on update cascade;
alter table job_info add foreign key (industryId) references industry(industryId) on delete cascade on update cascade;

alter table job_tag add foreign key (jobId) references job_info(jobId) on delete cascade on update cascade;

alter table resume_info add foreign key (applicantId) references applicant_info(applicantId) on delete cascade on update cascade;

alter table resume_work add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;

alter table resume_speciality add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;

alter table resume_language add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;

alter table resume_blacklist add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;
alter table resume_blacklist add foreign key (hrId) references hr_info(hrId) on delete cascade on update cascade;

alter table education add foreign key (resumeId) references resume_info(resumeId) on delete cascade on update cascade;
alter table education add foreign key (applicantId) references applicant_info(applicantId) on delete cascade on update cascade; 


-- 7.插入数据(大部分数据正在处理ing……)，执行所有load语句，''里填本地svn文件夹中.txt文件存放的路径，由于外键约束，应按以下执行顺序进行：
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/industry.txt' into table industry fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/address.txt' into table address fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/user_info.txt' into table user_info fields terminated by ',' set userPassword = md5(userPassword);
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/applicant_info.txt' into table applicant_info fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/hr_info.txt' into table hr_info fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/hr_record.txt' into table hr_record fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/resume_info.txt' into table resume_info fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/resume_language.txt' into table resume_language fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/resume_work.txt' into table resume_work fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/resume_speciality.txt' into table resume_speciality fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/resume_blacklist.txt' into table resume_blacklist fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/education.txt' into table education fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/company_info.txt' into table company_info fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/job_info.txt' into table job_info fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/job_tag.txt' into table job_tag fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/interview.txt' into table interview fields terminated by ',';
load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/collect.txt' into table collect fields terminated by ',';
-- load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/company_news.txt' into table company_news fields terminated by ',';
-- load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/message.txt' into table message fields terminated by ',';
-- load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/follow.txt' into table follow fields terminated by ',';
-- load data local infile '/Users/manjiangjie/Documents/workspace/LZXTeam/数据库设计文件/data/subscribe.txt' into table subscribe fields terminated by ',';
