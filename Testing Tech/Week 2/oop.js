// // this is a Class created 
// class Car {

//     // this is a Constructor method defined as "contructor" 
//     constructor(make, model){
//         this.make = make;
//         this.model = model;

//     }

//     drive(){
//         console.log('Vroom');
//     }
// }
// // this is a instance of the Class Car, which is created using the keyword New, which created a new object 
// const myCar = new Car('Toyota', 'C-HR');

// // this prints the values of the class car
// console.log(myCar.make);
// myCar.drive();



// ---------------  Encapsulate 

// class Circle {
//     // Constructor that takes the radius as a parameter
//     constructor(radius) {
//         // Instance variable to store the radius of the circle
//         this._radius = radius;
//     }

//     // Getter method to retrieve the radius (method = functions)
//     get radius() {
//         return this._radius;
//     }

//     // Setter method to set a new value for the radius (method = functions)
//     set radius(radius) {
//         this._radius = radius;
//     }

//     // Example of a method to calculate the area of the circle
//     calculateArea() {
//         return Math.PI * this.radius ** 2;
//     }
// }

// // here im creating a new instance of the object "circle"
// const myCircle = new Circle(5);

// console.log("Radius: ", myCircle.radius);
// console.log("Area: ", myCircle.calculateArea());


// // -----------changing the radius using the Setter method 

// myCircle.radius = 7;

// console.log("New Radius: ", myCircle.radius);
// console.log("New Area: ", myCircle.calculateArea());

// --------------- Abstractionn --------------

// Abstract class representing a generic bank account
class BankAccount {
    // Constructor with balance initialisation and abstract instance check
    constructor(balance) {
      // Check if an attempt is made to instantiate the abstract class directly
      if (this.constructor === BankAccount) {
        throw new TypeError("Cannot construct Abstract instances directly.");
      }
  
      // Initialise the balance property
      this.balance = balance;
    }
  
    // Abstract method for deposit
    deposit(amount) {
      // Throw an error if the abstract method is called directly from a child class
      throw new TypeError("Do not call abstract method deposit from child.");
    }
  
    // Abstract method for withdrawal
    withdraw(amount) {
      // Throw an error if the abstract method is called directly from a child class
      throw new TypeError("Do not call abstract method withdraw from child.");
    }
  }
  
  // Concrete subclass (Child) representing a savings account
  class SavingsAccount extends BankAccount {
    // Constructor with balance and interest rate initialisation
    constructor(balance, interestRate) {
      // Call the parent class constructor
      super(balance);
      // Initialise the interest rate property
      this.interestRate = interestRate;
    }
  
    // Implementing the deposit method for SavingsAccount
    deposit(amount) {
      // Calculate interest and update the balance
      this.balance += amount + (amount * this.interestRate) / 100;
    }
  
    // Implementing the withdraw method for SavingsAccount
    withdraw(amount) {
      // Check if there are sufficient funds for withdrawal
      if (amount <= this.balance) {
        this.balance -= amount;
      } else {
        console.log('Insufficient funds.');
      }
    }
  }
  
  // Concrete subclass (Child) representing a checking account
  class CheckingAccount extends BankAccount {
    // Constructor with balance and overdraft limit initialisation
    constructor(balance, overdraftLimit) {
      // Call the parent class constructor
      super(balance);
      // Initialize the overdraft limit property
      this.overdraftLimit = overdraftLimit;
    }
  
    // Implementing the deposit method for CheckingAccount
    deposit(amount) {
      // Update the balance with the deposited amount
      this.balance += amount;
    }
  
    // Implementing the withdraw method for CheckingAccount
    withdraw(amount) {
      // Check if there are sufficient funds (including overdraft limit) for withdrawal
      if (amount <= this.balance + this.overdraftLimit) {
        this.balance -= amount;
      } else {
        console.log('Insufficient funds.');
      }
    }
  }