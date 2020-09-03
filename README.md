# PHP-Login
Basic website showing a PHP login form.

This is just a personal project I did to build a super basic login form with PHP authentication, and a few validation rules. This requires a MySQL database with a table named users, and two rows with a username and password field.

Alternatively, you can run the following queries in MySQL to set up the schema.
```
CREATE DATABASE loginSystem;
```

```
CREATE TABLE(
     username VARCHAR(20)
     password VARCHAR(20)
);
```

<br>
### To Do:
<ul>
<li>Add more validation rules such as special characters in the password, etc</li>
<li><strong>Completed 8/1-</strong>   Add confirm password field in registration</li>
<li>Encrypt passwords in database</li>
<li>Add a delete account button</li>
<li>Add required fields in the username and password areas in both pages</li>
</ul>
