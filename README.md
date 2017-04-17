# National Field Trial Association

## SQL Tables
Users: UserID, Name, Surname, Email, Cell<br/>
Dogs: DogID, UserID, Fullname, Callname, Sex, Breed, Club<br/>
Events: EventID, GalleryID, ResultID, Name, Description, Club, Competing(ForeignKey)<br/>
Competing: DogID<br/>
Galleries: ImageID, EventID, Club, Source, Caption<br/>
Results: ResultID, EventID, DogID, Place<br/>
