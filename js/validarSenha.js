  function validarSenha() {
  var senha1 = document.getElementById("senha");
  var senha2 = document.getElementById("senhaTmp");
  var s1 = senha1.value;
  var s2 = senha2.value;
  if (s1 == s2) {
    return true;
  } else {
    alert("Senhas não batem. Verifique o valor digitado.");
    return false;
  }
}