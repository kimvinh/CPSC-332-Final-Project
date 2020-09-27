/* Query 4
Given the campus wide ID of a student,
List all courses the student took and the grades */

SELECT Title, CNumber, SNO, Grade
FROM COURSE, ENROLLMENT
WHERE SCWID = "Campus wide ID" AND CNumber = ENROLLMENT.CNO
