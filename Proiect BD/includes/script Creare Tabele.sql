CREATE TABLE category (
    category_id INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    category_name VARCHAR(30) NOT NULL
);
ALTER TABLE category AUTO_INCREMENT=1;
ALTER TABLE category ADD CONSTRAINT category_category_name_uk UNIQUE ( category_name );

CREATE TABLE products (
    product_id         INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    product_name       VARCHAR(30) NOT NULL,
    product_price      NUMERIC(6) NOT NULL,
    product_describe   VARCHAR(500),
    product_image      LONGTEXT NOT NULL,
    category_id        INTEGER NOT NULL
);

ALTER TABLE products AUTO_INCREMENT=1;
ALTER TABLE products ADD CONSTRAINT products_product_name_uk UNIQUE ( product_name );
ALTER TABLE products ADD CONSTRAINT products_product_price_ck CHECK ( product_price > 0 );


CREATE TABLE users (
    user_id      INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_name    VARCHAR(50) NOT NULL,
    email        VARCHAR(100) NOT NULL,
	pwd          VARCHAR(100) NOT NULL
);
	
ALTER TABLE users AUTO_INCREMENT=1;
ALTER TABLE users ADD CONSTRAINT users_user_name_uk UNIQUE ( user_name );

ALTER TABLE users ADD CONSTRAINT users_email_ck CHECK ( email LIKE '%@%.%' );
ALTER TABLE users ADD CONSTRAINT users_email_uk UNIQUE ( email );

CREATE TABLE users_details(
    first_name   VARCHAR(50) NOT NULL,
    last_name    VARCHAR(50) NOT NULL,
    address      VARCHAR(500) NOT NULL,
    phone        VARCHAR(10) NOT NULL,
	user_id      INTEGER NOT NULL
);
ALTER TABLE users_details ADD CONSTRAINT users_phone_ck CHECK ( phone LIKE '0%' );
ALTER TABLE users_details ADD CONSTRAINT users_users_details_fk FOREIGN KEY ( user_id ) REFERENCES users ( user_id );

CREATE TABLE cart (
    product_id   INTEGER PRIMARY KEY NOT NULL,
    user_id      INTEGER NOT NULL
);

CREATE TABLE transactions (
    transaction_id     INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    transaction_date   DATE NOT NULL,
    user_id            INTEGER NOT NULL

);
ALTER TABLE transactions AUTO_INCREMENT=1;

CREATE TABLE transactions_elements (
    transaction_element_id   INTEGER AUTO_INCREMENT PRIMARY KEY NOT NULL,
    transaction_id           INTEGER NOT NULL,
    product_id               INTEGER NOT NULL
);
ALTER TABLE transactions_elements AUTO_INCREMENT=1;



ALTER TABLE products ADD CONSTRAINT category_products_fk FOREIGN KEY ( category_id ) REFERENCES category ( category_id );

ALTER TABLE transactions_elements ADD CONSTRAINT prod_trans_elem_fk FOREIGN KEY ( product_id ) REFERENCES products ( product_id );

ALTER TABLE cart ADD CONSTRAINT products_cart_fk FOREIGN KEY ( product_id ) REFERENCES products ( product_id );

ALTER TABLE transactions_elements ADD CONSTRAINT trans_trans_elem_fk FOREIGN KEY ( transaction_id ) REFERENCES transactions ( transaction_id );

ALTER TABLE cart ADD CONSTRAINT users_cart_fk FOREIGN KEY ( user_id ) REFERENCES users ( user_id );

ALTER TABLE transactions ADD CONSTRAINT users_transactions_fk FOREIGN KEY ( user_id ) REFERENCES users ( user_id );