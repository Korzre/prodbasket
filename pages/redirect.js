const inputElement = document.getElementById("guide-search")




document
  .querySelector(".input-search")
  .addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
      event.preventDefault()
      let text = inputElement.value

      switch (text) {
        case "!0":
          window.location.href = "index.php"
          return;

        case "!1":
          window.location.href = "listar.php"
          return;

        case "!2":
          window.location.href = "salvar.php"
          return;
      }

      if (text.startsWith("!edit/")) {
        const id = text.split("/")[1];
        window.location.href = `editar.php?id=${id}`
        return
      }

      if (text.startsWith("!del/")) {
        const id = text.split("/")[1];
        window.location.href = `deletar.php?id=${id}`
        return
      }

      if (text.startsWith("!report/0")) {
        window.location.href = "relatorio.php"
        return
      }

      document.querySelector('form').submit()
    }
  })
