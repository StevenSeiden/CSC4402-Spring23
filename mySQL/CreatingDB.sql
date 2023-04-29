use bitesabroad;

drop table if exists inventory;
drop table if exists cart;
drop table if exists items;
drop table if exists cuisine_Type; 
drop table if exists dietary_Type;
drop table if exists users;
drop view if exists Main;
drop view if exists Cart_View;

create table cuisine_Type(
	cuisine_ID int(3),
    cuisine varchar(20),
    primary key (cuisine_ID)
);

insert into cuisine_Type values (101, 'American');
insert into cuisine_Type values (102, 'Asian');
insert into cuisine_Type values (103, 'Caribbean');
insert into cuisine_Type values (104, 'Chinese');
insert into cuisine_Type values (105, 'French');
insert into cuisine_Type values (106, 'Greek');
insert into cuisine_Type values (107, 'Indian');
insert into cuisine_Type values (108, 'Italian');
insert into cuisine_Type values (109, 'Japanese');
insert into cuisine_Type values (110, 'Korean');
insert into cuisine_Type values (111, 'Mexican');
insert into cuisine_Type values (112, 'Middle Eastern');
insert into cuisine_Type values (113, 'Spanish');
insert into cuisine_Type values (114, 'Thai');
insert into cuisine_Type values (115, 'Vietnamese');
insert into cuisine_Type values (116, 'Mediterranean');
insert into cuisine_Type values (117, 'African');
insert into cuisine_Type values (118, 'German');
insert into cuisine_Type values (119, 'Brazilian');
insert into cuisine_Type values (120, 'Peruvian');
insert into cuisine_Type values (121, 'Argentinian');
insert into cuisine_Type values (122, 'Turkish');
insert into cuisine_Type values (123, 'Russian');
insert into cuisine_Type values (124, 'Indonesian');
insert into cuisine_Type values (125, 'Filipino');
insert into cuisine_Type values (126, 'Polish');
insert into cuisine_Type values (127, 'Moroccan');
insert into cuisine_Type values (128, 'Israeli');
insert into cuisine_Type values (129, 'Portuguese');
insert into cuisine_Type values (130, 'Swedish');
insert into cuisine_Type values (131, 'Danish');
insert into cuisine_Type values (132, 'Norwegian');
insert into cuisine_Type values (133, 'Finnish');
insert into cuisine_Type values (134, 'Irish');
insert into cuisine_Type values (135, 'Scotish');
insert into cuisine_Type values (136, 'Canadian');


create table dietary_Type(
	dietary_ID int(3),
    dietary varchar(200),
    primary key (dietary_ID)
);

insert into dietary_Type values (201, 'Pescetarian');
insert into dietary_Type values (202, 'Dairy Free');
insert into dietary_Type values (203, 'Keto');
insert into dietary_Type values (204, 'Paleo');
insert into dietary_Type values (205, 'Gluten free');
insert into dietary_Type values (206, 'Vegetarian');
insert into dietary_Type values (207, 'Vegan');
insert into dietary_Type values (208, 'Kosher');
insert into dietary_Type values (209, 'Diabetes');
insert into dietary_Type values (210, 'Hala');
insert into dietary_Type values (299, 'None'); -- No Dietary restriction

create table items(
	meal_ID int(3),
 	title varchar(50),
    description varchar(255),
    price decimal(7,2),
    serving int(2),
    cuisine_ID int(3),
    dietary_ID int(3),
	primary key (meal_ID, cuisine_ID, dietary_ID),
    foreign key (cuisine_ID) references cuisine_Type(cuisine_ID),
    foreign key (dietary_ID) references dietary_Type(dietary_ID)
);

insert into items values (001, "Beef Tacos", "Soft tortillas filled with seasoned beef, lettuce, cheese, and salsa", 8.99 , 3, 111, 201);
insert into items values (002, "Chicken Alfredo", "Fettuccine pasta with creamy parmesan sauce and grilled chicken", 12.99,	1, 108, 202);
insert into items values (002, "Chicken Alfredo", "Fettuccine pasta with creamy parmesan sauce and grilled chicken", 12.99,	1, 108, 203);   
insert into items values (002, "Chicken Alfredo", "Fettuccine pasta with creamy parmesan sauce and grilled chicken", 12.99,	1, 108, 204);
insert into items values (003, "Chicken Tikka Masala",	"Tender pieces of chicken in a creamy tomato-based sauce, served with basmati rice", 11.99, 2, 107,	205);
insert into items values (004, 	"Falafel Wrap", "Warm pita bread filled with falafel, lettuce, tomato, and tahini sauce", 8.99,	1,	112, 206); 
insert into items values (004, 	"Falafel Wrap", "Warm pita bread filled with falafel, lettuce, tomato, and tahini sauce", 8.99,	1,	112, 207);
insert into items values (005, 	"Hamburger", "Juicy beef patty with lettuce, tomato, and onion on a toasted bun", 8.99,	1,	101, 299);
insert into items values (006, 	"Korean BBQ Ribs",	"Tender pork ribs marinated in a sweet and spicy sauce", 16.99,	1,	110, 204);
insert into items values (007, 	"Mediterranean Salad",	"Fresh greens with tomatoes, cucumbers, feta cheese, and olives", 7.99,	1,	116, 206);
insert into items values (007, 	"Mediterranean Salad",	"Fresh greens with tomatoes, cucumbers, feta cheese, and olives", 7.99,	1,	116, 205);
insert into items values (007, 	"Mediterranean Salad",	"Fresh greens with tomatoes, cucumbers, feta cheese, and olives", 7.99,	1,	116, 203);
insert into items values (008, 	"Spaghetti and Meatballs",	"Classic Italian dish with spaghetti pasta and homemade meatballs in tomato sauce", 9.99, 2, 108, 202);
insert into items values (009,  "Stir-fried Beef and Broccoli",	"Thinly sliced beef and broccoli florets stir-fried in a savory sauce, served over rice", 12.99, 2, 104, 204);
insert into items values (010, 	"Veggie Pad Thai", "Stir-fried rice noodles with vegetables and peanuts in a sweet and tangy sauce", 10.99,	2, 114, 206);
insert into items values (010, 	"Veggie Pad Thai", "Stir-fried rice noodles with vegetables and peanuts in a sweet and tangy sauce", 10.99,	2, 114, 205);
insert into items values (011, "Soft Preztel", "A twisted knot of dough, typically made from wheat flour, water, yeast, salt, and sometimes sugar and oil", 3.59, 1, 118, 206);
insert into items values (012, "Hawaiian Pizza", "A type of pizza that typically includes tomato sauce, cheese, ham or Canadian bacon, and pineapple as the main toppings", 13.99, 4, 136, 299);

create table inventory(
	meal_ID int(3),
    stock int(3),
    primary key(meal_ID),
    foreign key (meal_ID) references items(meal_ID)
);

insert into inventory values (001, 129);
insert into inventory values (002, 334);
insert into inventory values (003, 72);
insert into inventory values (004, 26);
insert into inventory values (005, 9);
insert into inventory values (006, 18);
insert into inventory values (007, 999);
insert into inventory values (008, 113);
insert into inventory values (009, 212);
insert into inventory values (010, 313);
insert into inventory values (011, 423);
insert into inventory values (012, 0);

create table users (
	user_ID int(3),
    username varchar(25),
    total_items int(3),
    total_price decimal(7,2),
    primary key(user_ID)
);

insert into users values(501, "User A", 8, 99.92);   
insert into users values(502, "User B", 0, 0.00);
insert into users values(503, "User C", 0, 0.00);

create table cart(
	user_ID int(3),
    meal_ID int(3),
    quantity int(2),
    primary key(user_ID, meal_ID),
    foreign key(meal_ID) references items(meal_ID),
    foreign key(user_ID) references users(user_ID)
);

insert into cart values(501, 002, 2);
insert into cart values(501, 009, 5);
insert into cart values(501, 005, 1);

CREATE VIEW Cart_View AS
	SELECT DISTINCT user_ID, title, description, quantity, price, quantity*price AS total_price FROM cart
    left join items ON cart.meal_ID = items.meal_ID;

-- SELECT * from Cart_View;

CREATE VIEW Main AS
	SELECT distinct title, description, price, serving, cuisine, group_concat(dietary) as dietary, stock FROM items
	left join cuisine_Type ON items.cuisine_ID = cuisine_Type.cuisine_ID
    left join dietary_Type ON items.dietary_ID = dietary_Type.dietary_ID
    left join inventory ON items.meal_ID = inventory.meal_ID
    group by items.title, items.description, items.price, items.serving, cuisine_Type.cuisine, inventory.stock;
  
-- insert into cart values(501, select distinct meal_ID from items where title like "$value", 1")
    