
CREATE TABLE company (
  id Int AUTO_INCREMENT NOT NULL UNIQUE,

  name VARCHAR(50),
  email  VARCHAR(50),
  password VARCHAR(255),
  
  visual BOOLEAN, 
  hearing BOOLEAN,
  motor BOOLEAN,
  cognitive BOOLEAN,

  address VARCHAR(100),
  zone VARCHAR(100),
  category VARCHAR(100),
  description VARCHAR(255)
)
