CREATE OR REPLACE PROCEDURE deactive_user 
AS
BEGIN
    UPDATE person p
    SET is_active = CASE
                    WHEN (SELECT MAX(TO_DATE(borrow_date, 'DD-MM-YYYY')) FROM borrowing b 
                          WHERE person_id = p.id) < (TO_DATE(sysdate, 'DD-MM-YYYY') - interval '1' year) THEN 0
                          ELSE 1
                    END;
END;

BEGIN 
   dbms_scheduler.create_job ( 
    job_name => 'USER_DEACTIVER', 
    job_type => 'STORED_PROCEDURE', 
    job_action => 'deactive_user', 
    start_date => SYSTIMESTAMP, 
    enabled => true, 
    repeat_interval => 'freq=DAILY; INTERVAL=1;'
   ); 
END;

--SELECT * FROM PERSON;
--
--SELECT MAX(borrow_date) FROM borrowing b
--JOIN person p ON p.id = b.person_id;
--
--DECLARE 
--v_date DATE;
--BEGIN
-- SELECT MAX(borrow_date) INTO v_date FROM borrowing b 
--                JOIN person p ON p.id = b.person_id
--                WHERE person_id = p.id;
--                
--    IF TO_DATE(v_date, 'DD-MM-YYYY') < TO_DATE(sysdate, 'DD-MM-YYYY') - interval '1' YEAR
--    THEN DBMS_OUTPUT.PUT_LINE(v_date);
--    ELSE
--        DBMS_OUTPUT.PUT_LINE('dupa');
--    END IF;
--END;
--
----
--TRUNCATE TABLE borrowing;
------
--INSERT INTO borrowing VALUES(2, '10/01/01', sysdate, 1, 1, 0);
--
--INSERT INTO borrowing VALUES(7, '23/05/22', sysdate, 1, 1, 0);