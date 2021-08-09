DROP TABLE IF EXISTS `#__joomla4component`;
CREATE TABLE IF NOT EXISTS #__joomla4component (
    id int(11) NOT NULL AUTO_INCREMENT,
    title varchar(100),
    category varchar(50),
    description text,
    state varchar (50),
    created datetime DEFAULT '0000-00-00 00:00:00',
    modified datetime DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (id)
) ENGINE = InnoDB;
