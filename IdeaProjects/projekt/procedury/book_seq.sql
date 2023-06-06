CREATE SEQUENCE book_seq;

SELECT book_seq.NEXTVAL FROM DUAL; -- to get the next value

CREATE OR REPLACE TRIGGER book_id_inc 
BEFORE INSERT ON book
FOR EACH ROW

BEGIN
  SELECT book_seq.NEXTVAL
  INTO   :new.id
  FROM   dual;
END;