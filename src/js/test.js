class Calculator {
    #number1
    #number2
    
    constructor(n1,n2){
        this.#number1 = n1
        this.#number2 = n2
    }

    add() {
        return this.#number1 + this.#number2;
    }

    sub() {
        return this.#number1 - this.#number2;
    }

    mul() {
        return this.#number1 * this.#number2;
    }

    div() {
        return this.#number1 / this.#number2;
    }
}

const number1 = 5;
const number2 = 6;
const number3 = -1;

console.log("Nombre 1 : "+number1)
console.log("Nombre 2  : "+number2)
console.log("Nombre 3  : "+number3)

let calculatrice = new Calculator(number1,number2)
console.log("--- Selection "+number1+" & "+number2+" ---")
// Addition
let addition = calculatrice.add()
console.log("Addition : "+ number1+" + "+number2+" = "+addition)

// Soustraction
let Soustraction = calculatrice.sub()
console.log("Soustraction : "+ number1+" - "+number2+" = "+Soustraction)

// multiplication
let multiplication = calculatrice.mul()
console.log("multiplication : "+ number1+" * "+number2+" = "+multiplication)

// division
let division = calculatrice.div()
console.log("division : "+number1+" / "+number2+" = "+division)
console.log("--------------")

let calculatrice2 = new Calculator(number1,number3)
console.log("--- Selection "+number1+" & "+number3+" ---")
// Addition
let addition2 = calculatrice2.add()
console.log("Addition : "+ number1+" + "+number3+" = "+addition2)

// Soustraction
let Soustraction2 = calculatrice2.sub()
console.log("Soustraction : "+ number1+" - "+number3+" = "+Soustraction2)

// multiplication
let multiplication2 = calculatrice2.mul()
console.log("multiplication : "+ number1+" * "+number3+" = "+multiplication2)

// division
let division2 = calculatrice2.div()
console.log("division : "+number1+" / "+number3+" = "+division2)
console.log("--------------")