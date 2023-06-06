CREATE OR REPLACE PROCEDURE count_penalty
AS
BEGIN
    UPDATE borrowing 
    SET penalty = CASE
                 WHEN penalty = 0 AND sysdate > return_date THEN 1
                 WHEN penalty > 0 AND sysdate > return_date THEN penalty + 1
                 END;
END;

BEGIN 
   dbms_scheduler.create_job ( 
    job_name => 'PENALTY_COUNTER', 
    job_type => 'STORED_PROCEDURE', 
    job_action => 'count_penalty', 
    start_date => SYSTIMESTAMP, 
    enabled => true, 
    repeat_interval => 'freq=DAILY; INTERVAL=1;'
   ); 
END;