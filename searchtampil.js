document.getElementById("search").addEventListener("keyup", function () {
  let input = this.value.toLowerCase();
  let rows = document.querySelectorAll("#employeeTable tr");

  rows.forEach((row) => {
    let data = row.textContent.toLowerCase();
    if (data.indexOf(input) !== -1) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });
});
