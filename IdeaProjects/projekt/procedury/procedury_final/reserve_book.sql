create or replace NONEDITIONABLE PROCEDURE reserve_book(book_id_in IN NUMBER, person_id_in IN NUMBER)
AS
BEGIN
    INSERT INTO reservation VALUES(reservation_seq.NEXTVAL, sysdate, book_id_in, person_id_in);
    COMMIT;
END;