/*네이버 회원가입 페이지를 보고 테이블 구상해보기*/

CREATE TABLE n_join (
	user_id varCHAR(20) PRIMARY KEY,
	user_pw varCHAR(20) NOT NULL,
	user_name varCHAR(10) NOT NULL,
	b_year INT UNSIGNED NOT NULL,
	b_month INT UNSIGNED NOT NULL,
	b_day INT UNSIGNED NOT NULL,
	gender CHAR(1) NOT NULL,
	email VARCHAR(30),
	hp INT UNSIGNED NOT null
);

