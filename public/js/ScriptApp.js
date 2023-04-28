
const Equipo = () =>{
    window.location.href = '/computo';
}

const Aula = () => {
    window.location.href = '/maestro';
}

const home = () => {
    window.location.href = '/';
}

fetch('/obtener-estado')
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        let divs = document.querySelectorAll('.box');

        divs.forEach(function(div, index) {
            if (data[index].estado == 'ocupado') {
                div.classList.remove('disponible');
                div.classList.add('ocupado');
            } else {
                div.classList.remove('ocupado');
                div.classList.add('disponible');
            }
        });
    });
    