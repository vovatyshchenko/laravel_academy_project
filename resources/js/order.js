let table = document.getElementById('dataTable');
let row = table.getElementsByTagName("td");
for (i=0; i<row.length; i++){
    if (row[i].innerHTML == '1'){
        row[i].parentNode.setAttribute("class", "table-success");
    }
    else {
        row[i].parentNode.setAttribute("class", "table-primary");
    }
}
