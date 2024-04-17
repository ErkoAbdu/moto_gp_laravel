# Laravel MotoGP CMS

## About 
This project was mainly created for personal reasons as I am a passionate gearhead when it comes to motorcycles and more specifically motorcycle racing! The thrill of seeing a machine pushing 300+horspower and flying by at over 300km per hour is a thrill. So what better way to imeress myself more into the sport than to create a CMS that has a list of riders and manufacturers. With full CRUD functionality you can create, read, update and delete (not quite fully working yet).

## Schema and Project Details
In this project I have 2 tables, a riders table and a manufacturers table. These are connected through the database in MySQL that I setup at the start of the project. When I was creating the migrations in the intial phases of this project I started by creating the 2 columns in the manufacturers table, "manufacturer_name" and "imaageURL". From there I created the riders migration with the clolumns "fname", "lname", "team", "manufacturer_id", "nationality", "imageURL". I connected the two tables through the use of "foreignId()' function which gets the manufacturers table id and puts it as a foreign key in the riders table. 

From there I seeded my data to make sure there is no errors or connection issues from Laravel to MySQL. In the Models I specificed data that cannont be left blank. From there I started creating my routes in addition to my views. Once they were all connected and displaying data I moved onto adding the remaining CRUD functionality. To do this I made changes to each tables controller to the create, store, show, edit, update, trash and destroy fucntions. Once this was complete I installed breeze and added authentication.

## Troubles
So everything went fairly smoothly for this CMS conversion, there was a small hiccup initially when setting the project up regarding foregin keys but I got through it. The only other problem I had was in regard to deleting. I could not figure out why the delete function does not work as it says deleted and redirects back to the home page but the row is still in the database. It probably has something to do with the soft-deletes but besides this everything else went smoothly.

## Thoughts on Laravel
Personally I really enjoy Laravel! Although it takes some time getting used to all the php artisan commands, once you start working through it, its very straight forward. I would really like to see how creating a portfolio through Laravel would look, or even how to consume APIs with it or creating our own!

## User Flow
![MotoGP CMS Flow1](/flow/flow1.png "MotoGP CMS Flow1")
![MotoGP CMS Flow2](/flow/flow2.png "MotoGP CMS Flow2")
![MotoGP CMS Flow3](/flow/flow3.png "MotoGP CMS Flow3")
![MotoGP CMS Flow4](/flow/flow4.png "MotoGP CMS Flow4")
![MotoGP CMS Flow5](/flow/flow5.png "MotoGP CMS Flow5")
![MotoGP CMS Flow6](/flow/flow6.png "MotoGP CMS Flow6")
![MotoGP CMS Flow7](/flow/flow7.png "MotoGP CMS Flow7")
![MotoGP CMS Flow8](/flow/flow8.png "MotoGP CMS Flow8")
![MotoGP CMS Flow9](/flow/flow9.png "MotoGP CMS Flow9")
![MotoGP CMS Flow10](/flow/flow10.png "MotoGP CMS Flow10")
![MotoGP CMS Flow11](/flow/flow11.png "MotoGP CMS Flow11")
