document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('date').innerHTML = new Date().toLocaleDateString("fr",options={weekday: "long", year: "numeric", month: "long", day: "numeric"});
  })
