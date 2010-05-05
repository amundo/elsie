create table transcripts ( 
  text_id integer primary key autoincrement,
  filename
);

create table lines ( 
  line_id integer primary key autoincrement,
  start_time,
  stop_time,
  line
);

create table line_text ( 
  text_id,
  line_id
);
  
