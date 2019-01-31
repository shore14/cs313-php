create table card (id int
	,title varchar(256)
	,body varchar(256)
	,author varchar(256));
create unique index on card (id);
create table user_s (id int
	,first varchar(256)
	,last varchar(256));
create unique index on user_s (id);
create table user_s_cards (id int
	, card_id int
	, user_s_id int);
alter table user_cards add primary key (id);
alter table user_cards add foreign key (card_id) references card (id);
alter table user_cards add foreign key (user_s_id) references user_s (id);

alter table user_s add primary key (id);
alter table cards add primary key (id);
create unique index on user_cards (id);
