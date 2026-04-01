
const books = document.querySelectorAll(".book_buttons");

books.forEach(row=>{
    row.addEventListener("click", ()=>{
        document.getElementById("id_prix").value = row.getAttribute("data-id_prix");
        document.getElementById("id_clie_prix_stat").value = 1;
        document.getElementById("submit_prix").click();
    });
});