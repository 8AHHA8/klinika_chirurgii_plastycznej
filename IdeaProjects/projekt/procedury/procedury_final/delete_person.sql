CREATE OR REPLACE PROCEDURE delete_person(person_id_in IN NUMBER)
AS
BEGIN
    DELETE FROM person WHERE person.id = person_id_in;
END;