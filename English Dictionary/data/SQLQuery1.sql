create database Assignment3

create table user_table
(
name char(20) primary key,
u_password varchar(20)
)

create table words
(
id int primary key identity,
word char(20),
part_of_speech char(10) null,
meaning char(20),
example char(100) null
)

create table word_book
(
name char(20) foreign key references user_table(name) on delete cascade on update cascade,
word char(20),
part_of_speech char(10) null,
meaning char(20),
example char(100) null
)

create table quotes
(
id int primary key identity,
sentence char(200),
meaning char(200)
)

create table study_plan
(
name char(20) foreign key references user_table(name) on delete cascade on update cascade,
num int,
study_date date
)

create table about
(
author char(20),
copyright char(200),
contact char(200)
)

insert into user_table(name,u_password)
select 'admin','123456' union all
select 'manjiangjie','thisistheuser' union all
select 'test','itsfortest' union all
select 'guest','iamaguest' union all
select 'others','000000'

insert into words(word,part_of_speech,meaning)
select 'abatement','n.','���٣�����' union all
select 'abbreviate','v.','����' union all
select 'aberrant','a.','Խ��ģ��쳣��' union all
select 'abet','v.','����������' union all
select 'abeyance','n.','��ֹ������' union all
select 'abhor','v.','����' union all
select 'ablaze','a.','ȼ�յģ���ҫ��' union all
select 'abolition','n.','�ϳ�' union all
select 'abrasive','a.','��ĥ��' union all
select 'abreast','a.','���ŵ�' union all
select 'abridge','v.','ɾ��' union all
select 'abstain','v.','����������' union all
select 'abstruse','a.','�Ѷ��ģ���µ�' union all
select 'abut','v.','�ڽ�' union all
select 'abysmal','a.','����ģ���͸��'

insert into quotes(sentence,meaning)
select 'Living without an aim is like sailing without a compass. -- John Ruskin','����û��Ŀ�꣬���纽��û�����̡�-- ��˹��' union all
select 'There is no such thing as a great talent without great will - power. -- Balzac','û��ΰ�����־������û���۲Ŵ��ԡ� -- �Ͷ�����' union all
select 'Our destiny offers not the cup of despair, but the chalice of opportunity. So let us seize it, not in fear, but in gladness. -- R.M. Nixon','���˸������ǵĲ���ʧ��֮�ƣ����ǻ���֮������ˣ�����Ǻ��޷�壬�������õذ�������- �����' union all
select 'The unexamined life is not worth living. -- Socrates','���جج�����ֵ�ù��� -- �ո�����' union all
select 'What makes life dreary is the want of motive. -- George Eliot','û����Ŀ�ģ�����������޹⡣ -- ���� ������' union all
select 'You cannot improve your past, but you can improve your future. Once time is wasted, life is wasted.','�㲻�ܸı���Ĺ�ȥ��������������δ����ø����á�һ��ʱ���˷��ˣ��������˷��ˡ�' union all
select 'Happiness is a way station between too much and too little.','�Ҹ���̫���̫��֮���һվ��' union all
select 'Whatever happens, happens for a reason.','�κ�����ķ�������ԭ��ġ�' union all
select 'Every noble work is at first impossible.','ÿһ��ΰ��Ĺ���������������ǲ����������ģ�' union all
select 'Never underestimate your power to change yourself!','��Զ��Ҫ�͹���ı����ҵ�������'

insert into about(author,copyright,contact)
select 'manjiangjie','Copyright 2014 English Learning App. All rights reserved','Contact me: manjiangjie@gmail.com'