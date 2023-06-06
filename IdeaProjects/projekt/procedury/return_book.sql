CREATE OR REPLACE PROCEDURE return_book (borrowing_id_in IN NUMBER)
AS
BEGIN
    UPDATE borrowing b
    SET b.return_date = sysdate WHERE borrowing_id_in = b.id;
    COMMIT;
END;