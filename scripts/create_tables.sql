create sequence bloh_user_id_seq;
create sequence bloh_session_id_seq;
create sequence bloh_post_id_seq;
create sequence bloh_comment_id_seq;

create table bloher (
  id integer primary key default nextval('bloh_user_id_seq'),
  email varchar(50),
  password varchar (50)
);

create table session (
  id integer primary key default nextval('bloh_session_id_seq'),
  user_id integer references bloher(id) on delete cascade,
  random_hash varchar(50),
  death_time timestamp
);

create table post (
  id integer primary key default nextval('bloh_post_id_seq'),
  user_id integer references bloher(id) on delete cascade,
  title varchar(50),
  content varchar(4000),
  created_at timestamp,
  updated_at timestamp
);

create table comment (
  id integer primary key default nextval ('bloh_comment_id_seq'),
  post_id integer references post(id) on delete cascade,
  user_id integer references bloher(id) on delete cascade,
  content varchar(4000),
  created_at timestamp
);
