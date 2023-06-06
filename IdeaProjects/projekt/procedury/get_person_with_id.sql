CREATE OR REPLACE PROCEDURE get_person_with_id(
    person_id IN NUMERIC,
    c_person out SYS_REFCURSOR
)
AS
BEGIN
    OPEN c_person FOR
        SELECT * FROM person WHERE id = person_id;
END;

variable rc refcursor;
EXECUTE get_person_with_id(6, :rc);
print rc
