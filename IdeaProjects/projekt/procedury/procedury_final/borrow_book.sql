create or replace NONEDITIONABLE PROCEDURE borrow_book(book_id_in IN NUMBER, person_id_in IN NUMBER)
AS
BEGIN
    INSERT INTO borrowing VALUES(borrowing_seq.NEXTVAL, sysdate, null, book_id_in, person_id_in, 0);
    COMMIT;
END;