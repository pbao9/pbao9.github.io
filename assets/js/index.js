function handleSubmit() {
  const namePrincess = document.getElementById("namePrincess").value;

  // to set into local storage
  //   localStorage.setItem("NAME", namePrincess);

  sessionStorage.setItem("NAME", namePrincess);

  return;
}
