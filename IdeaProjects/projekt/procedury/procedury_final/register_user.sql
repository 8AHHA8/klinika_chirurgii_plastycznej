create or replace NONEDITIONABLE PROCEDURE register_user (
  p_first_name IN VARCHAR2,
  p_last_name IN VARCHAR2,
  p_phone_number IN VARCHAR2,
  p_email IN VARCHAR2,
  p_password IN VARCHAR2,
  c_result OUT SYS_REFCURSOR
) AS
  v_count NUMBER;
BEGIN
  IF NOT REGEXP_LIKE(p_phone_number, '^[0-9]{9}$') THEN
    RAISE_APPLICATION_ERROR(-20003, 'phone_number powinien zawieraæ dok³adnie 9 cyfr');
  END IF;

  IF NOT REGEXP_LIKE(p_email, '[^@]+@[^@]+.[^@]+') THEN
    RAISE_APPLICATION_ERROR(-20004, 'email musi zawieraæ znak "@"');
  END IF;

  SELECT COUNT(*)
  INTO v_count
  FROM Person
  WHERE email = p_email OR phone_number = p_phone_number;

  -- Jeœli u¿ytkownik o takim emailu lub numerze telefonu istnieje, zwróæ FALSE
  IF v_count <= 0 THEN
    INSERT INTO person (Id, first_name, last_name, phone_number, email, password, role, golden_reader)
        VALUES (person_seq.NEXTVAL, p_first_name, p_last_name, p_phone_number, p_email, p_password, 'user', 0);
    OPEN c_result FOR
        SELECT * FROM person WHERE email = p_email AND password = p_password;
  END IF;
END;