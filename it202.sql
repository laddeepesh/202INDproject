drop table if exists clients;
create table clients
  (
    clientId INT(11) primary key auto_increment,
    clientName varchar(32),
    clientPN varchar (64),
    activeSession varchar(128),
    firstLogine datetime,
    lastLogin datetime
  );
  
  