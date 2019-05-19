# student-housing-management-system-backend
API for Student Housing Management System created for SWE444 class
This API was created using Laravl & Laravel-JWT



# API 
Here are all the API functions with their inputs and outputs and what they exaclty do

## Authentication 

#### /api/createStudentAccount
- Creates a student account  
- **input**: name, email, password, password_confirmaion
- **output**: [user data]

#### /api/login
- Returns the access token for student
- **input**: email, password
- **output**: token

#### /api/getInfo
- Returns information about the logged in student   
- **input**: token  
- **output**: id, name, emaill, created_at  

#### /api/getInfoByID
- Returns information about a student by passing his ID ( used for admin ) 
- **input**: student_id  
- **output**: id, name, emaill, created_at  

#### /api/refresh
- Creates a new token for the current student, **IMPORTANT** : last token won't be valid any more 
- **input**: token  
- **output**: token

#### /api/logout
- Invalidates the current token for the student   
- **input**: token  
- **output**: message

## Rooms 

#### /api/getAllRooms
- Returns all the rooms in the dorm
- **input**: [nothing]     
- **output**: [list of the rooms]

#### /api/getStudentRoom
- Returns the current room from for the logged in student
- **input**: token     
- **output**: id, room_number, building, wing, floor, student_id

#### /api/setStudentRoom
- Assigns a student to available room ( room must not be assigned to anther student ) and if the student has a room it will change his existing room to the given room.
- **input**: token, room_id     
- **output**: id, room_number, building, wing, floor, student_id

#### /api/clearStudentRoom
- Removes a student from a room ( student should have a room ) 
- **input**: token,      
- **output**: id, room_number, building, wing, floor, student_id ( of the cleared room ) 

#### /api/getRoomInfo
- Returns information about the given room 
- **input**: room_id,      
- **output**: id, room_number, building, wing, floor, student_id 

#### /api/getRoomID
- Returns the id if of the room given its building and number
- **input**: room_number, building   
- **output**: room_id

#### /api/getRoomsForWing
- Returns the rooms for a specifi building, floor, and wing
- **input**: building, floor, wing   
- **output**: [list of rooms that are in the wing]

#### /api/getRoomsCount
- Returns the number of all rooms in the dorm
- **input**: [nothing]  
- **output**: [number]

#### /api/getAvailableRoomsCount
- Returns the number of empty rooms in the dorm
- **input**: [nothing]
- **output**: [number]

#### /api/getStudentForRoom
- Returns the student of the given room  
- **input**: room_id
- **output**: id, name, emaill, created_at

## Complaints 

#### /api/getAllComplaints
- Returns all the complaints in the database each with an object that holds information about the room 
- **input**: [nothing]
- **output**: [list of complaints]

#### /api/createComplaint
- Creates complaint for the logged in user 
- **input**: token, title, description
- **output**: title, description, student_id, replay, stutus, created_at

#### /api/closeComplaint
- Marks the complaint status as closed, and returns the updated complaint
- **input**: complaint_id
- **output**: title, description, student_id, replay, stutus, created_at

#### /api/replaytoComplaint
- Sets a reply for a given complaint id
- **input**: complaint_id
- **output**: title, description, student_id, replay, stutus, created_at


#### /api/getComplaintsForStudent
- Returns all the complaints submitted by the logged in student
- **input**: token
- **output**: [list of complaints]
