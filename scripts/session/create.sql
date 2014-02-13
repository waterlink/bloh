create sequence bloh_session_id_seq;
create table session (
  id integer primary key default nextval('bloh_session_id_seq'),
  user_id integer references bloher(id) on delete cascade,
  random_hash integer,
  death_time timestamp
);
