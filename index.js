const nome = document.getElementById("nome");
const email = document.getElementById("email");
const telefone = document.getElementById("telefone");
const mensagem = document.getElementById("mensagem");

const enviar = () => {
  if (nome.value && email.value && telefone.value && mensagem.value) {
    if (email.value.includes("@")) {
      alert("mensagem enviada");
      nome.value = "";
      email.value = "";
      telefone.value = "";
      mensagem.value = "";
    }else{
        alert("informe um email válido")
    }
  } else {
    alert("preencha todos os campos");
  }
};
