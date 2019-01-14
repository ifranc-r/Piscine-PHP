SELECT genre.id_genre as 'id_genre',
		genre.name as 'name_genre',
 		distrib.id_distrib as 'id_distrib', 
 		distrib.name as 'name_distrib', 
 		film.title 'title_film'
 		FROM film
LEFT JOIN genre on genre.id_genre=film.id_genre 
LEFT JOIN distrib on distrib.id_distrib=film.id_distrib
WHERE genre.id_genre BETWEEN 4 AND 8;