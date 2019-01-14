SELECT UPPER(user_card.last_name) as 'NAME', user_card.first_name, subscription.price FROM member
INNER JOIN user_card on user_card.id_user=member.id_user_card
INNER JOIN subscription on subscription.id_sub=member.id_sub
WHERE subscription.price > 42
ORDER BY user_card.last_name ASC, user_card.first_name ASC;