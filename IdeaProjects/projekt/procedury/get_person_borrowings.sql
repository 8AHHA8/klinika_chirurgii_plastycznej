CREATE OR REPLACE PROCEDURE get_person_borrowings(
    p_id IN NUMBER, 
    c_borrowings OUT SYS_REFCURSOR
)
AS
BEGIN
    OPEN c_borrowings FOR
        SELECT * FROM borrowing WHERE person_id = p_id;
END;
