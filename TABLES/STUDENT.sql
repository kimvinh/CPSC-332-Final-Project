CREATE TABLE STUDENT (
  -> CWID numeric(9) PRIMARY KEY,
  -> DNO numeric(5),
  -> FName varchar(50),
  -> LName varchar(50),
  -> Address varchar(100),
  -> Telephone numeric(10),
  -> FOREIGN KEY (DNO) REFERENCES DEPARTMENT(DNumber)
);
