# National Field Trial Association

## SQL Tables
Users: UserID, Name, Surname, Email, Cell, Club, Admin, profile_img<br/>
Dogs: DogID, UserID (FKEY), ClubID (FKEY), Fullname, Callname, Sex, Breed, microChip, dog_img<br/>
Events: EventID, Name, Description, Club<br/>
Competing: DogID (FKEY), EventID (FKEY)<br/>
Galleries: ImageID, EventID (FKEY), ClubID (FKEY), Source, Caption<br/>
Results: ResultID, EventID (FKEY), DogID (FKEY), Place<br/>
