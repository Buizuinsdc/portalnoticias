function enviar() {
    let arquivo = document.getElementById('arquivo').files[0];

    let body = new FormData();
    body.append('title', 'bla bla bla');
    body.append('arquivo', arquivo)

    let req = await  fetch('https://portalnoticia.herokuapp.com/uploud', {
        method: 'POST',
        body: body,
        headers: {
            'Content-type': 'multipart/form-data'
        }
    });
    
}