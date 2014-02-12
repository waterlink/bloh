create sequence bloh_user_id_seq;
create table user (
  id integer primary key default nextval('bloh_user_id_seq'),
  email varchar(50),
  password (50)
);
