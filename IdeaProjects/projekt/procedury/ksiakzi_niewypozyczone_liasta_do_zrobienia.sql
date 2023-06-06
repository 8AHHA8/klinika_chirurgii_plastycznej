-- ksiazki ktore sa wypozyczone ale nie sa zarezerwowane i wszystkie ktore nie sa wypozyczone i nie sa zarezerwowane

SELECT * FROM borrowing b
WHERE b.book_id NOT IN (SELECT r.book_id FROM reservation r WHERE TO_DATE(r.reservation_date, 'DD/MM/YY') < TO_DATE(b.borrow_date, 'DD/MM/YY'))
AND b.return_date IS NULL;

SELECT * FROM book b
WHERE b.id NOT IN (SELECT b.book_id FROM borrowing b WHERE b.return_date IS NOT NULL);

INSERT INTO book VALUES(book_seq.NEXTVAL, 'Lalka', TO_DATE('20/02/10', 'DD-MM-YY'), 'HARD', 6, 6);
SELECT * FROM BOOK;
INSERT INTO borrowing VALUES(10, TO_DATE(sysdate, 'DD/MM/YY'), null, 31, 11, 0);
SELECT * FROM borrowing;
INSERT INTO reservation VALUES(13, TO_DATE('31/05/23', 'DD-MM-YY'), 31, 11);

UPDATE borrowing SET return_date = TO_DATE('01/06/23', 'DD/MM/YY') WHERE borrowing.id = 10;

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

--TRUNCATE TABLE book;
--SELECT TO_DATE(reservation_date, 'DD-MM-YY') FROM reservation WHERE TO_DATE(reservation_date, 'DD/MM/YY') < TO_DATE(sysdate, 'DD/MM/YY');
--SELECT TO_DATE(reservation_date, 'DD-MM-YY') FROM reservation

