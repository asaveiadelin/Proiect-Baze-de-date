INSERT INTO category(category_name) VALUES('Laptopuri');
INSERT INTO category(category_name) VALUES('PC');
INSERT INTO category(category_name) VALUES('Jocuri');
INSERT INTO category(category_name) VALUES('Periferice');
INSERT INTO category(category_name) VALUES('Accesorii');

INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Laptop Lenovo Legion',3500,'laptopuri/1.Laptop Lenovo Legion.jpg','Model Y530-15ICH,Procesor Intel Core i5-8300H,Full HD,NVIDIA GeForce GTX 1050 Ti 4GB',(SELECT category_id from category WHERE category_name='Laptopuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Laptop MSI GT75',21000,'laptopuri/2.Laptop MSI GT75.jpg','Model 8RF-075RO,Procesor Intel Core i9-8950HK,Full HD,NVIDIA GeForce GTX 1070 8GB',(SELECT category_id from category WHERE category_name='Laptopuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Laptop MSI GT73',11000,'laptopuri/3.Laptop MSI GE73.jpg','Model RGB 8RF,Procesor Intel Core i7-8750H,Full HD,NVIDIA GeForce GTX 1070 8GB',(SELECT category_id from category WHERE category_name='Laptopuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Laptop Acer Predator',5500,'laptopuri/4.Laptop Acer Predator.jpg','Model PH317-52-72YW,Procesor Intel Core i7-8750H,Full HD, NVIDIA GeForce GTX 1060 6GB',(SELECT category_id from category WHERE category_name='Laptopuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Laptop Tuf',3499,'laptopuri/5.Laptop Asus Tuf.jpg','Model FX504GD,Procesor Intel Core i7-8750H,Full HD,NVIDIA GeForce  GTX 1050 4GB ',(SELECT category_id from category WHERE category_name='Laptopuri'));


INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Sistem PC Gaming X',1500,'sistemePC/1.Sistem PC Gaming 457.jpg','Model 457,Procesor Intel CoreI5 4570,16GB RAM, 240 SSD',(SELECT category_id from category WHERE category_name='PC'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Sistem PC Gaming Intel',7500,'sistemePC/2.Sistem PC Gaming intel.jpg','Model 600,Procesor INTEL Coffee i9-9900K,16GB RAM, 240 SSD',(SELECT category_id from category WHERE category_name='PC'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Sistem PC Gaming XR',2000,'sistemePC/3.Sistem PC Gaming 457.jpg','Model 300,Procesor Intel CoreI5 4570,8GB RAM, 240 SSD',(SELECT category_id from category WHERE category_name='PC'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Sistem PC Gaming Asus',6000,'sistemePC/4.Sistem PC Asus.jpg','Model 5,Procesor Intel CoreI7 8700,16GB RAM,1 TB HDD',(SELECT category_id from category WHERE category_name='PC'));

INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Joc Fifa19',100,'jocuri/1.Joc Fifa19.jpg','FIFA 19 ofera o experienta de campion pe teren. Prezentarea prestigioasa a Ligii Campionilor UEFA.',(SELECT category_id from category WHERE category_name='Jocuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Joc World of Warcraft',200,'jocuri/2.Joc World of Warcraft.jpg','Joc World of Warcraft comemoreaza un moment important din istoria jocurilor, oferind o serie de obiecte rare.',(SELECT category_id from category WHERE category_name='Jocuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Joc Grand Theft Auto V',600,'jocuri/3.Joc Grand Theft Auto V.jpg','Grand Theft Auto V intra in vietile a trei infractori, Michael, Franklin si Trevor',(SELECT category_id from category WHERE category_name='Jocuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Joc Fornite Deep Freez',500,'jocuri/4.Joc Fornite Deep Freeze.jpg','Fornite Deep Freeze ofera o experienta inedita de supravietuitor impotriva tuturor',(SELECT category_id from category WHERE category_name='Jocuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Joc Forza Horizon 4',300,'jocuri/5.Joc Forza Horizon 4.jpg','Explorati peisaje frumoase, colecteaza peste 450 de masini si deveniti un Superstar Horizon in istoricul Marii Britanii. ',(SELECT category_id from category WHERE category_name='Jocuri'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Joc Mortal Kombat 11',500,'jocuri/6.Joc Mortal Kombat 11.jpg','Descopera o lume intensa plina de actiune in care trebuie sa iti invingi adversarii pentru a ajunge cate mai departe.',(SELECT category_id from category WHERE category_name='Jocuri'));

INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Tastatura Razor',300,'periferice/1.Tastatura Razor.jpg','Model Ornata,numar taste:104,Anti-Ghosting,Iluminare 16 milioane culori',(SELECT category_id from category WHERE category_name='Periferice'));
INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Kit Redragon',150,'periferice/2.Kit Redragon.jpg','Model S107,compus din 1 tastatura,1 mouse si un mousepad Dyaus',(SELECT category_id from category WHERE category_name='Periferice'));

INSERT INTO products(product_name,product_price,product_image,product_describe,category_id) VALUES('Volan Thrustmaster',3000,'accesorii/1.Volan Thrustmaster.jpg','Model T300,diametru 30cm,contine pedate si schimbator de vitere cu 2 clapete',(SELECT category_id from category WHERE category_name='Accesorii'));


INSERT INTO users(user_name,email,pwd) VALUES('alex1','alex@yahoo.com',1234);
INSERT INTO users(user_name,email,pwd) VALUES('andrei2','andrei@yahoo.com',1234);
INSERT INTO users(user_name,email,pwd) VALUES('robert3','rob@yahoo.com',1234);
INSERT INTO users(user_name,email,pwd) VALUES('boby4','bob@yahoo.com',1234);
INSERT INTO users(user_name,email,pwd) VALUES('raduq','radu@yahoo.com',1234);

INSERT INTO users_details(first_name,last_name,address,phone,user_id) VALUES ('Alex','Popescu','Strada nr1','0745948691',1);
INSERT INTO users_details(first_name,last_name,address,phone,user_id) VALUES ('Andrei','Ionescu','Strada nr2','0744554892',2);
INSERT INTO users_details(first_name,last_name,address,phone,user_id) VALUES ('Robert','Dascalu','Strada nr3','0748769330',3);
INSERT INTO users_details(first_name,last_name,address,phone,user_id) VALUES ('Boby','King','Strada nr4','0740095678',4);
INSERT INTO users_details(first_name,last_name,address,phone,user_id) VALUES ('Radu','Raj','Strada nr5','0747448996',5);

INSERT INTO transactions(transaction_date,user_id) VALUES(CURRENT_DATE(),1);
INSERT INTO transactions(transaction_date,user_id) VALUES('2019-01-03',2);
INSERT INTO transactions(transaction_date,user_id) VALUES('2019-04-13',3);
INSERT INTO transactions(transaction_date,user_id) VALUES('2019-07-27',4);
INSERT INTO transactions(transaction_date,user_id) VALUES('2019-05-14',5);

INSERT INTO transactions_elements(transaction_id,product_id) VALUES(1,4);
INSERT INTO transactions_elements(transaction_id,product_id) VALUES(1,5);
INSERT INTO transactions_elements(transaction_id,product_id) VALUES(2,10);
INSERT INTO transactions_elements(transaction_id,product_id) VALUES(3,8);
INSERT INTO transactions_elements(transaction_id,product_id) VALUES(4,9);

INSERT INTO cart(user_id,product_id) VALUES(1,9);
INSERT INTO cart(user_id,product_id) VALUES(2,10);
INSERT INTO cart(user_id,product_id) VALUES(3,11);
INSERT INTO cart(user_id,product_id) VALUES(4,14);
INSERT INTO cart(user_id,product_id) VALUES(5,17);