document.addEventListener("DOMContentLoaded", () => {
  console.log(
    "Página cargada correctamente. Si estás leyendo esto eres un cotilla ;)"
  );

  const ham = document.getElementById("ham");
  const enlacesResponsive = document.getElementById("enlaces-responsive");
  const close = document.getElementById("close");

  ham.onclick = () => {
    enlacesResponsive.classList.toggle("active");
  };

  close.onclick = () => {
    enlacesResponsive.classList.toggle("active");
  };

  //FIN DE CARGA DEL DOM
});
