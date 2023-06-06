CREATE OR REPLACE PROCEDURE get_book_with_id(
    book_id NUMBER,
    c_book OUT SYS_REFCURSOR
)
AS
BEGIN
    OPEN c_book FOR
        SELECT * FROM book WHERE id = book_id;
END;