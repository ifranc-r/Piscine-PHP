SELECT title as 'Title', summary as 'Sumarry', prod_year FROM film
INNER JOIN genre on genre.id_genre= film.id_genre
WHERE genre.name = 'erotic'
ORDER BY prod_year DESC;