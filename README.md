Registration Form -  http://althayabeh.com/demo/web/
========================

This is built using Symfony2 and Doctrine
it works with different dabases , all you need is to change "database_driver" in parameters file to your DB type

Extra work
-------------
The sidebar menu have full control and manage (it supposed to be under admin control - but left to make it easy to notice) all entries in DB with edit and delete and create right away.

Make it works:
--------------

First: change the parameter file ( app/config/parameters.yml) ->

parameters:
    database_driver: pdo_mysql  ///your db driver
    database_host: 127.0.0.1  /// host 
    database_port: null  
    database_name: demo
    database_user: root
    database_password: root
                                  // these config for email
    mailer_transport: gmail  
    mailer_host: null
    mailer_user:  example@gmail.com
    mailer_password:  password
                               // when you get notification on the email of new registration how it looks like
    mailer_sender:    /// who is the sender
    mailer_reciver: althayabeh.mohammad@gmail.com  /// what is the email you need to recive this
    mailer_subject: 'New User registration'   /// subject
    locale: en
    secret: acb1344cdbf59e832cb2e9f84d9fb0a5aedcd236 /// this is a token to secure submittion
    
   Notes
    -------------------------------
   - no db files because I am using ORM so you can find the entity classes instead
   

   
    
