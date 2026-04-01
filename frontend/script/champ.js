
const champ_rows = document.querySelectorAll(".champ_row");

champ_rows.forEach(row=>{
    row.addEventListener("click", ()=>{
        id = row.getAttribute("data-id");
        champ_name = row.getAttribute("data-champ_name");
        window.location.href = window.location.pathname + "?" + "id=" + id + "&champ_name=" + champ_name;
    });
});