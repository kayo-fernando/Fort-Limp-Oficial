function alert(){
    Swal.fire('Sucesso', 'Usuário cadastrado com sucesso!', 'success');
  }
  
  alert();

 /* const cadUserForm = document.getElementById("caad-user-form");

  if(cadUserForm){
    cadUserForm.addEventListener("submit", async (e) => {
       e.preventDefault();

      const dadosForm = new FormData(cadUserForm);

      const dados = await fetch("cad.php", {
        method: "POST",
        body: dadosForm
      });

      const resposta = await dados.json();
      console.log(resposta);
    })
  }*/