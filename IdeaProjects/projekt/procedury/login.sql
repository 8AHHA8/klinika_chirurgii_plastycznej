CREATE OR REPLACE PROCEDURE login(
  p_email IN VARCHAR2,
  p_password IN VARCHAR2,
  p_result OUT BOOLEAN
)
AS
  v_count NUMBER(1);
BEGIN
  SELECT COUNT(*)
  INTO v_count
  FROM person
  WHERE email = p_email AND password = p_password;

  IF v_count = 1 THEN
    p_result := TRUE;
  ELSE
    p_result := FALSE;
  END IF;
END;
