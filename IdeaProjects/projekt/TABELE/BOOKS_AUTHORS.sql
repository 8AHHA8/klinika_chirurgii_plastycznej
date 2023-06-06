CREATE TABLE BOOKS_AUTHORS (
    author_id NUMERIC(5),
    book_id NUMERIC(5),
    
    CONSTRAINT author_fk FOREIGN KEY(author_id) REFERENCES author(id),
    CONSTRAINT book_mtm_fk FOREIGN KEY(book_id) REFERENCES book(id)
);