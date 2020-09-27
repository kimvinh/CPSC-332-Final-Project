/* Query 2
Given a course number and a section number,
Count how many students get each distinct grade, i.e. 'A', 'A-', 'B+', 'B', 'B-' */

SELECT Grade, COUNT(SCWID) Number_of_Students
FROM ENROLLMENT
WHERE CNO = "Course Number" AND SNO = "Section Number"
GROUP BY Grade
