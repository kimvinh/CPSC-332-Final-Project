CREATE TABLE SECTION (
  -> SNumber numeric(2),
  -> PSSN numeric(9),
  -> DNO numeric(5),
  -> CNO numeric(5),
  -> Classroom varchar(50),
  -> Seats int,
  -> MeetingDays varchar(50),
  -> BeginningTime varchar(10),
  -> EndingTime varchar(10),
  -> PRIMARY KEY (SNumber, PSSN, DNO, CNO),
  -> FOREIGN KEY (PSSN) REFERENCES PROFESSOR(SSN),
  -> FOREIGN KEY (DNO) REFERENCES DEPARTMENT(DNumber),
  -> FOREIGN KEY (CNO) REFERENCES COURSE(CNumber)
);
