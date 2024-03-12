# lab3
lab3 for WEBPROG class
    
## Link to Website -> https://apcwebprog.csf.ph/~dtcempron/lab3/ci4/public/    











    
### Don't mind this SQL table. I pasted it here so I could replicate it on the server. CHeers!!!
SQL TABLE

CREATE TABLE dtcempron_userfilms (
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

INSERT INTO dtcempron_userfilms VALUES
(1, 'Recent Bangers', 'recent-masterpieces', '0xDanz', 'Loki', 'Mr. & Mrs. Smith', 'Dune', 'Dune: Part Two', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/rqDoCJEM3SNaX1h2PjCCVkgoql2.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/kvJvGxsDLi3MmHzc9nregyJtOWY.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/d5NXSklXo0qyIYkgV94XAgMIckC.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/8b8R8l88Qje9dn9OE8PY05Nxl1X.jpg');

INSERT INTO dtcempron_userfilms VALUES
(2, 'Top Tier Animations', 'top-tier-animations', '0xDanz', 'Arcane', 'Ghost in the Shell', 'Jujutsu Kaisen', 'Cowboy Bebop', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/fqldf2t8ztc9aiwn3k6mlX3tvRT.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/9gC88zYUBARRSThcG93MvW14sqx.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/fHpKWq9ayzSk8nSwqRuaAUemRKh.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/xDiXDfZwC6XYC6fxHI1jl3A3Ill.jpg');

INSERT INTO dtcempron_userfilms VALUES
(3, 'Nostalgic Cartoons', 'nostalgic-cartoons', '0xDanz', 'Adventure Time', 'Regular Show', 'Gravity Falls', 'Avatar: The Last Airbender', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/qk3eQ8jW4opJ48gFWYUXWaMT4l.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/mS5SLxMYcKfUxA0utBSR5MOAWWr.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/pnoGOBtkffH64hhI5GPdsQ218d1.jpg', 'https://image.tmdb.org/t/p/w600_and_h900_bestv2/cHFZA8Tlv03nKTGXhLOYOLtqoSm.jpg');
