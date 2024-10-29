function generateUrlPost() {
   let url = document.getElementById("title").value.toLowerCase();

   console.log(url);

   // Substituir caracteres acentuados por equivalentes sem acento
   const removeAccents = {
      á: "a",
      à: "a",
      ã: "a",
      â: "a",
      ä: "a",
      é: "e",
      è: "e",
      ê: "e",
      ë: "e",
      í: "i",
      ì: "i",
      î: "i",
      ï: "i",
      ó: "o",
      ò: "o",
      õ: "o",
      ô: "o",
      ö: "o",
      ú: "u",
      ù: "u",
      û: "u",
      ü: "u",
      ç: "c",
      ñ: "n",
   };

   url = url.replace(/[áàãâäéèêëíìîïóòõôöúùûüçñ]/g, function (match) {
      return removeAccents[match];
   });

   // Remover caracteres especiais
   url = url.replace(/[^a-z0-9\s-]/g, "");

   // Substituir espaços por hífens
   url = url.replace(/\s+/g, "-");

   // Remover múltiplos hífens seguidos e hífens no início ou fim da URL
   url = url.replace(/-+/g, "-").replace(/^-|-$/g, "");

   document.getElementById("url_page").value = url;

   // return url;
}
