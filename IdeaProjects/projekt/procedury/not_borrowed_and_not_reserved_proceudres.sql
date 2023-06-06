CREATE OR REPLACE PROCEDURE get_all_not_borrowed_books(books_out OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN books_out FOR
        SELECT b.*
        FROM book b
        WHERE NOT EXISTS (
          SELECT 1
          FROM (
            SELECT book_id, MAX(borrow_date) as last_borrow_date
            FROM borrowing
            GROUP BY book_id
          ) br
          WHERE br.book_id = b.ID
          AND br.last_borrow_date IS NOT NULL
          AND EXISTS (
            SELECT 1
            FROM borrowing
            WHERE book_id = br.book_id
            AND borrow_date = br.last_borrow_date
            AND return_date IS NULL
          )
        );
END;

CREATE OR REPLACE PROCEDURE get_all_not_reserved_books(books_out OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN books_out FOR
        SELECT b.* 
        FROM book b 
        WHERE EXISTS (
          SELECT 1 
          FROM (
            SELECT book_id, MAX(borrow_date) as max_borrow_date
            FROM borrowing
            GROUP BY book_id
          ) br
          INNER JOIN (
            SELECT book_id, MAX(reservation_date) as max_reservation_date
            FROM reservation
            GROUP BY book_id
          ) r ON br.book_id = r.book_id
          WHERE b.ID = br.book_Id 
            AND br.max_borrow_date < r.max_reservation_date
        )
        AND NOT EXISTS (
          SELECT 1
          FROM borrowing
          WHERE book_id = b.ID
            AND return_date IS NULL
        );
END;
