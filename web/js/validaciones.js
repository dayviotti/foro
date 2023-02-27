function validacionlogin(e) {
    let usuario = document.getElementById('usuario').value;
    if(usuario.length == 0) {
        alert('El usuario no puede estar vacío.');
        e.preventDefault();
        return false;
    }
    let clave = document.getElementById('clave').value;
    if(clave.length == 0) {
        alert('La contraseña no puede estar vacía.');
        e.preventDefault();
        return false;
    }
    return true;
}

function validacionreg(e) {
    let usuario = document.getElementById('usuario').value;
    if(usuario.length == 0) {
        alert('El usuario no puede estar vacío.');
        e.preventDefault();
        return false;
    }
    let clave = document.getElementById('clave').value;
    if(clave.length == 0) {
        alert('La contraseña no puede estar vacía.');
        e.preventDefault();
        return false;
    }
    return true;
}

function validacioncom(e) {
    let comentario = document.getElementById('comentario').value;
    if(comentario.length === 0) {
        alert('El comentario no puede estar vacío.');
        e.preventDefault();
        return false;
    }
    return true;
}

function validacionindex(e) {
    let titulo = document.getElementById('tit').value;
    if(titulo.length == 0) {
        alert('El título no puede estar vacío.');
        e.preventDefault();
        return false;
    }
    let post = document.getElementById('post').value;
    if(post.length == 0) {
        alert('El contenido del post no puede estar vacío.');
        e.preventDefault();
        return false;
    }
    return true;
}