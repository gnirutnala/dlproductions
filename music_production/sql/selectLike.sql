-- use this statement to test query before deleting with DELETE statement
SELECT * FROM tasks
WHERE task LIKE '%January%'
OR task LIKE '%February%'
OR task LIKE '%March%'
OR task LIKE '%April%'
OR task LIKE '%May%';



-- use this statement to delete elements where column "x" contains value "y"
DELETE FROM tasks WHERE task LIKE '%January%'
         OR task LIKE '%February%'
         OR task LIKE '%March%'
         OR task LIKE '%April%'
         OR task LIKE '%May%';
