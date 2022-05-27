## DY.ID

The DY.ID web app project is a group project for the laboratory class of the Web Programming course. The web app is created for DY.ID, an imaginary e-commerce company, and features different functionalities for visitors, members, and admins. The website allows visitors to only view the existing products of the product. As for members, they can view and also order thhe produccts. Lastly, the admins can manage the categories and products.



## Features
- Visitor: View products and product details.
- Member: View products and product details, Order, Cart, and Transaction History.
- Admin: View products and product details, Manage Product (View, Add, Update, and Delete Product), and Manage Category (View, Add, Update, Delete Category).



## Tools
- Laravel
- HTML5
- CSS
- PHP
- Bootstrap
- XAMPP (with MySQL database)



### Screenshots
- Home 
![1](https://user-images.githubusercontent.com/79920236/170665471-9f00aa22-9cd6-4b4f-8316-92b78bcbfab6.png)

- Product Detail
![5](https://user-images.githubusercontent.com/79920236/170665492-b53fe7d1-6b7b-42ca-a89c-66270a99d391.png)

- History Transaction
![2](https://user-images.githubusercontent.com/79920236/170665530-d38685cb-d9bd-472c-bb91-903df57bab31.png)

- Manage Category
![4](https://user-images.githubusercontent.com/79920236/170665593-8fc62324-7ae6-4267-b1fe-f1fd73a164a9.png)

- Manage Product
![3](https://user-images.githubusercontent.com/79920236/170665609-67937c70-3865-456f-9d3b-8144f534cdb8.png)



### How to Run the App
- Required apps to install: XAMPP, Composer, Node.js
- Pull the project
- Start Apache and MySQL in XAMPP
- Create an .env file and edit the values (DB Host, DB Port, etc.) based on your setup
- Create a MySQL database with the same name as the ```DB_DATABASE``` value in the .env file of the project, which is "scananddine".
- Run ```composer update``` to update dependencies
- Run ```php artisan migrate --seed``` to create the tables and seed the data into the database
- Run ```php artisan storage:link``` to link the storage
- Run ```php artisan serve``` to run the app

