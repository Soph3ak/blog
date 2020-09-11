+Posts
    - id -> PK
    - title
    - paragraph
    - timestamp
    - posted_by -> FK(Users)
    - category -> FK(Categories)
    
+Posts_Categories
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
    
+Users_Roles  
    - users_id => FK(Users)
    - roles_id => FK(Roles)
    
+Roles
    - id -> PK
    - role_name
    

