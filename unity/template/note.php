
DROP TABLE IF EXISTS users;
create table users(
	user_id int (10) unsigned NOT NULL auto_increment,
	user_name varchar(20) NOT NULL default '',
	passwd varchar(32) NOT NULL default '',
    PRIMARY KEY admin_id(admin_id)
);

admin1 剧场信息管理员
admin2 剧团信息管理员

DROP TABLE IF EXISTS theaters;
create table theaters(
	theater_id int(10) unsigned NOT NULL auto_increment,
	basic varchar(100) NOT NULL default '',
	showinfo varchar(100) NOT NULL default '',
        avaible varchar(100) NOT NULL default '',
        PRIMARY KEY theater_id(theater_id)
);

theater 剧场信息
group 剧团信息
