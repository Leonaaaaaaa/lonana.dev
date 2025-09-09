// setInterval(() => {
//     location.reload();
// }, 500);
function set_age(birthYear = 2007, birthMonth = 2, birthDay = 24) {
    const today = new Date();
    const currentYear = today.getFullYear();
    const currentMonth = today.getMonth() + 1;
    const currentDay = today.getDate();

    let age = currentYear - birthYear;
    if (currentMonth < birthMonth || (currentMonth === birthMonth && currentDay < birthDay)) {
        age--;
    }

    return age
}

