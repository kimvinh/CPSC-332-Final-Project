/* Query 3
Given a course number,
List the sections of the course, including the classrooms, the meeting days and time,
and the number of students enrolled in each section */

SELECT SNumber, Classroom, MeetingDays, BeginningTime, EndingTime, COUNT(SCWID) Number_of_Students
FROM SECTION, ENROLLMENT
WHERE SECTION.CNO = "Course Number" AND SECTION.CNO = ENROLLMENT.CNO AND SNumber = ENROLLMENT.SNO
