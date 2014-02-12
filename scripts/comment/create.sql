create sequence bloh_comment_id_seq;
create table comment (
  id integer primary key default nextval ('bloh_comment_id_seq'),
  post_id integer references post(id) on delete cascade,
  content varchar(4000),
  created_at timestamp
);
