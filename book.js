
function sendEmail() {
  Email.send({
    Host : "smtp.elasticemail.com",
    Username : "merbisetka@gmail.com",
    Password : "FAEDA206D9D3AAAD0BC35C7C6C18EBF19D13",
    To : 'mayilyane9@gmail.com',
    From : document.getElementById("email").value,
    Subject : "New Booking Form Enquiry",
    Body : "And this is the body"
  }).then(
    message => alert(message)
  );
}