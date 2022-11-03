function showModal(idModal) {
    const modal = document.querySelector(idModal)
    modal.style.display = 'flex'
}
function hideModal(idModal, event) {
    if (event.target.className == 'modal') {
        const modal = document.querySelector(idModal)
        modal.style.display ='none';
    }
}
function closeAllModal (){
    const modais = document. querySelectorAll('.modal')
    modais. forEach (modal => {
    modal.style.display = 'none'
    })
}
    
async function insert(event){
    event.preventDefault()
    const formData = new FormData(event. target)
    const response = await fetch('backend/insert.php', {
    method: 'POST',
    body: formData
    })
    
    const result = await response.json()
    if(result?.success){
    closeAllModal()
    alert('Seu filme '+result.data.title+' foi cadastrado com sucesso!')
    loadProductions();
    }
    }
async function loadProductions(){
    const response = await fetch('backend/list.php')
    const result = await response.json()
    if (result?.success) {
        const listProductions = document.querySelector('#production')
        listProductions.innerHTML = ''
        const filmes = result.data
        filmes.map((film) => {
            listProductions.innerHTML += 
           `<div class="card-movie">
                <a href="filme">
                    <div class="mask"></div>
                    <img src="${film.capa}" alt="${film.titulo}">
                </a>
                <div>
                    <a href="filme">
                        <h2>${film.titulo}</h2>
                    </a>
                    <div>
                        <p>${film.categoria}</p>
                        <img src="assets/img/trash-svgrepo-com.svg" alt="apagar" onclick="deleteProduction(${film.id})"></img>
                        <img src="assets/img/edit-svgrepo-com.svg" alt="editar" onclick="edit(${film})"></img>
                    </div>
                </div>
            </div>`
        })
    } else {
        alert('erro ao cadastrar a função')
    }
}
async function deleteProduction(id){
    const response = await fetch('backend/delete.php?id='+id)
    const result = await response.json()
    if (result?.success) {
        alert('Seu filme foi deletado com sucesso!')
        loadProductions()
    }
}
async function loadProductionData(id){
    const response = await fetch('backend/get-producton-by-id.php?id='+id)
    const result = await response.json()
    if (result?.success) {
        showModal('modal-editar')
        const title = document.querySelector('#modal-editar input[name=title]')
        title.value = result.data.titulo
        const description = document.querySelector('#modal-editar input[name=description]')
        description.value = result.data.descricao
        const category = document.querySelector('#modal-editar input[name=category]')
        category.value = result.data.category
        const cover = document.querySelector('#modal-editar input[name=cover]')
        cover.value = result.data.cover
        const classification = document.querySelector('#modal-editar input[name=classification]')
        classification.value = result.data.classification
        const id = document.querySelector('#modal-editar input[name=id]')
        id.value = result.data.id
    }
}