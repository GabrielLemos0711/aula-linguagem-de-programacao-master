function showModal(idModal) {
    const modal = document.querySelector(idModal)
    modal.style.display = 'flex'
}
function hideModal(idModal, event) {
    if (event.target.className == 'modal') {
        const modal = document.querySelector(idModal)
        modal.style.display ='none'
    }
}