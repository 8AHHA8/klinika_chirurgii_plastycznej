CREATE OR REPLACE PROCEDURE register_user (
  p_first_name IN VARCHAR2,
  p_last_name IN VARCHAR2,
  p_phone_number IN VARCHAR2,
  p_email IN VARCHAR2,
  p_password IN VARCHAR2,
  p_result OUT BOOLEAN
) AS
  v_count NUMBER;
BEGIN
  -- Sprawdzenie czy email lub numer telefonu istniej¹ w bazie
  SELECT COUNT(*)
  INTO v_count
  FROM Person
  WHERE email = p_email OR phone_number = p_phone_number;

  -- Jeœli u¿ytkownik o takim emailu lub numerze telefonu istnieje, zwróæ FALSE
  IF v_count > 0 THEN
    p_result := FALSE;
  ELSE
    -- Dodaj nowego u¿ytkownika
    INSERT INTO person (Id, first_name, last_name, phone_number, email, password, role, golden_reader)
    VALUES (4, p_first_name, p_last_name, p_phone_number, p_email, p_password, 'user', 0);

    p_result := TRUE;
  END IF;

EXCEPTION
  WHEN OTHERS THEN
    p_result := FALSE;
END;