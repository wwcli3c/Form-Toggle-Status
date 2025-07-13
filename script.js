function fetchUsers() {
  fetch("fetch.php")
    .then(res => res.text())
    .then(data => {
      document.getElementById("userTable").innerHTML = data;
      attachToggleHandlers(); // Add toggle event to new buttons
    });
}

function attachToggleHandlers() {
  document.querySelectorAll(".status-btn").forEach(button => {
    button.addEventListener("click", function () {
      const id = this.dataset.id;
      const status = this.dataset.status;

      fetch("toggle.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `id=${id}&status=${status}`
      })
        .then(res => res.text())
        .then(() => fetchUsers());
    });
  });
}

document.getElementById("userForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const formData = new FormData(this);

  fetch("process.php", {
    method: "POST",
    body: formData
  })
    .then(res => res.text())
    .then(() => {
      this.reset();
      fetchUsers();
    });
});

// Initial load
fetchUsers();
