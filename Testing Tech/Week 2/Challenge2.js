// --------------------------- Challenge 1 ----------------------------------

// creating a class for the user 
// class User {
//   // Creating a class constructor 
//   constructor(firstName, lastName ){

//     this.firstName = firstName
//     this.lastName = lastName
//   }

//   // method to say hello
//   hello(){
//     console.log(`hello, ${this.firstName} ${this.lastName}`);
//   }
// }
// creating an User Object for first user 
// const user1 = new User ("John", "Doe");

// user1.hello();

// creating an User object for second user 

// const user2 = new User ("Jane", "Doe");

// user1.hello();





// //// --------------------------- Challenge 2 -------------------------------
// //  Created a new Class called User
// class User {

// // this is the constractor Method witn the paramaters for fist and last name 
//     constructor(firstName, lastName ){
   
//     this._firstName = firstName;
//     this._lastName = lastName;

//     }
// // adding the getter and using _ to prefix private propereties 
//     get firstName() {
//         return this._firstName;
//     }
// // adding setters for first name 
//     set firstName(newFistName) {
//         this._firstName = newFistName;
//     }
// // adding getter and setter for last name 
//     get lastName() {
//         return this._lastName;
//     }

//     set lastName(newLastName) {
//         this._lastName = newLastName

//     }
// // method to say hello and include the Users first name and last name    
//     hello() {
//         return "Hello World";
//     }
// }


// const newUser = new User("John", "Dow");

// newUser.firstName = 'Juan'
// newUser.lastName = 'Rojas'

// console.log(newUser.hello());
// console.log (`My name is, ${newUser.firstName} ${newUser.lastName}`);

//--------------------- challenge 3 ----------------------------------

// // Creating a User Class
//   class User {
//     constructor(){
//       // initialise the username with a empty variable 
//       this._userName = "";
//     }

//     // setter method
        
//     set userName(userName){
//       this._userName = userName;
//     }
//   }

// // Admin Class that inherits from the User Class
// class Admin extends User {
//   // expressYourRole Method
//   expressYourRole(){
//     return 'Admin';
//   }
// // hello method, sayHello();
//   sayHello(){
//     return `Hello admin, ${this._userName}`;
//   }

// }

// // crating an admin instance Object 

// const admin = new Admin();

// // Setting user name 
// admin.userName = "Balthazar";

// // printing the information

// console.log (admin.sayHello());




// //--------------------- challenge 4 ----------------------------------

// class User {
//   // class constructor 
//   constructor() {
//     this.numberOfArticles = 0;
//   }

//   // get methods

//   get numberOfArticles(){
//     return this._numberOfArtincles;
//   }
  
//   //set methods
//   set numberOfArticles(numberOfArticles){
//     this._numberOfArtincles = numberOfArticles;
//   }

//   // calcScores() method to calculate 
//   calcScores(){
//     // to be change into sub calssess

//   }
// }
//   // Author class

// class Author extends User {
//     // override method
//     calcScores(){
//       return this.numberOfArticles * 10 + 20;
//     } 

//   }

// class Editor extends User{
//   calcScores(){
//     return this.numberOfArticles * 6 + 15;
//   }
  

// }


// const author = new Author(); 

// author.numberOfArticles = 8;


// // print author
// console.log("Author's Scores: " + author.calcScores());


// // creating a Editor instance 

// const editor = new Editor();

// editor.numberOfArticles = 15;

// // printing editor

// console.log("Editor's Score: "+ editor.calcScores());

// ------------- CHallenge 5 --------------------------

class User {
  constructor (userName ){

    if (this.constructor === User) {
      throw new TypeError ("Error")

    }

    this.userName = userName;
  }

  get userName (){
    return this._userName;
  }

  set userName(userName){
    this._userName = userName;
  }

  // Abstract Method 
  stateYourRole(){
    // prevent to be called directly 
    throw new Error ("you need to impement the method first......")
  }
}

// Class Admin 

class Admin extends User {
  // Override method 
  stateYourRole(){
    return "Admin";

  }

}

// Class Viewer
class Viewer extends User {
  constructor (userName ){
    super(userName);
  }
  stateYourRole(){
    return "Viewer";
  }

}


const admin = new Admin("Balthazar");

console.log(admin.userName); 
console.log(admin.stateYourRole());

//viewwer
const viewer = new Viewer("Melchoir");

console.log(viewer.userName); 
console.log(viewer.stateYourRole());
