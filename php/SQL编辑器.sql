create database flowerDB

--创建会员表

create table vip(
       username varchar(20) not null primary key,
       userpass varchar(16) not null,
       usersex char(2),
       userage int
)

--创建商品信息表

create table goodsinfo(
       goodsid char(16) not null primary key,
       goodsname varchar(30) not null,
       goodscount int,
       goodsprice float
)

--购物车表

create table shoppingcar(
       username varchar(20) not null primary key,
       goodsid char(16) not null ,
       goodscount int
)


--增(注册时会用)
insert into vip(username,userpass,usersex) values('张三疯','123456','男')
insert into vip(username,userpass,usersex) values('张四疯','123457','女')
insert into vip(username,userpass,usersex) values('张五疯','123458','女')
insert into vip(username,userpass,usersex) values('张六疯','123459','男')

insert into vip  values('张七疯','123456','男',12)

--删
delete from vip where username='张三疯'

--查（用户名存在性验证，和登录）
select * from vip where username='张三疯' and userpass='123456'
select username,userpass from vip

--修改
update vip set username='张八风' where username='张六疯'

