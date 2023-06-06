CREATE OR REPLACE PROCEDURE set_golden_reader
AS
BEGIN
    UPDATE person p
    SET golden_reader = CASE
                        WHEN golden_reader = 0 AND (SELECT penalty FROM borrowing WHERE person_id = p.id) = 0 THEN 1
                        ELSE 0
                        END;
END;

BEGIN 
   dbms_scheduler.create_job ( 
    job_name => 'GOLDEN_READER_SETTER', 
    job_type => 'STORED_PROCEDURE', 
    job_action => 'set_golden_reader', 
    start_date => SYSTIMESTAMP, 
    enabled => true, 
    repeat_interval => 'freq=MONTHLY; BYMONTHDAY=1;'
   ); 
END;