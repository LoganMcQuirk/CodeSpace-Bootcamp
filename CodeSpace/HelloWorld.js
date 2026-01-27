// Create your students array here with 5 students
let students = [
    {name: "Alice", grade: 90},
    {name: "Bob", grade: 75},
    {name: "Charlie", grade: 88},
    {name: "Diana", grade: 92},
    {name: "Eve", grade: 78}
];

// Write your printAllStudents function here
function printAllStudents(students) {
    // Use a for loop to print each student
    for (let i = 0; i < students.length; i++ ) {
        console.log(`${students[i].name}` + ': ' + `${students[i].grade}`);
    }
    
}

// Write your calculateAverage function here
function calculateAverage(students) {
    // Calculate the sum of all grades, then divide by the number of students
    let sum = 0;
    sum = 0;
    for (let i = 0; i < students.length; i++) {
        sum += students[i].grade;
    }
    return sum / students.length;
}

// Test your code:
console.log("Initial students:");
printAllStudents(students);
console.log("Average grade:", calculateAverage(students));

// Add a new student here (just add to the array directly)
students.push({name: 'Jorge', grade: 35})

// Change the second student's grade to 85
students[1].grade = 85;

// Print updated results
console.log("\nUpdated students:");
printAllStudents(students);
console.log("New average grade:", calculateAverage(students));
