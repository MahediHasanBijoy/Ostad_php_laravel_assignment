
// grade calculator function
function gradeCalculator(mark){
    if(mark >= 90 && mark <= 100){
        return "A";
    }else if(mark >= 80 && mark <= 89){
        return "B";
    }else if(mark >= 70 && mark <= 79){
        return "C";
    }else if(mark >= 60 && mark <= 69){
        return "D";
    }else if(mark >= 0 && mark <= 59){
        return "F";
    }else{
        return "The given mark is not between 0-100";
    }
}

let mark = 85;

console.log(gradeCalculator(mark));