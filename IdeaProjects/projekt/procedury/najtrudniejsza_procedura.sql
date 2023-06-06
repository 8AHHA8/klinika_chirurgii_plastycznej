CREATE OR REPLACE PROCEDURE get_all_borrowed_books_but_not_reserved_and_all_not_borrowed_and_reserved(books_out OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN books_out FOR
        SELECT B.ID, B.TITLE
            FROM BOOK B
            WHERE B.ID NOT IN (
        SELECT R.BOOK_ID
        FROM (
                SELECT BOOK_ID, MAX(RESERVATION_DATE) AS MAX_RES_DATE
                FROM RESERVATION
                GROUP BY BOOK_ID
        ) R
        INNER JOIN (
            SELECT BOOK_ID, MAX(BORROW_DATE) AS MAX_BORROW_DATE, return_date
            FROM BORROWING
            GROUP BY BOOK_ID, return_date
        ) BRW
        ON R.BOOK_ID = BRW.BOOK_ID
        WHERE R.MAX_RES_DATE < BRW.MAX_BORROW_DATE AND BRW.return_date IS NULL
        );

END;