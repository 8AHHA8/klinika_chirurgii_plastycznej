create or replace NONEDITIONABLE PROCEDURE get_person_reservations(
    p_id IN NUMBER, 
    c_reservations OUT SYS_REFCURSOR
)
AS
BEGIN
    OPEN c_reservations FOR
        SELECT * FROM reservation WHERE person_id = p_id;
END;