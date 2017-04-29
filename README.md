# National Field Trial Association

## SQL Tables
Users: UserID, Name, Surname, Email, Cell, Club, Admin, profile_img<br/>
Dogs: DogID, UserID (FKEY), Fullname, Callname, Sex, Breed, Club<br/>
Events: EventID, Name, Description, Club<br/>
Competing: DogID (FKEY), EventID (FKEY)<br/>
Galleries: ImageID, EventID (FKey), Club, Source, Caption<br/>
Results: ResultID, EventID (FKey), DogID (FKey), Place<br/>
