function validarContraseña(contrasena) {
    // Verificar que tenga al menos 8 caracteres
    if (contrasena.length < 8) {
        return false;
    }

    // Verificar que tenga al menos una letra mayúscula
    if (!/[A-Z]/.test(contrasena)) {
        return false;
    }

    // Verificar que tenga al menos una letra minúscula
    if (!/[a-z]/.test(contrasena)) {
        return false;
    }

    // Verificar que tenga al menos un símbolo
    if (!/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/.test(contrasena)) {
        return false;
    }

    // Verificar que no tenga números consecutivos
    if (/123|234|345|456|567|678|789|890/.test(contrasena)) {
        return false;
    }

    // Verificar que no tenga letras consecutivas del abecedario
    if (/abc|bcd|cde|def|efg|fgh|ghi|hij|ijk|jkl|klm|lmn|mno|nop|opq|pqr|qrs|rst|stu|tuv|uvw|vwx|wxy|xyz/.test(contrasena.toLowerCase())) {
        return false;
    }

    // Verificar que no tenga letras consecutivas del teclado
    if (/qwe|rty|tyu|yui|uio|iop|asd|sdf|dfg|fgh|ghj|hjk|jkl|zxc|xcv|cvb|vbn|bnm/.test(contrasena.toLowerCase())) {
        return false;
    }else{
        return true;
        alert("Contraseña válida.");
    }

    // Si pasó todas las validaciones, la contraseña es válida
   
}