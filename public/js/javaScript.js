// validación -> permite introducir números
function Num(string){
  var out = '';
  
  var filtro = '1234567890 ';
  
  for (var i=0; i<string.length; i++)
     if (filtro.indexOf(string.charAt(i)) != -1) 
       out += string.charAt(i);
  return out;
}

// validación -> permite introducir números y letras
function NumText(string){
    var out = '';
    
    var filtro = 'abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYZÁÉÍÓÚ1234567890 ';
    
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
         out += string.charAt(i);
    return out;
}

// validación -> permite introducir números, letras y arroba
function NumTextEmail(string){
    var out = '';
    
    var filtro = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890@.';
    
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
         out += string.charAt(i);
    return out;
}
// validación -> expresión regular para el formato del correo
function validarRegExp(cadena) {
let validarEmail = '/^([!#-\'*+\/-9=?A-Z^-~\\\\-]{1,64}(\.[!#-\'*+\/-9=?A-Z^-~\\\\-]{1,64})*|"([\]!#-[^-~\ \t\@\\\\]|(\\[\t\ -~]))+")@([0-9A-Z]([0-9A-Z-]{0,61}[0-9A-Za-z])?(\.[0-9A-Z]([0-9A-Z-]{0,61}[0-9A-Za-z])?))+$/i'
    return cadena.replace(validarEmail);
  }

function validarTelefono(cadena){
  let validarTelefono='/^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/ ';
    return cadena.replace(validarTelefono);
}

//validación -> permite introducir números, letras y signos de puntuación
function NumTextComment(string){
    var out = '';
    
    var filtro = 'abcdefghijklmnñopqrstuvwxyzáéíóúABCDEFGHIJKLMNÑOPQRSTUVWXYÁÉÍÓÚZ1234567890.," ';
    
    for (var i=0; i<string.length; i++)
       if (filtro.indexOf(string.charAt(i)) != -1) 
         out += string.charAt(i);
    return out;
}