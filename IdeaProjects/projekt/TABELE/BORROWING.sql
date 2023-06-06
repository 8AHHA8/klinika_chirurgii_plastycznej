CREATE TABLE BORROWING (
    id NUMERIC(5),
    borrow_date DATE,
    return_date DATE,
    book_id NUMERIC(5),
    person_id NUMERIC(5),
    penalty NUMBER(10, 4),
    
    CONSTRAINT borrowing_pk PRIMARY KEY(id),
    CONSTRAINT book_id FOREIGN KEY(book_id) REFERENCES book(id),
    CONSTRAINT person_fk FOREIGN KEY(person_id) REFERENCES person(id)
);