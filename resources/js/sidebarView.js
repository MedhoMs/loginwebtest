document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("mainContent");

    // Asegurar clases base para animación
    toggleButton.classList.add("transform", "transition", "duration-300");
    sidebar.classList.add("transition-all", "duration-300", "transform");
    mainContent.classList.add("transition-all", "duration-300");

    // Leer estado de sidebar desde localStorage
    const sidebarState = localStorage.getItem("sidebarState");

    if (sidebarState === "open") {
      sidebar.classList.remove("opacity-0", "-translate-x-full");
      sidebar.classList.add("opacity-100", "translate-x-0");
      mainContent.classList.add("ml-64");
      toggleButton.classList.add("-rotate-90");
      toggleButton.classList.remove("rotate-0");
    } else {
      sidebar.classList.add("opacity-0", "-translate-x-full");
      sidebar.classList.remove("opacity-100", "translate-x-0");
      mainContent.classList.remove("ml-64");
      toggleButton.classList.add("rotate-0");
      toggleButton.classList.remove("-rotate-90");
    }

    toggleButton.addEventListener("click", function () {
      const isHidden = sidebar.classList.contains("opacity-0");

      if (isHidden) {
        // Mostrar sidebar
        sidebar.classList.remove("opacity-0", "-translate-x-full");
        sidebar.classList.add("opacity-100", "translate-x-0");
        mainContent.classList.add("ml-64");
        toggleButton.classList.remove("rotate-0");
        toggleButton.classList.add("-rotate-90");
        localStorage.setItem("sidebarState", "open");
      } else {
        // Ocultar sidebar
        sidebar.classList.remove("opacity-100", "translate-x-0");
        sidebar.classList.add("opacity-0", "-translate-x-full");
        mainContent.classList.remove("ml-64");
        toggleButton.classList.remove("-rotate-90");
        toggleButton.classList.add("rotate-0");
        localStorage.setItem("sidebarState", "closed");
      }
    });
  });
