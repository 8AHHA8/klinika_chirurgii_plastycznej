CREATE OR REPLACE PROCEDURE delete_book(book_id_in IN NUMBER)
AS
BEGIN
    DELETE FROM book WHERE book.id = book_id_in;
END;