+Posts          =======belongsTo(User) , belongsToMany(Category) , hasMany(Comment)=======
    - id -> PK
    - title
    - paragraph      
    - posted_by -> FK(Users) 
    - timestamp
    
+Posts_Categories
    - id -> PK
    - posts_id        => FK(Posts)  
    - categories_id   => FK(Categories)
    
+Categories     =======belongsToMany(Post)=======
    - id -> PK
    - cate_name     
    
+Users          =======hasMany(Post) , belongsToMany(Role) , hasMany(Comment)=======
    - id -> PK
    - name 
    - email
    - password
    - phone_number
    - Avatar
    - timestamp
    
+Users_Roles  
    - id -> PK
    - users_id => FK(Users)
    - roles_id => FK(Roles)
    
+Roles          =======belongsToMany(User)=======
    - id -> PK
    - role_name
    
+Comments       =======belongsTo(Post), belongsTo(User)=======
    - id -> PK
    - comment
    - posts_id      -> FK(Posts)
    - commented_by  -> FK(Users)
    - timestamp
    


