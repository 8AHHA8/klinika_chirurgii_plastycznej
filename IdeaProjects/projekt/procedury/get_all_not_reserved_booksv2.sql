create or replace NONEDITIONABLE PROCEDURE get_all_not_reserved_books(books_out OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN books_out FOR 
        SELECT b.* FROM book b 
        WHERE b.id IN (
            SELECT brw.book_id FROM borrowing brw
            WHERE brw.return_date IS NULL);
END;