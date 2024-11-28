function validacaoEmail(field) {
   usuario = field.value.substring(0, field.value.indexOf("@"));
   dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

   if (
      usuario.length >= 1 &&
      dominio.length >= 3 &&
      usuario.search("@") == -1 &&
      dominio.search("@") == -1 &&
      usuario.search(" ") == -1 &&
      dominio.search(" ") == -1 &&
      dominio.search(".") != -1 &&
      dominio.indexOf(".") >= 1 &&
      dominio.lastIndexOf(".") < dominio.length - 1
   ) {
      return 0;
   } else {
      document.getElementById("textoMsg").innerHTML = "Email Inválido!";
      document.querySelector(".btn_OK").innerHTML = "Fechar";
      document.querySelector("#tipoCap").innerHTML = "Aviso";
      $("#tipoMsg").attr("class", "modal-header text-secondary");
      $(".btn_OK").attr("class", "btn btn-danger");

      $("#mensagem").modal("show");

      return;
   }
}

function sendMail() {
   var novidades = document.getElementById("news").checked;
   var receber = "";
   if (novidades == true) {
      receber = "Sim";
   } else {
      receber = "Não";
   }

   var params = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      empresa: document.getElementById("empresa").value,
      colaboradores: document.getElementById("colaboradores").value,
      news: receber,
   };

   if ((params.name == "") | (params.empresa == "") | (params.colaboradores == "")) {
      document.getElementById("textoMsg").innerHTML = "Favor preencher todos os campos!";
      document.querySelector(".btn_OK").innerHTML = "Fechar";
      document.querySelector("#tipoCap").innerHTML = "Aviso";
      $("#tipoMsg").attr("class", "modal-header text-secondary");
      $(".btn_OK").attr("class", "btn btn-danger");

      $("#mensagem").modal("show");

      return;
   } else {
      if (validacaoEmail(email) == 0) {
         const serviceID = "service_2pvjjey";
         const templateID = "template_wss9cyq";

         emailjs
            .send(serviceID, templateID, params)
            .then((res) => {
               document.getElementById("name").value = "";
               document.getElementById("email").value = "";
               document.getElementById("empresa").value = "";
               document.getElementById("colaboradores").value = "";
               document.getElementById("news").checked = false;
               //console.log(res);
               document.getElementById("textoMsg").innerHTML = "Formulário enviado com sucesso. Obrigado!";
               document.querySelector(".btn_OK").innerHTML = "OK";
               document.querySelector("#tipoCap").innerHTML = "Teste Grátis";
               $("#tipoMsg").attr("class", "modal-header text-secondary");
               $(".btn_OK").attr("class", "btn btn-primary btn_OK");

               var btn_X = document.querySelector(".btn_X");
               btn_X.setAttribute("id", "btnX");

               var btnModal = document.querySelector(".btn_OK");
               btnModal.setAttribute("id", "btnModal");

               $("#mensagem").modal("show");
            })
            .catch((err) => console.log(err));
      } else {
         return;
      }
   }
}

function sendNewsletter() {
   var emailNewsletter = document.getElementById("newsletter");
   var news = {
      email: document.getElementById("newsletter").value,
   };

   if (validacaoEmail(emailNewsletter) == 0) {
      const serviceID = "service_2pvjjey";
      const templateID = "template_4rry1kl";

      emailjs
         .send(serviceID, templateID, news)
         .then((res) => {
            document.getElementById("newsletter").value = "";
            document.getElementById("textoMsg").innerHTML = "E-mail cadastrado com sucesso!";
            document.querySelector(".btn_OK").innerHTML = "OK";
            document.querySelector("#tipoCap").innerHTML = "Newsletter";
            $("#tipoMsg").attr("class", "modal-header text-secondary");
            $(".btn_OK").attr("class", "btn btn-primary");

            $("#mensagem").modal("show");
         })
         .catch((err) => console.log(err));
   } else {
      return;
   }
}
