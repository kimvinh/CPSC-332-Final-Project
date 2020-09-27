/* Query 1
Given the social security number of a professor,
List the titles, classroom, meeting days and time of his/her classes */

SELECT COURSE.Title, Classroom, MeetingDays, BeginningTime, EndingTime
FROM PROFESSOR, SECTION, COURSE
WHERE CNumber = SECTION.CNO AND SSN = PSSN AND SSN = "Social Security Number"
