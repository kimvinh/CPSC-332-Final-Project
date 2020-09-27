CREATE TABLE DEPARTMENT (
  -> DNumber numeric(5) PRIMARY KEY,
  -> Name varchar(100),
  -> Telephone numeric(10),
  -> Location varchar(100),
  -> ChairmanSSN numeric(9),
  -> FOREIGN KEY (ChairmanSSN) REFERENCES PROFESSOR(SSN)
);
