
//------------- Coding Task 1

//split is to separate tge string [j,o,h,n], then we reverse it, after we joing it and we need to use "" to bring it back to a complete string  

// let reverseString = str => str.split(""). reverse().join("");
// console.log(reverseString("John"));
// console.log(reverseString("James"));

//-------------- Coding Task 2

// double check this code is not working time of vide 10:41am

// let reverseArray = array => array.reverse();
// console.log(reverseArray([1, 2, 3, 4, 5]));
// console.log(reverseArray(["I", "like", "JavaScript"]));


//-------------- coding task 3

// Array of items

const items = [
    { item: "irn bru", price: 3.25, stock: 50 },
    { item: "fanta", price: 3.98, stock: 45 },
    { item: "diet coke", price: 4.40, stock: 38 }, 
    { item: "7up", price: 3.99, stock: 42 }, 
 ];

// creating a function using a single argument 
const mostExpensiveItem = array => {

    // empty objet to add most expensice item
    let mostExpensiveObj = {};
 
    //cost tied up to the most expensive item
    let mostExpensiveItemCost = 0;
    
    //for loop to loop through the array of items

 for (let i = 0; i < array.length; i++) {

    //calculate the cost tied up on a single item
    const costTiedUpSingleItem = array[i].price * array[i].stock
    
    //check the most expensive item  
    if (costTiedUpSingleItem > mostExpensiveItemCost)
    mostExpensiveItemCost = costTiedUpSingleItem;
    mostExpensiveObj = array[i];

    }
   

    return mostExpensiveObj;

};

 console.log(mostExpensiveItem(items));
