create database math_solution 
use math_solution

create table negation
(
  id int auto_increment primary key
 , P varchar (200)
  ,Negation varchar(200)
); 

create table conjunction
(
  id int auto_increment primary key
 , P varchar (200)
  ,Q varchar (200)
  ,Conjunction varchar(200)
); 

create table disjunction
(
  id int auto_increment primary key
 , P varchar (200)
  ,Q varchar (200)
  ,Disjunction varchar(200)
); 

drop table negation 

insert into negation (P,Negation) values ('True','False') ;  
insert into negation (P,Negation) values ('False','True') ;  

insert into conjunction (P,Q,Conjunction) values ('True','True','True'); 
insert into conjunction (P,Q,Conjunction) values ('False','True','False'); 
insert into conjunction (P,Q,Conjunction) values ('True','False','False'); 
insert into conjunction (P,Q,Conjunction) values ('False','False','False'); 

insert into disjunction (P,Q,Disjunction) values ('True','True','True');
insert into disjunction (P,Q,Disjunction) values ('False','True','True');
insert into disjunction (P,Q,Disjunction) values ('True','False','True');
insert into disjunction (P,Q,Disjunction) values ('False','False','False');

select * from conjunction ; 
select * from negation ; 
select * from disjunction ; 

