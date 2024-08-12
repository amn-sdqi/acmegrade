All WEB dev compabies comes under two business model

Advertising model
Subscription Model


E Commerce is a demanding and complex platform to develop which focuses on
    Engaging content to user
    Make a seamless user journey through the website
    Machine learning model to built a profile of the customer(needs,wants etc..)
    Give appropriate suggestion of products based on customer past preference
    Secured Authentication Model
    

Product Idea
Market/Competitor analysis
Unique selling point(USP)
Business reqirement Document- Business Analyst
Architecture - Solution Architect
    Code
        UI Modules
        API Modules
    Cloud
        EC2/ECS instance
        Lambda
        WAF
        Docker/Kubernetes
        Monolithic/Microservice        
    Security
Create Tasks-User Stories- PM/BA - SCRUM
Delivery and Best Practices - TL
DEV 
QA

DEV - CR - DEV ENV - DEV test - QA ENV- QA Inetgration Test - UAT ENV - PROD ENV


MVP Model
---------

Roles & Responsiblity

Superadmin
    Maintain the platform

SELLER
    Authentication
        Signup
            UI
                collect username,password,retype password,uesrtype,mobile
                check both password and retypes passwords are same
            API
                read the UI details and validate is username already exists
                if username is not exists ,then insert into user table
                else throw error
        Login
            UI
                collect username and password
            API
                read the UI data
                search the DB for the username and password combination for active users
                if matched get the usertype, based on the usertype redirect to different home page
                else through "Invalid credentials error"
        Database
            Read about:
                primary key
                indexing in DB
                Hard delete,Soft Delete
            USER table
                user id - unique auto incremented - UUID
                username - unique
                password 
                mobile
                email
                usertype
                status
                createddate - timestamp                
                modifieddate

    Manage Products
        Add -Done
            UI
                form enctype=multipart/formdata
                    product name
                    price
                    description
                    image
            API
                read the UI values 
                insert fields into DB
                insert image into images folder

            DB
                pid
                name
                price
                details
                image_path
                owner - userid(fk)
                createddate

        View/Search - Done
        Edit - Done
        Delete - done
    Manage Orders
        View order - Done    
        Edit Order - Done
        Close Order - Done
BUYER
    Authentication - Done
    View Products - Done
    Search products 
    Compare Products 
    Manage Cart 
        Add - done
        view - done
        delete - done
    Place order - done
    Payment Gateway - COD 
    View/Track Orders -Done
    Add Review  
    Return

Delivery Partner
    View Orders
    Manage Inventory




