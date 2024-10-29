const staticPosts = async () => {
   const responseData = await fetch("../app/Models/blog/blogStaticModel.php");
   const data = await responseData.json();

   //  console.log(data);

   const typeUsers = data.type_user;
   const statusUsers = data.status_user;

   const selectTypeUser = document.getElementById("type_user");
   typeUsers.forEach((rowItem) => {
      const option = document.createElement("option");
      option.value = rowItem.id;
      option.textContent = rowItem.type_user;
      selectTypeUser.appendChild(option);
   });

   // Exemplo: Carregar opções de status de usuário
   const selectStatusUser = document.getElementById("status_user");
   statusUsers.forEach((rowItem) => {
      const option = document.createElement("option");
      option.value = rowItem.id;
      option.textContent = rowItem.status;
      selectStatusUser.appendChild(option);
   });
};

dataUserDetail();
