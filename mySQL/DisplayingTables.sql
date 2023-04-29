use bitesabroad;

SELECT * FROM bitesabroad.meals;
SELECT * FROM cuisine_Type;
SELECT * FROM dietary_Type;
SELECT * FROM items;
SELECT * FROM inventory;
SELECT * FROM cart;

SELECT title, description, price, serving, cuisine, dietary, stock FROM items, cuisine_Type, dietary_Type, inventory
	WHERE items.meal_ID = inventory.meal_ID 
    AND items.cuisine_ID = cuisine_Type.cuisine_ID
    AND items.dietary_ID = dietary_Type.dietary_ID;

SELECT DISTINCT user_ID, title, price, serving, quantity FROM items, cart
	WHERE items.meal_ID = cart.meal_ID;
    
-- Set @combinedString = "";
    
SELECT distinct title, description, price, serving, cuisine, group_concat(dietary) as dietary, stock FROM items
	left join cuisine_Type ON items.cuisine_ID = cuisine_Type.cuisine_ID
    left join dietary_Type ON items.dietary_ID = dietary_Type.dietary_ID
    left join inventory ON items.meal_ID = inventory.meal_ID
    group by items.title, items.description, items.price, items.serving, cuisine_Type.cuisine, inventory.stock;

SELECT * FROM users;

select distinct items.meal_ID, items.title, inventory.stock FROM items  
    left join inventory ON inventory.meal_ID = items.meal_ID;

SELECT * FROM cart;