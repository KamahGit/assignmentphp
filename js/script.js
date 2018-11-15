// area of a triangle


function area(base, height, hypotenuse) {
    var base = 5;
    var height = 6;
    var hypotenuse = 7;
    result = 0.5 * base * height;
    console.log("The area of a triangle sides (5,6,7) has area : " + result);
    document.getElementById("h").innerHTML = "The area of a triangle sides (5,6,7) has area : " + result;
}

// multiply and divide two numbers
function calc(num1, num2) {
    multiply = num1 * num2;
    divide = num1 / num2;
    console.log(num1 + "x" + num2 + " = " + multiply + "\n");
    console.log(num1 + "➗" + num2 + " = " + divide + "\n");
}

//date
function age(dateOfBirth) {
    var name = "James";
    var date = new Date();
    // var names = "" + name;
    today = date.getFullYear();
    result = today - dateOfBirth;
    console.log(name+" born " +dateOfBirth+" is "+result+" years old");
    document.getElementById("h").innerHTML = name+" born "+dateOfBirth+" is "+result+" years old";
}

