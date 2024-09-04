const API_KEY = "sk-T3b6dnsDNTSItfFaabLRDkvFe22PfkSeVwdi_sp9-MT3BlbkFJpz99ZvSDgyvxEdYPkh9HYfdWLb7S5PaKR13Mmw7HkA";

async function getCompletion(prompt) {
  const response = await fetch(`https://api.openai.com/v1/chat/completions`, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${API_KEY}`,
    },
    body: JSON.stringify({
      model: "gpt-3.5-turbo",
      messages: [
        { role: "system", content: "Eres un asistente que recomienda laptops." },
        { role: "user", content: prompt }
      ],
      max_tokens: 20,
    }),
  });

  const data = await response.json();
  return data;
}

const prompt = document.querySelector("#prompt");
const button = document.querySelector("#generate");
const output = document.querySelector("#output");

button.addEventListener("click", async () => {
  console.log(prompt.value);

  if (!prompt.value) window.alert("Por favor ingrese una pregunta sobre laptops");

  const response = await getCompletion(prompt.value);
  console.log(response);
  
  if(response.choices && response.choices.length > 0) {
    output.innerHTML = response.choices[0].message.content;
  } else {
    output.innerHTML = "Respuesta no recibida";
  }
});