create sequence bloh_user_id_seq;
create table bloher (
  id integer primary key default nextval('bloh_user_id_seq'),
  email varchar(50),
  password varchar (50)
);
