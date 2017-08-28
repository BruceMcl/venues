<?php

// The SQL to uninstall this tool
$DATABASE_UNINSTALL = array(
"drop table if exists {$CFG->dbprefix}booking",
"drop table if exists {$CFG->dbprefix}venue"
);

// The SQL to create the tables if they don't exist
$DATABASE_INSTALL = array(


$DATABASE_INSTALL = array(
array( "{$CFG->dbprefix}venue",
"create table {$CFG->dbprefix}venue (
    link_id     INTEGER NOT NULL,
    user_id     INTEGER NOT NULL,
    venue_id  INTEGER NOT NULL,
    added_on  DATETIME NOT NULL,

    CONSTRAINT `{$CFG->dbprefix}venue_ibfk_1`
        FOREIGN KEY (`link_id`)
        REFERENCES `{$CFG->dbprefix}lti_link` (`link_id`)
        ON DELETE CASCADE ON UPDATE CASCADE,

    CONSTRAINT `{$CFG->dbprefix}venue_ibfk_2`
        FOREIGN KEY (`user_id`)
        REFERENCES `{$CFG->dbprefix}lti_user` (`user_id`)
        ON DELETE CASCADE ON UPDATE CASCADE,

    UNIQUE(link_id, user_id, venue_id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8"),

array( "{$CFG->dbprefix}booking",
"create table {$CFG->dbprefix}booking (
    link_id     INTEGER NOT NULL,
    user_id     INTEGER NOT NULL,
    booking_Date  INTEGER NOT NULL,    

    CONSTRAINT `{$CFG->dbprefix}booking_ibfk_1`
        FOREIGN KEY (`link_id`)
        REFERENCES `{$CFG->dbprefix}lti_link` (`link_id`)
        ON DELETE CASCADE ON UPDATE CASCADE,

    CONSTRAINT `{$CFG->dbprefix}booking_ibfk_2`
        FOREIGN KEY (`user_id`)
        REFERENCES `{$CFG->dbprefix}lti_user` (`user_id`)
        ON DELETE CASCADE ON UPDATE CASCADE,        

    UNIQUE(link_id, user_id)
) ENGINE = InnoDB DEFAULT CHARSET=utf8")
);

