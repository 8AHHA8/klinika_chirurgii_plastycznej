create or replace NONEDITIONABLE PROCEDURE login(
  p_email IN VARCHAR2,
  p_password IN VARCHAR2,
  c_result OUT SYS_REFCURSOR
)
AS
  v_count NUMBER(1);
BEGIN
  SELECT COUNT(*)
  INTO v_count
  FROM person
  WHERE email = p_email AND password = p_password;

  IF v_count = 1 THEN
    OPEN c_result FOR
        SELECT * FROM person WHERE email = p_email AND password = p_password;
  END IF;
END;
