const birthYear = 2007;
const birthMonth = 2;
const birthDay = 24;

const today = new Date();
const currentYear = today.getFullYear();
const currentMonth = today.getMonth() + 1;
const currentDay = today.getDate();

let age = currentYear - birthYear;
if (currentMonth < birthMonth || (currentMonth === birthMonth && currentDay < birthDay)) {
    age--;
}

document.getElementById("age").textContent = age;
