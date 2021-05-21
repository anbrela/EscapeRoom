document.addEventListener("DOMContentLoaded", () => {
  console.log(
    "Página cargada correctamente. Si estás leyendo esto eres un cotilla ;)"
  );

  const ham = document.getElementById("ham");
  const enlacesResponsive = document.getElementById("enlaces-responsive");
  const close = document.getElementById("close");
  const link = document.getElementsByClassName("link");

  for (var i = 0; i < link.length; i++) {
    link[i].onclick = () => {
      enlacesResponsive.classList.toggle("active");
    };
  }

  ham.onclick = () => {
    enlacesResponsive.classList.toggle("active");
  };

  close.onclick = () => {
    enlacesResponsive.classList.toggle("active");
  };

  //FIN DE CARGA DEL DOM
});
