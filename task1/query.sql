SELECT
	phone_numbers.user_id,
	users.name,
	COUNT(phone_numbers.phone) as count_phones
FROM phone_numbers
JOIN
	users
ON
	phone_numbers.user_id = users.id
WHERE
	users.gender = 'female' AND (TIMESTAMPDIFF(YEAR, users.birthday, CURDATE())) BETWEEN 18 AND 22
GROUP BY
	phone_numbers.user_id;
