+Posts
    - id -> PK
    - title
    - paragraph      
    - posted_by -> FK(Users)
    - category  -> FK(Categories)   
    - timestamp
    
+Posts_Categories
    - id -> PK
    - posts_id        => FK(Posts)
    - categories_id   => FK(Categories)
    
+Categories
    - id -> PK
    - name
    
+Users
    - id -> PK
    - username 
    - email
    - password
    - phone
    - role -> FK(Roles)
    - Avatar
    - timestamp
    
+Users_Roles  
    - id -> PK
    - users_id => FK(Users)
    - roles_id => FK(Roles)
    
+Roles
    - id -> PK
    - role_name
    
+Comments
    - id -> PK
    - comment
    - posts_id      -> FK(Posts)
    - commented_by  -> FK(Users)
    - timestamp
    


