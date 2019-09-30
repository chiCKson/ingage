call registerNewParticipant('".$fname."','".$nic."','".$university."',
'".$email."','".$tshirt."','".$food."','".$linkedin."','".$facebook."',
'".$github."','".$whyus."','".$whyyou."')";

insert into participant values(email,fullname,nic,university,tshirt,food,github,linkedin,facebook,whyus,whyyou);

delimiter $$
CREATE PROCEDURE registerNewParticipant(IN fullname VARCHAR(100),IN nic VARCHAR(12),IN university VARCHAR(30),IN email VARCHAR(50),IN tshirt VARCHAR(3),IN food VARCHAR(10),IN linkedin VARCHAR(100),IN facebook VARCHAR(100),IN github VARCHAR(100),IN whyus TEXT,IN whyyou TEXT,IN mobile INT)
BEGIN

insert into participant(email,fullname,nic,university,tshirt,food,github,linkedin,facebook,whyus,whyyou,mobile) values(email,fullname,nic,university,tshirt,food,github,linkedin,facebook,whyus,whyyou,mobile);
END $$
delimiter ;
create table participant( email varchar(50) unique key,
regkey int auto_increment primary key,
fullname varchar(100),nic varchar(12),
university varchar(30),
tshirt varchar(3),
food varchar(10),
github varchar(100),
linkedin varchar(100),
facebook varchar(100),
whyus text,
whyyou text,
mobile int
);

CREATE USER 'user'@'localhost' IDENTIFIED BY '123';
ALTER USER 'user'@'localhost' IDENTIFIED WITH mysql_native_password BY '123';

GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost';
ALTER TABLE participant AUTO_INCREMENT=10001;

create table admin(id int auto_increment primary key,username varchar(20),password varchar(50));
ALTER TABLE participant ADD checkin varchar(5) default 'no';
ALTER TABLE participant ADD tshirt_given varchar(5) default 'no';