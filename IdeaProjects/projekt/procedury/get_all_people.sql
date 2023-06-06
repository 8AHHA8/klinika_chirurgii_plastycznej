CREATE OR REPLACE PROCEDURE get_all_people(people_out OUT SYS_REFCURSOR) 
AS
BEGIN
    OPEN people_out FOR 
    SELECT * FROM person;
    
    CLOSE people_out;
END;