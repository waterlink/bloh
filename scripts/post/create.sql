create sequence bloh_post_id_seq;
create table post (
  id integer primary key default nextval('bloh_post_id_seq'),
  user_id integer references bloher(id) on delete cascade,
  title varchar(50),
  content varchar(4000),
  created_at timestamp,
  updated_at timestamp
);
