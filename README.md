# National Field Trial Association

## SQL Tables
Users: User_ID, Firstname, Lastname, Email, Cell, Password, Profile_Img, Club, Admin<br/>
Dogs: Dog_ID, User_ID (FKEY), Club, Fullname, Callname, Sex, Breed, Microchip, Dog_Img<br/>
Events: Event_ID, Name, Description, Date, Club<br/>
Competing: ID, Dog_ID (FKEY), Event_ID (FKEY), User_ID (FKEY)<br/>
Galleries: Gallery_ID, Event_ID (FKEY), Name, Description, Club<br/>
Images: Image_ID, Gallery_ID (FKEY), Title, Caption, Source<br/>
Results: Result_ID, Event_ID (FKEY), Dog_ID (FKEY), Place<br/>
