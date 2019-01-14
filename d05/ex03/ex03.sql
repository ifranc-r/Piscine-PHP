INSERT INTO `db_ifranc-r`.ft_table (login, `group`, creation_date)
select last_name, 'other', cast(birthdate as date) from user_card 
where last_name like '%a%' and char_length(last_name) < 9 
ORDER BY last_name 
limit 10;
