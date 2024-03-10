# lab3
lab3 for WEBPROG class

SQL TABLE

CREATE TABLE userfilms (
    userId INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(128) NOT NULL,
    slug VARCHAR(128) NOT NULL,
    userName VARCHAR(128) NOT NULL,
    filmOne VARCHAR(128) NOT NULL,
    filmTwo VARCHAR(128) NOT NULL,
    filmThree VARCHAR(128) NOT NULL,
    filmFour VARCHAR(128) NOT NULL,
    posterOne VARCHAR(2048) NOT NULL,
    posterTwo VARCHAR(2048) NOT NULL,
    posterThree VARCHAR(2048) NOT NULL,
    posterFour VARCHAR(2048) NOT NULL,
    PRIMARY KEY (userId),
    UNIQUE slug (slug)
);

INSERT INTO userfilms VALUES
(1, 'Nostalgic Cartoons', 'nostalgic-cartoons', '0xDanz', 'Adventure Time', 'Regular Show', 'Gravity Falls', 'Avatar: The Last Airbender', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/qk3eQ8jW4opJ48gFWYUXWaMT4l.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mS5SLxMYcKfUxA0utBSR5MOAWWr.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/pnoGOBtkffH64hhI5GPdsQ218d1.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/cHFZA8Tlv03nKTGXhLOYOLtqoSm.jpg');