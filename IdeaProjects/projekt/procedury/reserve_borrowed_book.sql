create or replace NONEDITIONABLE PROCEDURE borrow_reserved_book(book_id_in IN NUMBER, person_id_in IN NUMBER, reservation_id_in IN NUMBER)
AS
BEGIN
    INSERT INTO borrowing VALUES(borrowing_seq.NEXTVAL, sysdate, null, book_id_in, person_id_in, 0);
    DELETE FROM reservation WHERE id = reservation_id_in;
    COMMIT;
END;