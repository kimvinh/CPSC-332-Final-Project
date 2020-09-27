CREATE TABLE COURSE (
  -> CNumber numeric(5) PRIMARY KEY,
  -> DNO numeric(5),
  -> Title varchar(100),
  -> Textbook varchar(250),
  -> Units numeric(3),
  -> FOREIGN KEY (DNO) REFERENCES DEPARTMENT(DNumber)
);
