const chatBox = document.querySelector('.chat-box');
const sendButton = document.querySelector('#send-button');
const inputField = document.querySelector('.chat-input input');

sendButton.addEventListener('click', () => {
  const message = inputField.value.trim();
  if (message !== '') {
    inputField.value = '';
    const newMessage = createNewMessage(message, 'outgoing');
    chatBox.appendChild(newMessage);
    typeMessage("Ok, entendi. " + message, "incoming");
  }
});

function createNewMessage(message, messageType) {
  const messageClass = messageType === 'incoming' ? 'chat-message darker' : 'chat-message';
  const messageBubble = document.createElement('div');
  messageBubble.className = messageClass;
  const messageText = document.createElement('p');
  messageText.textContent = message;
  messageBubble.appendChild(messageText);
  const messageTime = document.createElement('span');
  messageTime.className = messageType === 'incoming' ? 'time-left' : 'time-right';
  const currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
  messageTime.textContent = currentTime;
  messageBubble.appendChild(messageTime);
  return messageBubble;
}

function typeMessage(message, messageType) {
  const newMessage = createNewMessage('', messageType);
  chatBox.appendChild(newMessage);

  const messageText = message.trim();
  let i = 0;

  const typingInterval = setInterval(() => {
    if (i < messageText.length) {
      const messageBubble = chatBox.lastElementChild;
      const messageContent = messageBubble.querySelector('p');
      messageContent.textContent += messageText.charAt(i);
      i++;
    } else {
      clearInterval(typingInterval);
    }
  }, 100);
}