SELECT COUNT(*) AS "nb_susc", FLOOR(AVG(price)) AS "av_susc", SUM(price) % 42 AS "ft" FROM subscription
