CREATE TABLE users(
    username VARCHAR(20) NOT NULL UNIQUE,
    pass VARCHAR(100) NOT NULL,
    fio VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    PRIMARY KEY (username)
);

CREATE TABLE projects (
    projID INT NOT NULL AUTO_INCREMENT UNIQUE, 
    title VARCHAR(36) NOT NULL,
    opis VARCHAR(1024) NOT NULL,
    l INT NOT NULL,
    dl INT NOT NULL,
    PRIMARY KEY (projID)  
) ENGINE = InnoDB;

CREATE TABLE ratings(
	username VARCHAR(20) NOT NULL,
    projID INT NOT NULL,
    rating BOOLEAN NOT NULL,
    PRIMARY KEY(username, projID),
    FOREIGN KEY (username) REFERENCES users (username) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (projID) REFERENCES projects (projID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE kvantum_proj(
    kvantum VARCHAR(10) NOT NULL,
    projID INT NOT NULL,
    PRIMARY KEY (kvantum, projID),
    FOREIGN KEY (projID) REFERENCES projects (projID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE user_proj (
    username VARCHAR(20) NOT NULL,
    projID INT NOT NULL,
    PRIMARY KEY (username, projID),
    FOREIGN KEY (username) REFERENCES users (username) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (projID) REFERENCES projects (projID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;


CREATE TABLE proj_media (
    projID INT NOT NULL , 
    media VARCHAR(255) NOT NULL,
    PRIMARY KEY (projID, media),
    FOREIGN KEY (projID) REFERENCES projects (projID) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
