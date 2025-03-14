function sendMessage() {
    let userInput = document.getElementById("user-input").value;
    let chatBox = document.getElementById("chat-box");

    // Tampilkan pesan pengguna
    chatBox.innerHTML += `<p><strong>Anda:</strong> ${userInput}</p>`;

    fetch('php/chatbot.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'input=' + encodeURIComponent(userInput)
    })
    .then(response => response.json())
    .then(data => {
        chatBox.innerHTML += `<p><strong>Chatbot:</strong> ${data.response}</p>`;
    });

    document.getElementById("user-input").value = '';
}
