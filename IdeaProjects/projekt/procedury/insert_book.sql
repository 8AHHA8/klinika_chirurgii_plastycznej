CREATE OR REPLACE PROCEDURE insert_book(
    in_title            IN book.title%TYPE,
    in_publication_date IN book.publication_date%TYPE,
    in_cover            IN book.cover%TYPE,
    in_publisher_id     IN book.publisher_id%TYPE,
    in_genre_id         IN book.genre_id%TYPE
)
AS
BEGIN
    INSERT INTO book VALUES(null, in_title, in_publication_date, in_cover, in_publisher_id, in_genre_id); 
END;

EXECUTE insert_book('dupa', TO_DATE(sysdate, 'DD-MM-YYYY'), 'HARD', 1, 1);
