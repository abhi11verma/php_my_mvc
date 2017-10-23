#php_my_mvc

This is a simple php MVC framework, with minimal things required.
This will help in understanding how mvc pattern work, and role of each module in the mvc.

What is framework?

In simple terms framework is a collection of prewritten functions which does complex jobs in background providing users with just a function call. User does not need to be concerned how the code works behind all he/she need is function call.

What is MVC ?

MVC is a style of programming,a way of organizing code.It facilitates seperation of code,abstraction and encapsulation.

M: Model, is the code that intereacts with data, it handles the database connection,insertion,updation...etc. All the operation related to data are handeled by Model.

V: View, is just the markup, View is the code which is displayed to user that is All the HTML and CSS code.

C: Controller, is responsible for controlling the flow between Model and View, controller fetch the request from url , gets data served by model and feed to view to display the output to user.

![MVC overview image](https://github.com/abhi11verma/php_my_mvc/blob/master/Readme/img/mvc.png)


Structure of Our MVC Framework
There are basically 2 folders
app & public
app contains the MVC logic.
public contains all the resources accessable and shared with user.

Files and there uses:
.htaccess file : we need every request coming to our application to pass through index.php file thus we need to edit the htaccess file of apache which controlls the request in webeserver.



