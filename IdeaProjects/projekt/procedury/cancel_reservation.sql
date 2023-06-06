CREATE OR REPLACE PROCEDURE cancel_reservation 
AS 
    v_reservation_id NUMBER;
    i                NUMBER := 1;
    
    CURSOR c_reservations IS
        SELECT r.id FROM reservation r
        WHERE TO_DATE(r.reservation_date, 'DD-MM-YY') < TO_DATE(sysdate - 3, 'DD-MM-YY');
BEGIN
    OPEN c_reservations;
    LOOP
        FETCH c_reservations INTO v_reservation_id;
        DELETE FROM reservation r WHERE r.id = v_reservation_id;
        i := i + 1;
        EXIT WHEN c_reservations%NOTFOUND;
    END LOOP;
    CLOSE c_reservations;
END;

BEGIN 
   dbms_scheduler.create_job ( 
    job_name => 'RESERVATION_CANCELER', 
    job_type => 'STORED_PROCEDURE', 
    job_action => 'cancel_reservation', 
    start_date => SYSTIMESTAMP, 
    enabled => true, 
    repeat_interval => 'freq=DAILY; INTERVAL=1;'
   ); 
END;

--SELECT * FROM reservation;

--SELECT r.id FROM reservation r WHERE r.reservation_date < (sysdate - 10);
--SELECT r.id FROM reservation r WHERE TO_DATE(r.reservation_date, 'DD-MM-YY') < TO_DATE(sysdate - 3, 'DD-MM-YY');
--SELECT TO_DATE(reservation_date - 3, 'DD-MM-Y') FROM reservation;


--INSERT INTO reservation VALUES(2, TO_DATE('17-05-23', 'DD-MM-YY'), 1, 1);