const pages = [
    "hauptmenu",
    "aboutme",
    "projects",
    "games",
    "contact",
    "badges",
];

const pagenav = document.getElementById("page-nav");

let currentPage = 0;

function showPage(pageIndex) {
    let newpage = document.getElementById(pages[pageIndex]);
    let oldpage = document.getElementById(pages[currentPage]);

    if (pageIndex === currentPage) return;

    let button = pagenav.children[pageIndex];
    let oldbutton = pagenav.children[currentPage];

    if (button) button.classList.add("red");
    if (oldbutton) oldbutton.classList.remove("red");

    if (newpage) newpage.hidden = false;
    if (oldpage) oldpage.hidden = true;

    currentPage = pageIndex;
}