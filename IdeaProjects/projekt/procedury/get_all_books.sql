CREATE OR REPLACE PROCEDURE get_all_books(books_out OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN books_out FOR
        SELECT * FROM book;
END;
